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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search/simple-html-table/{username}', function(string $username) {
    return view('simple_html_table', compact('username'));
});

Route::get('/search/{username}', function(string $username) {
    return view('datatable', compact('username'));
});
