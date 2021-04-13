<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-13 07:30:44
  from 'C:\xampp\htdocs\rto_base\views\template\template_back\lte\pages\slider\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60752c84b6c723_81087468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22b748a5eb24254497bc685fc24d49f17b9ef985' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_base\\views\\template\\template_back\\lte\\pages\\slider\\edit.tpl',
      1 => 1618291843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60752c84b6c723_81087468 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="multiform_add">
	<div class="form-group">
		<label>Judul</label>
		<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" value="<?php echo $_smarty_tpl->tpl_vars['slider']->value[0]['judul'];?>
" required>
		<input type="hidden" name="id_slide" class="form-control" placeholder="Masukkan Judul" value="<?php echo $_smarty_tpl->tpl_vars['slider']->value[0]['id_slide'];?>
" required>
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control" required=""><?php echo $_smarty_tpl->tpl_vars['slider']->value[0]['keterangan'];?>
</textarea>
	</div>
	<div class="form-group">
		<label>Aktif</label>
		<select name="aktif" class="form-control" required="">
			<option value="0">Tidak Aktif</option>
			<option value="1" <?php ob_start();
if ($_smarty_tpl->tpl_vars['slider']->value[0]['aktif'] == 1) {
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
 selected <?php ob_start();
}
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
 >Aktif</option>
		</select>
	</div>
	<div class="form-group">
		<label>Urut</label>
		<input type="text" name="urut" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['slider']->value[0]['urut'];?>
" required>
	</div>
	<div class="form-group">
		<label>Gambar</label>
		<input type="file" name="foto[]" class="form-control">
		<input type="hidden" name="logo_lama" value="<?php echo $_smarty_tpl->tpl_vars['slider']->value[0]['gambar'];?>
">
		<img width="200" src="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
/views/assets/slider/<?php echo $_smarty_tpl->tpl_vars['slider']->value[0]['gambar'];?>
">
	</div>
	<div class="form-grup">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form><?php }
}
