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

Route::get('/', 'AcceuilController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::resource('/welcome','WelcomeController');
Route::resource('/service','ServiceController');
Route::resource('/serviceadmin','ServiceadminController');
Route::resource('/blog','BlogController');
// Route::resource('/blog-post','BlogpostController');
Route::resource('/contact','ContactController');
Route::resource('/contactadmin','ContactadminController');
Route::resource('/carousel','CarouselController');
Route::resource('/acceuil','AcceuilController');
Route::resource('/acceuiladmin','AcceuiladminController');
Route::resource('/testimonialsadmin','TestimonialsadminController');
Route::resource('/worldadmin','WorldController');
Route::resource('/projectadmin','ProjectController');
Route::resource('/article','ArticleController');
Route::resource('/tag','TagController');
Route::resource('/categorie','CategorieController');
Route::resource('/client','ClientController');

Route::post('/search','BlogController@search')->name('search');
Route::get('/affichage', 'BlogController@affichage')->name('affichage');
Route::any('/validation/{commentaire}', 'BlogController@validation')->name('validation');
Route::resource('/user','UserController');
Route::get('/mail',function () {
    return view('mailform'); 
})->name('mail');
Route::post('/mail/send','ContactController@mail')->name('form');

Route::get('/newsletter',function () {
    return view('mailform'); 
})->name('mail');
Route::post('/newsletter/send','BlogController@newsletter')->name('forme');