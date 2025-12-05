<?php

namespace Projects\FinanceGateway\Facades;

class FinanceGateway extends \Illuminate\Support\Facades\Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return \Projects\FinanceGateway\Contracts\FinanceGateway::class;
  }
}
