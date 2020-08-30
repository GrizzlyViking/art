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

Route::get('/', ['uses' => 'PageController@index', 'as' => 'landing']);

Route::get('/about', ['uses' => 'PageController@about', 'as' => 'about']);

Route::get('/blog', ['uses' => 'PageController@blog', 'as' => 'blog']);

Route::get('/portfolio', ['uses' => 'PageController@portfolio', 'as' => 'portfolio']);

Route::get('/contact', ['uses' => 'PageController@contact', 'as' => 'contact']);

Route::post('/mail', ['uses' => 'PageController@mail', 'as' => 'contactForm']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::resource('art', 'ArtController');
});
