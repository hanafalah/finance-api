<?php

namespace Projects\FinanceApi\Controllers\API\Setting;

use Hanafalah\ModuleItem\Contracts\Schemas\NetUnit;
use Projects\FinanceApi\Controllers\API\ApiController;
use Projects\FinanceApi\Requests\API\Setting\NetUnit\{
    ViewRequest, StoreRequest, DeleteRequest
};

class NetUnitController extends ApiController{
    public function __construct(
        protected NetUnit $__netunit_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__netunit_schema->viewNetUnitList();
    }

    public function store(StoreRequest $request){
        return $this->__netunit_schema->storeNetUnit();
    }

    public function destroy(DeleteRequest $request){
        return $this->__netunit_schema->deleteNetUnit();
    }
}