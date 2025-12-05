<?php

namespace Projects\FinanceGateway\Controllers;

use App\Http\Controllers\Controller as MainController;
use Projects\FinanceGateway\Concerns\HasUser;

abstract class Controller extends MainController
{
    use HasUser;
}
