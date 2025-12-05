<?php

namespace Hanafalah\KlinikStarterpack\Facades;

class KlinikStarterpack extends \Illuminate\Support\Facades\Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return \Hanafalah\KlinikStarterpack\Contracts\KlinikStarterpack::class;
  }
}
