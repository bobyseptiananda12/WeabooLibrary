<?php session_start();
include_once("../config.php");
$result = mysqli_query($koneksi, "SELECT * FROM barang_keluar ORDER BY kode_barang DESC");

if( !isset($_SESSION['user']) )
{
  header('location:./../'.$_SESSION['akses']);
  exit();
}

$nama = ( isset($_SESSION['user']) ) ? $_SESSION['user'] : '';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="shortcut icon" href="../images/icon.ico">
	<!--Import Google Icon Font-->
    <link href="../fonts/material.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">
	       /* label color */
	       .e-input-field label {
	         color: #000;
	       }
	       /* label focus color */
	       .e-input-field input[type=text]:focus + label,.e-input-field input[type=password]:focus + label {
	         color: #d32f2f !important;
	       }
	       /* label underline focus color */
	       .e-input-field input[type=text]:focus,.e-input-field input[type=password]:focus {
	         border-bottom: 1px solid #d32f2f !important;
	         box-shadow: 0 1px 0 0 #d32f2f !important;
	       }
	       /* valid color */
	       .e-input-field input[type=text].valid,.e-input-field input[type=password].valid {
	         border-bottom: 1px solid #d32f2f !important;
	         box-shadow: 0 1px 0 0 #d32f2f !important;
	       }
	       /* invalid color */
	       .e-input-field input[type=text].invalid,.e-input-field input[type=password].invalid {
	         border-bottom: 1px solid #d32f2f !important;
	         box-shadow: 0 1px 0 0 #d32f2f !important;
	       }
	       /* icon prefix focus color */
	       .e-input-field .prefix.active {
	         color: #d32f2f !important;
	       }
	    </style>
</head>
<body>
	<div class="row">
		<!--header-->
		<header>
			<!--TopNav-->
	        <nav class="row top-nav blue darken-2">
	    		<div class="container">
	    			<div class="col offset-l2 nav-wrapper">
	    				<a href="#" data-activates="slide-out" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a>
	    				<a class="page-title">Beranda</a>
	    			</div>
	    		</div>
			</nav>

			<!--Sidenav-->
			<ul id="slide-out" class="side-nav fixed">
	            
	            <li class="no-padding">
		            <ul class="collapsible collapsible-accordion">
		                <li>
		                	<div class="user-view">
		                    	<div class="background" style="margin-bottom:-15%;">
		                    		<img src="../images/bg2.jpg">
		                    	</div>
		                		<span class="white-text name"><?php echo $nama; ?><i class="material-icons left">account_circle</i></span>
		                	</div>
		                </li>
		                
		                <li><div class="divider" style="margin-top:15%;"></div></li>

		                <li><a href=index.php class="collapsible-header">Beranda<i class="material-icons">home</i></a></li>

		                <li>
		                	<a class="collapsible-header">Menu<i class="material-icons">arrow_drop_down</i></a>
		                	<div class="collapsible-body">
		                		<ul>
		                			
									<li><a href="gudang.php">Gudang</a></li>
									
								</ul>
							</div>
		                </li>
		                <li><a href="kontak.php" class="collapsible-header">Teams<i class="material-icons">contacts</i></a></li>

		                <li><a href="../logout.php" class="collapsible-header">Keluar<i class="material-icons">exit_to_app</i></a></li>

		            </ul>
	            </li>

	        </ul>
		</header>
		<!--end of header-->

		<!--content-->
		<main>
			<div class="row container"> <br><br>

					<div class="col s12 m12 offset-l2 l12 ">
						<center><h4>TEAMS</h4></center>
				        <div class="card-panel lighten-5 z-depth-1">
				          <div class="row valign-wrapper">
				            <div class="col s2">
				              <img src="../1.png" height="100px"> 
				            </div>
				            <div class="col s12">
				              <span class="black-text">
				                Oky Alexander Sihotang
				              </span>
				            </div>
				            <div class="col s2">
				              <img src="../1.png" height="100px"> 
				            </div>
				            <div class="col s12">
				              <span class="black-text">
				                Ken El Ridho Fadjuani
				              </span>
				            </div>
				          </div>
				        </div>
				    </div>
				    <div class="col s12 m12 offset-l2 l12 ">
				        <div class="card-panel lighten-5 z-depth-1">
				          <div class="row valign-wrapper">
				            <div class="col s2">
				              <img src="../1.png" height="100px"> 
				            </div>
				            <div class="col s12">
				              <span class="black-text">
				                Samuel Gunawan Martuah Marbun
				              </span>
				            </div>
				            <div class="col s2">
				              <img src="../1.png" height="100px"> 
				            </div>
				            <div class="col s12">
				              <span class="black-text">
				                Richard Prananta Ekin Surbakti
				              </span>

				            </div>
				        </div>
				        </div>
				    </div>
				    <div class="col s12 m12 offset-l2 l12">
				    	<div class="card-panel lighten-5 z-depth-1" >
				    		<div class="row valign-wrapper">
				    			<div class="col s2" align="center">
				    				<img src="../1.png" height="100px">
				    			</div>
				    			<div class="col s12">
				    				<span class="black-text">
				    					Marzuq Muadz Diaz Lutfhi
				    				</span>

				<div class="col s12 m12 l12 offset-l2"> <br> <br><br>

					
					

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