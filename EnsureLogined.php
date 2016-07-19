<?php 

if(!isset($_SESSION))
   session_start(); 

if ( !isset($_SESSION["AccountID"]) or !isset($_SESSION["type"]) ){
   echo '<script type="text/javascript">window.alert("Please login!");</script>';
   echo '<script>window.location="/FYP/index.php";</script>';
}
if ( $_SESSION["AccountID"]=="" or $_SESSION["type"]=="" ){
   echo '<script type="text/javascript">window.alert("Please login!");</script>';
   echo '<script>window.location="/FYP/index.php";</script>';
}
?>