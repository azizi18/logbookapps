<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'App\Http\Controllers\Login@index')->name('login');
Route::post('login', 'App\Http\Controllers\Login@login');
Route::get('logout', 'App\Http\Controllers\Login@logout');


Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
    route::get('admin/data-logbook','App\Http\Controllers\Admin\DataLogBook@index');
    Route::get('admin/user', 'App\Http\Controllers\Admin\UserController@index');
    

   
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,users,dosen']], function(){
    route::get('admin/dashboard','App\Http\Controllers\Admin\Dashboard@index');

   
});


Route::group(['middleware' => ['auth', 'ceklevel:dosen']], function(){

   
});

   // user
    Route::post('admin/user/tambah', 'App\Http\Controllers\Admin\UserController@tambah');
    Route::get('admin/user/add', 'App\Http\Controllers\Admin\UserController@add');
    Route::get('admin/user/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit');
    Route::post('admin/user/proses_edit', 'App\Http\Controllers\Admin\UserController@proses_edit');
    Route::get('admin/user/delete/{id}', 'App\Http\Controllers\Admin\UserController@delete');
    Route::post('admin/user/proses', 'App\Http\Controllers\Admin\UserController@proses');
    Route::get('admin/user/detail/{id}', 'App\Http\Controllers\Admin\UserController@detail');
    Route::get('admin/user/edit_password', 'App\Http\Controllers\Admin\UserController@edit_password');
    Route::post('admin/user/proses_edit_password', 'App\Http\Controllers\Admin\UserController@proses_edit_password');
    Route::post('admin/user/import', 'App\Http\Controllers\Admin\UserController@import');

  