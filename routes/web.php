<?php
use App\Http\Controllers\Details\PostsController;
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


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/events', 'PagesController@events');

Route::get('details/posts/{post}', [PostsController::class, 'show'])->name('details.show');
Route::get('details/categories/{category}', [PostsController::class, 'category'])->name('details.category');
Route::get('details/tags/{tag}', [PostsController::class, 'tag'])->name('details.tag');
Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource("categories",'CategoriesController');
    Route::resource("tags",'TagsController');
    Route::resource("posts",'PostsController');
    Route::get('trashed-posts','PostsController@trashed')->name('trashed-posts.index');
    Route::put('restore-posts/{post}','PostsController@restore')->name('restore-posts');


});
Route::get('users', 'UsersController@index')->name('users.index');
Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');