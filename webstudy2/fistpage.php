<?php 
session_start();
unset($_SESSION["company"]);
header('Location: index.php');
?>