<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/recursoEstadual/update','RecursoEstadualController@updateAlternative')->name('recursoEstadualUpdate');
Route::post('/recursoFundoEstadual/update','RecursoFundoEstadualController@updateAlternative')->name('recursoFundoEstadualUpdate');
Route::post('/recursoFundoNacional/update','RecursoFundoEstadualController@updateAlternative')->name('recursoFundoNacionalUpdate');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
