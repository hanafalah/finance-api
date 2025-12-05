<?php

namespace Projects\FinanceApi\Requests\API\Transaction\Invoice\Refund;

use Projects\FinanceApi\Requests\API\Transaction\Refund\Environment;

class ViewRequest extends Environment
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
    ];
  }
}