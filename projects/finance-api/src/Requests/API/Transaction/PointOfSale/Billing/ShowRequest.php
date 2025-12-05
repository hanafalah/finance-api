<?php

namespace Projects\FinanceApi\Requests\API\Transaction\PointOfSale\Billing;

use Projects\FinanceApi\Requests\API\Transaction\Billing\Environment;

class ShowRequest extends Environment
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [];
  }
}
