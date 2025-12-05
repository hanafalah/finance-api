<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModuleMedicalItem\Contracts\Schemas\MedicalNetUnit;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\MedicalNetUnit\{
    ViewRequest, StoreRequest, DeleteRequest
};

class MedicalNetUnitController extends ApiController{
    public function __construct(
        protected MedicalNetUnit $__medicalnetunit_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__medicalnetunit_schema->viewMedicalNetUnitList();
    }

    public function store(StoreRequest $request){
        return $this->__medicalnetunit_schema->storeMedicalNetUnit();
    }

    public function destroy(DeleteRequest $request){
        return $this->__medicalnetunit_schema->deleteMedicalNetUnit();
    }
}