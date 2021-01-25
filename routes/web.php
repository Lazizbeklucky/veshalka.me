<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
    'middleware' => 'admin',
    'namespace'=>'Admin'
], function () {
    Route::get('/', [
        'uses' => 'MainController@index',
        'as' => 'index'
    ]);

    
});


Route::group([
 'as'=>'user',
 'namespace'=>'User',
 'prefix' => '/',
 'middleware'=>'guest'

], function(){
    Route::get('/', [
    'uses' => 'MainController@index',
    'as' => 'index'
    ]);

    Route::get('/login',[
'uses'=>'MainController@getLogin',
'as'=>'get_login'
]);
    Route::get('/set-login',[
'uses'=>'MainController@setLogin',
'as'=>'set_login'
]);

    Route::get('/search', 'MainController@search');
    
});



