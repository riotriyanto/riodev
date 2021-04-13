<?php
	/**
	 * 
	 */
	class AppClass
	{
		
		function __construct()
		{
			session_start();
			$url = @$_GET['url'];
			$url = rtrim($url, '/');
			$url = explode('/', $url);

			if (empty($url[0])) {
				$url[0] = "index";
			}

			if ($url[0] == 'logout') {
				session_destroy();
				redirect(ROOTDIR.'rtoadmin');
			}

			if ($url[0] == 'rtoadmin') {
				$url[0] = "login";
				if (!@$_SESSION['login']) {
					$file = "controllers/login/" . ucfirst($url[0]) .".php";
					if (file_exists($file)) {
						require $file;
						$controller = new $url[0];
						$controller->index();
					}else{
						require "controllers/Gagal.php";
						$controller = new Gagal();
						return false;
					}
					$controller = new $url[0];
				}else{
					if (empty($url[1])) {
						$url[1] = "index";
					}
					$file = "controllers/admin/" . ucfirst($url[1]) .".php";
					if (file_exists($file)) {
						require $file;
					}else{
						require "controllers/Gagal.php";
						$controller = new Gagal();
						return false;
					}
					$controller = new $url[1];

					if (!empty($url[2])) {
						if (method_exists($controller, $url[2])) {
							if (empty($url[3])) {
								$controller->{$url[2]}();
							}
							if (!empty($url[3])) {
								d($controller->{$url[2]}($url[3]));
								$controller->{$url[2]}($url[3]);
							}
							if (!empty($url[4])) {
								$controller->{$url[2]}($url[3],$url[4]);
							}
							if (!empty($url[5])) {
								$controller->{$url[2]}($url[3],$url[4],$url[5]);
							}
						}else{
							require "controllers/Gagal.php";
							$controller = new Gagal();
							return false;
						}
					}else{
						$controller->index();
					}
				}
				
			}elseif($url[0] == 'filemanager'){

			}else{
				$file = "controllers/" . ucfirst($url[0]) .".php";
				if (file_exists($file)) {
					require $file;
				}else{
					require "controllers/Gagal.php";
					$controller = new Gagal();
					return false;
				}
				$controller = new $url[0];


				if (!empty($url[1])) {
					if (method_exists($controller, $url[1])) {
						$controller->{$url[1]}();
						if (!empty($url[2])) {
							$controller->{$url[1]}($url[2]);
						}
						if (!empty($url[3])) {
							$controller->{$url[1]}($url[2],$url[3]);
						}
						if (!empty($url[4])) {
							$controller->{$url[1]}($url[2],$url[3],$url[4]);
						}
					}else{
						require "controllers/Gagal.php";
						$controller = new Gagal();
						return false;
					}
				}else{
					$controller->index();
				}
			}

			
		}
	}
?>