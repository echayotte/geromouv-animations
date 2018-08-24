<?php

//──── Authentification ──────────────────────────────────────────────
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::view('/', 'pages.presentation.show');

// Route::view('/test/bem', 'pages.test.bem');
// Route::view('/welcome', 'obsoletes.welcome');

Route::get('/presentation', 'PresentationController@show');

// CRUD with Laravel's nomenclature. It makes the routes by himself, don't need to generate them
Route::resource('/member', 'MemberController');
Route::resource('/animation', 'AnimationController');


//You may register many resource controllers at once by passing an array to the resources method:
// Route::resources([
//     'photos' => 'PhotoController',
//     'posts' => 'PostController'
// ]);


Route::resource('/file', 'FileController');

