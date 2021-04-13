<?php
	/**
	 * 
	 */
	class Projek extends RTO_Controller
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
					'title' => 'Manajemen Projek',
			);
			$this->smarty->assign('projek', $this->db_projek());


			$this->smarty->assign('url', ROOTDIR.'rtoadmin/projek');
			$this->smarty->assign('rootdir', ROOTDIR);
			$this->smarty->assign('datauser', $this->getdatauser());
			$view = $this->smarty->fetch('projek/projek.tpl');
			$this->view->renderBack($view, $data);
		}
		public function db_projek($value=false)
		{
			if ($value) {
				$qry = "SELECT * from projek where id_projek=$value";
			}else{
				$qry = "SELECT * from projek";
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
					$gambar = $this->upload_files($_FILES, 'foto', 'projek');
					$data['gambar'] = $gambar;
				}
				try {
					$this->db->do_insert( 'projek', $data, 1 );
					$response = array(
						'status' => true,
						'pesan' => 'Berhasil menyimpan',
						'link' => ROOTDIR.'rtoadmin/projek'
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
					'title' => 'Manajemen Projek',
			);

			$this->smarty->assign('url', ROOTDIR.'rtoadmin/projek');
			$this->smarty->assign('rootdir', ROOTDIR);
			$this->smarty->assign('datauser', $this->getdatauser());
			$view = $this->smarty->fetch('projek/tambah.tpl');
			$this->view->renderBack($view, $data);
			}
		}

		public function delete($id_slide)
		{
			//delete file
			$data = $this->db_projek($id_slide);
			// d($data);
			$gambar = $data[0]['gambar'];
			if ($gambar) {
				if (file_exists("views/assets/projek/".$this->db->escape_str(anti_injeksi($gambar)))) {
					unlink("views/assets/projek/".$this->db->escape_str(anti_injeksi($gambar)));
				}
			}
			$where = array("id_projek"=>$id_slide);
			try {
					$this->db->do_delete( 'projek', $where, 1 );
					$response = array(
						'status' => true,
						'pesan' => 'Berhasil menghapus',
						'link' => ROOTDIR.'rtoadmin/projek'
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
					$gambar = $this->upload_files($_FILES, 'foto', 'projek');
					if ($gambar) {
						if (file_exists("views/assets/projek/".$this->db->escape_str(anti_injeksi($_POST['logo_lama'])))) {
							unlink("views/assets/projek/".$this->db->escape_str(anti_injeksi($_POST['logo_lama'])));
						}
						$data['gambar'] = $gambar;
					}
				}
				try {
					$id_slide = $this->db->escape_str(anti_injeksi($_POST['id_projek']));
				// d($id_slide);
					$where = array("id_projek"=>$id_slide);
					$this->db->do_update( 'projek', $data, $where, 1 );
					$response = array(
						'status' => true,
						'pesan' => 'Berhasil menyimpan',
						'link' => ROOTDIR.'rtoadmin/projek'
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
						'title' => 'Manajemen Projek',
				);
				$this->smarty->assign('projek', $this->db_projek($id_slide));

				$this->smarty->assign('url', ROOTDIR.'rtoadmin/projek');
				$this->smarty->assign('rootdir', ROOTDIR);
				$this->smarty->assign('datauser', $this->getdatauser());
				$view = $this->smarty->fetch('projek/edit.tpl');
				$this->view->renderBack($view, $data);
			}
		}
	}
?>