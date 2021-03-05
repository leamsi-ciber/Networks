<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Routes Authentification
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user-profile', 'AuthController@userProfile');
});

//Routes Data
Route::resource('category', 'CategoryController');
Route::resource('jobs', 'JobsController');
Route::resource('category.jobs', 'CategoryJobsController'); 

