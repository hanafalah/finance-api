<?php

namespace Projects\FinanceApi\Controllers\API\Setting;

use Hanafalah\ModuleWarehouse\Contracts\Schemas\RoomItemCategory;
use Projects\FinanceApi\Controllers\API\ApiController;
use Projects\FinanceApi\Requests\API\Setting\RoomItemCategory\{
    ViewRequest, StoreRequest, DeleteRequest
};

class RoomItemCategoryController extends ApiController{
    public function __construct(
        protected RoomItemCategory $__schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewRoomItemCategoryList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeRoomItemCategory();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteRoomItemCategory();
    }
}