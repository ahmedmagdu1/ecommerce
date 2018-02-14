<?php

 include 'admin/connect.php';
 $sessionUser ='';
 if (isset($_SESSION['user'])) {
	 $sessionUser = $_SESSION['user'];
 }
   //routes
   $tpl  = 'includes/templates/';    //template directory
   $lang = 'includes/languages/';   // Language Directoty
   $func = 'includes/functions/';  // functions Directoty
   $css  = 'layout/css/';         // Css Directoty
   $js   = 'layout/js/';         // js Directoty

   
   
   // Include The Important Files
    include $func . 'functions.php';
   	include $tpl . 'header.php';

	

	
	