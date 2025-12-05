<?php

namespace Hanafalah\WellmedLiteStarterpack\Enums\TariffComponent;

enum Flag : string{
    case FEE                 = 'FEE';
    case ADMINISTRATIF       = 'ADMINISTRATIF';
    case SERVICE_COMPONENT   = 'SERVICE';
    case LAB_COMPONENT       = 'LAB';
    case RADIOLOGY_COMPONENT = 'RADIOLOGY';
}