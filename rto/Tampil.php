<?php
	/**
	 * 
	 */
	class Tampil
	{
		
		function __construct()
		{
			$this->smarty     = new Smarty();
			$this->db = new Database();
		}

		public function renderFront($value='', $data)
		{
				$this->smarty->assign('content', $value);
				$this->smarty->assign('data', $data);
				$this->smarty->assign('basedir', ROOTDIR);
				$this->smarty->assign('rootdir', ROOTDIR);
				$this->smarty->assign('dataaplikasi', $this->dataAplikasi());
				$this->smarty->assign('theme_path', ROOTDIR.'views/template/template_front/'.FRONT_THEME); 
				$this->smarty->setTemplateDir('views/template/template_front/'.FRONT_THEME);
		        $this->smarty->setCompileDir('views/templates_c');
		        $this->smarty->display('index.tpl');
		}

		public function renderLogin($url)
		{
				// $this->smarty->assign('content', $value);
				$this->smarty->assign('url', $url);
				$this->smarty->assign('basedir', ROOTDIR);
				$this->smarty->assign('rootdir', ROOTDIR);
				$this->smarty->assign('theme_path', ROOTDIR.'views/template/login/'.LOGIN_THEME);
				$this->smarty->assign('dataaplikasi', $this->dataAplikasi());
				$this->smarty->setTemplateDir('views/template/login/'.LOGIN_THEME);
		        $this->smarty->setCompileDir('views/templates_c');
		        $this->smarty->display('index.tpl');
		}

		public function renderBack($value='', $data='')
		{
			// d($this->menuLTE('home'));
				$this->smarty->assign('content', $value);
				$this->smarty->assign('url', ROOTDIR);
				$this->smarty->assign('data', $data);
				$this->smarty->assign('data_user', $this->getdatauser());
				$this->smarty->assign('data_aplikasi', $this->dataAplikasi());
				$this->smarty->assign('menu', $this->menuLte($data['title']));
				$this->smarty->assign('basedir', ROOTDIR);
				$this->smarty->assign('theme_path', ROOTDIR.'views/template/template_back/'.THEME); 
				$this->smarty->setTemplateDir('views/template/template_back/'.THEME);
		        $this->smarty->setCompileDir('views/templates_c');
		        $this->smarty->display('index.tpl');
		}

		//data user
		public function getdatauser()
		{
			$qry = "SELECT * FROM users WHERE id_user = '{$_SESSION['id_user']}' ";
			return $this->db->get_single_result($qry);
		}
		// dataaplikasi
		public function dataAplikasi()
		{
			$qry = "SELECT * FROM setting";
			return $this->db->get_single_result($qry);
		}

		// menu lte
		public function menuLte($title)
		{
			// $_SESSION['level'] =5;
			  $qry = "SELECT * FROM menus WHERE parent =0 ORDER BY urut ";
			  $par_menu = $this->db->get_results($qry);
			  $data = $sub = $kelas = $aktif = $aktif_sub = '';
			  foreach ($par_menu as $par) {
			    // echo $par['nama_menu'];
			    $url =$par['url'];
			    $icon =$par['icon'];
			    $qry = "SELECT * FROM menus WHERE parent ='{$par['id_menu']}' ORDER BY urut ";
			    $menu = $this->db->get_results($qry);
			    if ($this->db->get_num_rows($qry) == 0) {
			        if ($title == $par['nama_menu']) {
			          $kelas ='active'; 
			        }
			        $url =$par['url'];
			        $icon =$par['icon'];
			        $sub='';
			    }elseif($this->db->get_num_rows($qry) > 0){
			      $sub .= '<ul class="treeview-menu">';
			      foreach ($menu as $m) {
			        if($title == $m['nama_menu']){         
			            $aktif = ' active';
			            $aktif_sub = 'active';
			          }
			        $kelas = 'treeview'.$aktif;
			        $url = ROOTDIR.$m['url'];
			        $akses = explode(',', $m['akses']);
			        $a=false;        
			        foreach ($akses as $ak) {
			          if ($_SESSION['level'] == $ak) {
			            $a=true;
			          }
			        }
			        if ($a) {
			          $sub.= "<li class='".$aktif_sub."'><a href='".ROOTDIR.$m['url']."'><i class='fa fa-circle-o'></i> ".$m['nama_menu']."</a></li>";
			        }
			        $aktif_sub = '';
			      }
			      $sub.='</ul>';
			    }else{
			      $sub='';
			    }
			    $akses = explode(',', $par['akses']);
			    $a=false;
			    foreach ($akses as $ak) {
			      if ($_SESSION['level'] == $ak) {
			            $a=true; 
			          }
			    }
			    if ($a) {
			      $data.='<li class ="'.$kelas.'" ><a href="'.ROOTDIR.$url.'"><i class="'.$icon.'"></i> <span>'.$par['nama_menu'].'</span></a>';
			      $data.=$sub;
			      $sub='';
			      $kelas='';
			      $data.='</li>';
			      $aktif = '';
			    }
			  }
			  return $data;
		}

	}
?>