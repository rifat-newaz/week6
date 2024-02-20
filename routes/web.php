<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/experience', function () {
    return view('experience');
});

Route::get('/projects/{id}', 'App\Http\Controllers\ProjectsController@index')->name('Projects.show');


Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/users', function (Request $request) {
    // ...
});
