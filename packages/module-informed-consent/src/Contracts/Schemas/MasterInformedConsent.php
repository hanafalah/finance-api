<?php

namespace Hanafalah\ModuleInformedConsent\Contracts\Schemas;

use Hanafalah\LaravelSupport\Contracts\Schemas\Unicode;

/**
 * @see \Hanafalah\LaravelSupport\Schemas\MasterInformedConsent
 * @method self setParamLogic(string $logic, bool $search_value = false, ?array $optionals = [])
 * @method self conditionals(mixed $conditionals)
 * @method mixed export(string $type)
 * @method bool deleteMasterInformedConsent()
 * @method bool prepareDeleteMasterInformedConsent(? array $attributes = null)
 * @method mixed getMasterInformedConsent()
 * @method ?Model prepareShowMasterInformedConsent(?Model $model = null, ?array $attributes = null)
 * @method array showMasterInformedConsent(?Model $model = null)
 * @method Collection prepareViewMasterInformedConsentList()
 * @method array viewMasterInformedConsentList()
 * @method LengthAwarePaginator prepareViewMasterInformedConsentPaginate(PaginateData $paginate_dto)
 * @method array viewMasterInformedConsentPaginate(?PaginateData $paginate_dto = null)
 * @method array storeMasterInformedConsent(?MasterInformedConsentData $master_informed_consent_dto = null)
 */
interface MasterInformedConsent extends Unicode {}
