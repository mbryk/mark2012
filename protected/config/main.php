<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$configRoot=dirname(__FILE__);
$params = require($configRoot.'/params.php');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Mark2012',

	// preloading 'log' component
	'preload'=>array('log', 'bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.*'
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'klapper',
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths'=>array(
                            'bootstrap.gii', // since 0.9.1
                            ),                    
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                                //'page/<view>'=>array('site/page'),
                                'programmer'=>'me/programmer',
                                'engineer'=>'me/engineer',
                                'music'=>'me/musician',
                                'play'=>'me/athlete',
                                'think'=>'me/thinker',
                                'stone'=>'me/stoner',                            
			),
                        'showScriptName'=>false,
		),
		
		'db'=>array(
                    'connectionString' => "mysql:host={$params['db.host']};dbname={$params['db.name']}",
                            'username' => $params['db.username'],
                            'password' => $params['db.password'],
                            'charset' => 'utf8',
                            'enableParamLogging' => YII_DEBUG,
                            'emulatePrepare'=>true,
                ),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
                'bootstrap'=>array(
                    'class'=>'application.extensions.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
                ),                            
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'mark@markbryk.in',
                'art-logo-name'=>'Mark Bryk',
                'art-logo-text'=>'Unveiled'
	),
);