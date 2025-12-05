<?php

namespace Projects\FinanceGateway;

use Illuminate\Database\Eloquent\Model;
use Hanafalah\LaravelSupport\{
    Concerns\Support\HasRepository,
    Supports\PackageManagement,
    Events as SupportEvents
};
use Projects\FinanceGateway\Contracts\FinanceGateway as ContractsFinanceGateway;

class FinanceGateway extends PackageManagement implements ContractsFinanceGateway{
    use Supports\LocalPath,HasRepository;

    const LOWER_CLASS_NAME = "finance-gateway";
    const ID               = "1";

    public ?Model $model;

    public function events(){
        return [
            SupportEvents\InitializingEvent::class => [
                
            ],
            SupportEvents\EventInitialized::class  => [],
            SupportEvents\EndingEvent::class       => [],
            SupportEvents\EventEnded::class        => [],
            //ADD MORE EVENTS
        ];
    }

    protected function dir(): string{
        return __DIR__;
    }
}
