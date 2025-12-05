<?php

namespace Hanafalah\WellmedLiteStarterpack\Supports;

use Hanafalah\LaravelSupport\Supports\PackageManagement;

class BaseWellmedLiteStarterpack extends PackageManagement
{
    /** @var array */
    protected $__wellmed_lite_starterpack_config = [];

    /**
     * A description of the entire PHP function.
     *
     * @param Container $app The Container instance
     * @throws Exception description of exception
     * @return void
     */
    public function __construct()
    {
        $this->setConfig('wellmed_lite_starterpack', $this->__wellmed_lite_starterpack_config);
    }
}
