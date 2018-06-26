<?php

require_once('autoload.php');
//"recordar mover esto"
	setcookie('id', '', time() -10);
	session_destroy();
	header('location: index.php');
	exit;
