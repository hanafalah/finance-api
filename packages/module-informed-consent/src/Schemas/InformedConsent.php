<?php

namespace Hanafalah\ModuleInformedConsent\Schemas;

use Hanafalah\LaravelSupport\Supports\PackageManagement;
use Hanafalah\ModuleInformedConsent\Contracts\Schemas\InformedConsent as SchemasInformedConsent;

class InformedConsent extends PackageManagement implements SchemasInformedConsent
{
    protected string $__entity = 'InformedConsentModel';
}
