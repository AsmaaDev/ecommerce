<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function(){

});


Route::group(['namespace' => 'Admin'], function(){
    route::get('admin/login', function(){
        return 'plz login';
    })->name('admin.login');
});