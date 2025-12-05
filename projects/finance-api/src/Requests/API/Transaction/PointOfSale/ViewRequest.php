<?php

namespace Projects\FinanceApi\Requests\API\Transaction\PointOfSale;

use Projects\FinanceApi\Requests\API\Transaction\Environment;

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