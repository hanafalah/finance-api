<?php

namespace Projects\FinanceApi\Requests\API\Transaction\PointOfSale\Billing\Invoice;

use Projects\FinanceApi\Requests\API\Transaction\Invoice\Environment;

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
