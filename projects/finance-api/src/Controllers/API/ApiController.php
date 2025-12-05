<?php

namespace Projects\FinanceApi\Controllers\API;

use App\Http\Controllers\ApiController as ControllersApiController;
use Illuminate\Support\Facades\Artisan;
use Projects\FinanceApi\Concerns\HasUser;

abstract class ApiController extends ControllersApiController
{
    use HasUser;

    public function __construct(){
        config(['micro-tenant.use-db-name' => true]);
        parent::__construct();
    }
}