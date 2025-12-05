<?php

namespace Hanafalah\ModuleMonitoring\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleMonitoring\Contracts\Data\ModelHasMonitoringData as DataModelHasMonitoringData;
use Hanafalah\ModuleMonitoring\Contracts\Data\MonitoringData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class ModelHasMonitoringData extends Data implements DataModelHasMonitoringData
{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('monitoring_id')]
    #[MapName('monitoring_id')]
    public mixed $monitoring_id = null;

    #[MapInputName('monitoring')]
    #[MapName('monitoring')]
    public ?MonitoringData $monitoring = null;

    #[MapInputName('reference_type')]
    #[MapName('reference_type')]
    public ?string $reference_type = null;

    #[MapInputName('reference_id')]
    #[MapName('reference_id')]
    public mixed $reference_id = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;

    public static function before(array &$attributes){
        $new = self::new();
    }
}