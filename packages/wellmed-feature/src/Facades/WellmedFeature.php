<?php

namespace Hanafalah\WellmedFeature\Facades;

class WellmedFeature extends \Illuminate\Support\Facades\Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return \Hanafalah\WellmedFeature\Contracts\WellmedFeature::class;
  }
}
