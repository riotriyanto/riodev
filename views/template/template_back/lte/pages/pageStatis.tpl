<table id="DataTable" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th class="text-center" width="10">NO</th>
                <th class="text-center">Judul</th>
                <th class="text-center" width="5%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {foreach $data as $page}
            <tr>
                <td>{$page['id_page']}</td>
                <td>{$page['judul']}</td>
                <td class="text-center">
                        <a href='{$url}/edit/{$page["id_page"]}' title="Ubah User" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                        
                        
                        <!-- <a title="Hapus User" onclick='delet("{$page["id_page"]}","{$page["judul"]}","{$url}/rtoadmin/pageStatis/delete/{$page["id_page"]}")' class="btn btn-xs btn-danger"><i class="fa fa-edit"></i></a> -->
                </td>
            </tr>
            {/foreach}
        </tbody>
    </table>