<form id="aplikasi" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Client</label>
		<input type="text" name="client" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['client']}">
	</div>
	<div class="form-group">
		<label>Nama Aplikasi</label>
		<input type="text" name="nama_app" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['nama_app']}">
	</div>
	<div class="form-group">
		<label>Nama Singkat Aplikasi</label>
		<input type="text" name="nama_singkat_app" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['nama_singkat_app']}">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['alamat']}">
	</div>
	<div class="form-group">
		<label>Telepon</label>
		<input type="text" name="telp" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['telp']}">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['email']}">
	</div>
	<div class="form-group">
		<label>Facebook</label>
		<input type="text" name="fb" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['fb']}">
	</div>
	<div class="form-group">
		<label>Twitter</label>
		<input type="text" name="tw" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['tw']}">
	</div>
	<div class="form-group">
		<label>Instagram</label>
		<input type="text" name="ig" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['ig']}">
	</div>
	<div class="form-group">
		<label>Nama Kepala</label>
		<input type="text" name="nama_kepala" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['nama_kepala']}">
	</div>
	<div class="form-group">
		<label>Nama Sekretaris</label>
		<input type="text" name="nama_sekretaris" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['nama_sekretaris']}">
	</div>
	<div class="form-group">
		<label>Sambutan</label>
		<textarea name="sambutan" class="form-control">{$dataaplikasi['sambutan']}</textarea>
	</div>
	<div class="form-group">
		<label>Lokasi Map</label>
		<input type="text" name="map" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['maps']}">
	</div>
	<div class="form-group">
		<label>Tahun</label>
		<input type="text" name="tahun" class="form-control" placeholder="Nama Client" value="{$dataaplikasi['tahun']}">
	</div>
	<div class="form-group">
		<label>Logo</label>
		<input type="file" name="foto[]" class="form-control">
		<!-- <input type="file" name="p" class="form-control"> -->
		<input type="hidden" name="logo_lama" value="{$dataaplikasi['gambar']}">
		<img width="200" src="{$rootdir}/views/assets/aplikasi/{$dataaplikasi['gambar']}">
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