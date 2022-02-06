<?php
//dependency import
require 'properties.php';
require 'lib/Slim/Slim.php';
require 'security/Security.php';

//init Slim Framework
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->add(new \Security($app));
require 'security/Login.php';
require 'security/ManageUser.php';

//resources
	//db ag_db
		require('./resource/ag_db/custom/UserCustom.php');
		require('./resource/ag_db/User.php');
		require('./resource/ag_db/custom/knzCustom.php');
		require('./resource/ag_db/knz.php');
	

$app->run();


?>
