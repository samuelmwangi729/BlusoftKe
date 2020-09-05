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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Services', function () {
    return view('Services');
});
Route::get('/Blog',function(){
    return view('Blog');
});
Route::get('/About',function(){
    return view('About');
});
Route::get('/Contact',function(){
    return view('Contact');
});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
