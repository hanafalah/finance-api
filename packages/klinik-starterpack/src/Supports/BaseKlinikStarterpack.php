<?php

namespace Hanafalah\KlinikStarterpack\Supports;

use Hanafalah\LaravelSupport\Supports\PackageManagement;

class BaseKlinikStarterpack extends PackageManagement
{
    /** @var array */
    protected $__klinik_starterpack_config = [];

    /**
     * A description of the entire PHP function.
     *
     * @param Container $app The Container instance
     * @throws Exception description of exception
     * @return void
     */
    public function __construct()
    {
        $this->setConfig('klinik_starterpack', $this->__klinik_starterpack_config);
    }
}
