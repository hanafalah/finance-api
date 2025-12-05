<?php

namespace Projects\FinanceGateway\Providers;

use Illuminate\Support\ServiceProvider;
use Projects\FinanceGateway\Commands;

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
        $this->commands(config('finance-gateway.commands', $this->__commands));
    }

    public function provides()
    {
        return $this->__commands;
    }
}
