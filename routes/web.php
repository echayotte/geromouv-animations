<?php

//──── AUTHENTICATION ──────────────────────────────────────────────
Auth::routes();
// login, register
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/', 'pages.presentation.show'); // necessary when logout


Route::get('presentation', 'PresentationController@show');

// CRUD with Laravel's nomenclature. With resource it makes the routes by himself, don't need to generate them
// You may register many resource controllers at once by passing an array to the resource(s) method:
Route::resources([
    'member' => 'MemberController',
    'mutual' => 'MutualController',
    'pension' => 'PensionController',
    ]);

Route::post('/addMutual', 'MutualController@store');
Route::post('/addPension', 'PensionController@store');


// Route::view('/test/bem', 'pages.test.bem');
// Route::view('/welcome', 'obsoletes.welcome');
// Route::view('/article', 'pages.article.article');
// Route::view('/template', 'pages.article.template');

