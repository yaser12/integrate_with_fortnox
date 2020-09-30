<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request)
{
    return $request->user();
});

//Auth routes
Route::post('/login/api_login', 'AuthController@loginUser');

