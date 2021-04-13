<?php
/* Smarty version 3.1.34-dev-7, created on 2021-04-13 06:30:24
  from 'C:\xampp\htdocs\rto_base\views\template\template_back\lte\pages\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60751e6087bac1_83023699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '091b33044027726c0a7fcb58a09767bdccd9bf03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_base\\views\\template\\template_back\\lte\\pages\\profil.tpl',
      1 => 1616203350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60751e6087bac1_83023699 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="aplikasi" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['username'];?>
" disabled="">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" value="">
	</div>
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['nama_lengkap'];?>
">
	</div>
	<div class="form-group">
		<label>NO. Hp</label>
		<input type="text" name="no_hp" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['no_hp'];?>
">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['email'];?>
">
	</div>
	<div class="form-group">
		<label>Facebook</label>
		<input type="text" name="fb" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['fb'];?>
">
	</div>
	<div class="form-group">
		<label>Twitter</label>
		<input type="text" name="tw" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['tw'];?>
">
	</div>
	<div class="form-group">
		<label>Instagram</label>
		<input type="text" name="ig" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['ig'];?>
">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" name="foto[]" class="form-control">
		<!-- <input type="file" name="p" class="form-control"> -->
		<input type="hidden" name="logo_lama" value="<?php echo $_smarty_tpl->tpl_vars['datauser']->value['foto'];?>
">
		<img width="200" src="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
views/assets/user/<?php echo $_smarty_tpl->tpl_vars['datauser']->value['foto'];?>
">
	</div>
	<button type="submit" id="btn_update" class="btn btn-primary">Simpan</button>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	$("#aplikasi").submit(function(e){
	    var formData = new FormData(this);

	    $.ajax({
	        url: window.location.href,
	        type: 'POST',
	        data:  formData,
	        mimeType:"multipart/form-data",
	        dataType:"json",
	        contentType: false,
	        cache: false,
	        processData:false,
	        xhr: function () {
	        var xhr = new window.XMLHttpRequest();
	            xhr.upload.addEventListener("progress", function (evt) {
	                if (evt.lengthComputable) {
	                    var percentComplete = evt.loaded / evt.total;
	                    percentComplete = parseInt(percentComplete * 100);
	                    $("#btn_update").html('<span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> '+percentComplete + ' %'+' Loading...');
	                    $("#btn_update").addClass('disabled');
	                }
	            }, false);
	            return xhr;
	        },
	        success: function(data)
	        {
	        	console.log(data)
	            if (data.status) {
	                Swal.fire({
			              type: 'success',
			              title: data.pesan,
			              showConfirmButton: false,
			              timer: 1500
			            })
	                window.setTimeout(function () {
	                    location.href = data.link;
	                }, 1000);
	            }
	            else{ 
	                Swal.fire({
			              type: 'error',
			              title: data.pesan,
			              showConfirmButton: false,
			              timer: 1500
			            })
	            };  
	            $("#btn_update").html('<i class="fa fa-save"></i> Simpan');
	            $("#btn_update").removeClass('disabled');          
	        }          
	   });
	    e.preventDefault();
	    // e.unbind();
	});
<?php echo '</script'; ?>
><?php }
}
