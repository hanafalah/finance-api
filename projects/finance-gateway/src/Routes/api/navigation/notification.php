<?php

use Illuminate\Support\Facades\Route;
use Projects\FinanceGateway\Controllers\API\Navigation\Notification\NotificationController;

Route::apiResource('notification',NotificationController::class)->parameters(['notification' => 'id']);