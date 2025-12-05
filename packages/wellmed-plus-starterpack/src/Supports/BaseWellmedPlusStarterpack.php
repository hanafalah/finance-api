<?php

namespace Hanafalah\WellmedPlusStarterpack\Supports;

use Hanafalah\LaravelSupport\Supports\PackageManagement;

class BaseWellmedPlusStarterpack extends PackageManagement
{
    /** @var array */
    protected $__wellmed_plus_starterpack_config = [];

    /**
     * A description of the entire PHP function.
     *
     * @param Container $app The Container instance
     * @throws Exception description of exception
     * @return void
     */
    public function __construct()
    {
        $this->setConfig('wellmed_plus_starterpack', $this->__wellmed_plus_starterpack_config);
    }
}
