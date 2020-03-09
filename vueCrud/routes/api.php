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

Route::group(['prefix' => '/V1', 'namespace' => 'Api\V1', 'as' => 'api'], function() {
    Route::resource('companies', 'CompaniesController', ['except' => ['create', 'edit']]);
});