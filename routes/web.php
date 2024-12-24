<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    activity()->inLog(__('Enter'))
              ->causedByAnonymous()
	          ->log(__('welcome page'));
    return view('welcome');
});
