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

// Route::get('/', function () {
//     return view('geromouvCleanUp');
// });


Route::get('/article', function () {
    return view('pages.articles.article');
});

Route::get('/geromouv-animations/presentation/', function () {
    return view('pages.presentation.index');
});

