<?php

namespace Hanafalah\PuskesmasAsset\Facades;

class PuskesmasAsset extends \Illuminate\Support\Facades\Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return \Hanafalah\PuskesmasAsset\Contracts\PuskesmasAsset::class;
  }
}
