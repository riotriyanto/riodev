<?php
/* Smarty version 3.1.34-dev-7, created on 2021-03-20 02:38:09
  from 'C:\xampp\htdocs\rto_base\views\template\template_back\lte\pages\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_605552019aa863_16136450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3891faa32b1de7ecc8f6d23685a071b85ba8fec6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\rto_base\\views\\template\\template_back\\lte\\pages\\edit.tpl',
      1 => 1616203350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_605552019aa863_16136450 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type='text/javascript'> 
	tinymce.init({
	    selector: "textarea",theme: "modern",height: 300,
	    plugins: [
	         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
	         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
	         "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
	   ],
	   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
	   toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
	   image_advtab: true ,
	   
	   external_filemanager_path: "<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
filemanager/",
	   filemanager_title:"Responsive Filemanager" ,
	   external_plugins: { "filemanager" :  "<?php echo $_smarty_tpl->tpl_vars['rootdir']->value;?>
filemanager/plugin.min.js"}
	});
<?php echo '</script'; ?>
>
<form>
	<div class="form-group">
		<label>Judul</label>
		<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['judul'];?>
" required>
	</div>
	<div class="form-grup">
		<label>Isi Halaman</label>
		<textarea name="isi" class="mce"><?php echo $_smarty_tpl->tpl_vars['data']->value['isi'];?>
</textarea>
	</div><br>
	<div class="form-grup">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$('form').submit(function(e) {
	      e.preventDefault();
	      var values = $(this).serialize();
	      $.ajax({
	      	url : '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
',
	      	type : 'post',
	      	dataType : 'json',
	      	data : values,
	      	success : function(data){
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
	      		}else{
	      			Swal.fire({
		              type: 'error',
		              title: data.pesan,
		              showConfirmButton: false,
		              timer: 1500
		            })
	      		}
	      	},
	      	error : function(err){
	      		console.log("e")		      		
	      	}
	      })
	    })
	})
<?php echo '</script'; ?>
><?php }
}
