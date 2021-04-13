<?php /**
 * 
 */
class Login extends RTO_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->tampil = new Tampil();
		$this->smarty     = new Smarty();
		$this->smarty->setTemplateDir('views/template/login/'.FRONT_THEME.'/pages');
		$this->smarty->setCompileDir('views/templates_c');
	}
	public function index($value='')
	{
		if (!empty($_POST)) {
			$username = anti_injeksi($_POST['username']);
			$pass = anti_injeksi($_POST['password']);
			$password		= md5(md5(md5(md5(md5(md5($pass))))).sha1("rto"));
			$qry = "SELECT * FROM users WHERE username = '{$this->db->escape_str($username)}' AND password = '{$this->db->escape_str($password)}' ";
			if ($this->db->get_num_rows($qry)>0) {
				$respon = array(
					'status' => true,
					'pesan' => 'Login Berhasil'
				);
				$data = $this->db->get_single_result($qry);
				$datauser = array(
						'nama' => $data['nama_lengkap'],
						'foto' => $data['foto']
					);
				// d($data);
				$_SESSION['login'] = true;
				$_SESSION['data_user'] = $data;
				$_SESSION['level'] = $data['level_akses'];
				$_SESSION['id_user'] = $data['id_user'];
			}else{
				$respon = array(
					'status' => false,
					'pesan' => 'Login gagal!'
				);
			}
			echo json_encode($respon);die();
		}else{
			$this->tampil->renderLogin(ROOTDIR.'rtoadmin');
		}
		// d($_POST);
	}
} ?>