<?php

namespace Projects\FinanceApi\Requests\API\Transaction\Invoice\Refund;

use Projects\FinanceApi\Requests\API\Transaction\Refund\Environment;

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
