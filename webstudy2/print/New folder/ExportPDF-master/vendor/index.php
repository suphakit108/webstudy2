<?php 
session_start();
if(true){
	require_once('view/head.php');
	require_once('view/menu.php');
	require_once('view/body.php');
	require_once('view/footer.php');
}else{
	header("location: ../index.php");
}
?>