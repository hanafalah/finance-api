<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModuleMedicalItem\Contracts\Schemas\UsageRoute;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\UsageRoute\{
    ViewRequest, StoreRequest, DeleteRequest
};

class UsageRouteController extends ApiController{
    public function __construct(
        protected UsageRoute $__usageroute_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__usageroute_schema->viewUsageRouteList();
    }

    public function store(StoreRequest $request){
        return $this->__usageroute_schema->storeUsageRoute();
    }

    public function destroy(DeleteRequest $request){
        return $this->__usageroute_schema->deleteUsageRoute();
    }
}