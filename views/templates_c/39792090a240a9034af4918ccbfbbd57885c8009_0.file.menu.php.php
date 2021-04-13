<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 09:32:45
  from 'C:\xampp\htdocs\rto_fm\views\template\template_back\lte\menu.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4266ad9fd307_78689265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39792090a240a9034af4918ccbfbbd57885c8009' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_fm\\views\\template\\template_back\\lte\\menu.php',
      1 => 1581409950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4266ad9fd307_78689265 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
  ';?>
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
<?php echo '?>';
}
}
