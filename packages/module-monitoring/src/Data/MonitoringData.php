<?php

namespace Hanafalah\ModuleMonitoring\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleMonitoring\Contracts\Data\MonitoringData as DataMonitoringData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class MonitoringData extends Data implements DataMonitoringData{
    #[MapName('id')]
    #[MapInputName('id')]
    public mixed $id = null;
    
    #[MapName('name')]
    #[MapInputName('name')]
    public string $name;
    
    #[MapName('monitoring_category_id')]
    #[MapInputName('monitoring_category_id')]
    public mixed $monitoring_category_id = null;
    
    #[MapName('reference_type')]
    #[MapInputName('reference_type')]
    public ?string $reference_type = null;
    
    #[MapName('reference_id')]
    #[MapInputName('reference_id')]
    public mixed $reference_id = null;

    #[MapName('author_type')]
    #[MapInputName('author_type')]
    public ?string $author_type = null;
    
    #[MapName('author_id')]
    #[MapInputName('author_id')]
    public mixed $author_id = null;
    
    #[MapName('start_date')]
    #[MapInputName('start_date')]
    public mixed $start_date = null;
    
    #[MapName('end_date')]
    #[MapInputName('end_date')]
    public ?string $end_date = null;

    #[MapName('props')]
    #[MapInputName('props')]
    public ?array $props = null;

    public static function before(array &$attributes){
        $new = self::new();
        $attributes['start_date'] ??= now();
        
        $monitoring_category = $new->MonitoringCategoryModel();
        if (isset($attributes['monitoring_category_id'])){
            $monitoring_category = $monitoring_category->findOrFail($attributes['monitoring_category_id']);
        }
        $attributes['prop_monitoring_category'] = $monitoring_category->toViewApi()->resolve();        
    }
}