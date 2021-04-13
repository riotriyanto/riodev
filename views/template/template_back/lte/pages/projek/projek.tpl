<a href="{$rootdir}/rtoadmin/projek/tambah"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
<br><br>
<table id="DataTable" class="display table table-striped" style="width:100%">
<thead>
    <tr>
        <th class="text-center" width="10">NO</th>
        <th class="text-center">Judul</th>
        <th class="text-center">Keterangan</th>
        <th class="text-center">Gambar</th>
        <th class="text-center">Status</th>
        <th class="text-center">Urut</th>
        <th class="text-center" width="5%">Aksi</th>
    </tr>
</thead>
<tbody>
    {$no=1}
    {foreach $projek as $s}
        <tr>
            <td>{$no++}</td>
            <td>{$s['judul']}</td>
            <td>{$s['keterangan']}</td>
            <td><img style="max-width: 200px;" src="{$rootdir}/views/assets/projek/{$s['gambar']}"></td>
            <td>{{if $s['aktif'] == 1 }} <p><a href="" class="text-light bg-success">Aktif</a></p> {{else}} <p><a href="" class="text-light bg-danger">Tidak Aktif</a></p> {{/if}}</td>
            <td>{$s['urut']}</td>
            <td>
                <a title="Edit Slider" href="{$rootdir}/rtoadmin/projek/edit/{$s['id_projek']}" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                <a title="Hapus Slider" onclick='delet("{$s["id_projek"]}","{$s["id_projek"]}","{$url}/delete/{$s["id_projek"]}")' class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
    {/foreach}
</tbody>
</table>