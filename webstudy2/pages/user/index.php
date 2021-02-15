<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');
if(!isset($_GET['action'])){
	if($_SESSION['administrator_user'] != ""){
		$company = getcompanyall($conn);
		require_once('userview.php');
	}else{
		$bank=getbank($conn);
		require_once('view.php');
	}
}
if($_GET['action'] == 'conclude'){
	$company = getcompany($conn,$_SESSION['company']);
	$customer = getcustomer($conn,$_SESSION['company']);
	$demand_supply = getdemand_supply($conn,$_SESSION['company']);
	$supply_chain = getsupply_chain($conn,$_SESSION['company']);
	$cost = getcost($conn,$_SESSION['company']);
	$score=getscore($conn,$_SESSION['company']);

	for ($i=0; $i < count($cost) ; $i++) {
		if($cost[$i]['money']&&$cost[$i]['unit']){
			$costs++;
		}
	}
	for ($i=0; $i < count($customer) ; $i++) {
		if($customer[$i]['customer_name']!=""&&$customer[$i]['customer_local']!=""&&$customer[$i]['customer_phone']!=""&&$customer[$i]['customer_email']!=""&&$customer[$i]['customer_employe']!=""&&$customer[$i]['customer_payment']!=""){
			$customers++;
		}
	}
	for ($i=0; $i < count($supply_chain) ; $i++) {
		if($supply_chain[$i]['Supplier1']!=""&&$supply_chain[$i]['Supplier2']!=""&&$supply_chain[$i]['Supplier3']!=""&&$supply_chain[$i]['yourfactory']!=""&&$supply_chain[$i]['customer1']!=""&&$supply_chain[$i]['customer2']!=""&&$supply_chain[$i]['customer3']!=""){
			$supply_chains++;
		}
	}
	for ($i=0; $i < count($demand_supply) ; $i++) {
		if($demand_supply[$i]['demand']!=""&&$demand_supply[$i]['demand_unit']!=""&&$demand_supply[$i]['supply']!=""&&$demand_supply[$i]['supply_unit']!=""){
			$demand_supplys++;
		}
	}
	for ($i = 0; $i < count($score); $i++) {
		if($score[$i]['score_type']=='1'){
			$stremgth+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='2'){
			$weakness+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='3'){
			$opportunities+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='4'){
			$barrier+=$score[$i]['score_number'];
		}

		if(($score[$i]['score_type']=='5'&&$score[$i]['score_subtype']=='1')||($score[$i]['score_type']=='5'&&$score[$i]['score_subtype']=='2')){
			$politic+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='5'&&$score[$i]['score_subtype']=='3'){
			$economic+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='5'&&$score[$i]['score_subtype']=='4'){
			$social+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='5'&&$score[$i]['score_subtype']=='5'){
			$technology+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='5'&&$score[$i]['score_subtype']=='6'){
			$legal+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='5'&&$score[$i]['score_subtype']=='7'){
			$environment+=$score[$i]['score_number'];
		}


		if($score[$i]['score_type']=='6'&&$score[$i]['score_subtype']=='1'){
			$product+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='6'&&$score[$i]['score_subtype']=='2'){
			$costss+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='6'&&$score[$i]['score_subtype']=='3'){
			$channels+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='6'&&$score[$i]['score_subtype']=='4'){
			$promotion+=$score[$i]['score_number'];
		}


		if($score[$i]['score_type']=='7'&&$score[$i]['score_subtype']=='1'){
			$segmentation+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='7'&&$score[$i]['score_subtype']=='2'){
			$targeting+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='7'&&$score[$i]['score_subtype']=='3'){
			$positioning+=$score[$i]['score_number'];
		}


		if($score[$i]['score_type']=='8'&&$score[$i]['score_subtype']=='1'){
			$firms+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='8'&&$score[$i]['score_subtype']=='2'){
			$cus+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='8'&&$score[$i]['score_subtype']=='3'){
			$entrant+=$score[$i]['score_number'];
		}
		if($score[$i]['score_type']=='8'&&$score[$i]['score_subtype']=='4'){
			$substitute+=$score[$i]['score_number'];
		}

	}

	$count =  count($competitive_force)+count($target)+count($marketing_mix)+count($marketing_analysis) +count($analysis)+$customers+$supply_chains+$demand_supplys+$costs;
	?>
	<?php
	require_once('conclude.php');
}
if($_GET['action'] == 'show'){
	if($_GET['id'] !="" && $_SESSION!=""){
		$_SESSION['company']=$_GET['id'];
	}
	$company = getcompany($conn,$_SESSION['company']);
	$analysis = getanalysis($conn,$_SESSION['company']);
	$competitive_force = getcompetitive_force($conn,$_SESSION['company']);
	$customer = getcustomer($conn,$_SESSION['company']);
	$demand_supply = getdemand_supply($conn,$_SESSION['company']);
	$marketing_analysis = getmarketing_analysis($conn,$_SESSION['company']);
	$marketing_mix = getmarketing_mix($conn,$_SESSION['company']);
	$supply_chain = getsupply_chain($conn,$_SESSION['company']);
	$target = gettarget($conn,$_SESSION['company']);
	$cost = getcost($conn,$_SESSION['company']);
	require_once('show.php');
}
if($_GET['action'] == 'addcompany'){
	$data['company_name'] = $_POST['company_name'];
	$data['company_local'] = $_POST['company_local'];
	$data['company_type'] = $_POST['company_type'];
	$data['company_project'] = $_POST['company_project'];
	$data['month'] = $_POST['month'];
	$data['offer'] = $_POST['offer'];
	$data['address'] = $_POST['address'];
	$data['Number'] = $_POST['code'];
	$res = insertUserData($conn,$data);
	session_start();
	$_SESSION['company'] = $res;
	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=search&code=<?php echo $data['Number'] ?>";
		</script>
		<?php
	}else{
		?> <script>
			alert('เกิดข้อผิดพลาดกรุณาลองใหม่');
		</script>
		<?php
	}
}
if($_GET['action'] == 'search'){
	require_once('search.php');
}
if($_GET['action'] == 'customer'){
	$customer = getcustomer($conn,$_SESSION['company'] );
	require_once('customer.php');
}
if($_GET['action'] == 'demand_supply'){
	$demand_supply = getdemand_supply($conn,$_SESSION['company'] );
	require_once('demand_supply.php');
}
if($_GET['action'] == 'supply_chain'){
	$supply_chain = getsupply_chain($conn,$_SESSION['company'] );
	require_once('supply_chain.php');
}
if($_GET['action'] == 'analysis'){
	$analysis = getanalysis($conn,$_SESSION['company'] );
	require_once('analysis.php');
}
// if($_GET['action'] == 'analysis2'){
// 	$analysis = getanalysis($conn,$_SESSION['company'] );
// 	require_once('analysis2.php');
// }
if($_GET['action'] == 'analysis3'){
	$analysis = getanalysis($conn,$_SESSION['company'] );
	require_once('analysis3.php');
}
// if($_GET['action'] == 'analysis4'){
// 	$analysis = getanalysis($conn,$_SESSION['company'] );
// 	require_once('analysis4.php');
// }
// if($_GET['action'] == 'analysis5'){
// 	$analysis = getanalysis($conn,$_SESSION['company'] );
// 	require_once('analysis5.php');
// }
// if($_GET['action'] == 'analysis6'){
// 	$analysis = getanalysis($conn,$_SESSION['company'] );
// 	require_once('analysis6.php');
// }
// if($_GET['action'] == 'analysis7'){
// 	$analysis = getanalysis($conn,$_SESSION['company'] );
// 	require_once('analysis7.php');
// }
if($_GET['action'] == 'analysis8'){	
	$analysis = getanalysis($conn,$_SESSION['company'] );
	require_once('analysis8.php');
}
if($_GET['action'] == 'analysis9'){
	$analysis = getanalysis($conn,$_SESSION['company'] );
	require_once('analysis9.php');
}
// if($_GET['action'] == 'analysis10'){
// 	$analysis = getanalysis($conn,$_SESSION['company'] );
// 	require_once('analysis10.php');
// }
// if($_GET['action'] == 'analysis11'){
// 	$analysis = getanalysis($conn,$_SESSION['company'] );
// 	require_once('analysis11.php');
// }
// if($_GET['action'] == 'analysis12'){
// 	$analysis = getanalysis($conn,$_SESSION['company'] );
// 	require_once('analysis12.php');
// }
if($_GET['action'] == 'marketing_analysis'){
	$marketing_analysis = getmarketing_analysis($conn,$_SESSION['company'] );
	require_once('marketing_analysis.php');
}
if($_GET['action'] == 'marketing_analysis2'){
	$marketing_analysis = getmarketing_analysis($conn,$_SESSION['company'] );
	require_once('marketing_analysis2.php');
}
if($_GET['action'] == 'marketing_analysis3'){
	$marketing_analysis = getmarketing_analysis($conn,$_SESSION['company'] );
	require_once('marketing_analysis3.php');
}
if($_GET['action'] == 'marketing_mix'){
	$marketing_mix = getmarketing_mix($conn,$_SESSION['company'] );
	require_once('marketing_mix.php');
}
if($_GET['action'] == 'marketing_mix2'){
	$marketing_mix = getmarketing_mix($conn,$_SESSION['company'] );
	require_once('marketing_mix2.php');
}
if($_GET['action'] == 'target'){
	$target = gettarget($conn,$_SESSION['company'] );
	require_once('target.php');
}
if($_GET['action'] == 'competitive_force'){
	$competitive_force = getcompetitive_force($conn,$_SESSION['company'] );
	require_once('competitive_force.php');
}
if($_GET['action'] == 'cost'){
	$cost = getcost($conn,$_SESSION['company'] );
	require_once('cost.php');
}

if($_GET['action'] == 'delshow'){
	$cost = delcompany($conn,$_GET['id']);
	$company = getcompanyall($conn);
	require_once('userview.php');
}
if($_GET['action'] == 'addcustomer'){
	$data['company_code'] =$_SESSION['company'];
	$res = delcustomer($conn,$data['company_code'] );
	if($_POST['customer_name1']!=""||$_POST['customer_local1']!=""||$_POST['customer_phone1']!=""||$_POST['customer_email1']!=""||$_POST['customer_employe1']!=""||$_POST['customer_payment1']!=""){
		$data['customer_name'] = $_POST['customer_name1'];
		$data['customer_local'] = $_POST['customer_local1'];
		$data['customer_phone'] = $_POST['customer_phone1'];
		$data['customer_email'] = $_POST['customer_email1'];
		$data['customer_employe'] = $_POST['customer_employe1'];
		$data['customer_payment'] = $_POST['customer_payment1'];
		$res = insertcustomer($conn,$data);
	}
	$data=(array) null;
	$data['company_code'] = $_SESSION['company'] ;
	if($_POST['customer_name2']!=""||$_POST['customer_local2']!=""||$_POST['customer_phone2']!=""||$_POST['customer_email2']!=""||$_POST['customer_employe2']!=""||$_POST['customer_payment2']!=""){		
		$data['customer_name'] = $_POST['customer_name2'];
		$data['customer_local'] = $_POST['customer_local2'];
		$data['customer_phone'] = $_POST['customer_phone2'];
		$data['customer_email'] = $_POST['customer_email2'];
		$data['customer_employe'] = $_POST['customer_employe2'];
		$data['customer_payment'] = $_POST['customer_payment2'];
		$res = insertcustomer($conn,$data);

	}

	$data=(array) null;
	$data['company_code'] = $_SESSION['company'] ;
	if($_POST['customer_name3']!=""||$_POST['customer_local3']!=""||$_POST['customer_phone3']!=""||$_POST['customer_email3']!=""||$_POST['customer_employe3']!=""||$_POST['customer_payment3']!=""){	
		$data['customer_name'] = $_POST['customer_name3'];
		$data['customer_local'] = $_POST['customer_local3'];
		$data['customer_phone'] = $_POST['customer_phone3'];
		$data['customer_email'] = $_POST['customer_email3'];
		$data['customer_employe'] = $_POST['customer_employe3'];
		$data['customer_payment'] = $_POST['customer_payment3'];
		$res = insertcustomer($conn,$data);		
	}
	$data=(array) null;
	$data['company_code'] =$_SESSION['company'] ;
	if($_POST['customer_name4']!=""||$_POST['customer_local4']!=""||$_POST['customer_phone4']!=""||$_POST['customer_email4']!=""||$_POST['customer_employe4']!=""||$_POST['customer_payment4']!=""){	
		$data['customer_name'] = $_POST['customer_name4'];
		$data['customer_local'] = $_POST['customer_local4'];
		$data['customer_phone'] = $_POST['customer_phone4'];
		$data['customer_email'] = $_POST['customer_email4'];
		$data['customer_employe'] = $_POST['customer_employe4'];
		$data['customer_payment'] = $_POST['customer_payment4'];
		$res = insertcustomer($conn,$data);		
	}
	$data=(array) null;
	$data['company_code'] =$_SESSION['company'] ;
	if($_POST['customer_name5']!=""||$_POST['customer_local5']!=""||$_POST['customer_phone5']!=""||$_POST['customer_email5']!=""||$_POST['customer_employe5']!=""||$_POST['customer_payment5']!=""){	
		$data['customer_name'] = $_POST['customer_name5'];
		$data['customer_local'] = $_POST['customer_local5'];
		$data['customer_phone'] = $_POST['customer_phone5'];
		$data['customer_email'] = $_POST['customer_email5'];
		$data['customer_employe'] = $_POST['customer_employe5'];
		$data['customer_payment'] = $_POST['customer_payment5'];
		$res = insertcustomer($conn,$data);
	}
	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=supply_chain";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=supply_chain";
		</script>
		<?php
	}
}
if($_GET['action'] == 'addsupply_chain'){

	$data['company_code'] = $_SESSION['company'] ;
	$res = delsupply_chain($conn,$data['company_code'] );
	if($_POST['Supplier1']!=""||$_POST['Supplier2']!=""||$_POST['Supplier3']!=""||$_POST['yourfactory']!=""||$_POST['customer1']!=""||$_POST['customer2']!=""||$_POST['customer3']!=""){	
		$data['Supplier1'] = $_POST['Supplier1'];
		$data['Supplier2'] = $_POST['Supplier2'];
		$data['Supplier3'] = $_POST['Supplier3'];
		$data['yourfactory'] = $_POST['yourfactory'];
		$data['customer1'] = $_POST['customer1'];
		$data['customer2'] = $_POST['customer2'];
		$data['customer3'] = $_POST['customer3'];
		$res = insertsupply_chain($conn,$data);
	}
	if($_POST['Supplier11']!=""||$_POST['Supplier12']!=""||$_POST['Supplier13']!=""||$_POST['yourfactory1']!=""||$_POST['customer11']!=""||$_POST['customer12']!=""||$_POST['customer13']!=""){	
		$data['Supplier1'] = $_POST['Supplier11'];
		$data['Supplier2'] = $_POST['Supplier12'];
		$data['Supplier3'] = $_POST['Supplier13'];
		$data['yourfactory'] = $_POST['yourfactory1'];
		$data['customer1'] = $_POST['customer11'];
		$data['customer2'] = $_POST['customer12'];
		$data['customer3'] = $_POST['customer13'];
		$res = insertsupply_chain($conn,$data);
	}
	if($_POST['Supplier21']!=""||$_POST['Supplier22']!=""||$_POST['Supplier23']!=""||$_POST['yourfactory2']!=""||$_POST['customer21']!=""||$_POST['customer22']!=""||$_POST['customer23']!=""){	
		$data['Supplier1'] = $_POST['Supplier21'];
		$data['Supplier2'] = $_POST['Supplier22'];
		$data['Supplier3'] = $_POST['Supplier23'];
		$data['yourfactory'] = $_POST['yourfactory2'];
		$data['customer1'] = $_POST['customer21'];
		$data['customer2'] = $_POST['customer22'];
		$data['customer3'] = $_POST['customer23'];
		$res = insertsupply_chain($conn,$data);
	}
	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=demand_supply";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=demand_supply";
		</script>"
		<?php
	}
}
if($_GET['action'] == 'adddemand_supply'){
	$data['company_code'] = $_SESSION['company'];
	$res = deldemand_supply($conn,$data['company_code'] );
	if($_POST['demand']!=""||$_POST['demand_unit']!=""||$_POST['supply']!=""||$_POST['supply_unit']!=""){
		$data['demand'] = $_POST['demand'];
		$data['demand_unit'] = $_POST['demand_unit'];
		$data['supply'] = $_POST['supply'];
		$data['supply_unit'] = $_POST['supply_unit'];
		$data['month'] = 1;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand2']!=""||$_POST['demand_unit2']!=""||$_POST['supply2']!=""||$_POST['supply_unit2']!=""){
		$data['demand'] = $_POST['demand2'];
		$data['demand_unit'] = $_POST['demand_unit2'];
		$data['supply'] = $_POST['supply2'];
		$data['supply_unit'] = $_POST['supply_unit2'];
		$data['month'] = 2;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand3']!=""||$_POST['demand_unit3']!=""||$_POST['supply3']!=""||$_POST['supply_unit3']!=""){
		$data['demand'] = $_POST['demand3'];
		$data['demand_unit'] = $_POST['demand_unit3'];
		$data['supply'] = $_POST['supply3'];
		$data['supply_unit'] = $_POST['supply_unit3'];
		$data['month'] = 3;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand4']!=""||$_POST['demand_unit4']!=""||$_POST['supply4']!=""||$_POST['supply_unit4']!=""){
		$data['demand'] = $_POST['demand4'];
		$data['demand_unit'] = $_POST['demand_unit4'];
		$data['supply'] = $_POST['supply4'];
		$data['supply_unit'] = $_POST['supply_unit4'];
		$data['month'] = 4;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand5']!=""||$_POST['demand_unit5']!=""||$_POST['supply5']!=""||$_POST['supply_unit5']!=""){
		$data['demand'] = $_POST['demand5'];
		$data['demand_unit'] = $_POST['demand_unit5'];
		$data['supply'] = $_POST['supply5'];
		$data['supply_unit'] = $_POST['supply_unit5'];
		$data['month'] = 5;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand6']!=""||$_POST['demand_unit6']!=""||$_POST['supply6']!=""||$_POST['supply_unit6']!=""){
		$data['demand'] = $_POST['demand6'];
		$data['demand_unit'] = $_POST['demand_unit6'];
		$data['supply'] = $_POST['supply6'];
		$data['supply_unit'] = $_POST['supply_unit6'];
		$data['month'] = 6;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand7']!=""||$_POST['demand_unit7']!=""||$_POST['supply7']!=""||$_POST['supply_unit7']!=""){
		$data['demand'] = $_POST['demand7'];
		$data['demand_unit'] = $_POST['demand_unit7'];
		$data['supply'] = $_POST['supply7'];
		$data['supply_unit'] = $_POST['supply_unit7'];
		$data['month'] = 7;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand8']!=""||$_POST['demand_unit8']!=""||$_POST['supply8']!=""||$_POST['supply_unit8']!=""){
		$data['demand'] = $_POST['demand8'];
		$data['demand_unit'] = $_POST['demand_unit8'];
		$data['supply'] = $_POST['supply8'];
		$data['supply_unit'] = $_POST['supply_unit8'];
		$data['month'] = 8;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand9']!=""||$_POST['demand_unit9']!=""||$_POST['supply9']!=""||$_POST['supply_unit9']!=""){
		$data['demand'] = $_POST['demand9'];
		$data['demand_unit'] = $_POST['demand_unit9'];
		$data['supply'] = $_POST['supply9'];
		$data['supply_unit'] = $_POST['supply_unit9'];
		$data['month'] = 9;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand10']!=""||$_POST['demand_unit10']!=""||$_POST['supply10']!=""||$_POST['supply_unit10']!=""){
		$data['demand'] = $_POST['demand10'];
		$data['demand_unit'] = $_POST['demand_unit10'];
		$data['supply'] = $_POST['supply10'];
		$data['supply_unit'] = $_POST['supply_unit10'];
		$data['month'] = 10;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand11']!=""||$_POST['demand_unit11']!=""||$_POST['supply11']!=""||$_POST['supply_unit11']!=""){
		$data['demand'] = $_POST['demand11'];
		$data['demand_unit'] = $_POST['demand_unit11'];
		$data['supply'] = $_POST['supply11'];
		$data['supply_unit'] = $_POST['supply_unit11'];
		$data['month'] = 11;
		$res = insertdemand_supply($conn,$data);
	}
	if($_POST['demand12']!=""||$_POST['demand_unit12']!=""||$_POST['supply12']!=""||$_POST['supply_unit12']!=""){
		$data['demand'] = $_POST['demand12'];
		$data['demand_unit'] = $_POST['demand_unit12'];
		$data['supply'] = $_POST['supply12'];
		$data['supply_unit'] = $_POST['supply_unit12'];
		$data['month'] = 12;
		$res = insertdemand_supply($conn,$data);
	}
	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=analysis";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=analysis";
		</script>
		<?php
	}
}

if($_GET['action'] == 'addanalysis'){
	$res = delscore($conn,1,1,$_SESSION['company']);
	$res = delscore($conn,1,2,$_SESSION['company']);
	$data['company_code'] =$_SESSION['company'] ;
	$pattern = "/แรงงานไร้ฝีมือ|แรงงานกึ่งฝีมือ|แรงงานฝีมือ|แรงงานเชี่ยวชาญ|แรงงานเฉพะทาง/";
	if(preg_match_all($pattern, $_POST['text1'], $matches)) {
		// print_r($matches);
	}
	$num=0;
	$str=array("แรงงานไร้ฝีมือ","แรงงานกึ่งฝีมือ","แรงงานฝีมือ","แรงงานเชี่ยวชาญ","แรงงานเฉพะทาง");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 1;
	$data['score_subtype'] = 1;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$num=0;
	echo"<br>";
	$pattern = "/ไม่มีทักษะการทำงาน|มีทักษะทางด้านเทคนิค|มีทักษะในการดูแลการผลิต|มีทักษะการควบคุมคุณภาพ|มีทักษะความรู้ความเข้าใจ/";
	if(preg_match_all($pattern, $_POST['text2'], $matches)) {
		// print_r($matches);
	}
	$num=0;
	$str=array("ไม่มีทักษะการทำงาน","มีทักษะทางด้านเทคนิค","มีทักษะในการดูแลการผลิต","มีทักษะการควบคุมคุณภาพ","มีทักษะความรู้ความเข้าใจ");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	echo"<br>";
	$data['score_type'] = 1;
	$data['score_subtype'] = 2;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$res = delanalysis($conn,$data['company_code'],1,1);
	$res = delanalysis($conn,$data['company_code'],1,2);
	echo "delanalysis";
	if($_POST['Stremgth1']!=""){

		$data['analysis_text'] = $_POST['Stremgth1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['Stremgth2']!=""){
		$data['analysis_text'] = $_POST['Stremgth2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['Stremgth3']!=""){
		$data['analysis_text'] = $_POST['Stremgth3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['Stremgth4']!=""){
		$data['analysis_text'] = $_POST['Stremgth4'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['Stremgth5']!=""){
		$data['analysis_text'] = $_POST['Stremgth5'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text1']!=""){
		$data['analysis_text'] = $_POST['text1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 6;
		$res = addanalysis($conn,$data);
	}
	if($_POST['Skills1']!=""){
		$data['analysis_text'] = $_POST['Skills1'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 1;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['Skills2']!=""){
		$data['analysis_text'] = $_POST['Skills2'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 1;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['Skills3']!=""){
		$data['analysis_text'] = $_POST['Skills3'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 1;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['Skills4']!=""){
		$data['analysis_text'] = $_POST['Skills4'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 1;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['Skills5']!=""){
		$data['analysis_text'] = $_POST['Skills5'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 1;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text2']!=""){
		$data['analysis_text'] = $_POST['text2'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 1;
		$data['value_numbre'] = 6;
		$res = addanalysis($conn,$data);
	}
	                     //analysis3//
	// $data['company_code'] = $_SESSION['company'];
	$res = delscore($conn,1,3,$_SESSION['company']);
	$res = delscore($conn,1,4,$_SESSION['company']);
	$pattern = "/ไม่มีระบบมาตราฐาน|ระบบบริหารคุณภาพ|ระบบบริหารคุณภาพ เพื่ออุตสาหกรรมยานยนต์|ระบบการจัดการสิ่งแวดล้อม|ระบบการจัดการอาชีวอานามัย และความปลอดภัย/";
	if(preg_match_all($pattern, $_POST['text3'], $matches)) {
		// print_r($matches);
	}
	$num=0;
	$str=array("ไม่มีระบบมาตราฐาน","ระบบบริหารคุณภาพ","ระบบบริหารคุณภาพ เพื่ออุตสาหกรรมยานยนต์","ระบบการจัดการสิ่งแวดล้อม","ระบบการจัดการอาชีวอานามัย และความปลอดภัย");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "<br>";
				echo "bb=".$str[$j];
				echo "<br>";
				echo $num;
				echo "<br>";
				$i=0;
				$j++; 
			}
		}

	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 1;
	$data['score_subtype'] = 3;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/ไม่สามารถออกแบบ|ไม่สามารถทดสอบผลิตภัณฑ์ได้|วิศวกรออกแบบผลิตภัณฑ์แต่ไม่สามารถทดสอบผลิตภัณฑ์ได้|วิศกรออกแบบผลิตภัณฑ์ได้และสามารถทดสอบผลิตภัณฑ์ได้บางส่วน|วิศวกรออกแบบผลิตภัณฑ์ได้และสามารถทดสอบผลิตภัณฑ์ได้ทั้งหมด/";
	if(preg_match_all($pattern, $_POST['text4'], $matches)) {

	}
	$num=0;
	$str=array("ไม่สามารถออกแบบ","ไม่สามารถทดสอบผลิตภัณฑ์ได้","วิศวกรออกแบบผลิตภัณฑ์แต่ไม่สามารถทดสอบผลิตภัณฑ์ได้","วิศกรออกแบบผลิตภัณฑ์ได้และสามารถทดสอบผลิตภัณฑ์ได้บางส่วน","วิศวกรออกแบบผลิตภัณฑ์ได้และสามารถทดสอบผลิตภัณฑ์ได้ทั้งหมด");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 1;
	$data['score_subtype'] = 4;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$res = delanalysis($conn,$data['company_code'],1,3);
	$res = delanalysis($conn,$data['company_code'],1,4);
	if($_POST['iso1']!=""){
		$data['analysis_text'] = $_POST['iso1'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 1;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['iso2']!=""){
		$data['analysis_text'] = $_POST['iso2'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 1;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['iso3']!=""){
		$data['analysis_text'] = $_POST['iso3'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 1;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['iso4']!=""){
		$data['analysis_text'] = $_POST['iso4'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 1;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['iso5']!=""){
		$data['analysis_text'] = $_POST['iso5'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 1;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text3']!=""){
		$data['analysis_text'] = $_POST['text3'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 1;
		$data['value_numbre'] = 6;
		$res = addanalysis($conn,$data);
	}
	if($_POST['ability1']!=""){
		$data['analysis_text'] = $_POST['ability1'];
		$data['type_analysis'] = 4;
		$data['main_type'] = 1;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['ability2']!=""){
		$data['analysis_text'] = $_POST['ability2'];
		$data['type_analysis'] = 4;
		$data['main_type'] = 1;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['ability3']!=""){
		$data['analysis_text'] = $_POST['ability3'];
		$data['type_analysis'] = 4;
		$data['main_type'] = 1;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['ability4']!=""){
		$data['analysis_text'] = $_POST['ability4'];
		$data['type_analysis'] = 4;
		$data['main_type'] = 1;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['ability5']!=""){
		$data['analysis_text'] = $_POST['ability5'];
		$data['type_analysis'] = 4;
		$data['main_type'] = 1;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text4']!=""){
		$data['analysis_text'] = $_POST['text4'];
		$data['type_analysis'] = 4;
		$data['main_type'] = 1;
		$data['value_numbre'] = 6;
		$res = addanalysis($conn,$data);
	}
	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=analysis3";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=analysis3";
			<?php
		}
	}
	if($_GET['action'] == 'addanalysis3'){
		$res = delscore($conn,2,1,$_SESSION['company']);
		$res = delscore($conn,2,2,$_SESSION['company']);
		$data['company_code'] = $_SESSION['company'] ;
		$pattern = "/เทคโนโลยีจากต่างประเทศไม่ใช่ไทยร้อยละ 50|มีการใช้วัตถุดิบจากประเทศในกลุ่มอาเซียนร้อยละ 50|เทคโนโลยีจากต่างประเทศไม่ใช่ไทยร้อยละ 100|มีการใช้วัตถุดิบในประเทศไทยร้อยละ 100|มีการใช้วัตถุดิบและเทคโนโลยีในประเทศร้อยละ 100/";
		if(preg_match_all($pattern, $_POST['text1'], $matches)) {
			// print_r($matches);
		}
		$num=0;
		$str=array("เทคโนโลยีจากต่างประเทศไม่ใช่ไทยร้อยละ 50","มีการใช้วัตถุดิบจากประเทศในกลุ่มอาเซียนร้อยละ 50","เทคโนโลยีจากต่างประเทศไม่ใช่ไทยร้อยละ 100","มีการใช้วัตถุดิบในประเทศไทยร้อยละ 100","มีการใช้วัตถุดิบและเทคโนโลยีในประเทศร้อยละ 100");
		for ($j = 0; $j < count($str) ; $j++) {
			for ($i = 0; $i < count($matches[0]) ; $i++) {
				if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
					$num +=	$j+1;	
					echo "aa=".$matches[0][$i];
					echo "bb=".$str[$j];
					echo "j=".$j;
					echo "<br>";
				}

			}
		}
		if ($num>5) {
			$num=5;
		}
		echo "SUM= ".$num;
		$data['score_type'] = 2;
		$data['score_subtype'] = 1;
		$data['score_number'] = $num;
		$res = insertscore($conn,$data);
		$sum=0;
		echo"<br>";
		$pattern = "/มีการทำการตลาด|มีการทำการตลาดกับลูกค้าทั่วไป|มีการทำการตลาดโดยรับจ้าง|บริษัทผู้ผลิตรถยนต์
		(OEM) และมีการเชื่อมโยงการทำธุรกิจกับผู้ผลิต SME/";
		if(preg_match_all($pattern, $_POST['text2'],$matches)) {
			// print_r($matches);
		}
		$num=0;
		$str=array("มีการทำการตลาด","มีการทำการตลาดกับลูกค้าทั่วไป","มีการทำการตลาดโดยรับจ้าง","บริษัทผู้ผลิตรถยนต์
			(OEM) และมีการเชื่อมโยงการทำธุรกิจกับผู้ผลิต SME");
		for ($j = 0; $j < count($str) ; $j++) {
			for ($i = 0; $i < count($matches[0]) ; $i++) {
				if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
					$num +=	$j+1;	
					echo "aa=".$matches[0][$i];
					echo "bb=".$str[$j];
					echo "j=".$j;
					echo "<br>";
				}

			}
		}
		if ($num>5) {
			$num=5;
		}
		echo "SUM= ".$num;
		$data['score_type'] = 2;
		$data['score_subtype'] = 2;
		$data['score_number'] = $num;
		$res = insertscore($conn,$data);
		$res = delanalysis($conn,$data['company_code'],2,1);
		$res = delanalysis($conn,$data['company_code'],2,2);
		if($_POST['importing1']!=""){
			$data['analysis_text'] = $_POST['importing1'];
			$data['type_analysis'] = 1;
			$data['main_type'] = 2;
			$data['value_numbre'] = 1;
			$res = addanalysis($conn,$data);

		}
		if($_POST['importing2']!=""){
			$data['analysis_text'] = $_POST['importing2'];
			$data['type_analysis'] = 1;
			$data['main_type'] = 2;
			$data['value_numbre'] = 2;
			$res = addanalysis($conn,$data);

		}
		if($_POST['importing3']!=""){
			$data['analysis_text'] = $_POST['importing3'];
			$data['type_analysis'] = 1;
			$data['main_type'] = 2;
			$data['value_numbre'] = 3;
			$res = addanalysis($conn,$data);

		}
		if($_POST['importing4']!=""){
			$data['analysis_text'] = $_POST['importing4'];
			$data['type_analysis'] = 1;
			$data['main_type'] = 2;
			$data['value_numbre'] = 4;
			$res = addanalysis($conn,$data);

		}
		if($_POST['importing5']!=""){
			$data['analysis_text'] = $_POST['importing5'];
			$data['type_analysis'] = 1;
			$data['main_type'] = 2;
			$data['value_numbre'] = 5;
			$res = addanalysis($conn,$data);
		}
		if($_POST['text1']!=""){
			$data['analysis_text'] = $_POST['text1'];
			$data['type_analysis'] = 1;
			$data['main_type'] = 2;
			$data['value_numbre'] = 6;
			$res = addanalysis($conn,$data);
		}
		if($_POST['marketing1']!=""){
			$data['analysis_text'] = $_POST['marketing1'];
			$data['type_analysis'] = 2;
			$data['main_type'] = 2;
			$data['value_numbre'] = 1;
			$res = addanalysis($conn,$data);

		}
		if($_POST['marketing2']!=""){
			$data['analysis_text'] = $_POST['marketing2'];
			$data['type_analysis'] = 2;
			$data['main_type'] = 2;
			$data['value_numbre'] = 2;
			$res = addanalysis($conn,$data);

		}
		if($_POST['marketing3']!=""){
			$data['analysis_text'] = $_POST['marketing3'];
			$data['type_analysis'] = 2;
			$data['main_type'] = 2;
			$data['value_numbre'] = 3;
			$res = addanalysis($conn,$data);
		}
		if($_POST['marketing4']!=""){
			$data['analysis_text'] = $_POST['marketing4'];
			$data['type_analysis'] = 2;
			$data['main_type'] = 2;
			$data['value_numbre'] = 4;
			$res = addanalysis($conn,$data);
		}
		if($_POST['text2']!=""){
			$data['analysis_text'] = $_POST['text2'];
			$data['type_analysis'] = 2;
			$data['main_type'] = 2;
			$data['value_numbre'] = 5;
			$res = addanalysis($conn,$data);
		}

		//analysis4
		$res = delscore($conn,2,3,$_SESSION['company']);
		$res = delscore($conn,2,4,$_SESSION['company']);
		$data['company_code'] = $_SESSION['company'];

		$pattern = "/ไม่มีเครื่องมือ|ส่งทดสอบตามศูนย์|ส่งทดสอบโดยให้บริษัทผู้ผลิต|ส่งทดสอบให้กับผู้รับจ้าง|ส่งทดสอบให้กับโรงงานอุตสาหกรรม/";
		if(preg_match_all($pattern, $_POST['text3'], $matches)) {
		// print_r($matches);
		}
		$num=0;
		$str=array("ไม่มีเครื่องมือ","ส่งทดสอบตามศูนย์","ส่งทดสอบโดยให้บริษัทผู้ผลิต","ส่งทดสอบให้กับผู้รับจ้าง","ส่งทดสอบให้กับโรงงานอุตสาหกรรม");
		for ($j = 0; $j < count($str) ; $j++) {
			for ($i = 0; $i < count($matches[0]) ; $i++) {
				if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
					$num +=	$j+1;	
					echo "aa=".$matches[0][$i];
					echo "bb=".$str[$j];
					echo "j=".$j;
					echo "<br>";
				}
			}
		}
		if ($num>5) {
			$num=5;
		}
		echo "SUM= ".$num;
		$data['score_type'] = 2;
		$data['score_subtype'] = 3;
		$data['score_number'] = $num;
		$res = insertscore($conn,$data);
		$sum=0;
		echo"<br>";
		$pattern = "/ธนาคาร|กู้ยืมจากญาติพี่น้อง|กู้ยืมจากเงินนอกระบบ|การรีไฟแนนซ์|การขายสินทร้พย์/";
		if(preg_match_all($pattern, $_POST['text4'], $matches)) {
		// print_r($matches);
		}
		$num=0;
		$str=array("ธนาคาร","กู้ยืมจากญาติพี่น้อง","กู้ยืมจากเงินนอกระบบ","การรีไฟแนนซ์","การขายสินทร้พย์");
		for ($j = 0; $j < count($str) ; $j++) {
			for ($i = 0; $i < count($matches[0]) ; $i++) {
				if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
					$num +=	$j+1;	
					echo "aa=".$matches[0][$i];
					echo "bb=".$str[$j];
					echo "j=".$j;
					echo "<br>";
				}
			}
		}
		if ($num>5) {
			$num=5;
		}
		echo "SUM= ".$num;
		$data['score_type'] = 2;
		$data['score_subtype'] = 4;
		$data['score_number'] = $num;
		$res = insertscore($conn,$data);
		$res = delanalysis($conn,$data['company_code'],2,3);
		$res = delanalysis($conn,$data['company_code'],2,4);
		if($_POST['equipment1']!=""){
			$data['analysis_text'] = $_POST['equipment1'];
			$data['type_analysis'] = 3;
			$data['main_type'] = 2;
			$data['value_numbre'] = 1;
			$res = addanalysis($conn,$data);

		}
		if($_POST['equipment2']!=""){
			$data['analysis_text'] = $_POST['equipment2'];
			$data['type_analysis'] = 3;
			$data['main_type'] = 2;
			$data['value_numbre'] = 2;
			$res = addanalysis($conn,$data);

		}
		if($_POST['equipment3']!=""){
			$data['analysis_text'] = $_POST['equipment3'];
			$data['type_analysis'] = 3;
			$data['main_type'] = 2;
			$data['value_numbre'] = 3;
			$res = addanalysis($conn,$data);

		}
		if($_POST['equipment4']!=""){
			$data['analysis_text'] = $_POST['equipment4'];
			$data['type_analysis'] = 3;
			$data['main_type'] = 2;
			$data['value_numbre'] = 4;
			$res = addanalysis($conn,$data);
		}
		if($_POST['equipment5']!=""){
			$data['analysis_text'] = $_POST['equipment5'];
			$data['type_analysis'] = 3;
			$data['main_type'] = 2;
			$data['value_numbre'] = 5;
			$res = addanalysis($conn,$data);
		}
		if($_POST['text3']!=""){
			$data['analysis_text'] = $_POST['text3'];
			$data['type_analysis'] = 3;
			$data['main_type'] = 2;
			$data['value_numbre'] = 6;
			$res = addanalysis($conn,$data);
		}
		if($_POST['funding1']!=""){
			$data['analysis_text'] = $_POST['funding1'];
			$data['type_analysis'] = 4;
			$data['main_type'] = 2;
			$data['value_numbre'] = 1;
			$res = addanalysis($conn,$data);
		}
		if($_POST['funding2']!=""){
			$data['analysis_text'] = $_POST['funding2'];
			$data['type_analysis'] = 4;
			$data['main_type'] = 2;
			$data['value_numbre'] = 2;
			$res = addanalysis($conn,$data);
		}
		if($_POST['funding3']!=""){
			$data['analysis_text'] = $_POST['funding3'];
			$data['type_analysis'] = 4;
			$data['main_type'] = 2;
			$data['value_numbre'] = 3;
			$res = addanalysis($conn,$data);
		}
		if($_POST['funding4']!=""){
			$data['analysis_text'] = $_POST['funding4'];
			$data['type_analysis'] = 4;
			$data['main_type'] = 2;
			$data['value_numbre'] = 4;
			$res = addanalysis($conn,$data);

		}
		if($_POST['funding5']!=""){
			$data['analysis_text'] = $_POST['funding5'];
			$data['type_analysis'] = 4;
			$data['main_type'] = 2;
			$data['value_numbre'] = 5;
			$res = addanalysis($conn,$data);
		}
		if($_POST['text4']!=""){
			$data['analysis_text'] = $_POST['text4'];
			$data['type_analysis'] = 4;
			$data['main_type'] = 2;
			$data['value_numbre'] = 6;
			$res = addanalysis($conn,$data);
		}
		//analysis5//
		$res = delscore($conn,2,5,$_SESSION['company']);
		$res = delscore($conn,2,6,$_SESSION['company']);
		$data['company_code'] = $_SESSION['company'] ;

		$pattern = "/ใช้แรงงานที่ไม่มีทักษะ|ประสบการณ์ในการทำงาน 1-3 ปี|ใประสบการณ์ในการทำงาน 3-5 ปี|ประสบการณ์ในการทำงาน 5-10 ปี|ประสบการณ์ในการทำงานมากกว่า 10 ปี ขึ้นไป/";
		if(preg_match_all($pattern, $_POST['text5'], $matches)) {
		// print_r($matches);
		}
		$num=0;
		$str=array("ใช้แรงงานที่ไม่มีทักษะ","ประสบการณ์ในการทำงาน 1-3 ปี","ประสบการณ์ในการทำงาน 3-5 ปี","ประสบการณ์ในการทำงาน 5-10 ปี","ประสบการณ์ในการทำงานมากกว่า 10 ปี ขึ้นไป");
		for ($j = 0; $j < count($str) ; $j++) {
			for ($i = 0; $i < count($matches[0]) ; $i++) {
				if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
					$num +=	$j+1;	
					echo "aa=".$matches[0][$i];
					echo "bb=".$str[$j];
					echo "j=".$j;
					echo "<br>";
				}
			}
		}
		if ($num>5) {
			$num=5;
		}
		echo "SUM= ".$num;
		$data['score_type'] = 2;
		$data['score_subtype'] = 5;
		$data['score_number'] = $num;
		$res = insertscore($conn,$data);
		$sum=0;
		echo"<br>";
		$pattern = "/แรงงานใช้คนร้อยละ 100|เครื่องจักรร้อยละ 25|แรงงานใช้คนร้อยละ 50|แรงงานใช้คนร้อยละ 25|แรงงานใช้คนร้อยละ 0/";

		if(preg_match_all($pattern, $_POST['text6'], $matches)) {
		// print_r($matches);
		}
		$num=0;
		$str=array("แรงงานใช้คนร้อยละ 100","แรงงานใช้คนร้อยละ 75","แรงงานใช้คนร้อยละ 50","แรงงานใช้คนร้อยละ 25","แรงงานใช้คนร้อยละ 0");
		for ($j = 0; $j < count($str) ; $j++) {
			for ($i = 0; $i < count($matches[0]) ; $i++) {
				if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
					$num +=	$j+1;	
					echo "aa=".$matches[0][$i];
					echo "bb=".$str[$j];
					echo "j=".$j;
					echo "<br>";
				}
			}
		}
		if ($num>5) {
			$num=5;
		}
		echo "SUM= ".$num;
		$data['score_type'] = 2;
		$data['score_subtype'] = 6;
		$data['score_number'] = $num;
		$res = insertscore($conn,$data);
		$res = delanalysis($conn,$data['company_code'],2,5);
		$res = delanalysis($conn,$data['company_code'],2,6);
		if($_POST['shortage1']!=""){
			$data['analysis_text'] = $_POST['shortage1'];
			$data['type_analysis'] = 5;
			$data['main_type'] = 2;
			$data['value_numbre'] = 1;
			$res = addanalysis($conn,$data);
		}
		if($_POST['shortage2']!=""){
			$data['analysis_text'] = $_POST['shortage2'];
			$data['type_analysis'] = 5;
			$data['main_type'] = 2;
			$data['value_numbre'] = 2;
			$res = addanalysis($conn,$data);
		}
		if($_POST['shortage3']!=""){
			$data['analysis_text'] = $_POST['shortage3'];
			$data['type_analysis'] =5;
			$data['main_type'] = 2;
			$data['value_numbre'] = 3;
			$res = addanalysis($conn,$data);
		}
		if($_POST['shortage4']!=""){
			$data['analysis_text'] = $_POST['shortage4'];
			$data['type_analysis'] = 5;
			$data['main_type'] = 2;
			$data['value_numbre'] = 4;
			$res = addanalysis($conn,$data);
		}
		if($_POST['shortage5']!=""){
			$data['analysis_text'] = $_POST['shortage5'];
			$data['type_analysis'] = 5;
			$data['main_type'] = 2;
			$data['value_numbre'] = 5;
			$res = addanalysis($conn,$data);
		}
		if($_POST['text5']!=""){
			$data['analysis_text'] = $_POST['text5'];
			$data['type_analysis'] = 5;
			$data['main_type'] = 2;
			$data['value_numbre'] = 6;
			$res = addanalysis($conn,$data);
		}
		if($_POST['working1']!=""){
			$data['analysis_text'] = $_POST['working1'];
			$data['type_analysis'] = 6;
			$data['main_type'] = 2;
			$data['value_numbre'] = 1;
			$res = addanalysis($conn,$data);
		}
		if($_POST['working2']!=""){
			$data['analysis_text'] = $_POST['working2'];
			$data['type_analysis'] = 6;
			$data['main_type'] = 2;
			$data['value_numbre'] = 2;
			$res = addanalysis($conn,$data);
		}
		if($_POST['working3']!=""){
			$data['analysis_text'] = $_POST['working3'];
			$data['type_analysis'] = 6;
			$data['main_type'] = 2;
			$data['value_numbre'] = 3;
			$res = addanalysis($conn,$data);
		}
		if($_POST['working4']!=""){
			$data['analysis_text'] = $_POST['working4'];
			$data['type_analysis'] = 6;
			$data['main_type'] = 2;
			$data['value_numbre'] = 4;
			$res = addanalysis($conn,$data);

		}
		if($_POST['working5']!=""){
			$data['analysis_text'] = $_POST['working5'];
			$data['type_analysis'] = 6;
			$data['main_type'] = 2;
			$data['value_numbre'] = 5;
			$res = addanalysis($conn,$data);
		}
		if($_POST['text6']!=""){
			$data['analysis_text'] = $_POST['text6'];
			$data['type_analysis'] = 6;
			$data['main_type'] = 2;
			$data['value_numbre'] = 6;
			$res = addanalysis($conn,$data);
		}

          // analysis6//
		$res = delscore($conn,2,7,$_SESSION['company']);
		$res = delscore($conn,2,8,$_SESSION['company']);
		$data['company_code'] = $_SESSION['company'];

		$pattern = "/ดำเนินธุรกิจแบบครอบครัว|ห้างหุ้นส่วนบริษัท|บริษัท|การร่วมค้า|โฮลดิ้งคอมพานี/";
		if(preg_match_all($pattern, $_POST['text7'], $matches)) {
		// print_r($matches);
		}
		$num=0;
		$str=array("ดำเนินธุรกิจแบบครอบครัว","หุ้นส่วนบริษัท","บริษัท","การร่วมค้า","โฮลดิ้งคอมพานี");
		for ($j = 0; $j < count($str) ; $j++) {
			for ($i = 0; $i < count($matches[0]) ; $i++) {
				if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
					$num +=	$j+1;	
					echo "aa=".$matches[0][$i];
					echo "bb=".$str[$j];
					echo "j=".$j;
					echo "<br>";
				}
			}
		}
		if ($num>5) {
			$num=5;
		}
		echo "SUM= ".$num;
		$data['score_type'] = 2;
		$data['score_subtype'] = 7;
		$data['score_number'] = $num;
		$res = insertscore($conn,$data);
		$sum=0;
		echo"<br>";
		$pattern = "/ไม่มีการแข่งขัน|มีการแข่งขัน|ไม่มีการแข่งขันแต่มีการประสานงาน|มีการการแข่งขันและมีการประสานงาน|ในเครือข่ายผู้ผลิตชิ้นส่วนบ่อยครั้ง|เครือข่ายผู้ผลิตชิ้นส่วนสม่ำเสมออย่างต่อเนื่อง/";

		if(preg_match_all($pattern, $_POST['text8'], $matches)) {
			print_r($matches);
		}
		$num=0;
		$str=array("ไม่มีการแข่งขัน","มีการแข่งขัน","ไม่มีการแข่งขันแต่มีการประสานงาน","มีการการแข่งขันและมีการประสานงาน","ในเครือข่ายผู้ผลิตชิ้นส่วนบ่อยครั้ง","เครือข่ายผู้ผลิตชิ้นส่วนสม่ำเสมออย่างต่อเนื่อง");
		for ($j = count($str); $j > 0  ; $j--){
			for ($i = 0; $i < count($matches[0]) ; $i++) {
				if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
					$num +=	$j+1;	
					echo "aa=".$matches[0][$i];
					echo "bb=".$str[$j];
					echo "j=".$j;
					echo "<br>";
				}
			}
		}
		if ($num>5) {
			$num=5;
		}
		echo "SUM= ".$num;
		$data['score_type'] = 2;
		$data['score_subtype'] = 8;
		$data['score_number'] = $num;
		$res = insertscore($conn,$data);
		$res = delanalysis($conn,$data['company_code'],2,7);
		$res = delanalysis($conn,$data['company_code'],2,8);
		if($_POST['family_business1']!=""){
			$data['analysis_text'] = $_POST['family_business1'];
			$data['type_analysis'] = 7;
			$data['main_type'] = 2;
			$data['value_numbre'] = 1;
			$res = addanalysis($conn,$data);

		}
		if($_POST['family_business2']!=""){
			$data['analysis_text'] = $_POST['family_business2'];
			$data['type_analysis'] = 7;
			$data['main_type'] = 2;
			$data['value_numbre'] = 2;
			$res = addanalysis($conn,$data);

		}
		if($_POST['family_business3']!=""){
			$data['analysis_text'] = $_POST['family_business3'];
			$data['type_analysis'] =7;
			$data['main_type'] = 2;
			$data['value_numbre'] = 3;
			$res = addanalysis($conn,$data);

		}
		if($_POST['family_business4']!=""){
			$data['analysis_text'] = $_POST['family_business4'];
			$data['type_analysis'] = 7;
			$data['main_type'] = 2;
			$data['value_numbre'] = 4;
			$res = addanalysis($conn,$data);
		}
		if($_POST['family_business5']!=""){
			$data['analysis_text'] = $_POST['family_business5'];
			$data['type_analysis'] = 7;
			$data['main_type'] = 2;
			$data['value_numbre'] = 5;
			$res = addanalysis($conn,$data);
		}
		if($_POST['text7']!=""){
			$data['analysis_text'] = $_POST['text7'];
			$data['type_analysis'] = 7;
			$data['main_type'] = 2;
			$data['value_numbre'] = 6;
			$res = addanalysis($conn,$data);
		}

		if($_POST['competition1']!=""){
			$data['analysis_text'] = $_POST['competition1'];
			$data['type_analysis'] = 8;
			$data['main_type'] = 2;
			$data['value_numbre'] = 1;
			$res = addanalysis($conn,$data);
		}
		if($_POST['competition2']!=""){
			$data['analysis_text'] = $_POST['competition2'];
			$data['type_analysis'] = 8;
			$data['main_type'] = 2;
			$data['value_numbre'] = 2;
			$res = addanalysis($conn,$data);
		}
		if($_POST['competition3']!=""){
			$data['analysis_text'] = $_POST['competition3'];
			$data['type_analysis'] = 8;
			$data['main_type'] = 2;
			$data['value_numbre'] = 3;
			$res = addanalysis($conn,$data);
		}
		if($_POST['competition3']!=""){
			$data['analysis_text'] = $_POST['competition4'];
			$data['type_analysis'] = 8;
			$data['main_type'] = 2;
			$data['value_numbre'] = 4;
			$res = addanalysis($conn,$data);
		}
		if($_POST['competition3']!=""){
			$data['analysis_text'] = $_POST['competition5'];
			$data['type_analysis'] = 8;
			$data['main_type'] = 2;
			$data['value_numbre'] = 5;
			$res = addanalysis($conn,$data);
		}
		if($_POST['competition3']!=""){
			$data['analysis_text'] = $_POST['competition6'];
			$data['type_analysis'] = 8;
			$data['main_type'] = 2;
			$data['value_numbre'] = 6;
			$res = addanalysis($conn,$data);
		}
		if($_POST['text8']!=""){
			$data['analysis_text'] = $_POST['text8'];
			$data['type_analysis'] = 8;
			$data['main_type'] = 2;
			$data['value_numbre'] = 7;
			$res = addanalysis($conn,$data);
		}
	//analysis7//
		$res = delscore($conn,2,9,$_SESSION['company']);
		$res = delscore($conn,2,10,$_SESSION['company']);
		$data['company_code'] = $_SESSION['company'];

		$pattern = "/ผู้ค้าปลีก|ผู้ผลิตรถยนต์|ลูกค้าในประเทศ|ลูกค้าต่างประเทศ|ศูนย์จำหน่าย/";
		if(preg_match_all($pattern, $_POST['text9'], $matches)) {
			print_r($matches);
		}
		$num=0;
		$str=array("ผู้ค้าปลีก","ผู้ผลิตรถยนต์","ลูกค้าในประเทศ","ลูกค้าต่างประเทศ","ศูนย์จำหน่าย");
		for ($j = 0; $j < count($str) ; $j++) {
			for ($i = 0; $i < count($matches[0]) ; $i++) {
				if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
					$num +=	$j+1;	
					echo "aa=".$matches[0][$i];
					echo "bb=".$str[$j];
					echo "j=".$j;
					echo "<br>";
				}
			}
		}
		if ($num>5) {
			$num=5;
		}
		echo "SUM= ".$num;
		$data['score_type'] = 2;
		$data['score_subtype'] = 9;
		$data['score_number'] = $num;
		$res = insertscore($conn,$data);
		$sum=0;
		echo"<br>";
		$pattern = "/ทุนส่วนตัว|ทุนจากครอบครัว|ร่วมลงทุนกับเพื่อน|ทุนจากการกู้ยืมธนาคาร|ตลาดหลักทรัพย์/";

		if(preg_match_all($pattern, $_POST['text10'], $matches)) {
			print_r($matches);
		}
		$num=0;
		$str=array("ทุนส่วนตัว","ทุนจากครอบครัว","ร่วมลงทุนกับเพื่อน","ทุนจากการกู้ยืมธนาคาร","ตลาดหลักทรัพย์");
		for ($j = count($str) ; $j > 0 ; $j--) {
			for ($i = 0; $i < count($matches[0]) ; $i++) {
				if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
					$num +=	$j+1;	
					echo "aa=".$matches[0][$i];
					echo "bb=".$str[$j];
					echo "j=".$j;
					echo "<br>";
				}
			}
		}
		if ($num>5) {
			$num=5;
		}
		echo "SUM= ".$num;
		$data['score_type'] = 2;
		$data['score_subtype'] = 10;
		$data['score_number'] = $num;
		$res = insertscore($conn,$data);
		$res = delanalysis($conn,$data['company_code'],2,9);
		$res = delanalysis($conn,$data['company_code'],2,10);
		if($_POST['price1']!=""){
			$data['analysis_text'] = $_POST['price1'];
			$data['type_analysis'] = 9;
			$data['main_type'] = 2;
			$data['value_numbre'] = 1;
			$res = addanalysis($conn,$data);

		}
		if($_POST['price2']!=""){
			$data['analysis_text'] = $_POST['price2'];
			$data['type_analysis'] = 9;
			$data['main_type'] = 2;
			$data['value_numbre'] = 2;
			$res = addanalysis($conn,$data);

		}
		if($_POST['price3']!=""){
			$data['analysis_text'] = $_POST['price3'];
			$data['type_analysis'] =9;
			$data['main_type'] = 2;
			$data['value_numbre'] = 3;
			$res = addanalysis($conn,$data);

		}
		if($_POST['price4']!=""){
			$data['analysis_text'] = $_POST['price4'];
			$data['type_analysis'] = 9;
			$data['main_type'] = 2;
			$data['value_numbre'] = 4;
			$res = addanalysis($conn,$data);
		}
		if($_POST['price5']!=""){
			$data['analysis_text'] = $_POST['price5'];
			$data['type_analysis'] = 9;
			$data['main_type'] = 2;
			$data['value_numbre'] = 5;
			$res = addanalysis($conn,$data);
		}
		if($_POST['text9']!=""){
			$data['analysis_text'] = $_POST['text9'];
			$data['type_analysis'] = 9;
			$data['main_type'] = 2;
			$data['value_numbre'] = 6;
			$res = addanalysis($conn,$data);
		}

		if($_POST['business_operations1']!=""){
			$data['analysis_text'] = $_POST['business_operations1'];
			$data['type_analysis'] = 10;
			$data['main_type'] = 2;
			$data['value_numbre'] = 1;
			$res = addanalysis($conn,$data);
		}
		if($_POST['business_operations2']!=""){
			$data['analysis_text'] = $_POST['business_operations2'];
			$data['type_analysis'] = 10;
			$data['main_type'] = 2;
			$data['value_numbre'] = 2;
			$res = addanalysis($conn,$data);
		}
		if($_POST['business_operations3']!=""){
			$data['analysis_text'] = $_POST['business_operations3'];
			$data['type_analysis'] = 10;
			$data['main_type'] = 2;
			$data['value_numbre'] = 3;
			$res = addanalysis($conn,$data);
		}
		if($_POST['business_operations4']!=""){
			$data['analysis_text'] = $_POST['business_operations4'];
			$data['type_analysis'] = 10;
			$data['main_type'] = 2;
			$data['value_numbre'] = 4;
			$res = addanalysis($conn,$data);

		}
		if($_POST['business_operations5']!=""){
			$data['analysis_text'] = $_POST['business_operations5'];
			$data['type_analysis'] = 10;
			$data['main_type'] = 2;
			$data['value_numbre'] = 5;
			$res = addanalysis($conn,$data);

		}
		if($_POST['text10']!=""){
			$data['analysis_text'] = $_POST['text10'];
			$data['type_analysis'] = 10;
			$data['main_type'] = 2;
			$data['value_numbre'] = 6;
			$res = addanalysis($conn,$data);
		}
		if($res){
			?>
			<script>
			window.location = "index.php?app=user&action=analysis8";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=analysis8";
		</script>
		<?php
	}
}
if($_GET['action'] == 'addanalysis8'){
	$res = delscore($conn,3,1,$_SESSION['company']);
	$res = delscore($conn,3,2,$_SESSION['company']);
	$res = delscore($conn,3,3,$_SESSION['company']);
	$data['company_code'] = $_SESSION['company'];

	$pattern = "/ยอดจำหน่ายรถยนต์ใหม่ที่เพิ่มสูงขึ้น|อะไหล่ของรถมือ 2|อะไหล่จากอู่ซ่อมรถ|อะไหล่เพื่อเป็นรถต้นแบบ/";
	if(preg_match_all($pattern, $_POST['text1'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ยอดจำหน่ายรถยนต์ใหม่ที่เพิ่มสูงขึ้น","อะไหล่ของรถมือ 2","อะไหล่จากอู่ซ่อมรถ","อะไหล่เพื่อเป็นรถต้นแบบ");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 3;
	$data['score_subtype'] = 1;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/รถปลั๊กอินไฮบริด|รถไฟฟ้าแบตเตอรี่/";

	if(preg_match_all($pattern, $_POST['text2'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("รถปลั๊กอินไฮบริด","รถไฟฟ้าแบตเตอรี่");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 3;
	$data['score_subtype'] = 2;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/ประเทศในแถบยุโรป|อเมริกา|แอฟริกา|ญี่ปุ่น|เกาหลี|อาเซียน/";

	if(preg_match_all($pattern, $_POST['text3'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ประเทศในแถบยุโรป","อเมริกา","แอฟริกา","ญี่ปุ่น","เกาหลี","อาเซียน");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 3;
	$data['score_subtype'] = 3;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$res = delanalysis($conn,$data['company_code'],3,1);
	$res = delanalysis($conn,$data['company_code'],3,2);
	$res = delanalysis($conn,$data['company_code'],3,3);
	if($_POST['replacement_parts1']!=""){
		$data['analysis_text'] = $_POST['replacement_parts1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);

	}
	if($_POST['replacement_parts2']!=""){
		$data['analysis_text'] = $_POST['replacement_parts2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);

	}
	if($_POST['replacement_parts3']!=""){
		$data['analysis_text'] = $_POST['replacement_parts3'];
		$data['type_analysis'] =1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);

	}
	if($_POST['replacement_parts4']!=""){
		$data['analysis_text'] = $_POST['replacement_parts4'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text1']!=""){
		$data['analysis_text'] = $_POST['text1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['sales1']!=""){
		$data['analysis_text'] = $_POST['sales1'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 3;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['sales2']!=""){
		$data['analysis_text'] = $_POST['sales2'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 3;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text2']!=""){
		$data['analysis_text'] = $_POST['text2'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 3;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['international_costs1']!=""){
		$data['analysis_text'] = $_POST['international_costs1'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 3;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['international_costs2']!=""){
		$data['analysis_text'] = $_POST['international_costs2'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 3;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['international_costs3']!=""){
		$data['analysis_text'] = $_POST['international_costs3'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 3;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['international_costs4']!=""){
		$data['analysis_text'] = $_POST['international_costs4'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 3;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['international_costs5']!=""){
		$data['analysis_text'] = $_POST['international_costs5'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 3;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['international_costs6']!=""){
		$data['analysis_text'] = $_POST['international_costs6'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 3;
		$data['value_numbre'] = 6;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text3']!=""){
		$data['analysis_text'] = $_POST['text3'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 3;
		$data['value_numbre'] = 7;
		$res = addanalysis($conn,$data);
	}
	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=analysis9";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=analysis9";
		</script>
		<?php
	}
}
if($_GET['action'] == 'addanalysis9'){
	$res = delscore($conn,4,1,$_SESSION['company']);
	$res = delscore($conn,4,2,$_SESSION['company']);
	$res = delscore($conn,4,3,$_SESSION['company']);
	$data['company_code'] = $_SESSION['company'];
	$pattern = "/กลับประเทศเจ้าของ|อาเซียน/";
	if(preg_match_all($pattern, $_POST['text1'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("กลับประเทศเจ้าของ","อาเซียน");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 4;
	$data['score_subtype'] = 1;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/เหล็ก|พลาสติก|ชิ้นส่วนต่าง|เคมีภัณฑ์/";

	if(preg_match_all($pattern, $_POST['text2'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("เหล็ก","พลาสติก","ชิ้นส่วนต่าง","เคมีภัณฑ์");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 4;
	$data['score_subtype'] = 2;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/ประเทศจีน|ประเทศญี่ปุ่น|ประเทศเกาหลี|ประเทศอินเดีย|ประเทศในกลุ่มอาเซียน/";

	if(preg_match_all($pattern, $_POST['text3'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ประเทศจีน","ประเทศญี่ปุ่น","ประเทศเกาหลี","ประเทศอินเดีย","ประเทศในกลุ่มอาเซียน");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM=".$num;
	$data['score_type'] = 4;
	$data['score_subtype'] = 3;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$res = delanalysis($conn,$data['company_code'],4,1);
	$res = delanalysis($conn,$data['company_code'],4,2);
	$res = delanalysis($conn,$data['company_code'],4,3);
	if($_POST['relocation1']!=""){
		$data['analysis_text'] = $_POST['relocation1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['relocation2']!=""){
		$data['analysis_text'] = $_POST['relocation2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text1']!=""){
		$data['analysis_text'] = $_POST['text1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['production_costs1']!=""){
		$data['analysis_text'] = $_POST['production_costs1'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['production_costs2']!=""){
		$data['analysis_text'] = $_POST['production_costs2'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['production_costs3']!=""){
		$data['analysis_text'] = $_POST['production_costs3'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['production_costs4']!=""){
		$data['analysis_text'] = $_POST['production_costs4'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 4;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text2']!=""){
		$data['analysis_text'] = $_POST['text2'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 4;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['competition1']!=""){
		$data['analysis_text'] = $_POST['competition1'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['competition2']!=""){
		$data['analysis_text'] = $_POST['competition2'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['competition3']!=""){
		$data['analysis_text'] = $_POST['competition3'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['competition4']!=""){
		$data['analysis_text'] = $_POST['competition4'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 4;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['competition5']!=""){
		$data['analysis_text'] = $_POST['competition5'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 4;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text3']!=""){
		$data['analysis_text'] = $_POST['text3'];
		$data['type_analysis'] = 3;
		$data['main_type'] = 4;
		$data['value_numbre'] = 6;
		$res = addanalysis($conn,$data);
	}

	$res = delscore($conn,4,4,$_SESSION['company']);
	$res = delscore($conn,4,5,$_SESSION['company']);
	$res = delscore($conn,4,6,$_SESSION['company']);
	$data['company_code'] = $_SESSION['company'];
	$pattern = "/บริษัทผู้ผลิตรถยนต์|ศูนย์อะไหล่/";
	if(preg_match_all($pattern, $_POST['text4'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("บริษัทผู้ผลิตรถยนต์","ศูนย์อะไหล่");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 4;
	$data['score_subtype'] = 4;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/บริษัทผู้ผลิตรถยนต์|บริษัทแม่ที่อยู่ต่างประเทศ|บริษัทที่เป็นเครือข่ายในประเทศ|บริษัทคู่แข่งที่สำคัญ/";

	if(preg_match_all($pattern, $_POST['text5'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("บริษัทผู้ผลิตรถยนต์","บริษัทแม่ที่อยู่ต่างประเทศ","บริษัทที่เป็นเครือข่ายในประเทศ","บริษัทคู่แข่งที่สำคัญ");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 4;
	$data['score_subtype'] = 5;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/ภาษา|เชื้อชาติ|ความน่าเชื่อถือ|ความสามารถในการผลิต|การบริหารจัดการ/";

	if(preg_match_all($pattern, $_POST['text6'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ภาษา","เชื้อชาติ","ความน่าเชื่อถือ","ความสามารถในการผลิต","การบริหารจัดการ");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 4;
	$data['score_subtype'] = 6;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$res = delanalysis($conn,$data['company_code'],4,4);
	$res = delanalysis($conn,$data['company_code'],4,5);
	$res = delanalysis($conn,$data['company_code'],4,6);
	if($_POST['balance1']!=""){
		$data['analysis_text'] = $_POST['balance1'];
		$data['type_analysis'] = 4;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['balance2']!=""){
		$data['analysis_text'] = $_POST['balance2'];
		$data['type_analysis'] = 4;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text4']!=""){
		$data['analysis_text'] = $_POST['text4'];
		$data['type_analysis'] = 4;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}

	if($_POST['deprivation1']!=""){
		$data['analysis_text'] = $_POST['deprivation1'];
		$data['type_analysis'] = 5;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['deprivation2']!=""){
		$data['analysis_text'] = $_POST['deprivation2'];
		$data['type_analysis'] = 5;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['deprivation3']!=""){
		$data['analysis_text'] = $_POST['deprivation3'];
		$data['type_analysis'] = 5;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['deprivation4']!=""){
		$data['analysis_text'] = $_POST['deprivation4'];
		$data['type_analysis'] = 5;
		$data['main_type'] = 4;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text5']!=""){
		$data['analysis_text'] = $_POST['text5'];
		$data['type_analysis'] = 5;
		$data['main_type'] = 4;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}


	if($_POST['priority1']!=""){
		$data['analysis_text'] = $_POST['priority1'];
		$data['type_analysis'] = 6;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['priority2']!=""){
		$data['analysis_text'] = $_POST['priority2'];
		$data['type_analysis'] = 6;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['priority3']!=""){
		$data['analysis_text'] = $_POST['priority3'];
		$data['type_analysis'] = 6;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['priority4']!=""){
		$data['analysis_text'] = $_POST['priority4'];
		$data['type_analysis'] = 6;
		$data['main_type'] = 4;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['priority5']!=""){
		$data['analysis_text'] = $_POST['priority5'];
		$data['type_analysis'] = 6;
		$data['main_type'] = 4;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text6']!=""){
		$data['analysis_text'] = $_POST['text6'];
		$data['type_analysis'] = 6;
		$data['main_type'] = 4;
		$data['value_numbre'] = 6;
		$res = addanalysis($conn,$data);
	}

	$res = delscore($conn,4,7,$_SESSION['company']);
	$res = delscore($conn,4,8,$_SESSION['company']);
	$data['company_code'] = $_SESSION['company'];

	$pattern = "/ประเทศจีน|ประเทศญี่ปุ่น|ประเทศเกาหลี|ประเทศอินเดีย|ประเทศในกลุ่มอาเซียน/";
	if(preg_match_all($pattern, $_POST['text7'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ประเทศจีน","ประเทศญี่ปุ่น","ประเทศเกาหลี","ประเทศอินเดีย","ประเทศในกลุ่มอาเซียน");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 4;
	$data['score_subtype'] = 7;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/ประเทศจีน|ประเทศญี่ปุ่น|ประเทศเกาหลี|ประเทศอินเดีย|ประเทศในกลุ่มอาเซียน/";

	if(preg_match_all($pattern, $_POST['text8'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ประเทศจีน","ประเทศญี่ปุ่น","ประเทศเกาหลี","ประเทศอินเดีย","ประเทศในกลุ่มอาเซียน");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 4;
	$data['score_subtype'] = 8;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$res = delanalysis($conn,$data['company_code'],4,7);
	$res = delanalysis($conn,$data['company_code'],4,8);
	if($_POST['competitors1']!=""){
		$data['analysis_text'] = $_POST['competitors1'];
		$data['type_analysis'] = 7;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['competitors2']!=""){
		$data['analysis_text'] = $_POST['competitors2'];
		$data['type_analysis'] = 7;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['competitors3']!=""){
		$data['analysis_text'] = $_POST['competitors3'];
		$data['type_analysis'] = 7;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['competitors4']!=""){
		$data['analysis_text'] = $_POST['competitors4'];
		$data['type_analysis'] = 7;
		$data['main_type'] = 4;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['competitors5']!=""){
		$data['analysis_text'] = $_POST['competitors5'];
		$data['type_analysis'] = 7;
		$data['main_type'] = 4;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text7']!=""){
		$data['analysis_text'] = $_POST['text7'];
		$data['type_analysis'] = 7;
		$data['main_type'] = 4;
		$data['value_numbre'] = 6;
		$res = addanalysis($conn,$data);
	}

	if($_POST['production1']!=""){
		$data['analysis_text'] = $_POST['production1'];
		$data['type_analysis'] = 8;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['production2']!=""){
		$data['analysis_text'] = $_POST['production2'];
		$data['type_analysis'] = 8;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['production3']!=""){
		$data['analysis_text'] = $_POST['production3'];
		$data['type_analysis'] = 8;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($_POST['production4']!=""){
		$data['analysis_text'] = $_POST['production4'];
		$data['type_analysis'] = 8;
		$data['main_type'] = 4;
		$data['value_numbre'] = 4;
		$res = addanalysis($conn,$data);
	}
	if($_POST['production5']!=""){
		$data['analysis_text'] = $_POST['production5'];
		$data['type_analysis'] = 8;
		$data['main_type'] = 4;
		$data['value_numbre'] = 5;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text8']!=""){
		$data['analysis_text'] = $_POST['text8'];
		$data['type_analysis'] = 8;
		$data['main_type'] = 4;
		$data['value_numbre'] = 6;
		$res = addanalysis($conn,$data);
	}
	
	$res = delscore($conn,4,9,$_SESSION['company']);
	$res = delscore($conn,4,10,$_SESSION['company']);
	$data['company_code'] = $_SESSION['company'];


	$pattern = "/รถยนต์ปลั๊กอินไฮบริค|รถยนต์ไฟฟ้าแบตเตอรี่/";
	if(preg_match_all($pattern, $_POST['text9'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("รถยนต์ปลั๊กอินไฮบริค","รถยนต์ไฟฟ้าแบตเตอรี่");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 4;
	$data['score_subtype'] = 9;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/ยอดจำหน่ายรถยนต์ลดลง|รถเปลี่ยนอะไหล่ลดลง/";

	if(preg_match_all($pattern, $_POST['text10'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ยอดจำหน่ายรถยนต์ลดลง","รถเปลี่ยนอะไหล่ลดลง");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 4;
	$data['score_subtype'] = 10;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$res = delanalysis($conn,$data['company_code'],4,9);
	$res = delanalysis($conn,$data['company_code'],4,10);
	if($_POST['type1']!=""){
		$data['analysis_text'] = $_POST['type1'];
		$data['type_analysis'] = 9;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['type2']!=""){
		$data['analysis_text'] = $_POST['type2'];
		$data['type_analysis'] = 9;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text9']!=""){
		$data['analysis_text'] = $_POST['text9'];
		$data['type_analysis'] = 9;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}

	if($_POST['economic1']!=""){
		$data['analysis_text'] = $_POST['economic1'];
		$data['type_analysis'] = 10;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addanalysis($conn,$data);
	}
	if($_POST['economic2']!=""){
		$data['analysis_text'] = $_POST['economic2'];
		$data['type_analysis'] = 10;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addanalysis($conn,$data);
	}
	if($_POST['text10']!=""){
		$data['analysis_text'] = $_POST['text10'];
		$data['type_analysis'] = 10;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addanalysis($conn,$data);
	}
	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=marketing_analysis";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=marketing_analysis";
		</script>
		<?php
	}
}

if($_GET['action'] == 'addmarketing_analysis'){
	$res = delscore($conn,5,1,$_SESSION['company']);
	$res = delscore($conn,5,2,$_SESSION['company']);
	$data['company_code'] = $_SESSION['company'];

	$pattern = "/ไม่มั่นใจ|เศรษฐกิจตกต่ำ|ย้ายฐานการผลิต|ผู้ผลิตรถยนต์ปิดโรงงาน/";
	if(preg_match_all($pattern, $_POST['text1'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ไม่มั่นใจ","เศรษฐกิจตกต่ำ","ย้ายฐานการผลิต","ผู้ผลิตรถยนต์ปิดโรงงาน");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 5;
	$data['score_subtype'] = 1;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/ไม่มีความชัดเจนในนโยบาย|ไม่มีค่ายผู้ผลิตรถยนต์ประชาสัมพันธ์/";

	if(preg_match_all($pattern, $_POST['text2'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ไม่มีความชัดเจนในนโยบาย","ไม่มีค่ายผู้ผลิตรถยนต์ประชาสัมพันธ์");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 5;
	$data['score_subtype'] = 2;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	echo"<br>";

	$res = delmarketing_analysis($conn,$data['company_code'],1,1);
	$res = delmarketing_analysis($conn,$data['company_code'],1,2);
	if($_POST['fluctuation1']!=""){
		$data['marketing_analysis_text'] = $_POST['fluctuation1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 1;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['fluctuation2']!=""){
		$data['marketing_analysis_text'] = $_POST['fluctuation2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 2;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['fluctuation3']!=""){
		$data['marketing_analysis_text'] = $_POST['fluctuation3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 3;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['fluctuation4']!=""){
		$data['marketing_analysis_text'] = $_POST['fluctuation4'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 4;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['text1']!=""){
		$data['marketing_analysis_text'] = $_POST['text1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 5;
		$res = addmarketing_analysis($conn,$data);
	}

	if($_POST['alternative1']!=""){
		$data['marketing_analysis_text'] = $_POST['alternative1'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 1;
		$data['value_numbre'] = 1;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['alternative2']!=""){
		$data['marketing_analysis_text'] = $_POST['alternative2'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 1;
		$data['value_numbre'] = 2;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['text2']!=""){
		$data['marketing_analysis_text'] = $_POST['text2'];
		$data['type_analysis'] = 2;
		$data['main_type'] = 1;
		$data['value_numbre'] = 3;
		$res = addmarketing_analysis($conn,$data);
	}
	//marketing_analysis2
	$res = delscore($conn,5,3,$_SESSION['company']);
	$res = delscore($conn,5,4,$_SESSION['company']);
	$data['company_code'] = $_SESSION['company'];

	$pattern = "/ชะลอการซื้อ|รุ่นรถยนต์บางรุ่นย้ายไปผลิตประเทศอื่น/";
	if(preg_match_all($pattern, $_POST['text3'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ชะลอการซื้อ","รุ่นรถยนต์บางรุ่นย้ายไปผลิตประเทศอื่น");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 5;
	$data['score_subtype'] = 3;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/โอกาสผลิตชิ้นส่วนของรถยนต์|ได้รับผลกระทบด้านลน/";

	if(preg_match_all($pattern, $_POST['text4'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("โอกาสผลิตชิ้นส่วนของรถยนต์","ได้รับผลกระทบด้านลบ");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 5;
	$data['score_subtype'] = 4;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	echo"<br>";

	$res = delmarketing_analysis($conn,$data['company_code'],2,1);
	$res = delmarketing_analysis($conn,$data['company_code'],3,1);
	if($_POST['economic1']!=""){
		$data['marketing_analysis_text'] = $_POST['economic1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 1;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['economic2']!=""){
		$data['marketing_analysis_text'] = $_POST['economic2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 2;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['text3']!=""){
		$data['marketing_analysis_text'] = $_POST['text3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 3;
		$res = addmarketing_analysis($conn,$data);
	}

	if($_POST['alternative1']!=""){
		$data['marketing_analysis_text'] = $_POST['alternative1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 1;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['alternative2']!=""){
		$data['marketing_analysis_text'] = $_POST['alternative2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 2;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['text4']!=""){
		$data['marketing_analysis_text'] = $_POST['text4'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 3;
		$res = addmarketing_analysis($conn,$data);
	}
//marketing_analysis3
	$res = delscore($conn,5,5,$_SESSION['company']);
	$res = delscore($conn,5,6,$_SESSION['company']);
	$res = delscore($conn,5,7,$_SESSION['company']);
	$data['company_code'] =$_SESSION['company'] ;

	$pattern = "/ชิ้นส่วนที่ผลิตได้รับผลกระทบ|ชิ้นส่วนที่ผลิตอยู่มีการรติดตั้งอุปกรณ์/";
	if(preg_match_all($pattern, $_POST['text5'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ชิ้นส่วนที่ผลิตได้รับผลกระทบ","ชิ้นส่วนที่ผลิตอยู่มีการรติดตั้งอุปกรณ์");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 5;
	$data['score_subtype'] = 5;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/ชิ้นส่วนนำเข้ามาด้วยราคาที่ถูกกว่า|ทำให้โครงสร้างราคาชิ้นส่วนทีมีอยู่เดิม/";

	if(preg_match_all($pattern, $_POST['text6'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ชิ้นส่วนนำเข้ามาด้วยราคาที่ถูกกว่า","ทำให้โครงสร้างราคาชิ้นส่วนทีมีอยู่เดิม");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 5;
	$data['score_subtype'] = 6;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	echo"<br>";
	$sum=0;
	echo"<br>";
	$pattern = "/ชิ้นส่วนที่ผลิตอยู่มีโอกาสเปลี่ยนไป|ต้องปรับเปลี่ยนเครื่องมือหรือเครื่องจักร/";

	if(preg_match_all($pattern, $_POST['text7'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ชิ้นส่วนที่ผลิตอยู่มีโอกาสเปลี่ยนไป","ต้องปรับเปลี่ยนเครื่องมือหรือเครื่องจักร");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 5;
	$data['score_subtype'] = 7;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	echo"<br>";

	$res = delmarketing_analysis($conn,$data['company_code'],4,1);
	$res = delmarketing_analysis($conn,$data['company_code'],5,1);
	$res = delmarketing_analysis($conn,$data['company_code'],6,1);
	if($_POST['convenience1']!=""){
		$data['marketing_analysis_text'] = $_POST['convenience1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;		
		$data['value_numbre'] = 1;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['convenience2']!=""){
		$data['marketing_analysis_text'] = $_POST['convenience2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['text5']!=""){
		$data['marketing_analysis_text'] = $_POST['text5'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addmarketing_analysis($conn,$data);
	}

	if($_POST['duty1']!=""){
		$data['marketing_analysis_text'] = $_POST['duty1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 5;
		$data['value_numbre'] = 1;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['duty2']!=""){
		$data['marketing_analysis_text'] = $_POST['duty2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 5;
		$data['value_numbre'] = 2;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['text6']!=""){
		$data['marketing_analysis_text'] = $_POST['text6'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 5;
		$data['value_numbre'] = 3;
		$res = addmarketing_analysis($conn,$data);
	}

	if($_POST['electric1']!=""){
		$data['marketing_analysis_text'] = $_POST['electric1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 6;
		$data['value_numbre'] = 1;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['electric2']!=""){
		$data['marketing_analysis_text'] = $_POST['electric2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 6;
		$data['value_numbre'] = 2;
		$res = addmarketing_analysis($conn,$data);
	}
	if($_POST['text7']!=""){
		$data['marketing_analysis_text'] = $_POST['text7'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 6;
		$data['value_numbre'] = 3;
		$res = addmarketing_analysis($conn,$data);
	}

	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=marketing_mix";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=marketing_mix";
		</script>
		<?php
	}
}


if($_GET['action'] == 'addmarketing_mix'){

	$data['company_code'] = $_SESSION['company'];
	$res = delscore($conn,6,1,$data['company_code']);
	$res = delscore($conn,6,2,$data['company_code']);
	$pattern = "/ผลิตภัณฑ์เป็นชิ้นส่วนยานยนต์ที่ใช้สำหรับประกอบในรถยนต์|ผลิตภัณฑ์เป็นชิ้นส่วนที่เป็นอะไหล่ทดแทนเมื่อรถยนต์ถึงเวลาตามกำหนด|ผลิตภัณฑ์เป็นชิ้นส่วนที่เป็นอะไหล่ทดแทนเมื่อรถยนต์เกิดุบัติเหตุ/";
	if(preg_match_all($pattern, $_POST['text1'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ผลิตภัณฑ์เป็นชิ้นส่วนยานยนต์ที่ใช้สำหรับประกอบในรถยนต์","ผลิตภัณฑ์เป็นชิ้นส่วนที่เป็นอะไหล่ทดแทนเมื่อรถยนต์ถึงเวลาตามกำหนด","ผลิตภัณฑ์เป็นชิ้นส่วนที่เป็นอะไหล่ทดแทนเมื่อรถยนต์เกิดุบัติเหตุ");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 6;
	$data['score_subtype'] = 1;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/ราคาถูกกว่ากำหนดจากค่ายผู้ผลิตรถยนต์|ราคาถูกกว่ากำหนดจากศูนย์อะไหล่|ไม่สามารถกำหนดราคาเองได้/";

	if(preg_match_all($pattern, $_POST['text2'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ราคาถูกกว่ากำหนดจากค่ายผู้ผลิตรถยนต์","ราคาถูกกว่ากำหนดจากศูนย์อะไหล่","ไม่สามารถกำหนดราคาเองได้");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 6;
	$data['score_subtype'] = 2;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	echo"<br>";

	$res = delmarketing_mix($conn,$data['company_code'],1,1);
	$res = delmarketing_mix($conn,$data['company_code'],2,1);


	if($_POST['product2']!=""){
		$data['marketing_mix_text'] = $_POST['product2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 2;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['product3']!=""){
		$data['marketing_mix_text'] = $_POST['product3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 3;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['text1']!=""){
		$data['marketing_mix_text'] = $_POST['text1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 4;
		$res = addmarketing_mix($conn,$data);
	}

	if($_POST['price1']!=""){
		$data['marketing_mix_text'] = $_POST['price1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 1;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['price2']!=""){
		$data['marketing_mix_text'] = $_POST['price2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 2;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['price3']!=""){
		$data['marketing_mix_text'] = $_POST['price3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 3;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['text2']!=""){
		$data['marketing_mix_text'] = $_POST['text2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 4;
		$res = addmarketing_mix($conn,$data);
	}
	
	$data['company_code'] = $_SESSION['company'];
	$res = delscore($conn,6,3,$data['company_code']);
	$res = delscore($conn,6,4,$data['company_code']);
	$pattern = "/ส่งให้กับค่ายผู้ผลิตรถยนต์ที่ส่งตรงโรงงาน|ส่งให้กับผู้ผลิตชิ้นส่วนยานยนต์ในลำดับถัดไป|ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์|ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์ในต่างประเทศ/";
	if(preg_match_all($pattern, $_POST['text3'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ส่งให้กับค่ายผู้ผลิตรถยนต์ที่ส่งตรงโรงงาน","ส่งให้กับผู้ผลิตชิ้นส่วนยานยนต์ในลำดับถัดไป","ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์","ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์ในต่างประเทศ");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 6;
	$data['score_subtype'] = 3;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/มีโอกาสน้อยเนื่องจากทางค่ายผู้ผลิตรถยนต์เป็นคนกำหนด|ไม่สามารถนำชิ้นส่วนไปจำหน่ายเป็นอะไหล่|สามารถเข้าไปนำเสนอให้กับค่าบผู้ผลิตรถยนต์ได้/";

	if(preg_match_all($pattern, $_POST['text4'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("มีโอกาสน้อยเนื่องจากทางค่ายผู้ผลิตรถยนต์เป็นคนกำหนด","ไม่สามารถนำชิ้นส่วนไปจำหน่ายเป็นอะไหล่","สามารถเข้าไปนำเสนอให้กับค่าบผู้ผลิตรถยนต์ได้");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	echo"<br>";
	$data['score_type'] = 6;
	$data['score_subtype'] = 4;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$res = delmarketing_mix($conn,$data['company_code'],3,1);
	$res = delmarketing_mix($conn,$data['company_code'],4,1);
	if($_POST['channels1']!=""){
		$data['marketing_mix_text'] = $_POST['channels1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 1;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['channels2']!=""){
		$data['marketing_mix_text'] = $_POST['channels2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 2;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['channels3']!=""){
		$data['marketing_mix_text'] = $_POST['channels3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 3;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['channels4']!=""){
		$data['marketing_mix_text'] = $_POST['channels4'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 4;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['text1']!=""){
		$data['marketing_mix_text'] = $_POST['text3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 5;
		$res = addmarketing_mix($conn,$data);
	}

	if($_POST['promotion1']!=""){
		$data['marketing_mix_text'] = $_POST['promotion1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['promotion2']!=""){
		$data['marketing_mix_text'] = $_POST['promotion2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['promotion3']!=""){
		$data['marketing_mix_text'] = $_POST['promotion3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addmarketing_mix($conn,$data);
	}
	if($_POST['text2']!=""){
		$data['marketing_mix_text'] = $_POST['text4'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 4;
		$res = addmarketing_mix($conn,$data);
	}
	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=target";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=target";
		</script>
		<?php
	}
}
if($_GET['action'] == 'addtarget'){
	$res = delscore($conn,7,1,$_SESSION['company']);
	$res = delscore($conn,7,2,$_SESSION['company']);
	$res = delscore($conn,7,3,$_SESSION['company']);
	$data['company_code'] = $_SESSION['company'];

	$pattern = "/มีโอกาสน้อย|มีโอกาสจากชิ้นส่วนเดิม/";
	if(preg_match_all($pattern, $_POST['text1'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("มีโอกาสน้อย","มีโอกาสจากชิ้นส่วนเดิม");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 7;
	$data['score_subtype'] = 1;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";
	$pattern = "/ใช้ชิ้นส่วนที่ผลิตในปัจจุบัน/";
	if(preg_match_all($pattern, $_POST['text2'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ใช้ชิ้นส่วนที่ผลิตในปัจจุบัน");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 7;
	$data['score_subtype'] = 2;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	echo"<br>";

	$sum=0;
	echo"<br>";
	$pattern = "/ยกระดับชิ้นส่วนที่ผลิต/";

	if(preg_match_all($pattern, $_POST['text3'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ยกระดับชิ้นส่วนที่ผลิต");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 7;
	$data['score_subtype'] = 3;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	echo"<br>";
	$res = deltarget($conn,$data['company_code'],1,1);
	$res = deltarget($conn,$data['company_code'],2,1);
	$res = deltarget($conn,$data['company_code'],3,1);
	if($_POST['segmentation1']!=""){
		$data['target_text'] = $_POST['segmentation1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 1;
		$res = addtarget($conn,$data);
	}
	if($_POST['segmentation2']!=""){
		$data['target_text'] = $_POST['segmentation2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 2;
		$res = addtarget($conn,$data);
	}
	if($_POST['text1']!=""){
		$data['target_text'] = $_POST['text1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 3;
		$res = addtarget($conn,$data);
	}

	if($_POST['targeting1']!=""){
		$data['target_text'] = $_POST['targeting1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 1;
		$res = addtarget($conn,$data);
	}
	if($_POST['text2']!=""){
		$data['target_text'] = $_POST['text2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 2;
		$res = addtarget($conn,$data);
	}

	if($_POST['positioning1']!=""){
		$data['target_text'] = $_POST['positioning1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 1;
		$res = addtarget($conn,$data);
	}
	if($_POST['text3']!=""){
		$data['target_text'] = $_POST['text3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 2;
		$res = addtarget($conn,$data);
	}
	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=competitive_force";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=competitive_force";
		</script>
		<?php
	}
}

if($_GET['action'] == 'addcompetitive_force'){
	$res = delscore($conn,8,1,$_SESSION['company']);
	$res = delscore($conn,8,2,$_SESSION['company']);
	$res = delscore($conn,8,3,$_SESSION['company']);
	$res = delscore($conn,8,4,$_SESSION['company']);
	$data['company_code'] = $_SESSION['company'];

	$pattern = "/จากผู้ผลิตชิ้นส่วน|จากต่างประเทศ|จากโรงงานอุตสาหกรรม|จากค่ายผู้ผลิตรถยนต์/";
	if(preg_match_all($pattern, $_POST['text1'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("จากผู้ผลิตชิ้นส่วน","จากต่างประเทศ","จากโรงงานอุตสาหกรรม","จากค่ายผู้ผลิตรถยนต์");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 8;
	$data['score_subtype'] = 1;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	$sum=0;
	echo"<br>";

	$pattern = "/ด้านดัชนีชี้วัด|ด้านกิจกรรม/";

	if(preg_match_all($pattern, $_POST['text2'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ด้านดัชนีชี้วัด","ด้านกิจกรรม");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 8;
	$data['score_subtype'] = 2;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	echo"<br>";
	$pattern = "/การเข้ามาของผู้ผลิตชิ้นส่วน SME |ช้ชิ้นส่วนจากผู้ผลิตชิ้นส่วน SME รายเดิม|เทคโนโลยีการผลิตที่ดีกว่า/";

	if(preg_match_all($pattern, $_POST['text3'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("การเข้ามาของผู้ผลิตชิ้นส่วน SME ","ช้ชิ้นส่วนจากผู้ผลิตชิ้นส่วน SME รายเดิม","เทคโนโลยีการผลิตที่ดีกว่า");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 8;
	$data['score_subtype'] = 3;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	echo"<br>";
	$pattern = "/ค่ายผู้ผลิตรถยนต์ได้มีการเปลี่ยนรูปลักษณ์|การใช้วัตถุดิบอื่นเพื่อลดต้นทุนลง/";

	if(preg_match_all($pattern, $_POST['text4'], $matches)) {
		print_r($matches);
	}
	$num=0;
	$str=array("ค่ายผู้ผลิตรถยนต์ได้มีการเปลี่ยนรูปลักษณ์","การใช้วัตถุดิบอื่นเพื่อลดต้นทุนลง");
	for ($j = 0; $j < count($str) ; $j++) {
		for ($i = 0; $i < count($matches[0]) ; $i++) {
			if(preg_match("/".$str[$j]."/i",$matches[0][$i]) >0){
				$num +=	$j+1;	
				echo "aa=".$matches[0][$i];
				echo "bb=".$str[$j];
				echo "j=".$j;
				echo "<br>";
			}
		}
	}
	if ($num>5) {
		$num=5;
	}
	echo "SUM= ".$num;
	$data['score_type'] = 8;
	$data['score_subtype'] = 4;
	$data['score_number'] = $num;
	$res = insertscore($conn,$data);
	echo"<br>";
	$res = delcompetitive_force($conn,$data['company_code'],1,1);
	$res = delcompetitive_force($conn,$data['company_code'],1,2);
	$res = delcompetitive_force($conn,$data['company_code'],1,3);
	$res = delcompetitive_force($conn,$data['company_code'],1,4);
	if($_POST['threats1']!=""){
		$data['competitive_force_text'] = $_POST['threats1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 1;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['threats2']!=""){
		$data['competitive_force_text'] = $_POST['threats2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 2;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['threats3']!=""){
		$data['competitive_force_text'] = $_POST['threats3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 3;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['threats4']!=""){
		$data['competitive_force_text'] = $_POST['threats4'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 4;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['text1']!=""){
		$data['competitive_force_text'] = $_POST['text1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 1;
		$data['value_numbre'] = 5;
		$res = addcompetitive_force($conn,$data);
	}


	if($_POST['customer1']!=""){
		$data['competitive_force_text'] = $_POST['customer1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 1;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['customer2']!=""){
		$data['competitive_force_text'] = $_POST['customer2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 2;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['text2']!=""){
		$data['competitive_force_text'] = $_POST['text2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 2;
		$data['value_numbre'] = 3;
		$res = addcompetitive_force($conn,$data);
	}


	if($_POST['entrant1']!=""){
		$data['competitive_force_text'] = $_POST['entrant1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 1;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['entrant2']!=""){
		$data['competitive_force_text'] = $_POST['entrant2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 2;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['entrant3']!=""){
		$data['competitive_force_text'] = $_POST['entrant3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 3;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['text3']!=""){
		$data['competitive_force_text'] = $_POST['text3'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 3;
		$data['value_numbre'] = 4;
		$res = addcompetitive_force($conn,$data);
	}


	if($_POST['products1']!=""){
		$data['competitive_force_text'] = $_POST['products1'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 1;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['products2']!=""){
		$data['competitive_force_text'] = $_POST['products2'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 2;
		$res = addcompetitive_force($conn,$data);
	}
	if($_POST['text4']!=""){
		$data['competitive_force_text'] = $_POST['text4'];
		$data['type_analysis'] = 1;
		$data['main_type'] = 4;
		$data['value_numbre'] = 3;
		$res = addcompetitive_force($conn,$data);
	}

	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=cost";
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=cost";
		</script>
		<?php
	}
}


if($_GET['action'] == 'addcost'){
	$data['company_code'] = $_SESSION['company'];
	$res = delcost($conn,$data['company_code']);
	if($_POST['money1']!=""||$_POST['unit1']!=""){
		$data['money'] =  $_POST['money1'];
		$data['unit'] =  $_POST['unit1'];
		$res = addcost($conn,$data);
	}
	if($_POST['money2']!=""||$_POST['unit2']!=""){
		$data['money'] =  $_POST['money2'];
		$data['unit'] =  $_POST['unit2'];
		$res = addcost($conn,$data);
	}
	if($_POST['money3']!=""||$_POST['unit3']!=""){
		$data['money'] =  $_POST['money3'];
		$data['unit'] =  $_POST['unit3'];
		$res = addcost($conn,$data);
	}
	if($_POST['money4']!=""||$_POST['unit4']!=""){
		$data['money'] =  $_POST['money4'];
		$data['unit'] =  $_POST['unit4'];
		$res = addcost($conn,$data);
	}
	if($_POST['money5']!=""||$_POST['unit5']!=""){
		$data['money'] =  $_POST['money5'];
		$data['unit'] =  $_POST['unit5'];
		$res = addcost($conn,$data);
	}
	if($_POST['money6']!=""||$_POST['unit6']!=""){
		$data['money'] =  $_POST['money6'];
		$data['unit'] =  $_POST['unit6'];
		$res = addcost($conn,$data);
	}
	if($_POST['money7']!=""||$_POST['unit7']!=""){
		$data['money'] =  $_POST['money7'];
		$data['unit'] =  $_POST['unit7'];
		$res = addcost($conn,$data);
	}

	if($_POST['money8']!=""||$_POST['unit8']!=""){
		$data['money'] =  $_POST['money8'];
		$data['unit'] =  $_POST['unit8'];
		$res = addcost($conn,$data);
	}
	if($_POST['money9']!=""||$_POST['unit9']!=""){
		$data['money'] =  $_POST['money9'];
		$data['unit'] =  $_POST['unit9'];
		$res = addcost($conn,$data);
	}
	if($_POST['money10']!=""||$_POST['unit10']!=""){
		$data['money'] =  $_POST['money10'];
		$data['unit'] =  $_POST['unit10'];
		$res = addcost($conn,$data);
	}
	if($_POST['money11']!=""||$_POST['unit11']!=""){
		$data['money'] =  $_POST['money11'];
		$data['unit'] =  $_POST['unit11'];
		$res = addcost($conn,$data);
	}
	if($_POST['money12']!=""||$_POST['unit12']!=""){
		$data['money'] =  $_POST['money12'];
		$data['unit'] =  $_POST['unit12'];
		$res = addcost($conn,$data);
	}


	if($res){
		?>
		<script>
			window.location = "index.php?app=user&action=show";		
		</script>
		<?php
	}else{
		?> <script>
			window.location = "index.php?app=user&action=show";
		</script>
		<?php
	}
}
?>