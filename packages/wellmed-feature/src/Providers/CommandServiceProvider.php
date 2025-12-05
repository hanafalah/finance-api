<?php

namespace Hanafalah\WellmedFeature\Providers;

use Illuminate\Support\ServiceProvider;
use Hanafalah\WellmedFeature\Commands;

class CommandServiceProvider extends ServiceProvider
{
    protected $__commands = [
        Commands\InstallMakeCommand::class
    ];

    /**
     * Register the command.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(config('wellmed-feature.commands', $this->__commands));
    }

    public function provides()
    {
        return $this->__commands;
    }
}
