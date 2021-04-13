<?php
	/**
	 * 
	 */
	class Index extends RTO_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			// $this->tampil = new Tampil();
			// $this->smarty     = new Smarty();
			// $this->smarty->setTemplateDir('views/template/template_front/'.FRONT_THEME.'/pages');
			// $this->smarty->setCompileDir('views/templates_c');
		}

		public function index($value='')
		{
			// session_destroy();
			$data['title'] = 'Dashboard';
			$this->view->renderBack('Selamat datang!', $data);
			// d($_SESSION['login']);
		}
	}
?>