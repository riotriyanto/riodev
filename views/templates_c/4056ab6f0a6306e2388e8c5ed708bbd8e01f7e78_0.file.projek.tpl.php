<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-13 08:57:41
  from 'C:\xampp\htdocs\rto_base\views\template\template_back\lte\pages\projek\projek.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_607540e54b5707_31888899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4056ab6f0a6306e2388e8c5ed708bbd8e01f7e78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_base\\views\\template\\template_back\\lte\\pages\\projek\\projek.tpl',
      1 => 1618297059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607540e54b5707_31888899 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
/rtoadmin/projek/tambah"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projek']->value, 's');
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
/views/assets/projek/<?php echo $_smarty_tpl->tpl_vars['s']->value['gambar'];?>
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
/rtoadmin/projek/edit/<?php echo $_smarty_tpl->tpl_vars['s']->value['id_projek'];?>
" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                <a title="Hapus Slider" onclick='delet("<?php echo $_smarty_tpl->tpl_vars['s']->value["id_projek"];?>
","<?php echo $_smarty_tpl->tpl_vars['s']->value["id_projek"];?>
","<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/delete/<?php echo $_smarty_tpl->tpl_vars['s']->value["id_projek"];?>
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
