<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::fallback(function(){
    return view('errors.404');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/privacy','HomeController@privacy')->name('privacy');
Route::get('/popup','HomeController@popup')->name('popup');


Route::middleware('auth')->group(function(){

    Route::get('/scenari','PulsantiController@indexScenari')->name('index-scenari');
    Route::get('/repository','PulsantiController@indexRepository')->name('index-repository');
    Route::get('/download/{file}','PulsantiController@download')->name('download');
    Route::get('/scenario1','PulsantiController@scenario1')->name('scenario1');
    Route::get('/scenario2','PulsantiController@scenario2')->name('scenario2');
    Route::get('/scenario3','PulsantiController@scenario3')->name('scenario3');

});

Route::prefix('/admin')->name('admin.')->middleware(['auth'])->group(function()
{
   //routes prefix with admin
     Route::get('/dashboard', 'AdminController@index')->name('index');
     Route::post('/store','AdminController@store')->name('store');
     Route::get('/delete/{file}','AdminController@delete')->name('delete');
});
