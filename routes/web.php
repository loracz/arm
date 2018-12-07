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

// USER routing
Route::get('/users', 'UserController@index')->name('users');

Route::get('/users/adduser', 'UserController@create')->name('adduser');

Route::post('/users/adduser', 'UserController@store')->name('adduser');

Route::delete('/users/deleteuser/{id}', 'UserController@destroy')->name('deleteuser');

Route::get('/users/edituser/{id}', 'UserController@edit')->name('edituser');

Route::put('/users/{id}', 'UserController@update')->name('updateuser');

// PRPOSAL routing
Route::get('/proposals', 'ProposalController@index')->name('proposals');

Route::get('/proposals/addproposal', 'ProposalController@create')->name('addproposal');

Route::post('/proposals/addproposal', 'ProposalController@store')->name('addproposal');

/*
Route::get('/main', function(){
    return view('main');
});

Route::get('/main/user/{id}', function($id){
    return view('user', ['id'=>$id]);
});
*/
