<?php

//echo "RUNNING (". __FILE__ .")!!!!\n";

// set the timezone to avoid spurious errors from PHP
date_default_timezone_set("America/Chicago");

if(file_exists(__DIR__ .'/../vendor/autoload.php')) {
	require_once(__DIR__ .'/../vendor/autoload.php');
}
else {
	trigger_error("vendor autoloader not found, unit tests will probably fail -- try running 'composer update'");
}

if (!defined('PASSWORD_DEFAULT')) {
    define('PASSWORD_BCRYPT', 1);
    define('PASSWORD_DEFAULT', PASSWORD_BCRYPT);
}

define('UNITTEST__LOCKFILE', __DIR__ .'/files/rw');

