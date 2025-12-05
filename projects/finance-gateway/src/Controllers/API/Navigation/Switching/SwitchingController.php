<?php

namespace Projects\FinanceGateway\Controllers\API\Navigation\Switching;

use Hanafalah\ModuleEmployee\Contracts\Schemas\Employee;
use Projects\FinanceGateway\Controllers\API\ApiController;
use Projects\FinanceGateway\Requests\API\Navigation\Switching\{
    UpdateRequest
};

class SwitchingController extends ApiController{
    public function __construct(
        protected Employee $__employee_schema
    ){}

    public function update(UpdateRequest $request){
        $this->userAttempt();

        $response = $this->transaction(function() use ($request){
            switch ($request->type) {
                case 'room': return $this->global_employee->switchRoomTo($request->id);break;
                case 'role': return $this->global_user_reference->switchRoleTo($request->id);break;
            }
        });
        return $response->toViewApi()->resolve();
    }
}