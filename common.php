<?php

header('Cache-control: private'); // IE 6 FIX

if(isset($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'ar';
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en';
  break;

  case 'ar':
  $lang_file = 'lang.ar';
  break;

  default:
  $lang_file = 'lang.en';

}

include_once 'includes/languages/'.$lang_file .'.php';

?>