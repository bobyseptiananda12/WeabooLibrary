<?php session_start();
include("config.php");
$result = mysqli_query($con, "SELECT * FROM peminjam ORDER BY id_peminjam ASC");

include("layout/head.php");

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
				<div class="col s12 m12 l12 offset-l2"> <br>
					<!--kolom search-->
					<div class="col s12 m12 l12">
						<form name="cari" method="post" action="cari-barang-masuk.php" class="row">
	                    	<div class="e-input-field col s12 m12 l12">
	                    		<input type="text" name="cari" placeholder="Masukkan  ID Buku / Judul Buku " class="validate" required title="Cari User">
	                    		<input type="submit" name="cari2" value="cari" class="btn right blue darken-2"> 
	                    	</div>
						</form>
					</div>

					<!--table-->
					<div class="col s12 m12 l12 card-panel z-depth"> <br>
						<table class="highlight">
							<!--kolom header table-->
							<tr>
			                  	<th>Id Peminjam</th>
								<th>Nama</th>
								<th>Tanggal Lahir</th>
								<th>Alamat</th>
								<th>Nomor Telepon</th>
								<th>Jenis Kelamin</th>
								<th>Username</th>
								<th>Password</th>
				            </tr>

							<?php 

							while($user_data = mysqli_fetch_array($result)) { 
			                    $test = $user_data['nama'];      
				                echo "<tr>";
			                    echo "<td >".$user_data['id_peminjam']."</td>";
				                echo "<td>".$user_data['nama']."</td>";
			                    echo "<td>".$user_data['tanggal_lahir']."</td>"; 
			                    echo "<td>".$user_data['alamat']."</td>"; 
			                    echo "<td>".$user_data['no_telp']."</td>";
			                    echo "<td>".$user_data['jeniskelamin']."</td>";
			                    echo "<td>".$user_data['username']."</td>";
			                    echo "<td>".$user_data['password']."</td>";
				                echo "<td> <a href='editbuku.php?id=$user_data[id_peminjam]' style='text-decoration: none;'><i class='material-icons' title='Edit $test'>mode_edit</i></a> | <a data-id='1' class='hapus' href='deletepeminjam.php?id=$user_data[id_peminjam]' style='text-decoration: none;'><i class='material-icons' title='Hapus $test'>delete</i></a> </td></tr>";  
				            }

							?>

						</table>

						<table>
							<tr>
				            	<td colspan='9'>
				            		<a href='tambahpeminjam.php' class="right waves-effect waves-light btn blue darken-2">Tambah Peminjam<i class="material-icons right">add</i></a>
				            	</td>
				            </tr>
						</table>
					</div>
				</div>
			</div>
		</main>
        <!--end of content-->


	</div>

	<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<script>
        $(".hapus").click(function () {
        var jawab = confirm("Anda Yakin Ingin Menghapus Buku ?");
        if (jawab === true) {
        // konfirmasi
            var hapus = false;
            if (!hapus) {
                hapus = true;
                $.post('deletepeminjam.php', {id: $(this).attr('data-id')},
                function (data) {
                    alert(data);
                    
                });
                hapus = false;
            }
        } else {
            return false;
        }
        });
      </script>
	<script type="text/javascript">
	  	$(document).ready(function(){
	    	$('.collapsible').collapsible();
	    	$(".button-collapse").sideNav();
		});
	</script>
</body>
</html>