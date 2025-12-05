<?php

namespace Projects\FinanceApi;

use Illuminate\Database\Eloquent\Model;
use Hanafalah\LaravelSupport\{
    Concerns\Support\HasRepository,
    Supports\PackageManagement,
    Events as SupportEvents
};
use Projects\FinanceApi\Contracts\FinanceApi as ContractsFinanceApi;

class FinanceApi extends PackageManagement implements ContractsFinanceApi{
    use Supports\LocalPath,HasRepository;

    const LOWER_CLASS_NAME = "finance-api";
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
