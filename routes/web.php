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

//level admin
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
    route::get('admin/dashboard','App\Http\Controllers\Admin\DashboardController@index');
    route::get('admin/data-logbook','App\Http\Controllers\Admin\DataLogBookController@index');
    Route::get('admin/user', 'App\Http\Controllers\Admin\UserController@index');
    Route::post('admin/data-logbook/tambah', 'App\Http\Controllers\Admin\DataLogBookController@tambah');


    Route::get('admin/assign-mahasiswa-dosen', 'App\Http\Controllers\Admin\DataMahasiswaController@index');
    Route::get('admin/assign-mahasiswa-dosen/add', 'App\Http\Controllers\Admin\DataMahasiswaController@add');
    Route::post('admin/assign-mahasiswa-dosen/tambah', 'App\Http\Controllers\Admin\DataMahasiswaController@assignMahasiswaToDosen');
    Route::get('admin/assign-mahasiswa-dosen/edit/{id}', 'App\Http\Controllers\Admin\DataMahasiswaController@edit');
    Route::post('admin/assign-mahasiswa-dosen/proses_edit', 'App\Http\Controllers\Admin\DataMahasiswaController@proses_edit');
    Route::get('admin/assign-mahasiswa-dosen/delete/{id}', 'App\Http\Controllers\Admin\DataMahasiswaController@delete');


    // data logbook admin
    Route::post('admin/data-logbook/tambah', 'App\Http\Controllers\Admin\DataLogBookController@tambah');
    Route::get('admin/data-logbook/add', 'App\Http\Controllers\Admin\DataLogBookController@add');
    Route::get('admin/data-logbook/edit/{id}', 'App\Http\Controllers\Admin\DataLogBookController@edit');
    Route::post('admin/data-logbook/proses_edit', 'App\Http\Controllers\Admin\DataLogBookController@proses_edit');
    Route::get('admin/data-logbook/delete/{id}', 'App\Http\Controllers\Admin\DataLogBookController@delete');
    Route::post('admin/data-logbook/proses', 'App\Http\Controllers\Admin\DataLogBookController@proses');
    Route::post('admin/data-logbook/import', 'App\Http\Controllers\Admin\DataLogBookController@import');
    Route::get('admin/data-logbook/export', 'App\Http\Controllers\Admin\DataLogBookController@export');
    Route::get('admin/data-logbook/export', 'App\Http\Controllers\Admin\DataLogBookController@export');
    Route::get('chart', 'App\Http\Controllers\Admin\UserController@showChart');

    // data users admin
    Route::post('admin/user/tambah', 'App\Http\Controllers\Admin\UserController@tambah');
    Route::get('admin/user/add', 'App\Http\Controllers\Admin\UserController@add');
    Route::get('admin/user/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit');
    Route::post('admin/user/proses_edit', 'App\Http\Controllers\Admin\UserController@proses_edit');
    Route::get('admin/user/delete/{id}', 'App\Http\Controllers\Admin\UserController@delete');
    Route::post('admin/user/proses', 'App\Http\Controllers\Admin\UserController@proses');
    Route::get('admin/user/edit_password', 'App\Http\Controllers\Admin\UserController@edit_password');
    Route::post('admin/user/proses_edit_password', 'App\Http\Controllers\Admin\UserController@proses_edit_password');
    Route::post('admin/user/import', 'App\Http\Controllers\Admin\UserController@import');

    

   
});


Route::group(['middleware' => ['auth', 'ceklevel:dosen']], function(){
    route::get('dosen/dashboard','App\Http\Controllers\Dosen\DashboardController@index');
    Route::get('dosen/data-logbook', 'App\Http\Controllers\Dosen\DataLogBookDosenController@index');
    Route::get('dosen/dosen/edit_password', 'App\Http\Controllers\Dosen\UserController@edit_password');
    Route::post('dosen/dosen/proses_edit_password', 'App\Http\Controllers\Dosen\UserController@proses_edit_password');
    Route::get('getLogbookByUser', 'App\Http\Controllers\Dosen\DataLogBookDosenController@getLogbookByUser');
    Route::get('update-status/{logbookId}', 'App\Http\Controllers\Dosen\DataLogBookDosenController@updateStatus');

   
});


Route::group(['middleware' => ['auth', 'ceklevel:mahasiswa']], function(){
    route::get('users/dashboard','App\Http\Controllers\Users\DashboardController@index');
    Route::get('users/data-logbook', 'App\Http\Controllers\Users\DataLogBookUserController@index');
    Route::get('users/user/edit_password', 'App\Http\Controllers\Users\UserController@edit_password');
    Route::post('users/user/proses_edit_password', 'App\Http\Controllers\Users\UserController@proses_edit_password');

     // data logbook user
     Route::post('users/data-logbook/tambah', 'App\Http\Controllers\Users\DataLogBookUserController@tambah');
     Route::get('users/data-logbook/add', 'App\Http\Controllers\Users\DataLogBookUserController@add');
     Route::get('users/data-logbook/edit/{id}', 'App\Http\Controllers\Users\DataLogBookUserController@edit');
     Route::post('users/data-logbook/proses_edit', 'App\Http\Controllers\Users\DataLogBookUserController@proses_edit');
     Route::get('users/data-logbook/delete/{id}', 'App\Http\Controllers\Users\DataLogBookUserController@delete');
     Route::post('users/data-logbook/proses', 'App\Http\Controllers\Users\DataLogBookUserController@proses');

});

Route::get('user/profil/', 'App\Http\Controllers\Admin\UserController@detail');



    

   

  