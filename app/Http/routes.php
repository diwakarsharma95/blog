<?php

Route::get('/contact', 'PagesController@getContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/','PagesController@getIndex');
Route::resource('posts','PostController');
Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog',['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);