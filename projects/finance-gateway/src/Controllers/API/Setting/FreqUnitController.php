<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModuleMedicalItem\Contracts\Schemas\FreqUnit;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\FreqUnit\{
    ViewRequest, StoreRequest, DeleteRequest
};

class FreqUnitController extends ApiController{
    public function __construct(
        protected FreqUnit $__frequnit_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__frequnit_schema->viewFreqUnitList();
    }

    public function store(StoreRequest $request){
        return $this->__frequnit_schema->storeFreqUnit();
    }

    public function destroy(DeleteRequest $request){
        return $this->__frequnit_schema->deleteFreqUnit();
    }
}