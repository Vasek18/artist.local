<?php

Route::get('/', "HomeController@index");

Route::resource('picture', 'PictureController');