<?php

namespace Hanafalah\KlinikStarterpack\Providers;

use Illuminate\Support\ServiceProvider;
use Hanafalah\KlinikStarterpack\Commands;

class CommandServiceProvider extends ServiceProvider
{
    protected $__commands = [
        Commands\MigrateCommand::class,
        Commands\SeedCommand::class,
        Commands\InstallMakeCommand::class,
        Commands\InstallSubmoduleCommand::class,
    ];

    /**
     * Register the command.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(config('klinik-starterpack.commands', $this->__commands));
    }

    public function provides()
    {
        return $this->__commands;
    }
}
