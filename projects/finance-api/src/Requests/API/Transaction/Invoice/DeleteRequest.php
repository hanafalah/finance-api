<?php

namespace Projects\FinanceApi\Requests\API\Transaction\Invoice;

use Projects\FinanceApi\Requests\API\Transaction\Invoice\Environment;

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