<?php

namespace Hanafalah\ModuleInformedConsent\Models;

use Hanafalah\LaravelSupport\Models\Unicode\Unicode;
use Hanafalah\ModuleInformedConsent\Resources\MasterConsent\{ViewMasterConsent, ShowMasterConsent};

class MasterInformedConsent extends Unicode
{
    protected $table = 'unicodes';

    public function getViewResource()
    {
        return ViewMasterConsent::class;
    }
    public function getShowResource()
    {
        return ShowMasterConsent::class;
    }

    public function informedConsent()
    {
        return $this->hasOneModel("InformedConsent");
    }

    public function isUsingService(): bool
    {
        return true;
    }
}
