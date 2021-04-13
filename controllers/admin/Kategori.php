<?php /**
 * 
 */
class Kategori extends RTO_Controller
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
		if (empty($_POST)) {
			$data['title'] = 'Kategori Berita';
			$this->smarty->assign('url', ROOTDIR.'rtoadmin/kategori');
			$this->smarty->assign('rootdir', ROOTDIR);
			$this->smarty->assign('datakategori', $this->db_getKategori());
			$view = $this->smarty->fetch('kategori.tpl');
			$this->view->renderBack($view, $data);
		}else{
			$res = array('status' => 1, 'pesan' => "Berhasil menambah kategori berita", "menu" => "kategori" );
			echo json_encode($res);
		}
	}

	// public function tambah()
	// {
	// 	if (empty($_POST)) {
	// 		$data['title'] = 'Tambah Kategori Berita';
	// 		$this->smarty->assign('url', ROOTDIR.'rtoadmin/kategori');
	// 		$this->smarty->assign('rootdir', ROOTDIR);
	// 		$this->smarty->assign('datakategori', $this->db_getKategori());
	// 		$view = $this->smarty->fetch('kategori_berita/form.tpl');
	// 		$this->view->renderBack($view, $data);
	// 	}else{
	// 		$
			
	// 	}
	// }

	public function delete($id)
	{
		d($id);
	}

	// db
	public function db_getKategori()
	{
		$qry = "SELECT * FROM kategori_berita ORDER BY id_kategori_berita DESC";
		return $this->db->get_results($qry);
	}
} ?>