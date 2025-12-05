<?php

namespace Hanafalah\ModuleHandwriting;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class ModuleHandwritingServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(ModuleHandwriting::class)
             ->registers(['*']);
    }

    /**
     * Get the base path of the package.
     *
     * @return string
     */
    protected function dir(): string
    {
        return __DIR__ . '/';
    }

    protected function migrationPath(string $path = ''): string
    {
        return database_path($path);
    }
}
