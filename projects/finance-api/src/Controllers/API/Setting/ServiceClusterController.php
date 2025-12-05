<?php

namespace Projects\FinanceApi\Controllers\API\Setting;

use Hanafalah\ModuleMedicService\Contracts\Schemas\ServiceCluster as SchemasServiceCluster;
use Hanafalah\ModulePatient\Enums\PatientType\Flag;
use Projects\FinanceApi\Controllers\API\ApiController;
use Projects\FinanceApi\Requests\API\Setting\ServiceCluster\{
    ViewRequest, StoreRequest, DeleteRequest
};

class ServiceClusterController extends ApiController{
    
    public function __construct(
        protected SchemasServiceCluster $__schema
    ){
        request()->merge(['flag' => Flag::SERVICE_CLUSTER->value]);
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewServiceClusterList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeServiceCluster();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteServiceCluster();
    }
}