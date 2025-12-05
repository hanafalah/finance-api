<?php

namespace Projects\FinanceApi\Controllers\API\Setting;

use Hanafalah\ModuleProcurement\Contracts\Schemas\ReceiveUnit;
use Projects\FinanceApi\Controllers\API\ApiController;
use Projects\FinanceApi\Requests\API\Setting\ReceiveUnit\{
    ViewRequest, StoreRequest, DeleteRequest
};

class ReceiveUnitController extends ApiController{
    public function __construct(
        protected ReceiveUnit $__schema    
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewReceiveUnitList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeReceiveUnit();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteReceiveUnit();
    }
}