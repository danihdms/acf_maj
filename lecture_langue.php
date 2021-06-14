<?php session_start();
if (!isset($_SESSION['lang'])){
  $_SESSION['lang'] = 'fr';
}
if ($_SESSION['lang'] == 'fr'){
  include 'include\francais.inc';
}
else if ($_SESSION['lang'] == 'en'){
  include 'include\anglais.inc' ;
}
