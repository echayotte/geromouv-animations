<?php

//──── AUTHENTICATION ──────────────────────────────────────────────
Auth::routes();
// login, register
Route::get('/home', 'HomeController@index')->name('home');
Route::view('/', 'pages.presentation.show'); // necessary when logout

Route::get('/planning', ['uses' => 'SampleController@calendar']);


Route::get('/presentation', 'PresentationController@show');

// CRUD with Laravel's nomenclature. With resource it makes the routes by himself, don't need to generate them
// You may register many resource controllers at once by passing an array to the resource(s) method:
Route::resources([
    'member' => 'MemberController',
    'planning_animation' =>'PlanningAnimationController',
]);
    
// see if I change @calendar in @planning
// Route::get('/planning', ['uses' => 'SampleController@planning']);
// Route::get('/planning', ['uses' => 'SampleController@calendar']);







// Route::view('/test/bem', 'pages.test.bem');
// Route::view('/welcome', 'obsoletes.welcome');
