<?php
	/**
	 * 
	 */
	class Slider extends RTO_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->smarty     = new Smarty();
			$this->smarty->setTemplateDir('views/template/template_back/'.THEME.'/pages');
			$this->smarty->setCompileDir('views/templates_c');
		}

		public function index($value='')
		{
			$data = array(
					'title' => 'Manajemen Slider',
			);
			$this->smarty->assign('slider', $this->db_slider());


			$this->smarty->assign('url', ROOTDIR.'rtoadmin/slider');
			$this->smarty->assign('rootdir', ROOTDIR);
			$this->smarty->assign('datauser', $this->getdatauser());
			$view = $this->smarty->fetch('slider/slider.tpl');
			$this->view->renderBack($view, $data);
		}
		public function db_slider($value=false)
		{
			if ($value) {
				$qry = "SELECT * from slider where id_slide=$value";
			}else{
				$qry = "SELECT * from slider";
			}
			return $this->db->get_results($qry);
		}

		public function tambah($value='')
		{
			if (!empty($_POST)) {
				$data = array(
						'judul' => $this->db->escape_str(anti_injeksi($_POST['judul'])),
						'keterangan' => $this->db->escape_str(anti_injeksi($_POST['keterangan'])),
						'aktif' => $this->db->escape_str(anti_injeksi($_POST['aktif'])),
						'urut' => $this->db->escape_str(anti_injeksi($_POST['urut'])),
				);
				if (!empty($_FILES)) {
					$gambar = $this->upload_files($_FILES, 'foto', 'slider');
					$data['gambar'] = $gambar;
				}
				try {
					$this->db->do_insert( 'slider', $data, 1 );
					$response = array(
						'status' => true,
						'pesan' => 'Berhasil menyimpan',
						'link' => ROOTDIR.'rtoadmin/slider'
					);
	        	} catch (PDOException $e) {
	        		$response = array(
						'status' => false,
						'pesan' => 'Gagal menyimpan',
						'error' => $e->getMessage()
					);
	        	}
	        	echo json_encode($response);die();

			}else{
				$data = array(
					'title' => 'Manajemen Slider',
			);

			$this->smarty->assign('url', ROOTDIR.'rtoadmin/slider');
			$this->smarty->assign('rootdir', ROOTDIR);
			$this->smarty->assign('datauser', $this->getdatauser());
			$view = $this->smarty->fetch('slider/tambah.tpl');
			$this->view->renderBack($view, $data);
			}
		}

		public function delete($id_slide)
		{
			//delete file
			$data = $this->db_slider($id_slide);
			// d($data);
			$gambar = $data[0]['gambar'];
			if ($gambar) {
				if (file_exists("views/assets/slider/".$this->db->escape_str(anti_injeksi($gambar)))) {
					unlink("views/assets/slider/".$this->db->escape_str(anti_injeksi($gambar)));
				}
			}
			$where = array("id_slide"=>$id_slide);
			try {
					$this->db->do_delete( 'slider', $where, 1 );
					$response = array(
						'status' => true,
						'pesan' => 'Berhasil menghapus',
						'link' => ROOTDIR.'rtoadmin/slider'
					);
	        	} catch (PDOException $e) {
	        		$response = array(
						'status' => false,
						'pesan' => 'Gagal menghapus',
						'error' => $e->getMessage()
					);
	        	}
	        	echo json_encode($response);die();
		}

		public function edit($id_slide)
		{
			// d($id_slide);
			if (!empty($_POST)) {
				$data = array(
						'judul' => $this->db->escape_str(anti_injeksi($_POST['judul'])),
						'keterangan' => $this->db->escape_str(anti_injeksi($_POST['keterangan'])),
						'aktif' => $this->db->escape_str(anti_injeksi($_POST['aktif'])),
						'urut' => $this->db->escape_str(anti_injeksi($_POST['urut'])),
				);
				if (!empty($_FILES)) {
					$gambar = $this->upload_files($_FILES, 'foto', 'slider');
					if ($gambar) {
						if (file_exists("views/assets/slider/".$this->db->escape_str(anti_injeksi($_POST['logo_lama'])))) {
							unlink("views/assets/slider/".$this->db->escape_str(anti_injeksi($_POST['logo_lama'])));
						}
						$data['gambar'] = $gambar;
					}
				}
				try {
					$id_slide = $this->db->escape_str(anti_injeksi($_POST['id_slide']));
				// d($id_slide);
					$where = array("id_slide"=>$id_slide);
					$this->db->do_update( 'slider', $data, $where, 1 );
					$response = array(
						'status' => true,
						'pesan' => 'Berhasil menyimpan',
						'link' => ROOTDIR.'rtoadmin/slider'
					);
	        	} catch (PDOException $e) {
	        		$response = array(
						'status' => false,
						'pesan' => 'Gagal menyimpan',
						'error' => $e->getMessage()
					);
	        	}
	        	echo json_encode($response);die();

			}else{
				$data = array(
						'title' => 'Manajemen Slider',
				);
				$this->smarty->assign('slider', $this->db_slider($id_slide));

				$this->smarty->assign('url', ROOTDIR.'rtoadmin/slider');
				$this->smarty->assign('rootdir', ROOTDIR);
				$this->smarty->assign('datauser', $this->getdatauser());
				$view = $this->smarty->fetch('slider/edit.tpl');
				$this->view->renderBack($view, $data);
			}
		}
	}
?>