<?php
Route::get('solicitudes', [
    'as' => 'solicitudes', 'uses' => 'SolicitudesController@showSolicitud'
]);

Route::get('solicitud', [
    'as' => 'crearSolicitud', 'uses' => 'SolicitudesController@createSolicitud'
]);
Route::post('solicitud', [
    'as' => 'saveSolicitud', 'uses' => 'SolicitudesController@SaveSolicitud'
]);