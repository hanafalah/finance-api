<?php

namespace Projects\FinanceGateway\Requests\API\ItemManagement\Item;

use Hanafalah\LaravelSupport\Requests\FormRequest;

class ViewRequest extends FormRequest
{
  protected $__entity = 'Item';

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