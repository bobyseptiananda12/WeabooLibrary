<?php session_start();
error_reporting(0);
include("config.php"); 
$result= mysqli_query($con, "SELECT * FROM buku ORDER BY judul_buku DESC");

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
                        <th>ID Buku</th>
                        <th><input type="text" name="id_buku" required></th>
                      </tr>
              <tr>
                      <th>Judul Buku</th>
                      <th><input type="text" name="judul_buku" required></th>
                    </tr>
                      <tr>
                        <th>Genre Buku</th>
                        <th><input type="text" name="genre_buku" required></th>
                      </tr>
                      <tr>
                        <th>Penerbit</th>
                        <th><input type="text" name="penerbit" required></th>
                      </tr>
                      <tr>
                        <th>ID Jenis Buku</th>
                        <th><input type="text" name="id_jenisbuku" required></th>
                      </tr>
                      <tr>
                        <th>Kode Rak</th>
                        <th><input type="text" name="kode_rak" required></th>
                      </tr>
            <table>
                    <tr>
                      <th>
                        <input type="submit" name="tambah" value="Input Buku" class="right waves-effect waves-light btn green darken-2" style="float: left;">
                      </th>
                      <th style="width: 1%;">
                        <a href="buku.php"><input type="button" value="Kembali" class="right waves-effect waves-light btn red darken-2"></a>
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
            $id_buku=$_POST['id_buku'];
            $judul_buku=$_POST['judul_buku'];
            $genre_buku=$_POST['genre_buku'];
            $penerbit=$_POST['penerbit'];
            $id_jenisbuku=$_POST['id_jenisbuku'];
            $kode_rak=$_POST['kode_rak'];
            include_once("config.php");

             $result= mysqli_query($con, "INSERT INTO `buku` (`id_buku`, `judul_buku`, `genre_buku`, `penerbit`, `id_jenisbuku`, `kode_rak`) VALUES ('$id_buku', '$judul_buku', '$genre_buku', '$penerbit', '$id_jenisbuku', '$kode_rak')");
             if ($id_jenisbuku == "01") 
            {
              echo "<script>alert('Buku Novel Berhasil Ditambahkan ! ID Buku : $id_buku')</script>";
            }
            elseif ($id_jenisbuku == "02") 
            {
              echo "<script>alert('Buku Komik Berhasil Ditambahkan ! ID Buku : $id_buku')</script>";
            }
            elseif ($id_jenisbuku == "03") 
            {
              echo "<script>alert('Buku Dongeng Berhasil Ditambahkan ! ID Buku : $id_buku')</script>";
            }
            elseif ($id_jenisbuku == "04") 
            {
              echo "<script>alert('Buku Kamus Berhasil Ditambahkan ! ID Buku : $id_buku')</script>";
            }
            elseif ($id_jenisbuku == "05") 
            {
              echo "<script>alert('Buku Majalah Berhasil Ditambahkan ! ID Buku : $id_buku')</script>";
            }
            elseif ($id_jenisbuku == "06") 
            {
              echo "<script>alert('Buku Biografi Berhasil Ditambahkan ! ID Buku : $id_buku')</script>";
            }
            elseif ($id_jenisbuku == "07") 
            {
              echo "<script>alert('Buku Ilmiah Berhasil Ditambahkan ! ID Buku : $id_buku')</script>";
            }
            elseif ($id_jenisbuku == "08") 
            {
              echo "<script>alert('Buku Ensiklopedi Berhasil Ditambahkan ! ID Buku : $id_buku')</script>";
            }
            elseif ($id_jenisbuku == "09") 
            {
              echo "<script>alert('Buku Antologi Berhasil Ditambahkan ! ID Buku : $id_buku')</script>";
            }
            elseif ($id_jenisbuku == "10") 
            {
              echo "<script>alert('Buku Pelajaran Berhasil Ditambahkan ! ID Buku : $id_buku')</script>";
            }
            else
            { 
              echo "<script>alert('Gagal Menambah Buku ! ID Buku : $id_buku')</script>";    
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