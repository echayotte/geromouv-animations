<?php

Route::view('/', 'home');

Route::get('/presentation', 'PresentationController@show');

// CRUD with Laravel's nomenclature. It makes the routes by himself, don't need to generate them
Route::resource('/member', 'MemberController');

//You may register many resource controllers at once by passing an array to the resources method:
// Route::resources([
//     'photos' => 'PhotoController',
//     'posts' => 'PostController'
// ]);
