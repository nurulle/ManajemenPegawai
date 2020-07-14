<?php
   if(!defined('INDEX')) die("");


?>

<h2 class="judul">Data Pegawai</h2>
<a class="tombol" href="?hal=pegawai_tambah"><img src="content/icon/add.png" width="20px" >Tambah</a>




<table class="table" id="table-pegawai">
   <thead>
      <tr>
         <th>No</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Jenis Kelamin</th>
         <th>Tanggal Lahir</th>
         <th>Jabatan</th>
         <th>Keterangan</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
<?php
      if( isset($_POST["cari"])){
         $query = cari($_POST["keyword"]);
      
      }

   $query = mysqli_query($con, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><img src="images/<?= $data['foto'] ?>" width="100"></td>
         <td><?= $data['nama_pegawai'] ?></td>
         <td><?= $data['jenis_kelamin'] ?></td>
         <td><?= $data['tgl_lahir'] ?></td>
         <td><?= $data['nama_jabatan'] ?></td>
         <td><?= $data['keterangan'] ?></td>
         <td>
            <a class="tombol edit" href="?hal=pegawai_edit&id=<?= $data['id_pegawai'] ?>"><img src="content/icon/edit.png" width="20px" > Edit </a>
            <a class="tombol hapus"   href="?hal=pegawai_hapus&id=<?= $data['id_pegawai'] ?>&foto=<?= $data['foto'] ?>" onclick="return confirm('yakin ?');"><img src="content/icon/delete.png" height="20px" > Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>

</table>

<script>
   $(document).ready(function() {
    $('#table-pegawai').DataTable();
} );
</script>



