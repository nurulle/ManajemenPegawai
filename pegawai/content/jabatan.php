<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Jabatan</h2>
<a class="tombol" href="?hal=jabatan_tambah"><img src="content/icon/add.png" width="20px" >Tambah</a>

<table class="table" id="table-jabatan">
   <thead>
      <tr>
         <th>No</th>
         <th>Nama Jabatan</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $data['nama_jabatan'] ?></td>
         <td>
            <a class="tombol edit" href="?hal=jabatan_edit&id=<?= $data['id_jabatan'] ?>"> <img src="content/icon/edit.png" width="20px" > Edit </a>
            <a class="tombol hapus" href="?hal=jabatan_hapus&id=<?= $data['id_jabatan'] ?>" onclick="return confirm('yakin ?');"> <img src="content/icon/delete.png" height="20px" > Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
<script>
   $(document).ready(function() {
    $('#table-jabatan').DataTable();
} );
</script>