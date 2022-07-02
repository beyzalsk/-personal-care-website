 <?php 

session_start();

$_SESSION = array();
session_destroy();
header("location: g1.php");

 ?>