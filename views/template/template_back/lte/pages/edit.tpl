<script type='text/javascript'> 
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
	   
	   external_filemanager_path: "{$rootdir}filemanager/",
	   filemanager_title:"Responsive Filemanager" ,
	   external_plugins: { "filemanager" :  "{$rootdir}filemanager/plugin.min.js"}
	});
</script>
<form>
	<div class="form-group">
		<label>Judul</label>
		<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" value="{$data['judul']}" required>
	</div>
	<div class="form-grup">
		<label>Isi Halaman</label>
		<textarea name="isi" class="mce">{$data['isi']}</textarea>
	</div><br>
	<div class="form-grup">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$('form').submit(function(e) {
	      e.preventDefault();
	      var values = $(this).serialize();
	      $.ajax({
	      	url : '{$url}',
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
</script>