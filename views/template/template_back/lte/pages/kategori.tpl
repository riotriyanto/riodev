<button class="btn btn-success" onclick="form_modal()"><i class="fa fa-plus"></i> Tambah</button><br>
<table id="DataTable" class="display table table-striped" style="width:100%">
<thead>
    <tr>
        <th class="text-center" width="10">NO</th>
        <th class="text-center">Urai</th>
        <th class="text-center" width="5%">Aksi</th>
    </tr>
</thead>
<tbody>
    {$no=1}
    {foreach $datakategori as $k}
        <tr>
            <td>{$no++}</td>
            <td>{$k['urai_kategori_berita']}</td>
            <td>
                <a title="Hapus User" onclick='delet("{$k["id_kategori_berita"]}","{$k["urai_kategori_berita"]}","{$url}/delete/{$k["id_kategori_berita"]}")' class="btn btn-xs btn-danger"><i class="fa fa-edit"></i></a>
            </td>
        </tr>
    {/foreach}
</tbody>
</table>

<div class="modal fade" id="form-modal" tabindex="-1" role="dialog" aria-labelledby="form-modal-title">
    <div class="modal-dialog modal-lg" role="document">
        <form id="multiform_add" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="form-modal-title"><font id="judul_modal"></font></h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal form-label-left">
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Urai</label>
                        <div class="col-md-8 col-sm-9 col-xs-12">
                            <input type="text" id="urai" name="urai" class="form-control" required>
                        </div>
                    </div>
                    
                
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>