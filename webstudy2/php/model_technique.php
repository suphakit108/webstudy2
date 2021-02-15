<?php 
date_default_timezone_set("Asia/Bangkok");
function insert_images(mysqli $conn,$data=[]){
	$sql = "INSERT INTO images ( 
	image_name,
	image_maintype,
	image_subtype,
	imege_dateadd
)
VALUES ('".
$data['images_name']."','".
$data['images_maintype']."','".
$data['images_subtype']."',
NOW() 
)";
if ( mysqli_query($conn, $sql)) {
	$sql = "SELECT MAX(company_code) FROM `company`";
	if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
		$data ;
		while ($row = mysqli_fetch_array($result)){
			$data= $row;
		}
		// echo $data[0];
		return $data[0];
	}
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}

function insertaccount_list(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `account_list` (`on`, `name`, `val`, `name_producer`, `tel`, `address`, `country`, `kw`, `pown`) 
	VALUES ( '".$data['on']."', '".$data['name']."', '".$data['val']."', '".$data['name_producer']."', '".$data['tel']."', '".$data['address']."', '".$data['country']."', '".$data['kw']."', '".$data['pown']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////////////////

function insert_factory(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `1.3factory_production` (`no`, `cut`, `peeling`, `degrees`, `ream`, `perforate`, `harden`, `code`, `send`, `note`) 
	VALUES ('".$data['no']."','".$data['cut']."','".$data['peeling']."','".$data['degrees']."','".$data['ream']."','".$data['perforate']."','".$data['harden']."','".$data['code']."','".$data['send']."','".$data['note']."');";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}


function insert_material(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `1.4raw_material` (`no2`, `raw_material`, `category`, `type`, `country`) 
	VALUES ('".$data['no2']."','".$data['raw_material']."','".$data['category']."','".$data['type']."','".$data['country']."');";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

////////////////////////////////////////////////////////////////////////////////


function insert_electricity(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `1.5.1electricity` (`no`, `machine`, `number`, `manufacturer`)  
	VALUES ('".$data['no']."','".$data['machine']."','".$data['number']."','".$data['manufacturer']."');";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
	
}

function insert_use(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `1.5.2water_use` (`no2`, `machine2`, `number2`, `manufacturer2`)  
	VALUES ('".$data['no2']."','".$data['machine2']."','".$data['number2']."','".$data['manufacturer2']."');";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
	
}


function insert_volume(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `1.5.3volume` (`no3`, `list3`, `number3`, `unit3`, `price3`, `total_price3`, `volume3`)
	VALUES ('".$data['no3']."','".$data['list3']."','".$data['number3']."','".$data['unit3']."','".$data['price3']."','".$data['total_price3']."','".$data['volume3']."');";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
	
}

///////////////////////////////////////////////////////////////////////////////////////

function insertproduction(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `1.6production` (`no`, `position`, `gender`, `lifespan`, `department`, `number`, `experience`, `year`, `extra`)
	VALUES ( '".$data['no']."', '".$data['position']."', '".$data['gender']."', '".$data['lifespan']."', '".$data['department']."', '".$data['number']."', '".$data['experience']."', '".$data['year']."', '".$data['extra']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

//////////////////////////////////////////////////////////////////

function insertdistance(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.1.2distance` (`no`, `from`, `to`, `distance`, `km`)
	VALUES ( '".$data['no']."', '".$data['from']."', '".$data['to']."', '".$data['distance']."', '".$data['km']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
////////////////////////////////////////////////////////////////////


function inserttransportation(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.3transportation` (`no`, `street`, `km`) 
	VALUES ( '".$data['no']."', '".$data['street']."', '".$data['km']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
////////////////////////////////////////////////////////////////////

function insertmaterial(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.4material` (`no`, `genre`, `grade`, `name`, `address`, `province`, `length`, `unit`, `transport`)
	VALUES ( '".$data['no']."', '".$data['genre']."', '".$data['grade']."', '".$data['name']."', '".$data['address']."', '".$data['province']."', '".$data['length']."', '".$data['unit']."', '".$data['transport']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertmaket(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.5maket` (`no2`, `name2`, `from2`, `length2`, `km2`, `shipping2`)
	VALUES ( '".$data['no2']."', '".$data['name2']."', '".$data['from2']."', '".$data['length2']."', '".$data['km2']."', '".$data['shipping2']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertperson(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.7.1person` (`no`, `num`, `cost`, `otalcost`, `month`, `other`, `time`)
	VALUES ( '".$data['no']."', '".$data['num']."', '".$data['cost']."', '".$data['otalcost']."', '".$data['month']."', '".$data['other']."', '".$data['time']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertSemi_Automation(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.7.2Semi_Automation` (`no`, `list`, `num`, `cost`, `servicecharge`, `sumcost`, `month`, `year`, `time`)
	VALUES ( '".$data['no']."', '".$data['list']."', '".$data['num']."', '".$data['cost']."', '".$data['servicecharge']."', '".$data['sumcost']."', '".$data['month']."', '".$data['year']."', '".$data['time']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertautomatic(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.7.3automatic` (`no2`, `list2`, `num2`, `unit2`, `price2`, `installation_price2`, `sumcost2`, `more2`)
	VALUES ( '".$data['no2']."', '".$data['list2']."', '".$data['num2']."', '".$data['unit2']."', '".$data['price2']."', '".$data['installation_price2']."', '".$data['sumcost2']."', '".$data['more2']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertland(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.8land` (`no`, `name`, `num`, `manufacturer`, `phone`, `address`, `country`, `power`, `kW`)
	VALUES ( '".$data['no']."', '".$data['name']."', '".$data['num']."', '".$data['manufacturer']."', '".$data['phone']."', '".$data['address']."', '".$data['country']."', '".$data['power']."', '".$data['kW']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertsociety(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.9society` (`no`, `village`, `population`, `canton`, `district`, `county`) 
	VALUES ( '".$data['no']."', '".$data['village']."', '".$data['population']."', '".$data['canton']."', '".$data['district']."', '".$data['county']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertschool(mysqli $conn,$data=[]){
	$sql = "INSERT INTO  `2.9.1school` (`no1`, `genre1`, `num1`, `distance1`, `km1`)
	VALUES ( '".$data['no1']."', '".$data['genre1']."', '".$data['num1']."', '".$data['distance1']."', '".$data['km1']."');";
	// echo($sql);s
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function inserthospital(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.9.2hospital` (`no2`, `genre2`, `num2`, `length2`, `km2`) 
	VALUES ( '".$data['no2']."', '".$data['genre2']."', '".$data['num2']."', '".$data['length2']."', '".$data['km2']."');";
	// echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertpower(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `2.10power` (`no`, `genre`, `liquid`, `main_power`, `ignition`, `volume`, `kw`, `firm`, `country`)
	VALUES ( '".$data['no']."', '".$data['genre']."', '".$data['liquid']."', '".$data['main_power']."', '".$data['ignition']."', '".$data['volume']."', '".$data['kw']."', '".$data['firm']."', '".$data['country']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////


function insertcost(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.1cost` (`no`, `name`, `country`, `price`, `service`, `num`, `cost`, `warrant`)
	VALUES ( '".$data['no']."', '".$data['name']."', '".$data['country']."', '".$data['price']."', '".$data['service']."', '".$data['num']."', '".$data['cost']."', '".$data['warrant']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertbuilding(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.2building` (`no2`, `name2`, `country2`, `price2`, `service2`, `num2`, `cost2`, `warrant2`)
	VALUES ( '".$data['no2']."', '".$data['name2']."', '".$data['country2']."', '".$data['price2']."', '".$data['service2']."', '".$data['num2']."', '".$data['cost2']."', '".$data['warrant2']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertwages(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.3wages` (`no`, `position`, `makings`, `other`, `num`, `sum`)
	VALUES ( '".$data['no']."', '".$data['position']."', '".$data['makings']."', '".$data['other']."', '".$data['num']."', '".$data['sum']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertraw_material(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.4raw_material` (`no2`, `name2`, `cost2`, `other2`, `num2`, `unit2`, `expenses2`)
	VALUES ( '".$data['no2']."', '".$data['name2']."', '".$data['cost2']."', '".$data['other2']."', '".$data['num2']."', '".$data['unit2']."', '".$data['expenses2']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertmaintenance(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.5maintenance` (`no`, `oil`, `unit`, `rates`, `num`, `sum`)
	VALUES ( '".$data['no']."', '".$data['oil']."', '".$data['unit']."', '".$data['rates']."', '".$data['num']."', '".$data['sum']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertmaterial_handling(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.6material_handling` (`no2`, `name2`, `place2`, `rates2`, `num2`, `sum2`, `annotation2`)
	VALUES ( '".$data['no2']."', '".$data['name2']."', '".$data['place2']."', '".$data['rates2']."', '".$data['num2']."', '".$data['sum2']."', '".$data['annotation2']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertgeneral_waste(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.7.1general_waste` (`no`, `genre`, `name`, `num`, `volume`, `cost`, `sum`)
	VALUES ( '".$data['no']."', '".$data['genre']."', '".$data['name']."', '".$data['name']."', '".$data['volume']."', '".$data['cost']."', '".$data['sum']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertdanger(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.7.2danger` (`no2`, `genre2`, `name2`, `num2`, `volume2`, `cost2`, `sum2`)
	VALUES ( '".$data['no2']."', '".$data['genre2']."', '".$data['name2']."', '".$data['num2']."', '".$data['volume2']."', '".$data['cost2']."', '".$data['sum2']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertduty(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.8duty` (`no3`, `genre3`, `cost3`, `annotation3`)
	VALUES ( '".$data['no3']."', '".$data['genre3']."', '".$data['cost3']."', '".$data['annotation3']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertpower_consumption(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.9power_consumption` (`no`, `name`, `unit`, `rates`, `sum`)
	VALUES ( '".$data['no']."', '".$data['name']."', '".$data['unit']."', '".$data['rates']."', '".$data['rates']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertoffice_equipment(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.10office_equipment` (`no2`, `name2`, `place2`, `rates2`, `num2`, `sum2`, `annotation2`)
	VALUES ( '".$data['no2']."', '".$data['name2']."', '".$data['place2']."', '".$data['rates2']."', '".$data['num2']."', '".$data['sum2']."', '".$data['annotation2']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertfactory_construction(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.11.1factory_construction` (`no`, `name`, `num`, `retes`, `sum`, `annotation`) 
	VALUES ( '".$data['no']."', '".$data['name']."', '".$data['num']."', '".$data['rates']."', '".$data['sum']."', '".$data['annotation']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}

function insertbusiness(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.11.2business` (`no2`, `name2`, `num2`, `retes2`, `sum2`, `annotation2`) 
	VALUES ( '".$data['no2']."', '".$data['name2']."', '".$data['num2']."', '".$data['rates2']."', '".$data['sum2']."', '".$data['annotation2']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////

function insertfother_expenses(mysqli $conn,$data=[]){
	$sql = "INSERT INTO `3.11.3other_expenses` (`no`, `name`, `num`, `retes`, `sum`, `annotation`) 
	VALUES ( '".$data['no']."', '".$data['name']."', '".$data['num']."', '".$data['rates']."', '".$data['sum']."', '".$data['annotation']."');";
	echo($sql);
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}

	mysqli_close($conn);
}
///////////////////////////////////////////////////////////////////