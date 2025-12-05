<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModuleMedicalItem\Contracts\Schemas\Trademark;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\Trademark\{
    ViewRequest, StoreRequest, DeleteRequest
};

class TrademarkController extends ApiController{
    public function __construct(
        protected Trademark $__trademark_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__trademark_schema->viewTrademarkList();
    }

    public function store(StoreRequest $request){
        return $this->__trademark_schema->storeTrademark();
    }

    public function destroy(DeleteRequest $request){
        return $this->__trademark_schema->deleteTrademark();
    }
}