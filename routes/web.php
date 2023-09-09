<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::post('/', 'HomeController@index');
    
        /**
         * Register Routes
         */
        // Route::get('/register', 'RegisterController@show')->name('register.show');
        // Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login');
        Route::post('/login', 'LoginController@login')->name('login.perform');


    

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

        Route::get('/dashboard/vision', 'HomeController@vision')->name('vision');
        Route::post('/dashboard/vision', 'HomeController@vision');

        Route::get('/dashboard/mission', 'HomeController@mission')->name('mission');
        Route::post('/dashboard/mission', 'HomeController@mission');

        Route::get('/dashboard/objective', 'HomeController@objective')->name('objective');
        Route::post('/dashboard/objective', 'HomeController@objective');
        Route::delete('/dashboard/objective/{id}', 'HomeController@deleteObjective');

        Route::get('/dashboard/testimonial', 'HomeController@testimonial')->name('testimonial');
        Route::post('/dashboard/testimonial', 'HomeController@testimonial');
        Route::delete('/dashboard/testimonial/{id}', 'HomeController@deleteTestimonial');
        
        Route::get('/dashboard/contact', 'HomeController@contact')->name('contact');
        Route::post('/dashboard/contact', 'HomeController@contact');
        
        Route::get('/dashboard/donner', 'HomeController@donner')->name('donner');
       
    });
});