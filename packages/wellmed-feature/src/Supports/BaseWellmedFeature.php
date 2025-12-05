<?php

namespace Hanafalah\WellmedFeature\Supports;

use Hanafalah\LaravelSupport\Supports\PackageManagement;

class BaseWellmedFeature extends PackageManagement
{
    /** @var array */
    protected $__wellmed_feature_config = [];

    /**
     * A description of the entire PHP function.
     *
     * @param Container $app The Container instance
     * @throws Exception description of exception
     * @return void
     */
    public function __construct()
    {
        $this->setConfig('wellmed_feature', $this->__wellmed_feature_config);
    }
}
