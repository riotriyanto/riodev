<?php
	/**
	 * 
	 */
	class PageStatis extends RTO_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->smarty     = new Smarty();
			$this->smarty->setTemplateDir('views/template/template_back/'.THEME.'/pages');
			$this->smarty->setCompileDir('views/templates_c');
		}

		public function index()
		{
			$data['title'] = 'Managemen Halaman Statis';
			$this->smarty->assign('url', ROOTDIR.'rtoadmin/pageStatis');
			$this->smarty->assign('data', $this->db_getPages());
			$view = $this->smarty->fetch('pageStatis.tpl');
			$this->view->renderBack($view, $data);
		}

		public function edit($id='')
		{
			if (!$id) {
				redirect(ROOTDIR.'/rtoadmin');
			}
			if (!empty($_POST)) {
				$data = array(
						'judul' => $this->db->escape_str(anti_injeksi($_POST['nama'])),
						'isi' => $_POST['isi']
					);
				try {
					$where = array(
						'id_page' => htmlspecialchars($id)
					);
					$this->db->do_update( 'pages', $data, $where, 1 );
					$response = array(
						'status' => true,
						'pesan' => 'Berhasil menyimpan',
						'link' => ROOTDIR.'rtoadmin/pageStatis'
					);
	        	} catch (PDOException $e) {
	        		$response = array(
						'status' => false,
						'pesan' => 'Gagal menyimpan'
					);
	        	}
	        	echo json_encode($response);die();
			}else{
				$data['title'] = 'Managemen Halaman Statis';
				$this->smarty->assign('url', ROOTDIR.'rtoadmin/pageStatis/edit/'.$id);
				$this->smarty->assign('rootdir', ROOTDIR);
				$this->smarty->assign('theme_path', ROOTDIR.'views/template/template_back/'.THEME); 
				$this->smarty->assign('data', $this->db_getPage($id));
				$view = $this->smarty->fetch('edit.tpl');
				$this->view->renderBack($view, $data);
			}
		}

		public function db_getPages($id='')
		{
			$qry = "SELECT * FROM pages ORDER BY id_page DESC";
			return $this->db->get_results($qry);
		}

		public function db_getPage($id)
		{
			$qry = "SELECT * FROM pages WHERE id_page = '{$id}' ORDER BY id_page DESC";
			return $this->db->get_single_result($qry);
		}
	}
?>