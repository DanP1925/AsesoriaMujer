<?php

Route::get('/', 'OrganizacionController@index');
Route::get('/servicios/','ServicioController@index');
Route::get('/organizaciones/{organizacion}', 'OrganizacionController@show');
