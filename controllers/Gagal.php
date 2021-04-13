<?php
	class Gagal extends RTO_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			echo "halaman tidak ditemukan!";
			// redirect(ROOTDIR);
		}
	}
?>