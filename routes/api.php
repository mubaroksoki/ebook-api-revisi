<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//bookapi

Route::post('/book','BookController@create');
Route::get('/book', 'BookController@read');
Route::get('/book/{id}','BookController@readwithid');
Route::put('/getupdate/{id}', 'BookController@updatewhereid');
Route::delete('/delete/{id}','BookController@deleteid');

//authorapi

Route::post('/authors','AuthorController@createnewauthor');
Route::get('/authors','AuthorController@readauthor');
Route::get('/authors/{id}','AuthorController@readidauthor');
Route::put('/authorupdate/{id}','AuthorController@updateauthor');
Route::delete('/authordelete/{id}','AuthorController@deleteauthor');
