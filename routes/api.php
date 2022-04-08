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

Route::group([
    'middleware' => 'auth:api',
], function () {
    // here goes private routes

});

Route::post('/login', 'App\Http\Controllers\apiUtils\LoginController@login');
Route::post('/register', 'App\Http\Controllers\apiUtils\LoginController@register');

Route::get('/customers', 'App\Http\Controllers\CustomerController@index');
Route::get('/customers/{customer}', 'App\Http\Controllers\CustomerController@showCustomerByID');
Route::post('/customers', 'App\Http\Controllers\CustomerController@store');
Route::put('/customers/{customer}', 'App\Http\Controllers\CustomerController@update');
Route::delete('/customers/{customer}', 'App\Http\Controllers\CustomerController@destroy');

Route::apiResource('/customer-forms', 'App\Http\Controllers\CustomerFormController');
Route::apiResource('/packages', 'App\Http\Controllers\PackageController');
Route::apiResource('/package-details', 'App\Http\Controllers\PackageDetailController');
