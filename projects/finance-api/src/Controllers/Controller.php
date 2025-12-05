<?php

namespace Projects\FinanceApi\Controllers;

use App\Http\Controllers\Controller as MainController;
use Projects\FinanceApi\Concerns\HasUser;

abstract class Controller extends MainController
{
    use HasUser;
}
