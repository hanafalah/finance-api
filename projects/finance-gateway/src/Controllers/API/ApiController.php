<?php

namespace Projects\FinanceGateway\Controllers\API;

use App\Http\Controllers\ApiController as ControllersApiController;
use Illuminate\Support\Facades\Artisan;
use Projects\FinanceGateway\Concerns\HasUser;

abstract class ApiController extends ControllersApiController
{
    use HasUser;

    public function __construct(){
        config(['micro-tenant.use-db-name' => true]);
        parent::__construct();
    }
}