<?php

namespace Hanafalah\WellmedFeature;

use Hanafalah\WellmedFeature\Contracts\WellmedFeature as ContractsWellmedFeature;
use Hanafalah\WellmedFeature\Supports\BaseWellmedFeature;

class WellmedFeature extends BaseWellmedFeature implements ContractsWellmedFeature {
    const LOWER_CLASS_NAME = "wellmed_feature";
}
