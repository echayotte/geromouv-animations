<?php

Route::view('/', 'home');

Route::get('/presentation', 'PresentationController@show');
Route::resource('/member', 'MemberController');