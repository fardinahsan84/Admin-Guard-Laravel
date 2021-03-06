<?php
Route::view('/', 'welcome');
Auth::routes();


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/blogger', 'Auth\LoginController@showBloggerLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/blogger', 'Auth\RegisterController@showBloggerRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/blogger', 'Auth\LoginController@bloggerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/blogger', 'Auth\RegisterController@createBlogger');

Route::group(['middleware' => 'auth:blogger'], function () {
Auth::routes();
Route::view('/blogger', 'blogger');
});
Route::group(['middleware' => 'auth:admin'], function () {
Auth::routes();
Route::view('/admin', 'admin');
});