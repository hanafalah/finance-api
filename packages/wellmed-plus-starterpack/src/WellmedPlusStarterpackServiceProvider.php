<?php

declare(strict_types=1);

namespace Hanafalah\WellmedPlusStarterpack;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;
use Illuminate\Support\Str;

class WellmedPlusStarterpackServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(WellmedPlusStarterpack::class)
            ->registerCommandService(Providers\CommandServiceProvider::class)
            ->registers(['*']);
    }

    public function boot(){
        $this->app->booted(function(){
            $this->registers([
                '*',
                'Provider' => function(){
                    $this->registerOverideConfig('wellmed-plus-starterpack',__DIR__.'/'.$this->__config['wellmed-plus-starterpack']['libs']['config']);
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
