<?php

namespace Hanafalah\ModuleInformedConsent;

use Hanafalah\ModuleInformedConsent\{
    Models\ServiceItem,
    Schemas\ServiceItem as SchemaServiceItem,
};
use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class ModuleInformedConsentServiceProvider extends BaseServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMainClass(ModuleInformedConsent::class)
            ->registerCommandService(Providers\CommandServiceProvider::class)
            ->registers(['*']);
    }

    protected function dir(): string
    {
        return __DIR__ . '/';
    }

    protected function migrationPath(string $path = ''): string
    {
        return database_path($path);
    }
}
