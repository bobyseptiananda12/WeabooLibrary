<?php session_start();
error_reporting(0);
include("config.php"); 
$result= mysqli_query($con, "SELECT * FROM rak ORDER BY nama_rak DESC");

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
                        <th>Kode Rak</th>
                        <th><input type="text" name="kode_rak" required></th>
                      </tr>
              <tr>
                      <th>Nama Rak</th>
                      <th><input type="text" name="nama_rak" required></th>
                    </tr>
                      <tr>
                        <th>Jumlah Buku</th>
                        <th><input type="text" name="jumlah_buku" required></th>
                      </tr>
            <table>
                    <tr>
                      <th>
                        <input type="submit" name="tambah" value="Input Rak" class="right waves-effect waves-light btn green darken-2" style="float: left;">
                      </th>
                      <th style="width: 1%;">
                        <a href="rakbuku.php"><input type="button" value="Kembali" class="right waves-effect waves-light btn red darken-2"></a>
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
            $kode_rak=$_POST['kode_rak'];
            $nama_rak=$_POST['nama_rak'];
            $jumlah_buku=$_POST['jumlah_buku'];
            include_once("config.php");

             $result= mysqli_query($con, "INSERT INTO `rak` (`kode_rak`, `nama_rak`, `jumlah_buku`) VALUES ('$kode_rak', '$nama_rak', '$jumlah_buku')");
            { 
              echo "<script>alert('Rak Berhasil Ditambahkan ! Kode Rak : $kode_rak')</script>";
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