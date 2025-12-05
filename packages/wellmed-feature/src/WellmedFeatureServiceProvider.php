<?php

declare(strict_types=1);

namespace Hanafalah\WellmedFeature;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class WellmedFeatureServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(WellmedFeature::class)
            ->registerCommandService(Providers\CommandServiceProvider::class)
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
}
