<?php
	$dirname = dirname(__FILE__);
	$docroot = str_replace(DIRECTORY_SEPARATOR, '/', $dirname) . '/';
	$rootdir = str_replace('index.php', '', $_SERVER['PHP_SELF']);
	define('DOCROOT',$docroot);
	define('ROOTDIR',$rootdir);

	//TEMPLATE
	define('THEME', 'lte');
	define('LOGIN_THEME', 'login1');
	define('FRONT_THEME', 'prospera');
?>