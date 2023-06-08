<?php session_start();
error_reporting(0);
include("config.php"); 
$result= mysqli_query($con, "SELECT * FROM peminjam ORDER BY id_peminjam DESC");

include("layout/head.php")

?>

<body>
  <div class="row">
    <!--header-->
    <header>
      <!--TopNav-->
          <?php include("layout/topnav.php");?>

      <!--Sidenav-->
          <?php include("layout/sidenav.php");?>
    </header>
    <!--end of header-->

    <!--content-->
<main>
      <div class="row container">
        <div class="col s12 m12 l10 offset-l3"> <br>

          <!--table-->
        <form action="" method="post" name="form1">
          <div class="col s12 m12 l12 card-panel z-depth"> <br>
            <table class="highlight">
              <!--kolom isian table-->
              <tr>
                        <th>ID Peminjam</th>
                        <th><input type="text" name="id_peminjam" required></th>
                      </tr>
              <tr>
                      <th>Nama</th>
                      <th><input type="text" name="nama" required></th>
                    </tr>
                      <tr>
                        <th>Tanggal Lahir</th>
                        <th><input type="date" name="tanggal_lahir" required></th>
                      </tr>
                      <tr>
                        <th>Alamat</th>
                        <th><input type="text" name="alamat" required></th>
                      </tr>
                      <tr>
                        <th>Nomor Telepon</th>
                        <th><input type="text" name="no_telp" required></th>
                      </tr>
                      <tr>
                        <th>Jenis Kelamin</th>
                        <th><input type="text" name="jeniskelamin" required></th>
                      </tr>
                      <tr>
                        <th>Username</th>
                        <th><input type="text" name="username" required></th>
                      </tr>
                      <tr>
                        <th>Password</th>
                        <th><input type="text" name="password" required></th>
                      </tr>
            <table>
                    <tr>
                      <th>
                        <input type="submit" name="tambah" value="Input Data" class="right waves-effect waves-light btn green darken-2" style="float: left;">
                      </th>
                      <th style="width: 1%;">
                        <a href="peminjam.php"><input type="button" value="Kembali" class="right waves-effect waves-light btn red darken-2"></a>
                      </th>
                    </tr>
                </table>
          </div>
        </form>
        </div>
      </div>
    </main>
        <!--end of content-->

        <?php
 
          // Check If form submitted, insert form data into users table.
          if(isset($_POST['tambah']))
          {
            $id_peminjam=$_POST['id_peminjam'];
            $nama=$_POST['nama'];
            $tanggal_lahir=$_POST['tanggal_lahir'];
            $alamat=$_POST['alamat'];
            $no_telp=$_POST['no_telp'];
            $jeniskelamin=$_POST['jeniskelamin'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            include_once("config.php");

             $result= mysqli_query($con, "INSERT INTO `peminjam` (`id_peminjam`, `nama`, `tanggal_lahir`, `alamat`, `no_telp`, `jeniskelamin`, `username`, `password`) VALUES ('$id_peminjam', '$nama', '$tanggal_lahir', '$alamat', '$no_telp', '$jeniskelamin', '$username', '$password')");
            { 
              echo "<script>alert('Data berhasil Ditambahkan ! ID Peminjam : $id_peminjam')</script>";    
            } 
          } 
        ?>

        </div>

  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.collapsible').collapsible();
        $(".button-collapse").sideNav();
    });
  </script>
</body>
</html>