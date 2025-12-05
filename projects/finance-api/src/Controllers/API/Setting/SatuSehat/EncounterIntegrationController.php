<?php

namespace Projects\FinanceApi\Controllers\API\Setting\SatuSehat;

use Projects\FinanceApi\Contracts\Schemas\SatuSehat\EncounterIntegration;
use Projects\FinanceApi\Controllers\API\ApiController;
use Projects\FinanceApi\Requests\API\Setting\SatuSehat\EncounterIntegration\{
    ViewRequest, ShowRequest, StoreRequest, DeleteRequest
};

class EncounterIntegrationController extends ApiController{
    public function __construct(
        protected EncounterIntegration $__schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewEncounterIntegrationPaginate();
    }

    public function show(ShowRequest $request){
        return $this->__schema->showEncounterIntegration();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeEncounterIntegration();
    }

    // public function destroy(DeleteRequest $request){
    //     return $this->__schema->deleteEncounterIntegration();
    // }
}