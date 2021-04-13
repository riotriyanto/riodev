<?php 
	/**
	 * 
	 */
	class Contact extends RTO_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->smarty     = new Smarty();
			$this->smarty->setTemplateDir('views/template/template_front/'.FRONT_THEME.'/pages');
			$this->smarty->setCompileDir('views/templates_c');
		}
		public function index()
		{
			$data = array(
					'title' => 'Contact Exara Media'
			);
			$this->smarty->assign('data', $this->db_getPage());
			$view = $this->smarty->fetch('home.tpl');
			$this->view->renderFront($view, $data);
		}

		public function db_getPage()
		{
			$qry = "select * from pages where id_page = 3";
			return $this->db->get_single_result($qry);
		}
	}
?>