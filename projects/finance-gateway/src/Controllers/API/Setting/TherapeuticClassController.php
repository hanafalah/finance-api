<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModuleMedicalItem\Contracts\Schemas\TherapeuticClass;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\TherapeuticClass\{
    ViewRequest, StoreRequest, DeleteRequest
};

class TherapeuticClassController extends ApiController{
    public function __construct(
        protected TherapeuticClass $__therapeuticclass_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__therapeuticclass_schema->viewTherapeuticClassList();
    }

    public function store(StoreRequest $request){
        return $this->__therapeuticclass_schema->storeTherapeuticClass();
    }

    public function destroy(DeleteRequest $request){
        return $this->__therapeuticclass_schema->deleteTherapeuticClass();
    }
}