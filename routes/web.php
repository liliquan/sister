<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','loginController@login')->name('login');

Route::get('/index','indexController@index')->name('index');


Route::post('code','loginController@code')->name('code');

Route::get('getVerifyCode','loginController@getVerifyCode')->name('getVerifyCode');



// 添加新顾客 显示视图
Route::get('addview','addcontroller@add_view')->name('addview');
// 添加新顾客 操作表单
Route::post('add_user','addcontroller@add_user')->name('add_user');