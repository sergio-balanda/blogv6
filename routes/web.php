<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/user',['middleware'=>'auth', function () {
    return view('auth.user');
}]);

Route::get('/home/admin', ['middleware'=>'isadmin', function () {
    return view('auth.admin');
}]);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
