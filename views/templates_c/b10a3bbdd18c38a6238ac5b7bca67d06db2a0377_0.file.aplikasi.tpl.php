<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-03 14:21:23
  from '/var/www/html/rto_fm/views/template/template_back/lte/pages/aplikasi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5e0573719e63_81629502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b10a3bbdd18c38a6238ac5b7bca67d06db2a0377' => 
    array (
      0 => '/var/www/html/rto_fm/views/template/template_back/lte/pages/aplikasi.tpl',
      1 => 1581425602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5e0573719e63_81629502 (Smarty_Internal_Template $_smarty_tpl) {
?><form id="aplikasi" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Client</label>
		<input type="text" name="client" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['client'];?>
">
	</div>
	<div class="form-group">
		<label>Nama Aplikasi</label>
		<input type="text" name="nama_app" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['nama_app'];?>
">
	</div>
	<div class="form-group">
		<label>Nama Singkat Aplikasi</label>
		<input type="text" name="nama_singkat_app" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['nama_singkat_app'];?>
">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['alamat'];?>
">
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input type="text" name="telp" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['telp'];?>
">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['email'];?>
">
	</div>
	<div class="form-group">
		<label>Facebook</label>
		<input type="text" name="fb" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['fb'];?>
">
	</div>
	<div class="form-group">
		<label>Twitter</label>
		<input type="text" name="tw" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['tw'];?>
">
	</div>
	<div class="form-group">
		<label>Instagram</label>
		<input type="text" name="ig" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['ig'];?>
">
	</div>
	<div class="form-group">
		<label>Nama Kepala</label>
		<input type="text" name="nama_kepala" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['nama_kepala'];?>
">
	</div>
	<div class="form-group">
		<label>Nama Sekretaris</label>
		<input type="text" name="nama_sekretaris" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['nama_sekretaris'];?>
">
	</div>
	<div class="form-group">
		<label>Sambutan</label>
		<textarea name="sambutan" class="form-control"><?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['sambutan'];?>
</textarea>
	</div>
	<div class="form-group">
		<label>Lokasi Map</label>
		<input type="text" name="map" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['maps'];?>
">
	</div>
	<div class="form-group">
		<label>Tahun</label>
		<input type="text" name="tahun" class="form-control" placeholder="Nama Client" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['tahun'];?>
">
	</div>
	<div class="form-group">
		<label>Logo</label>
		<input type="file" name="foto[]" class="form-control">
		<!-- <input type="file" name="p" class="form-control"> -->
		<input type="hidden" name="logo_lama" value="<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['gambar'];?>
">
		<img width="200" src="<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
/views/assets/aplikasi/<?php echo $_smarty_tpl->tpl_vars['dataaplikasi']->value['gambar'];?>
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
