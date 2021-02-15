<?php

if($_GET['app'] == 'form'){
	require_once("form/index.php");
}
if($_GET['app'] == 'print'){
	require_once("../print/form_print.php");
}
if($_GET['app'] == 'search'){
	require_once("search/index.php");
}

if($_GET['app'] == 'user'){
	require_once("user/index.php");
}
if($_GET['app'] == 'chart'){
	require_once("chart/index.php");
}

if($_GET['app'] == 'technique'){
	require_once("technique/index.php");
}
