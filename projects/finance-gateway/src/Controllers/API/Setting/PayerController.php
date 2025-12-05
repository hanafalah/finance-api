<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModulePayer\Contracts\Schemas\Payer;
use Projects\FinanceGateway\Requests\API\Setting\Payer\{
    ViewRequest, StoreRequest, DeleteRequest
};
use Projects\FinanceGateway\Controllers\API\ApiController;

class PayerController extends ApiController {
    public function __construct(
        protected Payer $__schema
    ){}

    public function index(ViewRequest $request) {
        return $this->__schema->viewPayerPaginate();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storePayer();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deletePayer();
    }
}