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

Route::get('/', function () {
    return view('welcome');
});

//authentication routes start
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register','Auth\RegisterController@register');
Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
Route::post('/login','Auth\LoginController@login');
Route::get('/logout','Auth\LoginController@logout');
Route::get('/dashboard','Auth\LoginController@showDashboard')->name('dashboard');
//authentication routes end


//user invitation routes start
Route::get('/invitation/send','InvitationController@showSendInvitationForm');
Route::post('/invitation/send','InvitationController@sendInvite')->name('sendInvite');
Route::get('/registerEmployee?invitation_token={$token}/{$company_id}','InvitationController@showEmployeeRegistration')->name('showEmployeeRegistration');
Route::post('/registerEmployee?invitation_token={$token}/{$company_id}','InvitationController@registerEmployee')->name('registerEmployee');
//user invitation route end