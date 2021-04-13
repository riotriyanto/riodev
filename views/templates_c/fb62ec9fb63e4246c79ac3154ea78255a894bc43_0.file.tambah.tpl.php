<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-13 06:51:40
  from 'C:\xampp\htdocs\rto_base\views\template\template_back\lte\pages\slider\tambah.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6075235cc5d781_74020649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb62ec9fb63e4246c79ac3154ea78255a894bc43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_base\\views\\template\\template_back\\lte\\pages\\slider\\tambah.tpl',
      1 => 1618289481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6075235cc5d781_74020649 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="multiform_add">
	<div class="form-group">
		<label>Judul</label>
		<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control" required=""></textarea>
	</div>
	<div class="form-group">
		<label>Aktif</label>
		<select name="aktif" class="form-control" required="">
			<option value="1">Aktif</option>
			<option value="0">Tidak Aktif</option>
		</select>
	</div>
	<div class="form-group">
		<label>Urut</label>
		<input type="text" name="urut" class="form-control" placeholder="Masukkan urut" required>
	</div>
	<div class="form-group">
		<label>Gambar</label>
		<input type="file" name="foto[]" class="form-control">
	</div>
	<div class="form-grup">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form><?php }
}
