<?php

namespace Projects\FinanceGateway\Requests\API\Transaction;


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
