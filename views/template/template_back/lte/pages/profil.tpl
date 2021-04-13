<form id="aplikasi" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" value="{$datauser['username']}" disabled="">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" value="">
	</div>
	<div class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" name="nama_lengkap" class="form-control" value="{$datauser['nama_lengkap']}">
	</div>
	<div class="form-group">
		<label>NO. Hp</label>
		<input type="text" name="no_hp" class="form-control" value="{$datauser['no_hp']}">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" value="{$datauser['email']}">
	</div>
	<div class="form-group">
		<label>Facebook</label>
		<input type="text" name="fb" class="form-control" value="{$datauser['fb']}">
	</div>
	<div class="form-group">
		<label>Twitter</label>
		<input type="text" name="tw" class="form-control" value="{$datauser['tw']}">
	</div>
	<div class="form-group">
		<label>Instagram</label>
		<input type="text" name="ig" class="form-control" value="{$datauser['ig']}">
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" name="foto[]" class="form-control">
		<!-- <input type="file" name="p" class="form-control"> -->
		<input type="hidden" name="logo_lama" value="{$datauser['foto']}">
		<img width="200" src="{$rootdir}views/assets/user/{$datauser['foto']}">
	</div>
	<button type="submit" id="btn_update" class="btn btn-primary">Simpan</button>
</form>
<script type="text/javascript">
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
</script>