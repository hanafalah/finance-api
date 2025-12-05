<?php

use Illuminate\Support\Facades\Route;
use Projects\FinanceGateway\Controllers\API\Setting\{
    SellingFormController,
};

Route::group([
    'prefix' => '/item-management',
    'as' => 'item-management.'
],function(){
    Route::apiResource('/selling-form',SellingFormController::class)->parameters(['selling-form' => 'id']);
});

