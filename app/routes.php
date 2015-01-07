<?php

Route::get('/', 'HomeController@showWelcome');





Route::get('post/listing', array('uses' => 'PostController@listing', 'as' => 'get.post.listing'));

Route::get('post/{id}', array('uses' => 'PostController@single', 'as' => 'get.post.single'))->where('id', '[1-9][0-9]*');

Route::post('post/{id}', array('uses' => 'PostController@update', 'as' => 'post.post.update'))->where('id', '[1-9][0-9]*');

Route::resource('user', 'UserController');





Route::get('login', function()
{
	return 'Login Page';

});
