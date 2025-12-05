<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModuleExamination\Contracts\Schemas\Form\Screening;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\Screening\{
    DeleteRequest, ViewRequest, ShowRequest, StoreRequest
};
class ScreeningController extends ApiController{
    public function __construct(
        protected  Screening $__schema
    ){ }

    public function index(ViewRequest $req) {
        return $this->__schema->viewScreeningList();
    }

    public function show(ShowRequest $req) {
        return $this->__schema->showScreening();
    }

    public function store(StoreRequest $request) {
        return $this->__schema->storeScreening();
    }

    public function destroy(DeleteRequest $req) {
       return $this->__schema->deleteScreening();
    }
}
