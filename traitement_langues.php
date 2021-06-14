<?php session_start();
if (!isset($_POST['langue'])){
  $_SESSION['lang'] = 'fr';
  header('location:index.php');
}
if ($_POST['langue'] == 1){
  $_SESSION['lang'] = 'fr';
  header('location:index.php');
}
else if ($_POST['langue'] == 2){
  $_SESSION['lang'] = 'en';
  header('location:index.php');
}
