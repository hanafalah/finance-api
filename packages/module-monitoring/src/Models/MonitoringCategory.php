<?php

namespace Hanafalah\ModuleMonitoring\Models;

use Hanafalah\LaravelSupport\Models\Unicode\Unicode;
use Hanafalah\ModuleMonitoring\Resources\MonitoringCategory\{
    ViewMonitoringCategory,
    ShowMonitoringCategory
};

class MonitoringCategory extends Unicode
{
    protected $table = 'unicodes';

    public function viewUsingRelation(): array{
        return [];
    }

    public function showUsingRelation(): array{
        return [];
    }

    public function getViewResource(){
        return ViewMonitoringCategory::class;
    }

    public function getShowResource(){
        return ShowMonitoringCategory::class;
    }

    

    
}
