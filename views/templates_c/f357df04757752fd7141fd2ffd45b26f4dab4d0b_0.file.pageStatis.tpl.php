<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 11:24:40
  from 'C:\xampp\htdocs\rto_fm\views\template\template_back\lte\pages\pageStatis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4280e89a7282_05912472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f357df04757752fd7141fd2ffd45b26f4dab4d0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_fm\\views\\template\\template_back\\lte\\pages\\pageStatis.tpl',
      1 => 1581416678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4280e89a7282_05912472 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="DataTable" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th class="text-center" width="10">NO</th>
                <th class="text-center">Judul</th>
                <th class="text-center" width="5%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['page']->value['id_page'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['page']->value['judul'];?>
</td>
                <td class="text-center">
                        <a href='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['page']->value["id_page"];?>
' title="Ubah User" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                        
                        
                        <!-- <a title="Hapus User" onclick='delet("<?php echo $_smarty_tpl->tpl_vars['page']->value["id_page"];?>
","<?php echo $_smarty_tpl->tpl_vars['page']->value["judul"];?>
","<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/rtoadmin/pageStatis/delete/<?php echo $_smarty_tpl->tpl_vars['page']->value["id_page"];?>
")' class="btn btn-xs btn-danger"><i class="fa fa-edit"></i></a> -->
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table><?php }
}
