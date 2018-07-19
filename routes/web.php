<?php

Route::get('/', function () {
    return view('home');
});

Route::view('/home', 'home');
Route::view('/welcome', 'welcome');
Route::view('/template', '/pages/articles/template')->name('template');
Route::view('/article', '/pages/articles/article')->name('article');
Route::view('/presentation', '/pages/presentation/index')->name('presentation');
Route::view('/inscription', '/pages/inscription/index')->name('inscription');
Route::view('/animations', '/pages/animations/index')->name('animations');

