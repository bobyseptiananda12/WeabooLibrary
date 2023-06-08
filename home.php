<?php
session_start();

include('config.php');

include('layout/head.php');
?>

<body>
	<div class="row">
		<!--header-->
		<header>
			<!--TopNav-->
	    <?php include('layout/topnav.php');?>

			<!--Sidenav-->
			<?php include('layout/sidenav.php');?>
		</header>
		<!--end of header-->

		<!--content-->
		<main>
			<div class="row container">
				<div class="col s12 m12 l9 offset-l3">
					<!--content Buku-->
					<div class="col s12 m6 l6">
		                <div class="card blue-grey lighten-5">
		                    <div class="card-content blue-text text-darken-2">
			                    <span class="card-title">Buku
			                    	<p class="right"></p>
			                    </span>
		                    </div>
		                    <div class="card-action">
		                    	<i class="material-icons left blue-text text-darken-2">visibility</i>
		                    	<a href="buku.php" class="blue-text text-darken-2">Lihat</a>
		                    </div>
		                </div>
	        </div>
					<!--content Rak-->
					<div class="col s12 m6 l6">
		                <div class="card blue-grey lighten-5">
		                    <div class="card-content blue-text text-darken-2">
			                    <span class="card-title">Jenis Buku
			                    	<p class="right"></p>
			                    </span>
		                    </div>
		                    <div class="card-action">
		                    	<i class="material-icons left blue-text text-darken-2">visibility</i>
		                    	<a href="jenisbuku.php" class="blue-text text-darken-2">Lihat</a>
		                    </div>
		                </div>
	         </div>
	         		<!--content Kostum-->
	         		<div class="col s12 m6 l6">
		                <div class="card blue-grey lighten-5">
		                    <div class="card-content blue-text text-darken-2">
			                    <span class="card-title">Rak Buku
			                    	<p class="right"></p>
			                    </span>
		                    </div>
		                    <div class="card-action">
		                    	<i class="material-icons left blue-text text-darken-2">visibility</i>
		                    	<a href="rakbuku.php" class="blue-text text-darken-2">Lihat</a>
		                    </div>
		                </div>
	                </div>
	            <!--content Peminjam-->
	            <div class="col s12 m6 l6">
		                <div class="card blue-grey lighten-5">
		                    <div class="card-content blue-text text-darken-2">
			                    <span class="card-title">Peminjam
			                    	<p class="right"></p>
			                    </span>
		                    </div>
		                    <div class="card-action">
		                    	<i class="material-icons left blue-text text-darken-2">visibility</i>
		                    	<a href="peminjam.php" class="blue-text text-darken-2">Lihat</a>
		                    </div>
		                </div>
	                </div>
	      <!--content Peminjaman-->
	      <div class="col s12 m6 l6">
		                <div class="card blue-grey lighten-5">
		                    <div class="card-content blue-text text-darken-2">
			                    <span class="card-title">Transaksi
			                    	<p class="right"></p>
			                    </span>
		                    </div>
		                    <div class="card-action">
		                    	<i class="material-icons left blue-text text-darken-2">visibility</i>
		                    	<a href="peminjaman.php" class="blue-text text-darken-2">Lihat</a>
		                    </div>
		                </div>
	                </div>
	      <!--content Faktur Peminjam-->
	      <div class="col s12 m6 l6">
		                <div class="card blue-grey lighten-5">
		                    <div class="card-content blue-text text-darken-2">
			                    <span class="card-title">Faktur Pinjam
			                    	<p class="right"></p>
			                    </span>
		                    </div>
		                    <div class="card-action">
		                    	<i class="material-icons left blue-text text-darken-2">visibility</i>
		                    	<a href="fakturpinjam.php" class="blue-text text-darken-2">Lihat</a>
		                    </div>
		                </div>
	                </div>
	      <!--content Suplier-->
	      <div class="col s12 m6 l6">
		                <div class="card blue-grey lighten-5">
		                    <div class="card-content blue-text text-darken-2">
			                    <span class="card-title">Penerbit
			                    	<p class="right"></p>
			                    </span>
		                    </div>
		                    <div class="card-action">
		                    	<i class="material-icons left blue-text text-darken-2">visibility</i>
		                    	<a href="supplier.php" class="blue-text text-darken-2">Lihat</a>
		                    </div>
		                </div>
	                </div>
	      <!--content Faktur Kembali-->
	      <div class="col s12 m6 l6">
		                <div class="card blue-grey lighten-5">
		                    <div class="card-content blue-text text-darken-2">
			                    <span class="card-title">Faktur Pengembalian
			                    	<p class="right"></p>
			                    </span>
		                    </div>
		                    <div class="card-action">
		                    	<i class="material-icons left blue-text text-darken-2">visibility</i>
		                    	<a href="fakturkembali.php" class="blue-text text-darken-2">Lihat</a>
		                    </div>
		                </div>
	                </div>
	      <!--content Petugas-->
	      <div class="col s12 m6 l6">
		                <div class="card blue-grey lighten-5">
		                    <div class="card-content blue-text text-darken-2">
			                    <span class="card-title">Pegawai
			                    	<p class="right"></p>
			                    </span>
		                    </div>
		                    <div class="card-action">
		                    	<i class="material-icons left blue-text text-darken-2">visibility</i>
		                    	<a href="petugas.php" class="blue-text text-darken-2">Lihat</a>
		                    </div>
		                </div>
	                </div>
				</div>
			</div>
		</main>
        <!--end of content-->


	</div>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript">
	  	$(document).ready(function(){
	    	$('.collapsible').collapsible();
	    	$(".button-collapse").sideNav();
		});
	</script>
</body>
</html>
