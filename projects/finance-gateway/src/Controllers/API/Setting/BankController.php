<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModulePayment\Contracts\Schemas\Bank;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\Bank\{
    ViewRequest, StoreRequest, DeleteRequest
};

class BankController extends ApiController{
    public function __construct(
        protected Bank $__bank_schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__bank_schema->viewBankList();
    }

    public function store(StoreRequest $request){
        return $this->__bank_schema->storeBank();
    }

    public function destroy(DeleteRequest $request){
        return $this->__bank_schema->deleteBank();
    }
}