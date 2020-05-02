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

Route::get('/','HomeController@index')->name('home');
Route::get('/about','HomeController@about')->name('home.about');
Route::get('/contact',[
    'uses'=>'HomeController@contact',
    'as'=>'home.contact'
    ]);

// Route::resource('article','ArticleController');
// route for show all articles
Route::get('article','ArticleController@index')->name('article.index');
// route for show form create article
Route::get('article/create','ArticleController@create')->name('article.create');
// route show article detail by id
Route::get('article/{id}','ArticleController@show')->name('article.show');
// route store article data when submit form
Route::post('article','ArticleController@store')->name('article.store');
// show form and data for edit
Route::get('article/{article}/edit','ArticleController@edit')->name('article.edit');
// get data edited to update method in ArticleController
Route::patch('article/{article}','ArticleController@update')->name('article.update');
// delete datea
Route::delete('article/{article}','ArticleController@destroy')->name('article.destroy');

Route::get('article/delete/{article}','ArticleController@destroy')->name('article.delete');
