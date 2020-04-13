<?php
 
/**
  * User App Routes
  */
 $userRouteOptions = [
	'prefix' => config('qh-support-tickets.url_prefix.user-app')
];
Route::group($userRouteOptions, function () {
     
    Route::get('', 'UserAppController@index');
    
}); 



 /**
  * Admin Panel Routes
  */
 $adminRoutesOptions = [
	'prefix' 	=> config('qh-support-tickets.url_prefix.admin-panel'), 
	'middleware'=> ['web', 'auth:' . config('qh-support-tickets.auth_guard.admin-panel') ]
];
Route::group( $adminRoutesOptions, function () {
     
    Route::get('', 'AdminPanel\AdminPanelController@dashboard');

});