<?php

namespace Projects\FinanceGateway\Controllers\API\Setting\Examination;

use Hanafalah\ModulePhysicalExamination\Contracts\Schemas\PhysicalExaminationStuff;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\Examination\PhysicalExamination\{
    ViewRequest, StoreRequest, DeleteRequest
};

class PhysicalExaminationStuffController extends ApiController{
    public function __construct(
        protected PhysicalExaminationStuff $__schema
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewPhysicalExaminationStuffList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storePhysicalExaminationStuff();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deletePhysicalExaminationStuff();
    }
}
