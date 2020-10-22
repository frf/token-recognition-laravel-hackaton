<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/customer-orders", ["as" => "api.customer.orders", "uses" => "Api\CustomerOrderController@getCustomerOrders"]);

Route::post('/customer-orders', ["as" => "api.customer.orders", "uses" => "Api\CustomerOrderController@createCustomerOrders"]);

Route::post('/customer-orders/facematch', ["as" => "api.customer.orders", "uses" => "Api\CustomerOrderController@validateCustomerOrder"]);

Route::post('/customer-orders/first-facematch', ["as" => "api.customer.orders", "uses" => "Api\CustomerOrderController@validateFirstCustomerOrder"]);
