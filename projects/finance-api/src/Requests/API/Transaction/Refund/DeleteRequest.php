<?php

namespace Projects\FinanceApi\Requests\API\Transaction\Refund;

use Projects\FinanceApi\Requests\API\Transaction\Refund\Environment;

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