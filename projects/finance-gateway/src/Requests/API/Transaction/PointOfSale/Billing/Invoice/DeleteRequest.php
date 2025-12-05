<?php

namespace Projects\FinanceGateway\Requests\API\Transaction\PointOfSale\Billing\Invoice;

use Projects\FinanceGateway\Requests\API\Transaction\Invoice\Environment;

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