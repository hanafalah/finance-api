<?php

namespace Projects\FinanceGateway\Requests\API\Transaction\PointOfSale\Billing;

use Projects\FinanceGateway\Requests\API\Transaction\Billing\Environment;

class DeleteRequest extends Environment
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