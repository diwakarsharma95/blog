<?php

Route::get('/contact', 'PagesController@getContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/','PagesController@getIndex');
Route::resource('posts','PostController');
