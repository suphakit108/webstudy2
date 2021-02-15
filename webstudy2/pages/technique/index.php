<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/model_technique.php');
if (!isset($_GET['action'])) {
	if ($_SESSION['administrator_user'] != "") {
		$company = getcompanyall($conn);
		require_once('userview.php');
	} else {
	}
}
if ($_GET['action'] == 'analysis1') {

	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_analysis/technique_analysis1.php');
}
if ($_GET['action'] == 'analysis2') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_analysis/technique_analysis2.php');
}
if ($_GET['action'] == 'analysis3') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_analysis/technique_analysis3.php');
}
if ($_GET['action'] == 'analysis4') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_analysis/technique_analysis4.php');
}
if ($_GET['action'] == 'analysis5') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_analysis/technique_analysis5.php');
}

if ($_GET['action'] == 'location1') {
	// $location = getlocation($conn, $_SESSION['company']);
	require_once('technique_location/technique_location1.php');
}
if ($_GET['action'] == 'location2') {
	// $location = getlocation($conn, $_SESSION['company']);
	require_once('technique_location/technique_location2.php');
}
if ($_GET['action'] == 'location3') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_location/technique_location3.php');
}
if ($_GET['action'] == 'location4') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_location/technique_location4.php');
}
if ($_GET['action'] == 'location5') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_location/technique_location5.php');
}
if ($_GET['action'] == 'location6') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_location/technique_location6.php');
}
if ($_GET['action'] == 'location7') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_location/technique_location7.php');
}
if ($_GET['action'] == 'location8') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_location/technique_location8.php');
}
if ($_GET['action'] == 'location9') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_location/technique_location9.php');
}
if ($_GET['action'] == 'location10') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_location/technique_location10.php');
}
if ($_GET['action'] == 'location11') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_location/technique_location11.php');
}
if ($_GET['action'] == 'location12') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_location/technique_location12.php');
}

if ($_GET['action'] == 'cost1') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_cost/technique_cost1.php');
}
if ($_GET['action'] == 'cost2') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_cost/technique_cost2.php');
}
if ($_GET['action'] == 'cost3') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_cost/technique_cost3.php');
}
if ($_GET['action'] == 'cost4') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_cost/technique_cost4.php');
}
if ($_GET['action'] == 'cost5') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_cost/technique_cost5.php');
}
if ($_GET['action'] == 'cost6') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_cost/technique_cost6.php');
}
if ($_GET['action'] == 'cost7') {
	// $analysis_technique = getuser_technique($conn, $_SESSION['company']);
	require_once('technique_cost/technique_cost7.php');
}
//============================================================================================//
if ($_GET['action'] == 'addanalysis1') {
	print_r($_FILES);
	if (isset($_FILES['filUpload'])) {
		
		$name_file =  date("d").date("m").date("Y").time().$_FILES['filUpload']['name'];
		$tmp_name =  $_FILES['filUpload']['tmp_name'];
		$locate_img="../images/".$name_file;
		move_uploaded_file($tmp_name,$locate_img);
		echo $locate_img;
	}
	for($i=0;$i<count($_POST['on']);$i++){
		$data=null;
		if($_POST['on'][$i]!=null){
			$data['on']=$_POST['on'][$i];
		}
		if($_POST['name'][$i]!=null){
			$data['name']=$_POST['name'][$i];
		}
		if($_POST['val'][$i]!=null){
			$data['val']=$_POST['val'][$i];
		}
		if($_POST['name_producer'][$i]!=null){
			$data['name_producer']=$_POST['name_producer'][$i];
		}
		if($_POST['tel'][$i]!=null){
			$data['tel']=$_POST['tel'][$i];
		}
		if($_POST['address'][$i]!=null){
			$data['address']=$_POST['address'][$i];
		}
		if($_POST['country'][$i]!=null){
			$data['country']=$_POST['country'][$i];
		}
		if($_POST['pown'][$i]!=null){
			$data['pown']=$_POST['pown'][$i];
		}
		if($_POST['kw'][$i]!=null){
			$data['kw']=$_POST['kw'][$i];
		}
		if($data['on']!=null || $data['name']!=null || $data['val']!=null || $data['name_producer']!=null || $data['tel']!=null || $data['address']!=null || $data['country']!=null || $data['pown']!=null || $data['kw']!=null){
			$res=insertaccount_list($conn,$data);
		}
	}
	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=analysis2";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=analysis2";
		</script>
		<?php
	}
}
//====================================================================================================//
if ($_GET['action'] == 'addanalysis2') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['cut'][$i]!=null){
			$data['cut']=$_POST['cut'][$i];
		}
		if($_POST['peeling'][$i]!=null){
			$data['peeling']=$_POST['peeling'][$i];
		}
		if($_POST['degrees'][$i]!=null){
			$data['degrees']=$_POST['degrees'][$i];
		}
		if($_POST['ream'][$i]!=null){
			$data['ream']=$_POST['ream'][$i];
		}
		if($_POST['perforate'][$i]!=null){
			$data['perforate']=$_POST['perforate'][$i];
		}
		if($_POST['harden'][$i]!=null){
			$data['harden']=$_POST['harden'][$i];
		}
		if($_POST['code'][$i]!=null){
			$data['code']=$_POST['code'][$i];
		}
		if($_POST['send'][$i]!=null){
			$data['send']=$_POST['send'][$i];
		}
		if($_POST['note'][$i]!=null){
			$data['note']=$_POST['note'][$i];
		}
		if($data['no']!=null || $data['cut']!=null || $data['peeling']!=null || $data['degrees']!=null || $data['ream']!=null || $data['perforate']!=null || $data['harden']!=null || $data['code']!=null || $data['send']!=null|| $data['note']!=null){
			$res=insert_factory($conn,$data);
		}
	}
	print_r($data);

	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['raw_material'][$i]!=null){
			$data['raw_material']=$_POST['raw_material'][$i];
		}
		if($_POST['category'][$i]!=null){
			$data['category']=$_POST['category'][$i];
		}
		if($_POST['type'][$i]!=null){
			$data['type']=$_POST['type'][$i];
		}
		if($_POST['country'][$i]!=null){
			$data['country']=$_POST['country'][$i];
		}

		if($data['on2']!=null || $data['raw_material']!=null || $data['category']!=null || $data['type']!=null || $data['country']!=null){
			$res=insert_material($conn,$data);
		}
	}


	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=analysis3";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=analysis3";
		</script>
		<?php
	}
}
//////////////////////////////////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addanalysis3') {
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['machine'][$i]!=null){
			$data['machine']=$_POST['machine'][$i];
		}
		if($_POST['number'][$i]!=null){
			$data['number']=$_POST['number'][$i];
		}
		if($_POST['manufacturer'][$i]!=null){
			$data['manufacturer']=$_POST['manufacturer'][$i];
		}

		if($data['on']!=null || $data['machine']!=null || $data['number']!=null || $data['manufacturer']!=null){
			$res=insert_electricity($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['machine2'][$i]!=null){
			$data['machine2']=$_POST['machine2'][$i];
		}
		if($_POST['number2'][$i]!=null){
			$data['number2']=$_POST['number2'][$i];
		}
		if($_POST['manufacturer2'][$i]!=null){
			$data['manufacturer2']=$_POST['manufacturer2'][$i];
		}

		if($data['no2']!=null || $data['machine2']!=null || $data['number2']!=null || $data['manufacturer2']!=null){
			$res=insert_use($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no3']);$i++){
		$data=null;
		if($_POST['no3'][$i]!=null){
			$data['no3']=$_POST['no3'][$i];
		}
		if($_POST['list3'][$i]!=null){
			$data['list3']=$_POST['list3'][$i];
		}
		if($_POST['number3'][$i]!=null){
			$data['number3']=$_POST['number3'][$i];
		}
		if($_POST['unit3'][$i]!=null){
			$data['unit3']=$_POST['unit3'][$i];
		}
		if($_POST['price3'][$i]!=null){
			$data['price3']=$_POST['price3'][$i];
		}
		if($_POST['total_price3'][$i]!=null){
			$data['total_price3']=$_POST['total_price3'][$i];
		}
		if($_POST['volume3'][$i]!=null){
			$data['volume3']=$_POST['volume3'][$i];
		}

		if($data['no3']!=null || $data['list3']!=null || $data['number3']!=null || $data['unit3']!=null || $data['price3']!=null || $data['total_price3']!=null || $data['volume3']!=null){
			$res=insert_volume($conn,$data);
		}
	}



	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=analysis4";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=analysis4";
		</script>
		<?php
	}
}

/////////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addanalysis4') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['position'][$i]!=null){
			$data['position']=$_POST['position'][$i];
		}
		if($_POST['gender'][$i]!=null){
			$data['gender']=$_POST['gender'][$i];
		}
		if($_POST['lifespan'][$i]!=null){
			$data['lifespan']=$_POST['lifespan'][$i];
		}
		if($_POST['department'][$i]!=null){
			$data['department']=$_POST['department'][$i];
		}
		if($_POST['number'][$i]!=null){
			$data['number']=$_POST['number'][$i];
		}
		if($_POST['experience'][$i]!=null){
			$data['experience']=$_POST['experience'][$i];
		}
		if($_POST['year'][$i]!=null){
			$data['year']=$_POST['year'][$i];
		}
		if($_POST['extra'][$i]!=null){
			$data['extra']=$_POST['extra'][$i];
		}

		if($data['no']!=null || $data['position']!=null || $data['gender']!=null || $data['lifespan']!=null || $data['department']!=null || $data['number']!=null || $data['experience']!=null || $data['year']!=null || $data['extra']!=null){
			$res=insertproduction($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=analysis5";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=analysis5";
		</script>
		<?php
	}
}

/////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addlocation2') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['from'][$i]!=null){
			$data['from']=$_POST['from'][$i];
		}
		if($_POST['to'][$i]!=null){
			$data['to']=$_POST['to'][$i];
		}
		if($_POST['distance'][$i]!=null){
			$data['distance']=$_POST['distance'][$i];
		}
		if($_POST['km'][$i]!=null){
			$data['km']=$_POST['km'][$i];
		}
		if($data['no']!=null || $data['from']!=null || $data['to']!=null || $data['distance']!=null || $data['km']!=null){
			$res=insertdistance($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=location3";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=location3";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addlocation3') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['street'][$i]!=null){
			$data['street']=$_POST['street'][$i];
		}
		if($_POST['km'][$i]!=null){
			$data['km']=$_POST['km'][$i];
		}

		if($data['no']!=null || $data['street']!=null || $data['km']!=null){
			$res=inserttransportation($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=location4";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=location4";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addlocation4') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['genre'][$i]!=null){
			$data['genre']=$_POST['genre'][$i];
		}
		if($_POST['gender'][$i]!=null){
			$data['gender']=$_POST['gender'][$i];
		}
		if($_POST['name'][$i]!=null){
			$data['name']=$_POST['name'][$i];
		}
		if($_POST['address'][$i]!=null){
			$data['address']=$_POST['address'][$i];
		}
		if($_POST['province'][$i]!=null){
			$data['province']=$_POST['province'][$i];
		}
		if($_POST['length'][$i]!=null){
			$data['length']=$_POST['length'][$i];
		}
		if($_POST['unit'][$i]!=null){
			$data['unit']=$_POST['unit'][$i];
		}
		if($_POST['transportm'][$i]!=null){
			$data['transportm']=$_POST['transportm'][$i];
		}

		if($data['no']!=null || $data['genre']!=null || $data['gender']!=null || $data['name']!=null || $data['address']!=null || $data['province']!=null || $data['length']!=null || $data['unit']!=null || $data['transportm']!=null){
			$res=insertmaterial($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['name2'][$i]!=null){
			$data['name2']=$_POST['name2'][$i];
		}
		if($_POST['from2'][$i]!=null){
			$data['from2']=$_POST['from2'][$i];
		}
		if($_POST['length2'][$i]!=null){
			$data['length2']=$_POST['length2'][$i];
		}
		if($_POST['km2'][$i]!=null){
			$data['km2']=$_POST['km2'][$i];
		}
		if($_POST['shipping2'][$i]!=null){
			$data['shipping2']=$_POST['shipping2'][$i];
		}

		if($data['no2']!=null || $data['name2']!=null || $data['from2']!=null || $data['length2']!=null || $data['km2']!=null || $data['shipping2']!=null){
			$res=insertmaket($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=location5";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=location5";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addlocation6') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['num'][$i]!=null){
			$data['num']=$_POST['num'][$i];
		}
		if($_POST['cost'][$i]!=null){
			$data['cost']=$_POST['cost'][$i];
		}
		if($_POST['otalcost'][$i]!=null){
			$data['otalcost']=$_POST['otalcost'][$i];
		}
		if($_POST['month'][$i]!=null){
			$data['month']=$_POST['month'][$i];
		}
		if($_POST['other'][$i]!=null){
			$data['other']=$_POST['other'][$i];
		}
		if($_POST['time'][$i]!=null){
			$data['time']=$_POST['time'][$i];
		}
		if($data['no']!=null || $data['num']!=null || $data['cost']!=null || $data['otalcost']!=null || $data['month']!=null || $data['other']!=null || $data['time']!=null){
			$res=insertperson($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=location7";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=location7";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addlocation7') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['list'][$i]!=null){
			$data['list']=$_POST['list'][$i];
		}
		if($_POST['num'][$i]!=null){
			$data['num']=$_POST['num'][$i];
		}
		if($_POST['cost'][$i]!=null){
			$data['cost']=$_POST['cost'][$i];
		}
		if($_POST['servicecharge'][$i]!=null){
			$data['servicecharge']=$_POST['servicecharge'][$i];
		}
		if($_POST['sumcost'][$i]!=null){
			$data['sumcost']=$_POST['sumcost'][$i];
		}
		if($_POST['month'][$i]!=null){
			$data['month']=$_POST['month'][$i];
		}
		if($_POST['year'][$i]!=null){
			$data['year']=$_POST['year'][$i];
		}
		if($_POST['time'][$i]!=null){
			$data['time']=$_POST['time'][$i];
		}

		if($data['no']!=null || $data['list']!=null || $data['num']!=null || $data['cost']!=null || $data['servicecharge']!=null || $data['sumcost']!=null || $data['month']!=null || $data['year']!=null || $data['time']!=null){
			$res=insertSemi_Automation($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['list2'][$i]!=null){
			$data['list2']=$_POST['list2'][$i];
		}
		if($_POST['num2'][$i]!=null){
			$data['num2']=$_POST['num2'][$i];
		}
		if($_POST['unit2'][$i]!=null){
			$data['unit2']=$_POST['unit2'][$i];
		}
		if($_POST['price2'][$i]!=null){
			$data['price2']=$_POST['price2'][$i];
		}
		if($_POST['installation_price2'][$i]!=null){
			$data['installation_price2']=$_POST['installation_price2'][$i];
		}
		if($_POST['sumcost2'][$i]!=null){
			$data['sumcost2']=$_POST['sumcost2'][$i];
		}
		if($_POST['more2'][$i]!=null){
			$data['more2']=$_POST['more2'][$i];
		}

		if($data['no2']!=null || $data['list2']!=null || $data['num2']!=null || $data['unit2']!=null || $data['price2']!=null || $data['installation_price2']!=null|| $data['sumcost2']!=null|| $data['more2']!=null){
			$res=insertautomatic($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=location8";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=location8";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addlocation8') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['name'][$i]!=null){
			$data['name']=$_POST['name'][$i];
		}
		if($_POST['num'][$i]!=null){
			$data['num']=$_POST['num'][$i];
		}
		if($_POST['manufacturer'][$i]!=null){
			$data['manufacturer']=$_POST['manufacturer'][$i];
		}
		if($_POST['phone'][$i]!=null){
			$data['phone']=$_POST['phone'][$i];
		}
		if($_POST['address'][$i]!=null){
			$data['address']=$_POST['address'][$i];
		}
		if($_POST['country'][$i]!=null){
			$data['country']=$_POST['country'][$i];
		}
		if($_POST['power'][$i]!=null){
			$data['power']=$_POST['power'][$i];
		}
		if($_POST['kW'][$i]!=null){
			$data['kW']=$_POST['kW'][$i];
		}
		if($data['no']!=null || $data['name']!=null || $data['num']!=null || $data['manufacturer']!=null || $data['phone']!=null || $data['address']!=null || $data['country']!=null|| $data['power']!=null|| $data['kW']!=null){
			$res=insertland($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=location9";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=location9";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addlocation9') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['village'][$i]!=null){
			$data['village']=$_POST['village'][$i];
		}
		if($_POST['population'][$i]!=null){
			$data['population']=$_POST['population'][$i];
		}
		if($_POST['canton'][$i]!=null){
			$data['canton']=$_POST['canton'][$i];
		}
		if($_POST['district'][$i]!=null){
			$data['district']=$_POST['district'][$i];
		}
		if($_POST['county'][$i]!=null){
			$data['county']=$_POST['county'][$i];
		}
		
		if($data['no']!=null || $data['village']!=null || $data['population']!=null || $data['canton']!=null || $data['district']!=null || $data['county']!=null){
			$res=insertsociety($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no1']);$i++){
		$data=null;
		if($_POST['no1'][$i]!=null){
			$data['no1']=$_POST['no1'][$i];
		}
		if($_POST['genre1'][$i]!=null){
			$data['genre1']=$_POST['genre1'][$i];
		}
		if($_POST['num1'][$i]!=null){
			$data['num1']=$_POST['num1'][$i];
		}
		if($_POST['distance1'][$i]!=null){
			$data['distance1']=$_POST['distance1'][$i];
		}
		if($_POST['km1'][$i]!=null){
			$data['km1']=$_POST['km1'][$i];
		}

		if($data['no1']!=null || $data['genre1']!=null || $data['num1']!=null || $data['distance1']!=null || $data['km1']!=null){
			$res=insertschool($conn,$data);
		}
	}


	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['genre2'][$i]!=null){
			$data['genre2']=$_POST['genre2'][$i];
		}
		if($_POST['num2'][$i]!=null){
			$data['num2']=$_POST['num2'][$i];
		}
		if($_POST['length2'][$i]!=null){
			$data['length2']=$_POST['length2'][$i];
		}
		if($_POST['km2'][$i]!=null){
			$data['km2']=$_POST['km2'][$i];
		}

		if($data['no2']!=null || $data['genre2']!=null || $data['num2']!=null || $data['length2']!=null || $data['km2']!=null){
			print_r($data)	;
			$res=inserthospital($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=location10";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=location10";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////
if ($_GET['action'] == 'addlocation10') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['genre'][$i]!=null){
			$data['genre']=$_POST['genre'][$i];
		}
		if($_POST['liquid'][$i]!=null){
			$data['liquid']=$_POST['liquid'][$i];
		}
		if($_POST['main_power'][$i]!=null){
			$data['main_power']=$_POST['main_power'][$i];
		}
		if($_POST['ignition'][$i]!=null){
			$data['ignition']=$_POST['ignition'][$i];
		}
		if($_POST['volume'][$i]!=null){
			$data['volume']=$_POST['volume'][$i];
		}
		if($_POST['kw'][$i]!=null){
			$data['kw']=$_POST['kw'][$i];
		}
		if($_POST['firm'][$i]!=null){
			$data['firm']=$_POST['firm'][$i];
		}
		if($_POST['country'][$i]!=null){
			$data['country']=$_POST['country'][$i];
		}
		if($data['no']!=null || $data['name']!=null || $data['num']!=null || $data['manufacturer']!=null || $data['phone']!=null || $data['address']!=null || $data['country']!=null|| $data['power']!=null|| $data['kW']!=null){
			$res=insertpower($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=location11";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=location11";
		</script>
		<?php
	}
}

/////////////////////////////////////////////////////////////////////////


if ($_GET['action'] == 'addcost1') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['name'][$i]!=null){
			$data['name']=$_POST['name'][$i];
		}
		if($_POST['country'][$i]!=null){
			$data['country']=$_POST['country'][$i];
		}
		if($_POST['price'][$i]!=null){
			$data['price']=$_POST['price'][$i];
		}
		if($_POST['service'][$i]!=null){
			$data['service']=$_POST['service'][$i];
		}
		if($_POST['num'][$i]!=null){
			$data['num']=$_POST['num'][$i];
		}
		if($_POST['cost'][$i]!=null){
			$data['cost']=$_POST['cost'][$i];
		}
		if($_POST['warrant'][$i]!=null){
			$data['warrant']=$_POST['warrant'][$i];
		}
		

		if($data['no']!=null || $data['name']!=null || $data['country']!=null || $data['price']!=null || $data['service']!=null || $data['num']!=null || $data['cost']!=null|| $data['warrant']!=null){
			$res=insertcost($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['name2'][$i]!=null){
			$data['name2']=$_POST['name2'][$i];
		}
		if($_POST['country2'][$i]!=null){
			$data['country2']=$_POST['country2'][$i];
		}
		if($_POST['price2'][$i]!=null){
			$data['price2']=$_POST['price2'][$i];
		}
		if($_POST['service2'][$i]!=null){
			$data['service2']=$_POST['service2'][$i];
		}
		if($_POST['num2'][$i]!=null){
			$data['num2']=$_POST['num2'][$i];
		}
		if($_POST['cost2'][$i]!=null){
			$data['cost2']=$_POST['cost2'][$i];
		}
		if($_POST['warrant2'][$i]!=null){
			$data['warrant2']=$_POST['warrant2'][$i];
		}

		if($data['no2']!=null || $data['name2']!=null || $data['country2']!=null || $data['price2']!=null || $data['service2']!=null || $data['num2']!=null|| $data['cost2']!=null|| $data['warrant2']!=null){
			$res=insertbuilding($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=cost2";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=cost2";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addcost2') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['position'][$i]!=null){
			$data['position']=$_POST['position'][$i];
		}
		if($_POST['makings'][$i]!=null){
			$data['makings']=$_POST['makings'][$i];
		}
		if($_POST['other'][$i]!=null){
			$data['other']=$_POST['other'][$i];
		}
		if($_POST['num'][$i]!=null){
			$data['num']=$_POST['num'][$i];
		}
		if($_POST['sum'][$i]!=null){
			$data['sum']=$_POST['sum'][$i];
		}
		
		if($data['no']!=null || $data['position']!=null || $data['makings']!=null || $data['other']!=null || $data['service']!=null || $data['sum']!=null){
			$res=insertwages($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['name2'][$i]!=null){
			$data['name2']=$_POST['name2'][$i];
		}
		if($_POST['cost2'][$i]!=null){
			$data['cost2']=$_POST['cost2'][$i];
		}
		if($_POST['other2'][$i]!=null){
			$data['other2']=$_POST['other2'][$i];
		}
		if($_POST['num2'][$i]!=null){
			$data['num2']=$_POST['num2'][$i];
		}
		if($_POST['unit2'][$i]!=null){
			$data['unit2']=$_POST['unit2'][$i];
		}
		if($_POST['expenses2'][$i]!=null){
			$data['expenses2']=$_POST['expenses2'][$i];
		}

		if($data['no2']!=null || $data['name2']!=null || $data['cost2']!=null || $data['other2']!=null || $data['num2']!=null || $data['unit2']!=null|| $data['expenses2']!=null){
			$res=insertraw_material($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=cost3";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=cost3";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////

if ($_GET['action'] == 'addcost3') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['oil'][$i]!=null){
			$data['oil']=$_POST['oil'][$i];
		}
		if($_POST['unit'][$i]!=null){
			$data['unit']=$_POST['unit'][$i];
		}
		if($_POST['rates'][$i]!=null){
			$data['rates']=$_POST['rates'][$i];
		}
		if($_POST['num'][$i]!=null){
			$data['num']=$_POST['num'][$i];
		}
		if($_POST['sum'][$i]!=null){
			$data['sum']=$_POST['sum'][$i];
		}
		
		if($data['no']!=null || $data['oil']!=null || $data['unit']!=null || $data['rates']!=null || $data['num']!=null || $data['sum']!=null){
			$res=insertmaintenance($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['name2'][$i]!=null){
			$data['name2']=$_POST['name2'][$i];
		}
		if($_POST['place2'][$i]!=null){
			$data['place2']=$_POST['place2'][$i];
		}
		if($_POST['rates2'][$i]!=null){
			$data['rates2']=$_POST['rates2'][$i];
		}
		if($_POST['num2'][$i]!=null){
			$data['num2']=$_POST['num2'][$i];
		}
		if($_POST['sum2'][$i]!=null){
			$data['sum2']=$_POST['sum2'][$i];
		}
		if($_POST['annotation2'][$i]!=null){
			$data['annotation2']=$_POST['annotation2'][$i];
		}

		if($data['no2']!=null || $data['name2']!=null || $data['place2']!=null || $data['rates2']!=null || $data['num2']!=null || $data['sum2']!=null|| $data['annotation2']!=null){
			$res=insertmaterial_handling($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=cost4";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=cost4";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////


if ($_GET['action'] == 'addcost4') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['genre'][$i]!=null){
			$data['genre']=$_POST['genre'][$i];
		}
		if($_POST['name'][$i]!=null){
			$data['name']=$_POST['name'][$i];
		}
		if($_POST['num'][$i]!=null){
			$data['num']=$_POST['num'][$i];
		}
		if($_POST['volume'][$i]!=null){
			$data['volume']=$_POST['volume'][$i];
		}
		if($_POST['cost'][$i]!=null){
			$data['cost']=$_POST['cost'][$i];
		}
		if($_POST['sum'][$i]!=null){
			$data['sum']=$_POST['sum'][$i];
		}
		
		if($data['no']!=null || $data['genre']!=null || $data['name']!=null || $data['num']!=null || $data['volume']!=null || $data['cost']!=null|| $data['sum']!=null){
			$res=insertgeneral_waste($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['genre2'][$i]!=null){
			$data['genre2']=$_POST['genre2'][$i];
		}
		if($_POST['name2'][$i]!=null){
			$data['name2']=$_POST['name2'][$i];
		}
		if($_POST['num2'][$i]!=null){
			$data['num2']=$_POST['num2'][$i];
		}
		if($_POST['volume2'][$i]!=null){
			$data['volume2']=$_POST['volume2'][$i];
		}
		if($_POST['cost2'][$i]!=null){
			$data['cost2']=$_POST['cost2'][$i];
		}
		if($_POST['sum2'][$i]!=null){
			$data['sum2']=$_POST['sum2'][$i];
		}
		
		if($data['no2']!=null || $data['genre2']!=null || $data['name2']!=null || $data['num2']!=null || $data['volume2']!=null || $data['cost2']!=null|| $data['sum2']!=null){
			$res=insertdanger($conn,$data);
		}
	}


	for($i=0;$i<count($_POST['no3']);$i++){
		$data=null;
		if($_POST['no3'][$i]!=null){
			$data['no3']=$_POST['no3'][$i];
		}
		if($_POST['genre3'][$i]!=null){
			$data['genre3']=$_POST['genre3'][$i];
		}
		if($_POST['cost3'][$i]!=null){
			$data['cost3']=$_POST['cost3'][$i];
		}
		if($_POST['annotation3'][$i]!=null){
			$data['annotation3']=$_POST['annotation3'][$i];
		}

		if($data['no3']!=null || $data['genre3']!=null || $data['cost3']!=null || $data['annotation3']!=null){
			$res=insertduty($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=cost5";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=cost5";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////


if ($_GET['action'] == 'addcost5') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['name'][$i]!=null){
			$data['name']=$_POST['name'][$i];
		}
		if($_POST['unit'][$i]!=null){
			$data['unit']=$_POST['unit'][$i];
		}
		if($_POST['rates'][$i]!=null){
			$data['rates']=$_POST['rates'][$i];
		}
		if($_POST['sum'][$i]!=null){
			$data['sum']=$_POST['sum'][$i];
		}

		if($data['no']!=null || $data['name']!=null || $data['unit']!=null || $data['rates']!=null || $data['sum']!=null){
			$res=insertpower_consumption($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['name2'][$i]!=null){
			$data['name2']=$_POST['name2'][$i];
		}
		if($_POST['place2'][$i]!=null){
			$data['place2']=$_POST['place2'][$i];
		}
		if($_POST['rates2'][$i]!=null){
			$data['rates2']=$_POST['rates2'][$i];
		}
		if($_POST['num2'][$i]!=null){
			$data['num2']=$_POST['num2'][$i];
		}
		if($_POST['sum2'][$i]!=null){
			$data['sum2']=$_POST['sum2'][$i];
		}
		if($_POST['annotation2'][$i]!=null){
			$data['annotation2']=$_POST['annotation2'][$i];
		}

		if($data['no2']!=null || $data['name2']!=null || $data['place2']!=null || $data['rates2']!=null || $data['num2']!=null || $data['sum2']!=null|| $data['annotation2']!=null){
			$res=insertoffice_equipment($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=cost6";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=cost6";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////


if ($_GET['action'] == 'addcost6') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['name'][$i]!=null){
			$data['name']=$_POST['name'][$i];
		}
		if($_POST['num'][$i]!=null){
			$data['num']=$_POST['num'][$i];
		}
		if($_POST['rates'][$i]!=null){
			$data['rates']=$_POST['rates'][$i];
		}
		if($_POST['sum'][$i]!=null){
			$data['sum']=$_POST['sum'][$i];
		}
		if($_POST['annotation'][$i]!=null){
			$data['annotation']=$_POST['annotation'][$i];
		}
		if($data['no']!=null || $data['name']!=null || $data['num']!=null || $data['rates']!=null || $data['sum']!=null || $data['annotation']!=null){
			$res=insertfactory_construction($conn,$data);
		}
	}

	for($i=0;$i<count($_POST['no2']);$i++){
		$data=null;
		if($_POST['no2'][$i]!=null){
			$data['no2']=$_POST['no2'][$i];
		}
		if($_POST['name2'][$i]!=null){
			$data['name2']=$_POST['name2'][$i];
		}
		if($_POST['num2'][$i]!=null){
			$data['num2']=$_POST['num2'][$i];
		}
		if($_POST['rates2'][$i]!=null){
			$data['rates2']=$_POST['rates2'][$i];
		}
		if($_POST['sum2'][$i]!=null){
			$data['sum2']=$_POST['sum2'][$i];
		}
		if($_POST['annotation2'][$i]!=null){
			$data['annotation2']=$_POST['annotation2'][$i];
		}
		if($data['no2']!=null || $data['name2']!=null || $data['num2']!=null || $data['rates2']!=null || $data['sum2']!=null || $data['annotation2']!=null){
			$res=insertbusiness($conn,$data);
		}
	}
	print_r($data);

	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=cost7";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=cost7";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////



if ($_GET['action'] == 'addcost7') {
	?><pre><?php print_r($_POST); ?></pre><?php
	?><pre><?php print_r(count($_POST['no'])); ?></pre><?php
	for($i=0;$i<count($_POST['no']);$i++){
		$data=null;
		if($_POST['no'][$i]!=null){
			$data['no']=$_POST['no'][$i];
		}
		if($_POST['name'][$i]!=null){
			$data['name']=$_POST['name'][$i];
		}
		if($_POST['num'][$i]!=null){
			$data['num']=$_POST['num'][$i];
		}
		if($_POST['rates'][$i]!=null){
			$data['rates']=$_POST['rates'][$i];
		}
		if($_POST['sum'][$i]!=null){
			$data['sum']=$_POST['sum'][$i];
		}
		if($_POST['annotation'][$i]!=null){
			$data['annotation']=$_POST['annotation'][$i];
		}
		if($data['no']!=null || $data['name']!=null || $data['num']!=null || $data['rates']!=null || $data['sum']!=null || $data['annotation']!=null){
			$res=insertfother_expenses($conn,$data);
		}
	}
	if($res){
		?>
		<script>
			window.location = "index.php?app=technique&action=cost7";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=technique&action=cost7";
		</script>
		<?php
	}
}
/////////////////////////////////////////////////////////////////////////
if ($_GET['action'] == 'upload_img') {
	print_r($_FILES);
	print_r($_POST);

	$name_file =  $_FILES['filUpload']['name'];
	$location_img = "../images/" . $name_file;
	$tmp_name =  $_FILES['filUpload']['tmp_name'];
	$file_type = $_FILES["filUpload"]["type"];
	$file_size = $_FILES["filUpload"]["size"];
	echo $location_img;
	move_uploaded_file($tmp_name, $location_img);
	$data["images_name"] = $location_img;
	$data["images_maintype"] = 1;
	$data["images_subtype"] = 1;
	insert_images($conn, $data);
	// if(!isset($_FILES['upload'])){
	// 	if(file_exists("../image/Employees/".$name_file)){
	// 		//$imgs = mkdir("../images/Employee/".$data['code']);
	// 		unlink("../image/Employees/".$name_file);
	// 		$locate_img ="../images/Employees/".$name_file;
	// 		move_uploaded_file($tmp_name,$locate_img);
	// 	}else{
	// 		if($name_file != ""){
	// 			$valid_ext = array('png','jpeg','jpg','gif');
	// 			$location = "../images/Employees/".$name_file;

	// 			$file_extension = pathinfo($location, PATHINFO_EXTENSION);
	// 			$file_extension = strtolower($file_extension);

	// 			if(in_array($file_extension,$valid_ext)){

	// 			// Compress Image
	// 				compressImage($tmp_name,$location,50);

	// 			}else{
	// 				echo "Invalid file type.";
	// 			}
	// 		//$locate_img ="../images/Employees/".$name_file;
	// 		//move_uploaded_file($tmp_name,$locate_img);
	// 		}

	// 	}
	// }

	// //echo $locate_img;
	// $data['img'] = $name_file;
	// $res = updateuserdata($conn,$_GET['id'],$data);
}
