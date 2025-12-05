<?php

namespace Projects\FinanceApi\Controllers\API\Setting;

use Hanafalah\ModuleEmployee\Contracts\Schemas\ShiftSchedule;
use Projects\FinanceApi\Controllers\API\ApiController;
use Projects\FinanceApi\Requests\API\Setting\ShiftSchedule\{
    ViewRequest, StoreRequest, DeleteRequest
};

class ShiftScheduleController extends ApiController{
    public function __construct(
        protected ShiftSchedule $__schema    
    ){}

    public function index(ViewRequest $request){
        return $this->__schema->viewShiftScheduleList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeShiftSchedule();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteShiftSchedule();
    }
}