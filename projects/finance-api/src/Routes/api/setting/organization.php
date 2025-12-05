<?php

use Illuminate\Support\Facades\Route;
use Projects\FinanceApi\Controllers\API\Setting\{
    CompanyController,
};

Route::group([
    'prefix' => '/infrastructure',
    'as' => 'infrastructure.'
],function(){
    Route::apiResource('/company',CompanyController::class)->parameters(['company' => 'id']);
});
