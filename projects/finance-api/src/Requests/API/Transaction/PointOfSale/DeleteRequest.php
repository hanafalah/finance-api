<?php

namespace Projects\FinanceApi\Requests\API\Transaction\PointOfSale;

use Projects\FinanceApi\Requests\API\Transaction\Environment;

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