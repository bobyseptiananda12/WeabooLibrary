<?php session_start();
error_reporting(0);
include("config.php"); 
$result= mysqli_query($con, "SELECT * FROM jenis_buku ORDER BY id_jenisbuku DESC");

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
                        <th>ID Jenis Buku</th>
                        <th><input type="text" name="id_jenisbuku" required></th>
                      </tr>
              <tr>
                      <th>Nama Jenis</th>
                      <th><input type="text" name="nama_jenis" required></th>
                    </tr>
            <table>
                    <tr>
                      <th>
                        <input type="submit" name="tambah" value="Input Jenis" class="right waves-effect waves-light btn green darken-2" style="float: left;">
                      </th>
                      <th style="width: 1%;">
                        <a href="jenisbuku.php"><input type="button" value="Kembali" class="right waves-effect waves-light btn red darken-2"></a>
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
            $id_jenisbuku=$_POST['id_jenisbuku'];
            $nama_jenis=$_POST['nama_jenis'];
            include_once("config.php");

             $result= mysqli_query($con, "INSERT INTO `jenis_buku` (`id_jenisbuku`, `nama_jenis`) VALUES ('$id_jenisbuku', '$nama_jenis')");
            { 
              echo "<script>alert('Buku Berhasil Ditambahkan ! ID Jenis Buku : $id_jenisbuku')</script>";    
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