<?php
// Start Session
session_start();

// Include Config
require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');
require('controllers/admin.php');
require('controllers/shops.php');


require('models/home.php');
require('models/share.php');
require('models/user.php');
require('models/admin.php');
require('models/products.php');
require('models/shops.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}
