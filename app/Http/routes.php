<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about', function () {
//    return "about";
//});
//
//Route::get('/contact', function () {
//    return "Contact";
//});
//
//Route::get('/post/{id}/{name}', function ($id,$name) {
//    return "This is post: " .$id. " " .$name;
//});
//Route::get('/admin/posts/example',array('as' => 'admin.home' ,function () {
//
//    $url = route('admin.home');
//
//    return "This url is ". $url;
//}));

//Route::get('/post/{id}','PostsController@index');

//Route::resource('posts','PostsController');

//Route::get('/contact','PostsController@contact');
//
//Route::get('post/{id}/{name}/{password}','PostsController@show_post');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
Route::get('insert',function (){

    DB::insert('insert into posts(title,content) values(?,?)', ['PHP with laravel', 'Laravel is the best...']);
});