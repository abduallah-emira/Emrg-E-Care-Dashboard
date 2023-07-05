<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Middleware\adminLogin;
use Illuminate\Routing\RouteGroup;
use \App\Http\Controllers\indexViewController;
use \App\Http\Controllers\AuthController;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

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

Route::get('/loginPage', 'LoginController@loginView')->name('loginPage')->middleware('guest');
Route::post('/login', 'LoginController@login')->name('login')->middleware('guest');

Route::get('/logout', 'LoginController@logout')->name('logout')->middleware('auth');

 Route::get('/registerPage', 'RegisterController@RegisterView')->name('RegisterPage');
 Route::post('/register', 'RegisterController@create')->name('register');
 Route::get('/adminsView', 'RegisterController@adminsView')->name('adminsView');

 Route::get('/check','indexViewController@checkRequests')->name('check');
    Route::get('/terminatedRequests','terminatedRequestsViewController@viewTerminatedRequests')->name('terminatedRequests');
    Route::get('/users','usersController@users')->name('users');
    Route::get('/index','indexViewController@index')->name('index');

 



    Route::get('/drivers','driversController@index')->name('drivers');
    Route::get('/driversForm','driversController@create')->name('driversForm');
    Route::post('/driverscreate','driversController@store')->name('createDriver');
    Route::get('/delete','driversController@delete')->name('delete');
    Route::get('/deleteDrivers/{id}','driversController@destroy')->name('deleteDrivers');
    


    

























