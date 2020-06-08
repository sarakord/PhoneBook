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


Auth::Routes(['verify'=>true]);


Route::get('/', function () {
    return view('main');
});


Route::get('/home','HomeController@index')->middleware('auth' , 'verified')->name('home');


route::prefix('/contact')->middleware('auth')->group(function (){

    route::get('','ContactController@index')->name('contacts');
    route::get('/create' , 'ContactController@create')->name('contact.create');
    route::post('/store','ContactController@store')->name('contact.store');
    route::get('/edit/{Contact}','ContactController@edit')->name('contact.edit');
    route::post('/update/{Contact}','ContactController@update')->name('contactes.update');
    route::get('/destroy/{Contact}','ContactController@destroy')->name('contact.destroy');

});