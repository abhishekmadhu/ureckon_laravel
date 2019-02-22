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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/signup', 'views.signup');
Route::view('/signin', 'views.login');
Route::view('/partners', 'views.partners');
Route::view('/talks', 'views.talks');
Route::view('/web', 'views.web');
Route::view('/team', 'views.teams');
Route::get('/techarticle', function (){
    return \Illuminate\Support\Facades\Redirect::to('https://goo.gl/forms/nfVWH6byC5qbwuUe2');
});
Route::get('/events', 'UserController@events');
Route::view('/about', 'views.aboutus');
Route::view('/workshops', 'views.workshops');
Route::post('/registerEvent', 'RegistrationController@register');
Route::group(['prefix' => 'user'], function () {
    Route::get('/profile', 'UserController@profile');
    Route::post('/uploadDP/{id}', 'UserController@uploadDP');
    Route::post('/registerEvent', 'RegistrationController@register');
    Route::get('/events', 'UserController@events');
    Route::get('/dashboard', 'UserController@profile');
    Route::get('/login', 'UserAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'UserController@login');
  Route::get('/logout', 'UserAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'UserAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'UserController@register');

  Route::post('/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'UserAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/users', 'AdminController@getUsers');
    Route::get('/participants', 'AdminController@getParticipants');
    Route::get('/home', 'AdminController@getUsers');
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::get('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
