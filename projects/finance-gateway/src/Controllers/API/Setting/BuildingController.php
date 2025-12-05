<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModuleWarehouse\Contracts\Schemas\Building;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\Building\{
    ViewRequest, StoreRequest, DeleteRequest
};

class BuildingController extends ApiController{
    public function __construct(
        protected Building $__schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewBuildingList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeBuilding();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteBuilding();
    }
}