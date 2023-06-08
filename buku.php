<?php session_start();
include("config.php");
$result = mysqli_query($con, "SELECT * FROM buku ORDER BY genre_buku ASC");

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
			                  	<th>Id Buku</th>
								<th>Judul Buku</th>
								<th>Genre Buku</th>
								<th>Penerbit</th>
								<th>ID Jenis Buku</th>
								<th>Rak</th>
				            </tr>

							<?php 

							while($user_data = mysqli_fetch_array($result)) { 
			                    $test = $user_data['judul_buku'];      
				                echo "<tr>";
			                    echo "<td >".$user_data['id_buku']."</td>";
				                echo "<td>".$user_data['judul_buku']."</td>";
			                    echo "<td>".$user_data['genre_buku']."</td>"; 
			                    echo "<td>".$user_data['penerbit']."</td>"; 
			                    echo "<td>".$user_data['id_jenisbuku']."</td>";
			                    echo "<td>".$user_data['kode_rak']."</td>";
				                echo "<td> <a href='editbuku.php?id=$user_data[id_buku]' style='text-decoration: none;'><i class='material-icons' title='Edit $test'>mode_edit</i></a> | <a data-id='1' class='hapus' href='deletebuku.php?id=$user_data[id_buku]' style='text-decoration: none;'><i class='material-icons' title='Hapus $test'>delete</i></a> </td></tr>";  
				            }

							?>

						</table>

						<table>
							<tr>
				            	<td colspan='9'>
				            		<a href='tambahbuku.php' class="right waves-effect waves-light btn blue darken-2">Tambah Buku<i class="material-icons right">add</i></a>
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
                $.post('deletebuku.php', {id: $(this).attr('data-id')},
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