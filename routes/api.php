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

Route::group(['prefix' => 'v1'], function () {
    Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function () {
        Route::post('login', 'LoginController@login');

        // Recuperación de contraseña
        // Route::get('/sendmailrecovery/{email}', 'ForgotPasswordController@sendMail');
        // Route::post('/passwordresetrecovery', 'ForgotPasswordController@passwordReset');
    });

    Route::group(['namespace' => 'Api'], function () {
        Route::resource('products', 'ProductController', ['except' => ['create', 'edit']]);
        Route::post('products/search', 'ProductController@search');
        Route::post('products/upload', 'ProductController@upload');

        Route::resource('brands', 'BrandController', ['except' => ['create', 'edit']]);
        Route::post('brands/search', 'BrandController@search');
        Route::post('brands/upload', 'BrandController@upload');

        Route::resource('groups', 'GroupController', ['except' => ['create', 'edit']]);
        Route::post('groups/search', 'GroupController@search');
        Route::post('groups/upload', 'GroupController@upload');

        Route::resource('units', 'UnitController', ['except' => ['create', 'edit']]);
        Route::post('units/search', 'UnitController@search');
        Route::post('units/upload', 'UnitController@upload');
    });

    Route::group(['namespace' => 'General', 'prefix' => 'admin'], function () {
        Route::resource('parameters', 'SystemParameterController', ['except' => ['create', 'edit']]);
        Route::patch('parameters/toggle-status/{id}', 'SystemParameterController@toggleStatus');
    });
    
});
