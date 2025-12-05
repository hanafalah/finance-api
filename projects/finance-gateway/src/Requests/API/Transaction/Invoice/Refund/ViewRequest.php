<?php

namespace Projects\FinanceGateway\Requests\API\Transaction\Invoice\Refund;

use Projects\FinanceGateway\Requests\API\Transaction\Refund\Environment;

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