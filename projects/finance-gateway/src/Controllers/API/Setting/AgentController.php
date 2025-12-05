<?php

namespace Projects\FinanceGateway\Controllers\API\Setting;

use Hanafalah\ModuleAgent\Contracts\Schemas\Agent;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Setting\Agent\{
    ViewRequest, StoreRequest, DeleteRequest
};

class AgentController extends ApiController{
    public function __construct(
        protected Agent $__schema
    ){
        parent::__construct();
    }

    public function index(ViewRequest $request){
        return $this->__schema->viewAgentList();
    }

    public function store(StoreRequest $request){
        return $this->__schema->storeAgent();
    }

    public function destroy(DeleteRequest $request){
        return $this->__schema->deleteAgent();
    }
}