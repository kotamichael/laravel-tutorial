<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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

Route::get('/find', function () {
    $posts = Post::all();
    
    foreach($posts as $post) {
        return $post;
    }
});

Route::get('/contact', 'PostsController@contact');

Route::resource('posts', 'PostsController');
// Route::get('/about', function () {
//     return "About";
// });

// Route::get('/contact', function () {
//     return "Contact";
// });

// Route::get('/post/{id}', function ($id) {
//     return "This is post number ".$id;
// });
