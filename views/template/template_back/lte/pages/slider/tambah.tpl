<form id="multiform_add">
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
</form>