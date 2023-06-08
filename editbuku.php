<?php session_start();
include("config.php");
$result = mysqli_query($con, "SELECT * FROM buku ORDER BY judul_buku ASC");

include("layout/head.php");
?>
<?php
// include database connection file
include("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{ 
  $id = $_GET['id'];
  $judul_buku=$_POST['judul_buku'];
  $genre_buku=$_POST['genre_buku'];
  $penerbit=$_POST['penerbit'];
  $id_jenisbuku=$_POST['id_jenisbuku'];
  $kode_rak=$_POST['kode_rak'];
    
  // update user data
  $result = mysqli_query($con, "UPDATE `buku` SET 
  `judul_buku`='$judul_buku',
  `genre_buku`='$genre_buku',
  `penerbit`='$penerbit',
  `id_jenisbuku`='$id_jenisbuku',
  `kode_rak`='$kode_rak' WHERE id_buku='$id'");
  //$result2 = mysqli_query($con, "UPDATE gudang SET jenis_inventory ='$jenis_inventory',kode_barang='$kode',nama_barang='$name',quantity='$quantity',satuan='$satuan' WHERE id=$id");
  
  // Redirect to homepage to display updated user in list
  header("Location:buku.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
$result = mysqli_query($con, "SELECT * FROM buku WHERE id_buku='$id'");
 
while($user_data = mysqli_fetch_array($result))
{
		$id_buku = $user_data['id_buku'];
  		$judul_buku=$user_data['judul_buku'];
  		$genre_buku=$user_data['genre_buku'];
  		$penerbit=$user_data['penerbit'];
  		$id_jenisbuku=$user_data['id_jenisbuku'];
  		$kode_rak=$user_data['kode_rak'];
}

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
		        				<td>Judul Buku</td>
				         		<td><input type="text" name="judul_buku" value="<?php echo $judul_buku;?>"></td>
					      	</tr>
					      	<tr> 
					        	<td>Genre Buku</td>
					        	<td><input type="text" name="genre_buku" value="<?php echo $genre_buku;?>"></td>
					      	</tr>
					      	<tr> 
					        	<td>Penerbit</td>
					        	<td><input type="text" name="penerbit" value="<?php echo $penerbit;?>"></td>
					      	</tr>
					      	<tr> 
					        	<td>ID Jenis Buku</td>
					        	<td><input type="text" name="id_jenisbuku" value="<?php echo $id_jenisbuku;?>"></td>
					      	</tr>
					      	<tr> 
					        	<td>Rak</td>
					        	<td><input type="text" name="kode_rak" value="<?php echo $kode_rak;?>"></td>
					      	</tr>
					      	<tr>
				            	<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				            </tr>
					      	</table>
					      	<table>
				            <tr>
				            	<th>
				            		<input type="submit" name="update" value="Edit Buku" class="right waves-effect waves-light btn green darken-2" style="float: left;">
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
