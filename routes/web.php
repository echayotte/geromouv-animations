<?php

//──── AUTHENTICATION ──────────────────────────────────────────────
Auth::routes();
// login, register
Route::get('/admin', 'HomeController@index')->name('admin');
Route::view('/', 'pages.presentation.show'); // necessary when logout

//──── PAGES ─────────────────────────────────────────────────────────

Route::get('presentation', 'PresentationController@show');

/**
 * CRUD with Laravel's nomenclature.
 * With resource it makes the routes by himself.
 * Don't need to generate them
 */
Route::resources([
    'member' => 'MemberController',
    'mutual' => 'MutualController',
    'pension' => 'PensionController',
    ]);

Route::post('/addMutual', 'MutualController@store');
Route::post('/addPension', 'PensionController@store');