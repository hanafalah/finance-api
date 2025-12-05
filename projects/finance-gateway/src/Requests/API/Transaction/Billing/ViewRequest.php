<?php

namespace Projects\FinanceGateway\Requests\API\Transaction\Billing;

use Projects\FinanceGateway\Requests\API\Transaction\Billing\Environment;

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