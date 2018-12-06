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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/*
Route::get('/main', function(){
    return view('main');
});

Route::get('/main/user/{id}', function($id){
    return view('user', ['id'=>$id]);
});
*/
