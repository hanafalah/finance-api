<?php

namespace Hanafalah\KlinikStarterpack\Enums\Item\ItemStuff;

enum Flag : string{
    case UNIT_SALES                    = 'UNIT_SALES';
    case MEDICAL_UNIT_SALES            = 'MEDICAL_UNIT_SALES'; //SATUAN JUAL
    case MEDICAL_UNIT_RECEIVED         = 'MEDICAL_UNIT_RECEIVED'; //SATUAN TERIMA
    case MEDICAL_SKOK                  = 'MEDICAL_SKOK'; // Sistem Klasifikasi Obat Berdasarkan Kemasan (SKOK)
    case MEDICAL_SKOS                  = 'MEDICAL_SKOS'; // Sistem Klasifikasi Obat Berdasarkan Sediaan (SKOS)
    case MEDICAL_SKOP                  = 'MEDICAL_SKOP'; // Sistem Klasifikasi Obat Berdasarkan Pasaran (SKOP)
    case MEDICAL_NET_UNIT              = 'MEDICAL_NET_UNIT';
    case MEDICAL_FREQ_UNIT             = 'MEDICAL_FREQUENCY_UNIT';
    case MEDICAL_MIX_PRESCRIPTION_UNIT = 'MEDICAL_MIX_PRESCRIPTION_UNIT';
    case MEDICAL_COMPOSITION_UNIT      = 'MEDICAL_COMPOSITION_UNIT';
    case MEDICAL_MATERIAL_UNIT         = 'MEDICAL_MATERIAL_UNIT';
    case MEDICAL_USAGE_ROUTE           = 'MEDICAL_USAGE_ROUTE';
    case MEDICAL_USAGE_LOCATION        = 'MEDICAL_USAGE_LOCATION';
    case MEDICAL_THERAPEUTIC_CLASS     = 'MEDICAL_THERAPEUTIC_CLASS';
}