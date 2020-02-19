<?php


Route::view('/', 'welcome');

Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback')->name('auth0-callback');
Route::get('/login', 'Auth\Auth0IndexController@login')->name('login');
Route::get('/logout', 'Auth\Auth0IndexController@logout')->name('logout')->middleware('auth');
Route::get('/profile', 'Auth\Auth0IndexController@profile')->name('profile')->middleware('auth');

// ログインチェック
Route::get('/auth-check', 'Auth0TestController@authCheck' );
Route::get('/auth-user', 'Auth0TestController@authUser' );
