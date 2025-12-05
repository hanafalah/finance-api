<?php

namespace Hanafalah\ModuleMonitoring\Data;

use Hanafalah\LaravelSupport\Data\UnicodeData;
use Hanafalah\ModuleMonitoring\Contracts\Data\MonitoringCategoryData as DataMonitoringCategoryData;

class MonitoringCategoryData extends UnicodeData implements DataMonitoringCategoryData
{
    public static function before(array &$attributes){
        $attributes['flag'] ??= 'MonitoringCategory';
        parent::before($attributes);
    }
}