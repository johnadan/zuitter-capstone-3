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
//Route::post('/editPost/{post_id}', "PostController@getEditPost");
//Route::post('/editPost', "PostController@getEditPost");
Route::post('/editpost', function(\Illuminate\Http\Request $request) {
	return response()->json([$request ['postId']]); 
})->name('edit');
//Route::post('/editpost', "PostController@postEditPost")->name('edit'); 
//{
//});
//}	
	//return response()->json([$request ['postId']]);

//});

Route::get('/post/{id}', 'PostController@show')->name('posts.show');
Route::resource('comments', 'CommentController');
});

Route::middleware(['admin'])->group(function(){
Route::get('/admindashboard', "AdminDashboardController@showadminDashboard");
//Route::post ( '/addItem', 'AdminDashboardController@addItem' );
});
// });
Auth::routes();


