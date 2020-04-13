<?php

/*
 * You can place your custom package configuration in here.
 */
return [
   
    /* 
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
     */ 
    'app_name' => env('QH_TICKETS_APP_NAME',  env('APP_NAME','QH Tickets') ),

    /**
     * Since this package may be used with other app that may have their own
     * url structure set already, the app may have to prefix all its urls 
     * to prevent conflicts with the url of the parent app.
     */
    'url_prefix' => [
    	/** User App url prefix */
    	'user-app' 		=> env('QH_TICKETS_PKG_USER_APP_URL_PREFIX', 'support'),
    	/** Admin Panel url prefix */
    	'admin-panel' 	=> env('QH_TICKETS_PKG_ADMIN_PANEL_URL_PREFIX', 'qh-tickets-admin')
    ],
     

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for both the user-app and 
    | the admin panel. check parent app for all supported guards. 
    |
     */
    'auth_guard'    => [

    	'user-app'		=> 	env('USER_APP_AUTH_GUARD', 'web'),

    	'admin-panel'	=> 	env('ADMIN_PANEL_AUTH_GUARD', 'staff')
    ]
];