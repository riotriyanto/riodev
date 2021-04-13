<form id="multiform_add">
	<div class="form-group">
		<label>Judul</label>
		<input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" value="{$slider[0]['judul']}" required>
		<input type="hidden" name="id_slide" class="form-control" placeholder="Masukkan Judul" value="{$slider[0]['id_slide']}" required>
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control" required="">{$slider[0]['keterangan']}</textarea>
	</div>
	<div class="form-group">
		<label>Aktif</label>
		<select name="aktif" class="form-control" required="">
			<option value="0">Tidak Aktif</option>
			<option value="1" {{if $slider[0]['aktif'] == 1}} selected {{/if}} >Aktif</option>
		</select>
	</div>
	<div class="form-group">
		<label>Urut</label>
		<input type="text" name="urut" class="form-control" value="{$slider[0]['urut']}" required>
	</div>
	<div class="form-group">
		<label>Gambar</label>
		<input type="file" name="foto[]" class="form-control">
		<input type="hidden" name="logo_lama" value="{$slider[0]['gambar']}">
		<img width="200" src="{$rootdir}/views/assets/slider/{$slider[0]['gambar']}">
	</div>
	<div class="form-grup">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>