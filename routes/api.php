<?php

use App\Http\Controllers\Api\AgenteController;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 */
Route::controller(ClienteController::class)->group(function () {
    Route::get('/clientes','index');
    Route::post('/cliente','store');
    Route::get('/cliente/{id}','show');
    Route::put('/cliente/{id}','update');
    Route::delete('/cliente/{id}','destroy');
});

Route::controller(AgenteController::class)->group(function () {
    Route::get('/agentes','index');
    Route::post('/agente','store');
    Route::get('/agente/{id}','show');
    Route::put('/agente/{id}','update');
    Route::delete('/agente/{id}','destroy');
});

/* Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
    Route::post('/logout', 'logout');
    Route::post('/refresh', 'refresh');

}); */

    /* Route::post('login', [AuthController::class, 'login']);

    Route::group(['middleware'=> 'api'], function(){
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    }); */

    Route::group([

        'middleware' => 'api',
        'prefix' => 'auth'
    
    ], function ($router) {
    
        Route::post('login', 'App\Http\Controllers\AuthController@login');
        Route::post('logout', 'App\Http\Controllers\AuthController@logout');
        Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
        Route::post('me', 'App\Http\Controllers\AuthController@me');
        Route::post('register', 'App\Http\Controllers\AuthController@register');
    
    });
    


