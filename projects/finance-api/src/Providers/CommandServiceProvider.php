<?php

namespace Projects\FinanceApi\Providers;

use Illuminate\Support\ServiceProvider;
use Projects\FinanceApi\Commands;

class CommandServiceProvider extends ServiceProvider
{
    protected $__commands = [
    ];

    /**
     * Register the command.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(config('finance-api.commands', $this->__commands));
    }

    public function provides()
    {
        return $this->__commands;
    }
}
