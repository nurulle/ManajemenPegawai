<?php
  session_start();
  ob_start();
  
  include "library/config.php";

  if(empty($_SESSION['username']) or empty($_SESSION['password'])){
     echo "<p align='center'> Anda harus login terlebih dahulu!</p>";
     echo "<meta http-equiv='refresh' content='2; url=login.php'>";
  }else{
    define('INDEX', true);
?>
<!DOCTYPE HTML>
<html>
   <head>
      <title>Dashboard</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/jquery.dataTables.min.css">
      <script src="js/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
      <script src="js/jquery.dataTables.min.js"></script>
   </head>
   <body>
      <header>
         Aplikasi Manajemen Pegawai
      </header>
      <div class="container">
         <aside>
            <ul class="menu">
               <li> <a href="?hal=dashboard" class="aktif">Dashboard</a> </li>
               <li> <a href="?hal=pegawai">Data Pegawai</a> </li>
               <li> <a href="?hal=jabatan">Data Jabatan</a> </li>
               <li> <a href="logout.php" onclick="return confirm('yakin ?');">Keluar</a> </li>
            </ul>
         </aside>
         <section class="main">
            <?php include "konten.php"; ?>
         </section>
      </div>
      <footer> copyright @kelompok1
      </footer>
      
   </body>
</html>
<?php
   }
?>