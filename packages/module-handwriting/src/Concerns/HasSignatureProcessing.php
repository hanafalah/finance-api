<?php

namespace Hanafalah\ModuleHandwriting\Concerns;

use Exception;
use Hanafalah\LaravelSupport\Concerns\Support\HasImageProcessing;
use Hanafalah\ModuleHandwriting\Resources\ViewDigitalSign;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait HasSignatureProcessing
{
    use HasImageProcessing;

    public function storagePath(string $path = ''){
        return 'GALLERIES/DIGITAL_SIGNS';
    }

    private function loadImage(string $imagePath){
        $image = imagecreatefrompng($imagePath);
        if (!$image) throw new Exception("Gagal memuat gambar dari: $imagePath");
        return $image;
    }

    private function findSignatureBounds($image){
        $width = imagesx($image);
        $height = imagesy($image);
    
        $x0 = $width;
        $y0 = $height;
        $x1 = 0;
        $y1 = 0;
    
        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                $rgb = imagecolorat($image, $x, $y);
                $colors = imagecolorsforindex($image, $rgb);
    
                // Cek jika pixel tidak transparan (alpha > 0)
                if ($colors['alpha'] < 127) {
                    // Jika warna hitam terdeteksi, update batas tanda tangan
                    if ($colors['red'] == 0 && $colors['green'] == 0 && $colors['blue'] == 0) {
                        if ($x < $x0) $x0 = $x;
                        if ($y < $y0) $y0 = $y;
                        if ($x > $x1) $x1 = $x;
                        if ($y > $y1) $y1 = $y;
                    }
                }
            }
        }
    
        return compact('x0', 'y0', 'x1', 'y1');
    }
    

    private function cropImage($image, $bounds)
    {
        $croppedWidth = $bounds['x1'] - $bounds['x0'] + 1;
        $croppedHeight = $bounds['y1'] - $bounds['y0'] + 1;
    
        // Buat gambar baru dengan transparansi
        $croppedImage = imagecreatetruecolor($croppedWidth, $croppedHeight);
        imagealphablending($croppedImage, false);
        imagesavealpha($croppedImage, true);
        
        // Tentukan warna transparan
        $transparent = imagecolorallocatealpha($croppedImage, 255, 255, 255, 127);
        imagefill($croppedImage, 0, 0, $transparent);
    
        // Salin gambar yang sudah dipotong ke gambar baru
        imagecopy($croppedImage, $image, 0, 0, $bounds['x0'], $bounds['y0'], $croppedWidth, $croppedHeight);
    
        return $croppedImage;
    }
    

    private function applyThreshold($image) {
        $width = imagesx($image);
        $height = imagesy($image);
        
        // Tidak mengubah transparansi di sini, hanya hitam/putih saja
        $black = imagecolorallocate($image, 0, 0, 0);
        $white = imagecolorallocate($image, 255, 255, 255);
        
        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                $rgb = imagecolorat($image, $x, $y);
                $colors = imagecolorsforindex($image, $rgb);
    
                // Cek jika pixel tidak transparan (alpha > 0)
                if ($colors['alpha'] < 127) {
                    // Konversi ke grayscale
                    $gray = ($colors['red'] + $colors['green'] + $colors['blue']) / 3;
    
                    // Threshold: jika lebih terang dari 200, jadikan putih, kalau tidak jadikan hitam
                    ($gray > 200)
                        ? imagesetpixel($image, $x, $y, $white)
                        : imagesetpixel($image, $x, $y, $black);
                }
            }
        }
    
        return $image;
    }
    
    
    private function applyTransparentBackground($image) {
        $width = imagesx($image);
        $height = imagesy($image);
    
        // Aktifkan alpha blending dan simpan transparansi
        imagealphablending($image, false);
        imagesavealpha($image, true);
    
        // Warna putih diubah menjadi transparan
        $transparent = imagecolorallocatealpha($image, 255, 255, 255, 127);
    
        for ($y = 0; $y < $height; $y++) {
            for ($x = 0; $x < $width; $x++) {
                $rgb = imagecolorat($image, $x, $y);
                $colors = imagecolorsforindex($image, $rgb);
    
                if ($colors['red'] > 200 && $colors['green'] > 200 && $colors['blue'] > 200) {
                    imagesetpixel($image, $x, $y, $transparent);
                }
            }
        }
    
        return $image;
    }
    
    public function setupFile(string|UploadedFile|null $file = null, ?string $path = null, ?string $filename = null): ?string{
        $current = $this->getFile() ?? null;
    
        if ($file instanceof UploadedFile) {
            $filename   ??= Str::orderedUuid();
            $ext          = $file->getClientOriginalExtension();
            $filename    .= '.' . $ext;
    
            $image        = $this->loadImage($file);
            $image        = $this->applyThreshold($image); // Terapkan threshold sebelum crop
            $bounds       = $this->findSignatureBounds($image);
            $croppedImage = $this->cropImage($image, $bounds);
    
            // Terapkan transparansi setelah crop
            $finalImage = $this->applyTransparentBackground($croppedImage);
    
            $outputPath = Storage::disk($this->__filesystem_disk ?? $this->driver())->path($this->getFilePath($path));
    
            if (!Storage::exists($outputPath)) {
                Storage::disk($this->__filesystem_disk ?? $this->driver())->makeDirectory($this->getFilePath($path));
            }
    
            // Simpan hasil akhir dalam PNG
            imagepng($finalImage, $outputPath . '/' . $filename);
            imagedestroy($finalImage);
            imagedestroy($croppedImage);
            imagedestroy($image);
    
            $result = $filename;
            $remove_current = true;
        } elseif (is_string($file)) {
            $result = $file;
        } else {
            $remove_current = true;
            $result = null;
        }
    
        if (isset($current, $remove_current)) {
            $disk = $this->__filesystem_disk ?? $this->driver();
            Storage::disk($disk)->delete($this->getFilePath($path) . '/' . $current);
        }
    
        return $result;
    }
}
