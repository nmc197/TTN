<?php 
Route::get('backend/login',[
	'uses' => 'Admin\HomeController@getLoginAdmin',
	'as' => 'backend.login'
]);

// Route::post('backend/login',[
// 	'uses' => 'Backend\AuthController@postLogin',
// 	'as' => 'backend.login'
// ]);
// Route::get('backend/logout',[
// 	'uses' => 'Backend\AuthController@logout',
// 	'as' => 'backend.logout'
// ]);

 ?>