<?php $nama = ( isset($_SESSION['user']) ) ? $_SESSION['user'] : '';?>
<!DOCTYPE html>
<html>
<head>
	<title>Weaboo Library</title>
	<link rel="shortcut icon" href="images/icon.ico">
	<!--Import Google Icon Font-->
    <link href="fonts/material.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style type="text/css">
    	.btn.modal-trigger{display:block; width:100%; padding:30px;line-height:0px}
        /* label color */
           .e-input-field label {
             color: #000;
           }
           /* label focus color */
           .e-input-field input[type=text]:focus + label,.e-input-field input[type=password]:focus + label {
             color: #176ae6 !important;
           }
           /* label underline focus color */
           .e-input-field input[type=text]:focus,.e-input-field input[type=password]:focus {
             border-bottom: 1px solid #176ae6 !important;
             box-shadow: 0 1px 0 0 #176ae6 !important;
           }
           /* valid color */
           .e-input-field input[type=text].valid,.e-input-field input[type=password].valid {
             border-bottom: 1px solid #176ae6 !important;
             box-shadow: 0 1px 0 0 #176ae6 !important;
           }
           /* invalid color */
           .e-input-field input[type=text].invalid,.e-input-field input[type=password].invalid {
             border-bottom: 1px solid #176ae6 !important;
             box-shadow: 0 1px 0 0 #176ae6 !important;
           }
           /* icon prefix focus color */
           .e-input-field .prefix.active {
             color: #d32f2f !important;
           }
    </style>
</head>