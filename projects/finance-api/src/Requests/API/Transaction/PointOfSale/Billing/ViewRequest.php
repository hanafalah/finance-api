<?php

namespace Projects\FinanceApi\Requests\API\Transaction\PointOfSale\Billing;

use Projects\FinanceApi\Requests\API\Transaction\Billing\Environment;

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