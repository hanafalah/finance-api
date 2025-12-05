<?php

namespace Projects\FinanceApi\Controllers\API\Setting\SatuSehat;

use Projects\FinanceApi\Contracts\Schemas\SatuSehat\PatientIntegration;
use Projects\FinanceApi\Controllers\API\ApiController;
use Projects\FinanceApi\Requests\API\Setting\SatuSehat\PatientIntegration\{
    ViewRequest, ShowRequest, StoreRequest, DeleteRequest
};

class PatientIntegrationController extends ApiController{
    public function __construct(
        protected PatientIntegration $__schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewPatientIntegrationPaginate();
    }

    public function show(ShowRequest $request){
        return $this->__schema->showPatientIntegration();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storePatientIntegration();
    }

    // public function destroy(DeleteRequest $request){
    //     return $this->__schema->deletePatientIntegration();
    // }
}