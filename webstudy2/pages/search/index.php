<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');
if(!isset($_GET['action'])){
	require_once('view.php');
}
if($_GET['action']=='search'){
	$company = getcompanyBycode($conn,$_POST['code'] );
	// print_r($company);
	if( $company> 0){

		$_SESSION['company'] =  $company['company_code'];
	}else{
		echo "<script type='text/javascript'>alert('ไม่มีรหัสนี้กรุณาติดต่อadmin'); window.location = 'index.php?app=search';</script>";

	}
	?>
	<script type="text/javascript">
		window.location = "index.php?app=user&action=conclude";
	</script>

	<?php
	// require_once('customer.php');
}
?>