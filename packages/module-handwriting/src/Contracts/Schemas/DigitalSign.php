<?php

namespace Hanafalah\ModuleHandwriting\Contracts\Schemas;

use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\ModuleHandwriting\Data\DigitalSignData;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\ModuleHandwriting\Schemas\DigitalSign
 * @method self setParamLogic(string $logic, bool $search_value = false, ?array $optionals = [])
 * @method self conditionals(mixed $conditionals)
 * @method ?Model prepareShowDigitalSign(?Model $model = null, ?array $attributes = null)
 * @method array showDigitalSign(?Model $model = null)
 */
interface DigitalSign extends DataManagement{
    public function prepareStoreDigitalSign(DigitalSignData $digital_sign_dto): Model;
    public function storeDigitalSign(?DigitalSignData $digital_sign_dto = null): array;
}