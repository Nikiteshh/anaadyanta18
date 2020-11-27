<?php

	// connection credentials
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = 'root';
	$db_name = 'anaad6c3_fest';

	//create mysqli object
	$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

	//error handler
	if($mysqli->connect_error){
		printf("Connect Failed: %sn\n", $mysqli->connect_error);
	}