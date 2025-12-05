<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Projects\FinanceGateway\Contracts\Schemas\ModuleWarehouse\Room;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\Room\{
    ViewRequest, ShowRequest, StoreRequest, DeleteRequest
};

class RoomController extends ApiController{
    public function __construct(
        protected Room $__schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewRoomList();
    }

    public function show(ShowRequest $request){
        return $this->__schema->showRoom();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeRoom();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteRoom();
    }
}