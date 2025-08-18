<?php

use App\Http\Controllers\Admin\EventStatusController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TicketStatusController;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return 'API';
});


Route::apiResources([
    'category' => CategoryController::class,
    'event_status' => EventStatusController::class,
    'ticket_status' => TicketStatusController::class
]);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
