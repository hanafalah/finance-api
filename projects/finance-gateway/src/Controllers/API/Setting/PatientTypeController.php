<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModulePatient\Enums\PatientType\Flag;
use Hanafalah\ModulePatient\Contracts\Schemas\PatientType;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\PatientType\{
    ViewRequest, StoreRequest, DeleteRequest
};

class PatientTypeController extends ApiController{
    public function __construct(
        protected PatientType $__schema
    ){
        request()->merge(['flag' => 'PatientType']);
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewPatientTypeList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storePatientType();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deletePatientType();
    }
}