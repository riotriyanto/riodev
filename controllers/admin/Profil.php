<?php /**
 * 
 */
class Profil extends RTO_Controller
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
		if (!empty($_POST)) {
			$data = array(
					'nama_lengkap' => $this->db->escape_str(anti_injeksi($_POST['nama_lengkap'])),
					'no_hp' => $this->db->escape_str(anti_injeksi($_POST['no_hp'])),
					'email' => $this->db->escape_str(anti_injeksi($_POST['email'])),
					'fb' => $this->db->escape_str(anti_injeksi($_POST['fb'])),
					'tw' => $this->db->escape_str(anti_injeksi($_POST['tw'])),
					'ig' => $this->db->escape_str(anti_injeksi($_POST['ig']))
				);
			if (!empty($_FILES)) {
				$gambar = $this->upload_files($_FILES, 'foto', 'user');
				if ($gambar && $this->db->escape_str(anti_injeksi($_POST['logo_lama'])) != "no-foto.png") {
					if (file_exists("views/assets/user/".$this->db->escape_str(anti_injeksi($_POST['logo_lama'])))) {
						unlink("views/assets/user/".$this->db->escape_str(anti_injeksi($_POST['logo_lama'])));
					}
					$data['foto'] = $gambar;
				}
			}
			if (!empty($_POST['password'])) {
				$pass = anti_injeksi($_POST['password']);
				$password = md5(md5(md5(md5(md5(md5($pass))))).sha1("rto"));
				$data['password'] = $password;
			}
			try {
					$where = array(
						'id_user' => $_SESSION['id_user']
					);
					$this->db->do_update( 'users', $data, $where, 1 );
					$response = array(
						'status' => true,
						'pesan' => 'Berhasil menyimpan',
						'link' => ROOTDIR.'rtoadmin/profil'
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
			$data['title'] = 'Profil';
			$this->smarty->assign('url', ROOTDIR.'rtoadmin/aplikasi');
			$this->smarty->assign('rootdir', ROOTDIR);
			$this->smarty->assign('datauser', $this->getdatauser());
			$view = $this->smarty->fetch('profil.tpl');
			$this->view->renderBack($view, $data);
		}
	}
} ?>