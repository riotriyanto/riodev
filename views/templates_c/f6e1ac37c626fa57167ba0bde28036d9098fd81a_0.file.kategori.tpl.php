<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-20 02:33:46
  from 'C:\xampp\htdocs\rto_base\views\template\template_back\lte\pages\kategori.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_605550fa8afa03_32473313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6e1ac37c626fa57167ba0bde28036d9098fd81a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_base\\views\\template\\template_back\\lte\\pages\\kategori.tpl',
      1 => 1616203350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605550fa8afa03_32473313 (Smarty_Internal_Template $_smarty_tpl) {
?><button class="btn btn-success" onclick="form_modal()"><i class="fa fa-plus"></i> Tambah</button><br>
<table id="DataTable" class="display table table-striped" style="width:100%">
<thead>
    <tr>
        <th class="text-center" width="10">NO</th>
        <th class="text-center">Urai</th>
        <th class="text-center" width="5%">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php $_smarty_tpl->_assignInScope('no', 1);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datakategori']->value, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['no']->value++;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value['urai_kategori_berita'];?>
</td>
            <td>
                <a title="Hapus User" onclick='delet("<?php echo $_smarty_tpl->tpl_vars['k']->value["id_kategori_berita"];?>
","<?php echo $_smarty_tpl->tpl_vars['k']->value["urai_kategori_berita"];?>
","<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/delete/<?php echo $_smarty_tpl->tpl_vars['k']->value["id_kategori_berita"];?>
")' class="btn btn-xs btn-danger"><i class="fa fa-edit"></i></a>
            </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="form-modal-title">
    <div class="modal-dialog modal-lg" role="document">
        <form id="multiform_add" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="form-modal-title"><font id="judul_modal"></font></h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal form-label-left">
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Urai</label>
                        <div class="col-md-8 col-sm-9 col-xs-12">
                            <input type="text" id="urai" name="urai" class="form-control" required>
                        </div>
                    </div>
                    
                
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div><?php }
}
