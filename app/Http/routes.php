<?php

Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
	Route::resource('usuario', 'UsuarioController');
	Route::get('reportes/{id}','AsistenciaController@reportes');
	Route::get('reporte/{id}','AsistenciaController@reporteVer');
	
	Route::group(['middleware' => 'admin'], function(){

			Route::get('usuario/{id}/delete',['as' => 'admin.usuario.eliminar','uses'=>'UsuarioController@destroy']);
			Route::get('admin/usuario/{id}/edit', 'UsuarioController@edit' );					
	});
	Route::get('asistencia/verificar/{id}', [

	'as' 	=>	'asistencia.verificar', 
	'uses'	=>	'AsistenciaController@verificar'
	]);	

	Route::get('asistencia/fin/{dia}/{id}', [

	'as' 	=>	'asistencia.fin', 
	'uses'	=>	'AsistenciaController@finAsistencia'
	]);

	Route::post('asistencia/reporte', [

	'as' 	=>	'asistencia.reporte', 
	'uses'	=>	'AsistenciaController@reporte'
	]);	

});

Route::get('api/alumnos','UsuarioController@usuarios');
Route::get('api/asistencia/{id}','AsistenciaController@asistencias');
Route::get('api/reportes/{id}','AsistenciaController@reportesId');

Route::post('admin/usuario',[

	'as' 	=>	'admin.usuario.store', 
	'uses'	=>	'UsuarioController@store'
]);

Route::get('api/email','UsuarioController@email');

Route::auth();

Route::get('/', ['as' 	=>	'inicio', 
	'uses'	=>	'HomeController@index'
]);