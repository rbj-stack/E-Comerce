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

Route::view('/', 'welcome');

Route::view("/users",function(){
    // if(Gate::allows('users',Auth::user())){

    //     return view('users');
        
    // }else{
    //     return "you are not a user !";
    // }
});
// Route::get('/logout', 'Auth\LoginController@logout');
// Route::get('/logout', 'Auth\AuthController@logout');


// test users


// Route::get('users', function()
// {
//     return 'heloo';
// });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
