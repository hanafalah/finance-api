<?php

declare(strict_types=1);

namespace Hanafalah\KlinikStarterpack;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;
use Illuminate\Support\Str;

class KlinikStarterpackServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(KlinikStarterpack::class)
            ->registerCommandService(Providers\CommandServiceProvider::class)
            ->registers(['*']);
    }

    public function boot(){
        $this->app->booted(function(){
            $this->registers([
                '*',
                'Provider' => function(){
                    $this->registerOverideConfig('klinik-starterpack',__DIR__.'/'.$this->__config['klinik-starterpack']['libs']['config']);
                }
            ]);
        });
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
