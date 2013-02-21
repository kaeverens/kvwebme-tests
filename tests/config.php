<?php

/**
	* database settings
	* these should be for the root account, to allow creation of test databases
	*/
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='kvwebmetest'; // create this if it doesn't exist!

/**
	* address of the webserver set up for running the test WebME instance in
	*/
$test_env_uri='http://kvwebmerun/';
$run_dir=realpath(dirname(__FILE__).'/run');

// { email settings
$emailSettings=array(
	'admin'=>array(
		'server'   => 'mail.kvsites.ie',
		'username' => 'kvwebmeAdmin@kvsites.ie',
		'password' => 'kvwebmeAdminPass'
	),
	'user'=>array(
		'server'    => 'mail.kvsites.ie',
		'username'  => 'kvwebmeUser@kvsites.ie',
		'password'  => 'kvwebmeUserPass'
	)
);
// }
