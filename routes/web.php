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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Auth::routes();
// Disable register route
Route::any('/register','DashboardController@index');

Route::get('/', 'PagesController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::resource('/posts', 'PostsController');
Route::resource('/carousel', 'CarouselsController');
Route::resource('/agenda', 'AgendasController');
Route::resource('/download', 'DownloadsController');
Route::resource('/profile', 'ProfilesController');
Route::resource('/gallery', 'GalleriesController');
Route::resource('/calendar', 'CalendarsController');

Route::get('/berita_blog/{slug}', 'PagesController@blog');
Route::get('/daftar_berita_blog', 'PagesController@blogList');
Route::get('/agenda_blog/{slug}', 'PagesController@agenda');
Route::get('/daftar_agenda_blog', 'PagesController@agendaList');
Route::get('/download_blog/{slug}', 'PagesController@download');
Route::get('/daftar_download_blog', 'PagesController@downloadList');

Route::get('/profile_detail', 'PagesController@profileList');
Route::get('/gallery_detail', 'PagesController@galleryList');

Route::get('/pagenotfound', ['as' => 'notfound', 'uses' => 'PagesController@pageNotFound']);





