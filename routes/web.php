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

Route::get('/', 'ArticleController@index');
Route::get('/articles','ArticleController@index');
Route::get('/articles/detail/{id}','ArticleController@detail');



// Route::get('/articles/detail', function (){
//     return 'Article Detail';
// })->name('article.detail');

// Route::get('/articles/more', function () {
//     return redirect()->route('article.detail');
// });