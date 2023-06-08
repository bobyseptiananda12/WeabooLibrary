<?php
session_start();

# check apakah ada akse post dari halaman login?, jika tidak kembali kehalaman depan
if( !isset($_POST['username']) ) { header('location:index.php'); exit(); }

# set nilai default dari error,
$error = '';

require ( 'config.php' );

$username = trim( $_POST['username'] );
$password = trim( $_POST['password'] );

if( strlen($username) < 2 )
{
	$error = "<script language='javascript'> alert('Username tidak boleh kosong'); </script>";
}else if( strlen($password) < 2 )
{
	# jika ada error dari kolom password yang kosong
	$error =  "<script language='javascript'> alert('Password tidak boleh kosong'); </script>";
}else{

	# Escape String, ubah semua karakter ke bentuk string
	$username = $con->escape_string($username);
	$password = $con->escape_string($password);


	# SQL command untuk memilih data berdasarkan parameter $username dan $password yang
	# di inputkan
	$sql = "SELECT nama FROM pegawai
			WHERE username='$username'
			AND password='$password' LIMIT 1";

	# melakukan perintah
	$query = $con->query($sql);

	# check query
	if( !$query )
	{
		die( 'Oops!! Database gagal '. $con->error );
	}

	# check hasil perintah
	if( $query->num_rows == 1 )
	{

		header('location:home.php');
		exit();

	}else{


		$error = "<script language='javascript'> alert('Username atau password salah !'); </script>";
	}

}

if( !empty($error) )
{

	$_SESSION['error'] = $error;
	header('location:'.$url.'index.php');
	exit();
}
?>
