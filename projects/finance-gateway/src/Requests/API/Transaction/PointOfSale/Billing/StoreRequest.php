<?php

namespace Projects\FinanceGateway\Requests\API\Transaction\PointOfSale\Billing;

use Projects\FinanceGateway\Requests\API\Transaction\Billing\Environment;

class StoreRequest extends Environment
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
