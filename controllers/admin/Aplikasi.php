<?php /**
 * 
 */
class Aplikasi extends RTO_Controller
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
		if (!empty($_POST)) {
			// d($_FILES);
			$data = array(
						'client' => $this->db->escape_str(anti_injeksi($_POST['client'])),
						'nama_app' => $this->db->escape_str(anti_injeksi($_POST['nama_app'])),
						'nama_singkat_app' => $this->db->escape_str(anti_injeksi($_POST['nama_singkat_app'])),
						'alamat' => $this->db->escape_str(anti_injeksi($_POST['alamat'])),
						'telp' => $this->db->escape_str(anti_injeksi($_POST['telp'])),
						'email' => $this->db->escape_str(anti_injeksi($_POST['email'])),
						'fb' => $this->db->escape_str(anti_injeksi($_POST['fb'])),
						'tw' => $this->db->escape_str(anti_injeksi($_POST['tw'])),
						'ig' => $this->db->escape_str(anti_injeksi($_POST['ig'])),
						'nama_kepala' => $this->db->escape_str(anti_injeksi($_POST['nama_kepala'])),
						'nama_sekretaris' => $this->db->escape_str(anti_injeksi($_POST['nama_sekretaris'])),
						'sambutan' => $this->db->escape_str(anti_injeksi($_POST['sambutan'])),
						'maps' => $this->db->escape_str(anti_injeksi($_POST['map'])),
						'tahun' => $this->db->escape_str(anti_injeksi($_POST['tahun']))
					);
			if (!empty($_FILES)) {
				$gambar = $this->upload_files($_FILES, 'foto', 'aplikasi');
				if ($gambar) {
					if (file_exists("views/assets/aplikasi/".$this->db->escape_str(anti_injeksi($_POST['logo_lama'])))) {
						unlink("views/assets/aplikasi/".$this->db->escape_str(anti_injeksi($_POST['logo_lama'])));
					}
					$data['gambar'] = $gambar;
				}
			}
			try {
					$where = array(
						'id_setting' => 1
					);
					$this->db->do_update( 'setting', $data, $where, 1 );
					$response = array(
						'status' => true,
						'pesan' => 'Berhasil menyimpan',
						'link' => ROOTDIR.'rtoadmin/aplikasi'
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
			$data['title'] = 'Aplikasi';
			$this->smarty->assign('url', ROOTDIR.'rtoadmin/aplikasi');
			$this->smarty->assign('rootdir', ROOTDIR);
			$this->smarty->assign('dataaplikasi', $this->dataAplikasi());
			$view = $this->smarty->fetch('aplikasi.tpl');
			$this->view->renderBack($view, $data);
		}
	}
} ?>