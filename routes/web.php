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
})->name('welcome');

// Route::get('/app', function () {
//     return view('layouts.app');
// });

//Route::get('/home', 'HomeController@index')->name('home');

// 'auth', 

Route::middleware(['member'])->group(function(){
Route::get('/dashboard', "PostController@getDashboard");
Route::post('/createpost', "PostController@postCreatePost");
Route::delete('/deletePost/{id}', "PostController@getDeletePost")->name('post.delete');
Route::put('/editPost/{id}', "PostController@postEditPost")->name('post.edit');
Route::get('/post/{id}', 'PostController@show')->name('posts.show');

Route::resource('comments', 'CommentController');

//Route::post('/editPost/{post_id}', "PostController@getEditPost");
//Route::post('/editPost', "PostController@getEditPost");
// Route::post('/editpost', function(\Illuminate\Http\Request $request) {
// 	return response()->json([$request ['postId']]); 
// })->name('edit');
//Route::post('/editpost', "PostController@postEditPost")->name('edit'); 
//{
//});
//}	
	//return response()->json([$request ['postId']]);
//});
//Route::get('/dashboard', "UserController@showUsers");
});

// 'auth', 
Route::middleware(['admin'])->group(function(){
Route::get('/admindashboard', "AdminDashboardController@showadminDashboard");
Route::put('/updateUser/{id}', "AdminDashboardController@updateUser");
// Route::delete('/archiveUser/{id}', "AdminDashboardController@archiveUser");
Route::put('/archiveUser/{id}', "AdminDashboardController@archiveUser");
Route::put('/restoreUser/{id}', "AdminDashboardController@restoreUser");
});

Auth::routes();


