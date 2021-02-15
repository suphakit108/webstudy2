<?php
date_default_timezone_set("Asia/Bangkok");
// insertData($conn);
function getLogin(mysqli $conn, $user_name, $password)
{

	$user_name = mysqli_real_escape_string($conn, $user_name);
	$password = mysqli_real_escape_string($conn, $password);
	$sql = "SELECT * FROM user 
	WHERE user_name = '$user_name' 
	AND password = '$password' ";
	// echo "$sql";
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data;
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data = $row;
		}
		$result->close();
		return $data;
	}
}

function getcompany(mysqli $conn, $id)
{
	$sql = "SELECT * FROM company WhERE company_code = '$id'";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data;
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data = $row;
		}
		$result->close();
		return $data;
	}
}
function getscore(mysqli $conn, $id)
{
	$sql = "SELECT * FROM score WhERE company_code = '$id' 
	ORDER BY score_type ASC ,`score_subtype` ASC;";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getcompanyall(mysqli $conn)
{
	$sql = "SELECT * FROM company WhERE 1";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getcost(mysqli $conn, $id)
{
	$sql = "SELECT * FROM cost WhERE company_code = '$id'";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getanalysis(mysqli $conn, $id)
{
	$sql = "SELECT * FROM analysis WhERE company_code = '$id'";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getcompetitive_force(mysqli $conn, $id)
{
	$sql = "SELECT * FROM competitive_force WhERE company_code = '$id'";
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getcustomer(mysqli $conn, $id)
{
	$sql = "SELECT * FROM customer WhERE company_code = '$id'";
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getcompanyBycode(mysqli $conn, $id)
{
	$sql = "SELECT * FROM company WhERE Number = '$id'";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[]= $row;
		}
		$result->close();
		return $data;
	}
}
function getbank(mysqli $conn)
{
	$sql = "SELECT * FROM bank WhERE 1";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getdemand_supply(mysqli $conn, $id)
{
	$sql = "SELECT * FROM demand_supply WhERE company_code = '$id'";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getmarketing_analysis(mysqli $conn, $id)
{
	$sql = "SELECT * FROM marketing_analysis WhERE company_code = '$id'";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getmarketing_mix(mysqli $conn, $id)
{
	$sql = "SELECT * FROM marketing_mix WhERE company_code = '$id'";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function getsupply_chain(mysqli $conn, $id)
{
	$sql = "SELECT * FROM supply_chain WhERE company_code = '$id'";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function gettarget(mysqli $conn, $id)
{
	$sql = "SELECT * FROM target WhERE company_code = '$id'";
	// echo($sql);
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data = [];
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[] = $row;
		}
		$result->close();
		return $data;
	}
}
function insertUserData(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO company ( 
	company_name,
	company_local,
	company_type,
	company_project,
	month,
	offer,
	Number,
	address,
	dateadd
)
VALUES ('" .
$data['company_name'] . "','" .
$data['company_local'] . "','" .
$data['company_type'] . "','" .
$data['company_project'] . "','" .
$data['month'] . "','" .
$data['offer'] . "','" .
$data['Number'] . "','" .
$data['address'] . "',
NOW() 
)";
if (mysqli_query($conn, $sql)) {
	$sql = "SELECT MAX(company_code) FROM `company`";
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data;
		while ($row = mysqli_fetch_array($result)) {
			$data = $row;
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

function insertscore(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO score ( 
	score_type,
	score_subtype,
	company_code,
	score_number
)
VALUES ('" .
$data['score_type'] . "','" .
$data['score_subtype'] . "','" .
$data['company_code'] . "','" .
$data['score_number'] . "'
)";
echo $sql;
if (mysqli_query($conn, $sql)) {
	$sql = "SELECT MAX(company_code) FROM `company`";
	if ($result = mysqli_query($conn, $sql, MYSQLI_USE_RESULT)) {
		$data;
		while ($row = mysqli_fetch_array($result)) {
			$data = $row;
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
function delcustomer(mysqli $conn, $data)
{
	$sql = "DELETE FROM customer WHERE company_code=" . $data . ";";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}
function insertdemand_supply(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO demand_supply ( 
	company_code,
	demand,
	demand_unit,
	supply,
	month,
	supply_unit
)
VALUES ('" .
$data['company_code'] . "','" .
$data['demand'] . "','" .
$data['demand_unit'] . "','" .
$data['supply'] . "','" .
$data['month'] . "','" .
$data['supply_unit'] . "'
)";

if (mysqli_query($conn, $sql)) {

	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}
function deldemand_supply(mysqli $conn, $data)
{
	$sql = "DELETE FROM demand_supply WHERE company_code=" . $data . ";";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}
function delcompany(mysqli $conn, $data)
{
	$sql = "DELETE FROM company WHERE company_code=" . $data . ";";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}
function insertsupply_chain(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO supply_chain ( 
	Supplier1,
	Supplier2,
	Supplier3,
	yourfactory,
	customer1,
	customer2,
	customer3,
	company_code
)
VALUES ('" .
$data['Supplier1'] . "','" .
$data['Supplier2'] . "','" .
$data['Supplier3'] . "','" .
$data['yourfactory'] . "','" .
$data['customer1'] . "','" .
$data['customer2'] . "','" .
$data['customer3'] . "','" .
$data['company_code'] . "'
)";

if (mysqli_query($conn, $sql)) {

	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}
function delsupply_chain(mysqli $conn, $data)
{
	$sql = "DELETE FROM supply_chain WHERE company_code=" . $data . ";";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}
function addanalysis(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO analysis ( 
	company_code,
	type_analysis,
	main_type,
	value_numbre,
	analysis_text
)
VALUES ('" .
$data['company_code'] . "','" .
$data['type_analysis'] . "','" .
$data['main_type'] . "','" .
$data['value_numbre'] . "','" .
$data['analysis_text'] . "'
)";
echo $sql;

if (mysqli_query($conn, $sql)) {

	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}
function delanalysis(mysqli $conn, $data, $mtype, $type)
{
	$sql = "DELETE FROM analysis WHERE company_code=" . $data . " AND main_type=" . $mtype . " AND type_analysis=" . $type . ";";

	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}

function insertcustomer(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO customer ( 
	company_code,
	customer_name,
	customer_local,
	customer_phone,
	customer_email,
	customer_employe,
	customer_payment
)
VALUES ('" .
$data['company_code'] . "','" .
$data['customer_name'] . "','" .
$data['customer_local'] . "','" .
$data['customer_phone'] . "','" .
$data['customer_email'] . "','" .
$data['customer_employe'] . "','" .
$data['customer_payment'] . "'
)";
if (mysqli_query($conn, $sql)) {

	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}
mysqli_close($conn);
}
function delscore(mysqli $conn, $score_type, $score_subtypey, $id)
{
	$sql = "DELETE FROM score WHERE score_type=" . $score_type . " AND score_subtype=" . $score_subtypey . " AND company_code=$id;";
	echo $sql;
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}

function addcompetitive_force(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO competitive_force ( 
	company_code,
	type_analysis,
	main_type,
	value_numbre,
	competitive_force_text
)
VALUES ('" .
$data['company_code'] . "','" .
$data['type_analysis'] . "','" .
$data['main_type'] . "','" .
$data['value_numbre'] . "','" .
$data['competitive_force_text'] . "'
)";
echo $sql;
if (mysqli_query($conn, $sql)) {

	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}
function delcompetitive_force(mysqli $conn, $data, $mtype, $type)
{
	$sql = "DELETE FROM competitive_force WHERE company_code=" . $data . " AND main_type=" . $mtype . " AND type_analysis=" . $type . ";";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}
function addmarketing_analysis(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO marketing_analysis ( 
	company_code,
	type_analysis,
	main_type,
	value_numbre,
	marketing_analysis_text
)
VALUES ('" .
$data['company_code'] . "','" .
$data['type_analysis'] . "','" .
$data['main_type'] . "','" .
$data['value_numbre'] . "','" .
$data['marketing_analysis_text'] . "'
)";
if (mysqli_query($conn, $sql)) {

	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}
function delmarketing_analysis(mysqli $conn, $data, $mtype, $type)
{
	$sql = "DELETE FROM marketing_analysis WHERE company_code=" . $data . " AND main_type=" . $mtype . " AND type_analysis=" . $type . ";";
	echo $sql;
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}

function addmarketing_mix(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO marketing_mix ( 
	company_code,
	type_analysis,
	main_type,
	value_numbre,
	marketing_mix_text
)
VALUES ('" .
$data['company_code'] . "','" .
$data['type_analysis'] . "','" .
$data['main_type'] . "','" .
$data['value_numbre'] . "','" .
$data['marketing_mix_text'] . "'
)";
if (mysqli_query($conn, $sql)) {

	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}
function delmarketing_mix(mysqli $conn, $data, $mtype, $type)
{
	$sql = "DELETE FROM marketing_mix WHERE company_code=" . $data . " AND main_type=" . $mtype . " AND type_analysis=" . $type . ";";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}


function addtarget(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO target ( 
	company_code,
	type_analysis,
	main_type,
	value_numbre,
	target_text
)
VALUES ('" .
$data['company_code'] . "','" .
$data['type_analysis'] . "','" .
$data['main_type'] . "','" .
$data['value_numbre'] . "','" .
$data['target_text'] . "'
)";

if (mysqli_query($conn, $sql)) {

	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}
function deltarget(mysqli $conn, $data, $mtype, $type)
{
	$sql = "DELETE FROM target WHERE company_code=" . $data . " AND main_type=" . $mtype . " AND type_analysis=" . $type . ";";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}
function addcost(mysqli $conn, $data = [])
{
	$sql = "INSERT INTO cost ( 
	company_code,
	money,
	unit
)
VALUES ('" .
$data['company_code'] . "','" .
$data['money'] . "','" .
$data['unit'] . "'
)";
if (mysqli_query($conn, $sql)) {

	return true;
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	return false;
}

mysqli_close($conn);
}

function delcost(mysqli $conn, $data)
{
	$sql = "DELETE FROM cost WHERE company_code=" . $data . ";";
	if (mysqli_query($conn, $sql)) {

		return true;
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return false;
	}
	mysqli_close($conn);
}
?>