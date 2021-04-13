<?php
	function menu()
	{
		$this->db->where('parent', 0);
		  $this->db->order_by('urut', 'ASC');
		  $par_menu = $this->db->get('menus')->result_array();
		  $data = $sub = $kelas = $aktif = $aktif_sub = '';
		  foreach ($par_menu as $par) {
		    // echo $par['nama_menu'];
		    $url =$par['url'];
		    $icon =$par['icon'];
		    $this->db->where('parent', $par['id_menu']);
		    $this->db->order_by('urut', 'ASC');
		    $menu = $this->db->get('menus')->result_array();
		    if ($this->db->get('menus')->num_rows() == 0) {
		        if ($title == $par['nama_menu']) {
		          $kelas ='active'; 
		        }
		        $url =$par['url'];
		        $icon =$par['icon'];
		        $sub='';
		    }elseif($this->db->get('menus')->num_rows() > 0){
		      $sub .= '<ul class="treeview-menu">';
		      foreach ($menu as $m) {
		        if($title == $m['nama_menu']){         
		            $aktif = ' active';
		            $aktif_sub = 'active';
		          }
		        $kelas = 'treeview'.$aktif;
		        $url = base_url().$m['url'];
		        $akses = explode(',', $m['akses']);
		        $a=false;        
		        foreach ($akses as $ak) {
		          if ($this->session->userdata('level') == $ak) {
		            $a=true;
		          }
		        }
		        if ($a) {
		          $sub.= "<li class='".$aktif_sub."'><a href='".base_url().$m['url']."'><i class='fa fa-circle-o'></i> ".$m['nama_menu']."</a></li>";
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
		      if ($this->session->userdata('level') == $ak) {
		            $a=true; 
		          }
		    }
		    if ($a) {
		      $data.='<li class ="'.$kelas.'" ><a href="'.base_url().$url.'"><i class="'.$icon.'"></i> <span>'.$par['nama_menu'].'</span></a>';
		      $data.=$sub;
		      $sub='';
		      $kelas='';
		      $data.='</li>';
		      $aktif = '';
		    }
		  }
		  echo $data;
	}
?>