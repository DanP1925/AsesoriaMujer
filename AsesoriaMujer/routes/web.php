<?php

Route::get('/', 'OrganizacionController@index');
Route::get('/servicios/','ServicioController@index');
Route::get('/organizaciones/{organizacion}', 'OrganizacionController@show');
Route::get('/servicios/{servicio}','ServicioController@show');
Route::post('/resenas','ResenaController@store');
