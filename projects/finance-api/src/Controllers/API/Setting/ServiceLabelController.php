<?php

namespace Projects\FinanceApi\Controllers\API\Setting;

use Hanafalah\ModuleService\Contracts\Schemas\ServiceLabel;
use Projects\FinanceApi\Controllers\API\ApiController;
use Projects\FinanceApi\Requests\API\Setting\ServiceLabel\{
    ViewRequest, StoreRequest, DeleteRequest
};

class ServiceLabelController extends ApiController{
    public function __construct(
        protected ServiceLabel $__schema
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewServiceLabelList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeServiceLabel();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteServiceLabel();
    }
}
