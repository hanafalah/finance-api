<?php

namespace Hanafalah\PuskesmasAsset\Supports;

use Hanafalah\LaravelSupport\Supports\PackageManagement;

class BasePuskesmasAsset extends PackageManagement
{
    protected $__config_name = 'puseksmas-asset';
    protected $__puskesmas_asset_config = [];

    /**
     * A description of the entire PHP function.
     *
     * @param Container $app The Container instance
     * @throws Exception description of exception
     * @return void
     */
    public function __construct()
    {
        $this->setConfig($this->__config_name, $this->__puskesmas_asset_config);
    }
}
