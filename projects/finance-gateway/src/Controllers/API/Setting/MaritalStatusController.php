<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModulePeople\Contracts\Schemas\MaritalStatus;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\MaritalStatus\{
    ViewRequest, StoreRequest, DeleteRequest
};

class MaritalStatusController extends ApiController{
    public function __construct(
        protected MaritalStatus $__schema
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewMaritalStatusList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeMaritalStatus();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteMaritalStatus();
    }
}
