<?php

Route::apiResource('cliente', \App\Http\Controllers\api\ClienteController::class);

Route::namespace('\App\Http\Controllers\api')->group(function () {
    Route::get(
        '/consulta/final-placa/{placa}',
        'ClienteController@consultaPlaca'
    );
});
