<?php

namespace Hanafalah\ModuleInformedConsent\Data;

use Hanafalah\LaravelSupport\Data\UnicodeData;
use Hanafalah\ModuleInformedConsent\Contracts\Data\MasterInformedConsentData as DataMasterInformedConsentData;

class MasterInformedConsentData extends UnicodeData implements DataMasterInformedConsentData{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'MasterInformedConsent';
        parent::before($attributes);
    }
}