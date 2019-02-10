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

Route::get('/', function () {
    return view('welcome');
//});
})->name('welcome');

// Route::get('/app', function () {
//     return view('layouts.app');
// });

//Route::middleware("auth")->group(function(){

	//});

	//});
//});

//Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
Route::get('/dashboard', "PostController@getDashboard");
Route::post('/createpost', "PostController@postCreatePost");
Route::get('/deletePost/{post_id}', "PostController@getDeletePost");
});

Route::middleware(['admin'])->group(function(){
Route::get('/admindashboard', "AdminDashboardController@showadminDashboard");
});
// });
Auth::routes();


