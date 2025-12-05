<?php

namespace Hanafalah\WellmedLiteStarterpack\Facades;

class WellmedLiteStarterpack extends \Illuminate\Support\Facades\Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return \Hanafalah\WellmedLiteStarterpack\Contracts\WellmedLiteStarterpack::class;
  }
}
