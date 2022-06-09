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

use Illuminate\Support\Facades\Route;

Route::get('user_role', 'UserController@user_role')->name('user_role'); // 👌

Route::redirect('/', 'signin', 301);

Route::get('forget-password', 'Auth\ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');
Route::post('forget-password', 'Auth\ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post');
Route::get('reset-password/{token}', 'Auth\ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');
Route::post('reset-password', 'Auth\ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');

Route::get('signin', 'Auth\LoginController@sign_in')->name('sign_in'); // 👌
Route::get('sign_out', 'Auth\LoginController@sign_out')->name('sign_out'); // 👌
Route::post('signin', 'Auth\LoginController@do_sign_in')->name('sign_in'); // 👌
Route::get('signup', 'Auth\RegisterController@sign_up')->name('sign_up'); // 👌
Route::post('signup', 'Auth\RegisterController@create')->name('sign_up'); // 👌
Route::get('signup/student', 'Auth\RegisterController@sign_up_student')->name('sign_up.student');// 👌
Route::get('signup/organizer', 'Auth\RegisterController@sign_up_organizer')->name('sign_up.organizer');// 👌

Route::get('profile/', 'UserController@index')->name('profile'); // 👌
Route::get('my', 'DashboardController@index')->name('my');
Route::get('profile/edit', 'UserController@edit')->name('profile.edit'); // 👌
Route::put('profile/edit/{user}', 'UserController@store')->name('profile.edit.store'); // 👌
Route::get('profile/reset_password', 'UserController@reset_password')->name('profile.reset_password'); // 👌
Route::patch('profile/reset_password/{user}', 'UserController@do_reset_password')->name('profile.reset_password.store'); // 👌

Route::get('event', 'EventController@index')->name('event');// 👌
Route::post('event/register', 'EventController@register')->name('event.register');// 👌
Route::get('event/all', 'EventController@show_all')->name('event.all');// 👌
Route::get('event/search', 'EventController@search')->name('event.search');// 👌
Route::delete('event/delete/{event}', 'EventController@destroy')->name('event.delete');// 👌
Route::patch('event/finished/{event}', 'EventController@finished')->name('event.finished');// 👌
Route::get('event/detail/{event}', 'EventController@detail')->name('event.detail'); // 👌
Route::get('event/add', 'EventController@create')->name('event.add'); // 👌
Route::post('event/add', 'EventController@store')->name('event.add'); // 👌

Route::get('category', 'CategoryController@index')->name('category');
Route::get('category/detail/{category}', 'CategoryController@detail')->name('category.detail');
Route::get('category/add', 'CategoryController@create')->name('category.add'); //
Route::post('category/add', 'CategoryController@store')->name('category.add');
Route::get('category/delete/{category}', 'CategoryController@destroy')->name('category.delete');
Route::put('category/update/{category}', 'CategoryController@update')->name('category.update');
