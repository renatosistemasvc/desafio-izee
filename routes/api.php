<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PropertyOwnerController;
use App\Http\Controllers\PropertyController;

Route::group(['prefix' => 'user', 'middleware' => []], function(){

    Route::post('/store', [UserController::class, 'store']);
});

Route::group(['prefix' => 'company', 'middleware' => [/*'auth:api'*/]], function(){

    Route::post('/getAllPaginate', [CompanyController::class, 'getAllPaginate']);
    Route::get('/getAll', [CompanyController::class, 'getAll']);
    Route::get('/getById/{id}', [CompanyController::class, 'getById']);
    Route::post('/store', [CompanyController::class, 'store']);
    Route::put('/update/{id}', [CompanyController::class, 'update']);
    Route::delete('/delete/{id}', [CompanyController::class, 'delete']);
});

Route::group(['prefix' => 'property-owner', 'middleware' => [/*'auth:api'*/]], function(){

    Route::post('/getAllPaginate', [PropertyOwnerController::class, 'getAllPaginate']);
    Route::get('/getAll', [PropertyOwnerController::class, 'getAll']);
    Route::get('/getById/{id}', [PropertyOwnerController::class, 'getById']);
    Route::post('/store', [PropertyOwnerController::class, 'store']);
    Route::put('/update/{id}', [PropertyOwnerController::class, 'update']);
    Route::delete('/delete/{id}', [PropertyOwnerController::class, 'delete']);
});

Route::group(['prefix' => 'property', 'middleware' => [/*'auth:api'*/]], function(){

    Route::post('/getAllPaginate', [PropertyController::class, 'getAllPaginate']);
    Route::get('/getAll', [PropertyController::class, 'getAll']);
    Route::get('/getById/{id}', [PropertyController::class, 'getById']);
    Route::post('/store', [PropertyController::class, 'store']);
    Route::put('/update/{id}', [PropertyController::class, 'update']);
    Route::delete('/delete/{id}', [PropertyController::class, 'delete']);
});
