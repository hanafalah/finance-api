<?php

namespace Hanafalah\ModuleHandwriting\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleHandwriting\Contracts\Data\DigitalSignData as DataDigitalSignData;
use Illuminate\Http\UploadedFile;
use Spatie\LaravelData\Attributes\{
    MapInputName, MapName
};

class DigitalSignData extends Data implements DataDigitalSignData{
    #[MapName('reference_id')]
    #[MapInputName('reference_id')]
    public mixed $reference_id;

    #[MapName('reference_type')]
    #[MapInputName('reference_type')]
    public string $reference_type;

    #[MapName('output_path')]
    #[MapInputName('output_path')]
    public ?string $output_path = null;

    #[MapName('file_name')]
    #[MapInputName('file_name')]
    public ?string $file_name = null;

    #[MapName('sign')]
    #[MapInputName('sign')]
    public string|UploadedFile|null $sign;
}