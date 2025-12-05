<?php

namespace Hanafalah\WellmedPlusStarterpack\Facades;

class WellmedPlusStarterpack extends \Illuminate\Support\Facades\Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return \Hanafalah\WellmedPlusStarterpack\Contracts\WellmedPlusStarterpack::class;
  }
}
