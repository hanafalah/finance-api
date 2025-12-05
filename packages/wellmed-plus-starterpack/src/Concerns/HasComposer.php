<?php

namespace Hanafalah\WellmedPlusStarterpack\Concerns;

trait HasComposer{
    public function updateComposer(string $composer_path, string $path, string $field): self{
        $composer  = json_decode(file_get_contents($composer_path), true);
        $content   = json_decode(file_get_contents($path), true);
        if ($composer_path == base_path('composer.json')){
            $composer['require']['hanafalah/microtenant'] = 'dev-main as 1.0';
        }
        foreach ($content[$field] as $namespace => $repo) $composer[$field][$namespace] = $repo;
        file_put_contents($composer_path, json_encode($composer, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        return $this;
    }
}