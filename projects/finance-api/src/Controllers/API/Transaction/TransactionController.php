<?php

namespace Projects\FinanceApi\Controllers\API\Transaction;

use Projects\FinanceApi\Requests\API\Transaction\{
    ViewRequest, ShowRequest, StoreRequest, DeleteRequest
};

class TransactionController extends EnvironmentController{
    public function index(ViewRequest $request){
        return $this->getTransactionPaginate();
    }

    public function show(ShowRequest $request){
        return $this->showTransaction();
    }

    public function store(StoreRequest $request){
        return $this->storeTransaction();
    }

    public function delete(DeleteRequest $request){
        return $this->deleteTransaction();
    }
}