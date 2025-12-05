<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModuleClassRoom\Contracts\Schemas\ClassRoom;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\ClassRoom\{
    ViewRequest, ShowRequest, StoreRequest, DeleteRequest
};

class ClassRoomController extends ApiController{
    public function __construct(
        protected ClassRoom $__schema
    ){
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewClassRoomList();
    }

    public function show(ShowRequest $request){
        return $this->__schema->showClassRoom();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeClassRoom();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteClassRoom();
    }
}