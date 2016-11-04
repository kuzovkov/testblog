<?php
/**
 * фронт-контроллер
 */

	require_once "../app/autoload.php";
	session_start();
	App::start(Router::route());
	
	


