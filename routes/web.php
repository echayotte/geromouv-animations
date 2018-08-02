<?php

Route::get('/presentation', 'PresentationController@show');
Route::resource('/member', 'MemberController');