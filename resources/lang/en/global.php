<?php

return [
	
	'user-management' => [
		'title' => 'Gestión de usuarios',
		'created_at' => 'Tiempo',
		'fields' => [
		],
	],
	
	'permissions' => [
		'title' => 'Permisos',
		'created_at' => 'Tiempo',
		'fields' => [
			'name' => 'Nombre',
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'created_at' => 'Tiempo',
		'fields' => [
			'name' => 'Nombre',
			'permission' => 'Permisos',
		],
	],
	
	'users' => [
		'title' => 'Usuarios',
		'created_at' => 'Tiempo',
		'fields' => [
			'name' => 'Nombre',
			'email' => 'Correo',
			'password' => 'Contraseña',
			'roles' => 'Roles',
			'remember-token' => 'Recordar token',
		],
	],
	'app_create' => 'Crear',
	'app_save' => 'Guardar',
	'app_edit' => 'Editar',
	'app_view' => 'Vista',
	'app_update' => 'Actualizar',
	'app_list' => 'Lista',
	'app_no_entries_in_table' => 'No hay entradas en la tabla',
	'custom_controller_index' => 'Controlador por defecto del index.',
	'app_logout' => 'Salir',
	'app_add_new' => 'Añadir nuevo',
	'app_are_you_sure' => 'Esta seguro?',
	'app_back_to_list' => 'Volver a la lista',
	'app_dashboard' => 'Inicio',
	'app_delete' => 'Borrar',
	'global_title' => 'NIÑO MENSAJERO',
];