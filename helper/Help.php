<?php /**
 * 
 */
	function d($foo)
	{
		echo '<pre>';
		print_r($foo);
		echo '</pre>';
		exit;
	}

	// function redirect($url, $permanent = false){
	// 	header('Location: ' . $url, true, $permanent ? 301 : 302);
 //    	exit();
	// }

	function redirect($value='')
	{
		header("Location: ".ROOTDIR.$value);
		die();
	}
	
 ?>