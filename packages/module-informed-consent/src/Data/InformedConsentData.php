<?php

namespace Hanafalah\ModuleInformedConsent\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleInformedConsent\Contracts\Data\InformedConsentData as DataInformedConsentData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class InformedConsentData extends Data implements DataInformedConsentData{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('transaction_id')]
    #[MapName('transaction_id')]
    public mixed $transaction_id;

    #[MapInputName('author_id')]
    #[MapName('author_id')]
    public mixed $author_id = null;

    #[MapInputName('author_type')]
    #[MapName('author_type')]
    public ?string $author_type = null;

    #[MapInputName('master_informed_consent_id')]
    #[MapName('master_informed_consent_id')]
    public mixed $master_informed_consent_id;

    #[MapInputName('status')]
    #[MapName('status')]
    public ?string $status = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public array $props;
}