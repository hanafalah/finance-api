<?php

namespace Projects\FinanceApi\Facades;

class FinanceApi extends \Illuminate\Support\Facades\Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return \Projects\FinanceApi\Contracts\FinanceApi::class;
  }
}
