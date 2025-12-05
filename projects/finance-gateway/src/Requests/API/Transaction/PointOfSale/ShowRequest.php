<?php

namespace Projects\FinanceGateway\Requests\API\Transaction\PointOfSale;

use Projects\FinanceGateway\Requests\API\Transaction\Environment;

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
