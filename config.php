<?php

 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'weaboolibrary';

 $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

 if( $con->connect_error )
 {
 	die( 'Oops!! Koneksi Gagal : '. $con->connect_error );
 }
 ?>
