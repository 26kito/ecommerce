<?php

use App\Http\Controllers\Api\OrderItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// url: localhost:8000/api/order/.../
Route::prefix('order')->group(function() {
    // Get Data By Order
    Route::get('{order_id}', [OrderItemController::class, 'index']);
    // Get Data By Order Items
    Route::get('{order_id}/order_items/{id}', [OrderItemController::class, 'show']);
    // Create Or Insert
    Route::post('{order_id}/order_items', [OrderItemController::class, 'store']);
    // Delete
    Route::delete('{order_id}/order_items/{id}', [OrderItemController::class, 'destroy']);
    // Edit
    Route::get('{order_id}/order_items/{id}', [OrderItemController::class, 'edit']);
    Route::put('{order_id}/order_items/{id}', [OrderItemController::class, 'update']);
});