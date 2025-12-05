<?php

namespace Projects\FinanceGateway\Controllers\API\Transaction\Billing;

use Projects\FinanceGateway\Requests\API\Transaction\Billing\{
    ViewRequest, ShowRequest
};

class BillingController extends EnvironmentController{
    protected function commonConditional($query){
        parent::commonConditional($query);
        $query->whereNotNull('reported_at');
    }

    public function index(ViewRequest $request){
        return $this->getBillingPaginate();
    }

    public function show(ShowRequest $request){
        return $this->showBilling();
    }
}