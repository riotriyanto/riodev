<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-13 07:49:09
  from 'C:\xampp\htdocs\rto_base\views\template\template_back\lte\pages\slider\slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_607530d5c5afd8_61241497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b87162e664e80957fc67f8637c3d43d9f6fdfe57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_base\\views\\template\\template_back\\lte\\pages\\slider\\slider.tpl',
      1 => 1618292948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607530d5c5afd8_61241497 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
/rtoadmin/slider/tambah"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
<br><br>
<table id="DataTable" class="display table table-striped" style="width:100%">
<thead>
    <tr>
        <th class="text-center" width="10">NO</th>
        <th class="text-center">Judul</th>
        <th class="text-center">Keterangan</th>
        <th class="text-center">Gambar</th>
        <th class="text-center">Status</th>
        <th class="text-center">Urut</th>
        <th class="text-center" width="5%">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php $_smarty_tpl->_assignInScope('no', 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value, 's');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['s']->value['judul'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['s']->value['keterangan'];?>
</td>
            <td><img style="max-width: 200px;" src="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
/views/assets/slider/<?php echo $_smarty_tpl->tpl_vars['s']->value['gambar'];?>
"></td>
            <td><?php ob_start();
if ($_smarty_tpl->tpl_vars['s']->value['aktif'] == 1) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 <p><a href="" class="text-light bg-success">Aktif</a></p> <?php ob_start();
} else {
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 <p><a href="" class="text-light bg-danger">Tidak Aktif</a></p> <?php ob_start();
}
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['s']->value['urut'];?>
</td>
            <td>
                <a title="Edit Slider" href="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
/rtoadmin/slider/edit/<?php echo $_smarty_tpl->tpl_vars['s']->value['id_slide'];?>
" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                <a title="Hapus Slider" onclick='delet("<?php echo $_smarty_tpl->tpl_vars['s']->value["id_slide"];?>
","<?php echo $_smarty_tpl->tpl_vars['s']->value["id_slide"];?>
","<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/delete/<?php echo $_smarty_tpl->tpl_vars['s']->value["id_slide"];?>
")' class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
