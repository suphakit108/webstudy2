<?php

use Mpdf\Css\TextVars;
use Mpdf\Tag\TBody;
use Mpdf\Tag\TextArea;

include("../php/config.php");
include('../php/function.php');


session_start();

date_default_timezone_set("Asia/Bangkok");
// print_r($conn);

$company = getcompany($conn, $_GET['result']);
$analysis = getanalysis($conn, $_GET['result']);
$competitive_force = getcompetitive_force($conn, $_GET['result']);
$customer = getcustomer($conn, $_GET['result']);
$demand_supply = getdemand_supply($conn, $_GET['result']);
$marketing_analysis = getmarketing_analysis($conn, $_GET['result']);
$marketing_mix = getmarketing_mix($conn, $_GET['result']);
$supply_chain = getsupply_chain($conn, $_GET['result']);
$target = gettarget($conn, $_GET['result']);
$cost = getcost($conn, $_GET['result']);

// print_r($analysis);



$str = '	<style type="text/css">
@page{
	margin: 0.1cm;
}
body { 

	font-size: 8px; 
}

.condition-menu{
	color: #0a0a0a;
	font-style: inherit;
	background-color: rgb(241, 241, 241);
}
table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
	margin-left:auto; 
	margin-right:auto;

}
th {
	height: 25px;
}
td {
	height: 25px;
	padding-left :7px!important;
	padding-right :7px!important;
}
.no-border{
	border:none!important;
	padding :2px!important;

}
</style>';
$str .= '	
<p> ส่วนที่1 การศึกษาความเป็นไปได้ด้านการตลาด</p>
<p style="color: #000000">1. ข้อมูลลูกค้า</p>
<table  class="table" style="width:100%" >
<thead>
<tr>
<th style="text-align: center;">ชื่อบริษัท</th>
<th style="text-align: center;">ที่อยู่</th>
<th style="text-align: center;">เบอร์โทร</th>
<th style="text-align: center;">Email</th>
<th style="text-align: center;">ชื่อผู้ประกอบการ</th>
<th style="text-align: center;">เงื่อนไขการชำระเงิน </th>
</tr>
</thead>
<tbody>
';

for ($i = 0; $i < count($customer); $i++) {

	$str .= '<tr>
	<td style="text-align: center;" >' . $customer[$i]['customer_name'] . '</td>
	<td style="text-align: center;" >' . $customer[$i]['customer_local'] . '</td>
	<td style="text-align: center;" >' . $customer[$i]['customer_phone'] . '</td>
	<td style="text-align: center;" >' . $customer[$i]['customer_email'] . '</td>
	<td style="text-align: center;" >' . $customer[$i]['customer_employe'] . '</td>
	<td style="text-align: center;" >' . $customer[$i]['customer_payment'] . '</td>
	</tr>';
}
if (count($customer) < 5) {
	for ($i = count($customer); $i < 5; $i++) {
		$str .= '<tr>
		<td style="color: #fff;"> &nbsp;</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>		
		</tr>';
	}
}
$str .= '</tbody></table><p style="color: #000000">2. ห่วงโซ่อุปทานขององค์กร</p>
<table name = "mytable" id="mytable" style="width:100%">
<thead>
<tr>
<th style="text-align: center;">ห่วงโซ่ลำดับที่</th>
<th style="text-align: center;">ผู้ส่งมอบลำดับที่ 3</th>
<th style="text-align: center;">ผู้ส่งมอบลำดับที่ 2</th>
<th style="text-align: center;">ผู้ส่งมอบลำดับที่ 1</th>
<th style="text-align: center;">โรงงานของท่าน</th>
<th style="text-align: center;">ลูกค้าลำดับที่ 1</th>
<th style="text-align: center;">ลูกค้าลำดับที่ 2</th>
<th style="text-align: center;">ลูกค้าลำดับที่ 3</th>
</tr>
</thead>
<tbody>';
for ($i = 0; $i < count($supply_chain); $i++) {
	$str .= '<tr>
	<td style="text-align: center;">ลำดับที่ ' . ($i + 1) . '</td>
	<td style="text-align: center;" >' . $supply_chain[$i]['Supplier1'] . '</td>
	<td style="text-align: center;" >' . $supply_chain[$i]['Supplier2'] . '</td>
	<td style="text-align: center;" >' . $supply_chain[$i]['Supplier3'] . '</td>
	<td style="text-align: center;" >' . $supply_chain[$i]['yourfactory'] . '</td>
	<td style="text-align: center;" >' . $supply_chain[$i]['customer1'] . '</td>
	<td style="text-align: center;" >' . $supply_chain[$i]['customer2'] . '</td>
	<td style="text-align: center;" >' . $supply_chain[$i]['customer3'] . '</td>
	</tr>';
}
if (count($supply_chain) < 3) {
	for ($i = count($supply_chain); $i < 3; $i++) {
		$str .= '<tr>
		<td style="text-align: center;"> ลำดับที่ ' . ($i + 1) . '</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		</tr>';
	}
}
$str .= '</tbody></table> 	<p style="color: #000">3. เปรียบเทียบอุปสงค์และอุปทาน</p>
<table name = "mytable" id="mytable" style="width:100%">
<thead>
<tr >
<th style="text-align: center;">เดือน</th>
<th style="text-align: center;">อุปสงค์</th>
<th style="text-align: center;">หน่วย</th>
<th style="text-align: center;">อุปทาน</th>
<th style="text-align: center;">หน่วย</th>
</tr>
</thead>
<tbody>
<tr>
<td style="text-align: center;" >มกราคม</td>
<td style="text-align: center;" >' . $demand_supply[0]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[0]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[0]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[0]['supply_unit'] . '</td>
</tr> 
<tr>
<td style="text-align: center;" >กุมภาพันธ์</td>
<td style="text-align: center;" >' . $demand_supply[1]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[1]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[1]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[1]['supply_unit'] . '</td>
</tr>
<tr>
<td style="text-align: center;" >มีนาคม</td>
<td style="text-align: center;" >' . $demand_supply[2]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[2]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[2]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[2]['supply_unit'] . '</td>
</tr>
<tr>
<td style="text-align: center;" >เมษายน</td>
<td style="text-align: center;" >' . $demand_supply[3]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[3]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[3]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[3]['supply_unit'] . '</td>
</tr>
<tr>
<td style="text-align: center;" >พฤษภาคม</td>
<td style="text-align: center;" >' . $demand_supply[4]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[4]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[4]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[4]['supply_unit'] . '</td>
</tr>
<tr>
<td style="text-align: center;" >มิถุนายน</td>
<td style="text-align: center;" >' . $demand_supply[5]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[5]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[5]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[5]['supply_unit'] . '</td>
</tr>
<tr>
<td style="text-align: center;" >กรกฎาคม</td>
<td style="text-align: center;" >' . $demand_supply[6]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[6]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[6]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[6]['supply_unit'] . '</td>
</tr>
<tr>
<td style="text-align: center;" >สิงหาคม</td>
<td style="text-align: center;" >' . $demand_supply[7]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[7]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[7]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[7]['supply_unit'] . '</td>
</tr>
<tr>
<td style="text-align: center;" >กันยายน</td>
<td style="text-align: center;" >' . $demand_supply[8]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[8]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[8]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[8]['supply_unit'] . '</td>
</tr>
<tr>
<td style="text-align: center;" >ตุลาคม</td>
<td style="text-align: center;" >' . $demand_supply[9]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[9]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[9]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[9]['supply_unit'] . '</td>
</tr>
<tr>
<td style="text-align: center;" >พฤศจิกายน</td>
<td style="text-align: center;" >' . $demand_supply[10]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[10]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[10]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[10]['supply_unit'] . '</td>
</tr>
<tr>
<td style="text-align: center;" >ธันวาคม</td>
<td style="text-align: center;" >' . $demand_supply[11]['demand'] . '</td>
<td style="text-align: center;" >' . $demand_supply[11]['demand_unit'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[11]['supply'] . '</td> 
<td style="text-align: center;" >' . $demand_supply[11]['supply_unit'] . '</td>
</tr>
</tbody>
</table>
<p style="color: #000">4. วิเเคราะห์สถานการณ์สภาพแวดล้อมภายในและภายนอก</p>
<p style="margin-left: 15px; color: #000;">4.1 จุดแข็ง (Stremgth)</p> 
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($analysis); $i++) {
	if ($analysis[$i]['main_type'] == 1 && $analysis[$i]['type_analysis'] == 1 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 1 && $analysis[$i]['type_analysis'] == 2 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 1 && $analysis[$i]['type_analysis'] == 3 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 1 && $analysis[$i]['type_analysis'] == 4 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
}
$str .= ' </td>
</tr> 
</table>
<p style="margin-left: 15px; color: #000;">4.2 จุดอ่อน (Weakness)</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($analysis); $i++) {
	if ($analysis[$i]['main_type'] == 2 && $analysis[$i]['type_analysis'] == 1 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 2 && $analysis[$i]['type_analysis'] == 2 && $analysis[$i]['value_numbre'] == 5) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 2 && $analysis[$i]['type_analysis'] == 3 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 2 && $analysis[$i]['type_analysis'] == 4 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 2 && $analysis[$i]['type_analysis'] == 5 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 2 && $analysis[$i]['type_analysis'] == 6 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 2 && $analysis[$i]['type_analysis'] == 7 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 2 && $analysis[$i]['type_analysis'] == 8 && $analysis[$i]['value_numbre'] == 7) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 2 && $analysis[$i]['type_analysis'] == 9 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 2 && $analysis[$i]['type_analysis'] == 10 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
}

$str .= '</td>
</tr> 
</table>
<p style="margin-left: 15px; color: #00;">4.3 โอกาส (Opportunities)</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($analysis); $i++) {
	if ($analysis[$i]['main_type'] == 3 && $analysis[$i]['type_analysis'] == 1 && $analysis[$i]['value_numbre'] == 5) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 3 && $analysis[$i]['type_analysis'] == 2 && $analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 3 && $analysis[$i]['type_analysis'] == 3 && $analysis[$i]['value_numbre'] == 7) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">4.4 อุปสรรค</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($analysis); $i++) {
	if ($analysis[$i]['main_type'] == 4 && $analysis[$i]['type_analysis'] == 1 && $analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 4 && $analysis[$i]['type_analysis'] == 2 && $analysis[$i]['value_numbre'] == 5) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 4 && $analysis[$i]['type_analysis'] == 3 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 4 && $analysis[$i]['type_analysis'] == 4 && $analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 4 && $analysis[$i]['type_analysis'] == 5 && $analysis[$i]['value_numbre'] == 5) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 4 && $analysis[$i]['type_analysis'] == 6 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 4 && $analysis[$i]['type_analysis'] == 7 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 4 && $analysis[$i]['type_analysis'] == 8 && $analysis[$i]['value_numbre'] == 6) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 4 && $analysis[$i]['type_analysis'] == 9 && $analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
	if ($analysis[$i]['main_type'] == 4 && $analysis[$i]['type_analysis'] == 10 && $analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $analysis[$i]['analysis_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="color: #00">5.วิเเคราะห์สภาพแวดล้อมทางการตลาด 6 ด้าน (PESTEL) ขององค์กรของท่าน</p>
<p style="margin-left: 15px; color: #00;">5.1 ปัจจัยทางด้านการเมือง (Politic)</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($marketing_analysis); $i++) {
	if ($marketing_analysis[$i]['main_type'] == 1 && $marketing_analysis[$i]['type_analysis'] == 1 && $marketing_analysis[$i]['value_numbre'] == 5) {
		$str .= '<p style="margin-left: 30px;"> - ' . $marketing_analysis[$i]['marketing_analysis_text'] . '</p>';
	}
	if ($marketing_analysis[$i]['main_type'] == 1 && $marketing_analysis[$i]['type_analysis'] == 2 && $marketing_analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $marketing_analysis[$i]['marketing_analysis_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">5.2 ปัจจัยทางด้านเศรษฐศาสตร์ (Economic)</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($marketing_analysis); $i++) {
	if ($marketing_analysis[$i]['main_type'] == 2 && $marketing_analysis[$i]['type_analysis'] == 1 && $marketing_analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> -' . $marketing_analysis[$i]['marketing_analysis_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">5.3 ปัจจัยทางด้านสังคม (Social)</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($marketing_analysis); $i++) {
	if ($marketing_analysis[$i]['main_type'] == 3 && $marketing_analysis[$i]['type_analysis'] == 1 && $marketing_analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $marketing_analysis[$i]['marketing_analysis_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">5.4 ปัจจัยทางด้านเทคโนโลยี (Technology)</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($marketing_analysis); $i++) {
	if ($marketing_analysis[$i]['main_type'] == 4 && $marketing_analysis[$i]['type_analysis'] == 1 && $marketing_analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $marketing_analysis[$i]['marketing_analysis_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">5.5 ปัจจัยทางด้านกฎหมาย (Legal)</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($marketing_analysis); $i++) {
	if ($marketing_analysis[$i]['main_type'] == 5 && $marketing_analysis[$i]['type_analysis'] == 1 && $marketing_analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $marketing_analysis[$i]['marketing_analysis_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">5.6ปัจจัยทางด้านสิ่งแวดล้อม (Environment)</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($marketing_analysis); $i++) {
	if ($marketing_analysis[$i]['main_type'] == 6 && $marketing_analysis[$i]['type_analysis'] == 1 && $marketing_analysis[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $marketing_analysis[$i]['marketing_analysis_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="color: #00">6. การกำหนดส่วนประสมทางการตลาด (Marketing Mix) </p>
<p style="margin-left: 15px; color: #00;">6.1 ผลิตภัณฑ์</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($marketing_mix); $i++) {
	if ($marketing_mix[$i]['main_type'] == 1 && $marketing_mix[$i]['type_analysis'] == 1 && $marketing_mix[$i]['value_numbre'] == 4) {
		$str .= '	<p style="margin-left: 30px;"> - ' . $marketing_mix[$i]['marketing_mix_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">6.2 ราคา</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($marketing_mix); $i++) {
	if ($marketing_mix[$i]['main_type'] == 2 && $marketing_mix[$i]['type_analysis'] == 1 && $marketing_mix[$i]['value_numbre'] == 4) {
		$str .= '	<p style="margin-left: 30px;"> - ' . $marketing_mix[$i]['marketing_mix_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;"> 6.3 ช่องทางการจำหน่าย</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($marketing_mix); $i++) {
	if ($marketing_mix[$i]['main_type'] == 3 && $marketing_mix[$i]['type_analysis'] == 1 && $marketing_mix[$i]['value_numbre'] == 5) {
		$str .= '	<p style="margin-left: 30px;"> - ' . $marketing_mix[$i]['marketing_mix_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">6.4 การส่งเสริมการตลาด</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($marketing_mix); $i++) {
	if ($marketing_mix[$i]['main_type'] == 4 && $marketing_mix[$i]['type_analysis'] == 1 && $marketing_mix[$i]['value_numbre'] == 4) {
		$str .= '	<p style="margin-left: 30px;"> - ' . $marketing_mix[$i]['marketing_mix_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="color: #00">7. การแบ่งทางการตลาด การกำหนดตลาดเป้าหมายขององค์กรควรเป็นอย่างไร</p>
<p style="margin-left: 15px; color: #00;">7.1 การแบ่งส่วนตลาด</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($target); $i++) {
	if ($target[$i]['main_type'] == 1 && $target[$i]['type_analysis'] == 1 && $target[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $target[$i]['target_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">7.2 การกำหนดเป้าหมาย</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($target); $i++) {
	if ($target[$i]['main_type'] == 2 && $target[$i]['type_analysis'] == 1 && $target[$i]['value_numbre'] == 2) {
		$str .= '<p style="margin-left: 30px;"> - ' . $target[$i]['target_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">7.3 การกำหนดตำแหน่ง</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($target); $i++) {
	if ($target[$i]['main_type'] == 3 && $target[$i]['type_analysis'] == 1 && $target[$i]['value_numbre'] == 2) {
		$str .= '<p style="margin-left: 30px;"> - ' . $target[$i]['target_text'] . '</p>';
	}
}
// $str .= '<p style="color: #000">8. การใช้ทฤษฎีแรงกดดัน 5 ประเภท</p>';

$str .= '</tr>
</td>
</table>
<p style="color: #000">8. การใช้ทฤษฎีแรงกดดัน 5 ประเภท</p>
<p style="margin-left: 15px; color: #00;">8.1 ภัยคุกคาม</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($competitive_force); $i++) {
	if ($competitive_force[$i]['main_type'] == 1 && $competitive_force[$i]['type_analysis'] == 1 && $competitive_force[$i]['value_numbre'] == 5) {
		$str .= '<p style="margin-left: 30px;"> - ' . $competitive_force[$i]['competitive_force_text'] . '</p>';
	}
}

$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">8.2 อำนาจต่อรองของผู้บริโภค</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($competitive_force); $i++) {
	if ($competitive_force[$i]['main_type'] == 2 && $competitive_force[$i]['type_analysis'] == 1 && $competitive_force[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $competitive_force[$i]['competitive_force_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">8.3 อำนาจต่อรองของผู้ผลิต</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($competitive_force); $i++) {
	if ($competitive_force[$i]['main_type'] == 3 && $competitive_force[$i]['type_analysis'] == 1 && $competitive_force[$i]['value_numbre'] == 4) {
		$str .= '<p style="margin-left: 30px;"> - ' . $competitive_force[$i]['competitive_force_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">8.4 การเข้ามาของผู้ประกอบการรายใหม่</p>
<table style="width:100%; margin-left:20px">
<tr>
<td>';
for ($i = 0; $i < count($competitive_force); $i++) {
	if ($competitive_force[$i]['main_type'] == 4 && $competitive_force[$i]['type_analysis'] == 1 && $competitive_force[$i]['value_numbre'] == 3) {
		$str .= '<p style="margin-left: 30px;"> - ' . $competitive_force[$i]['competitive_force_text'] . '</p>';
	}
}
$str .= '</tr>
</td>
</table>
<p style="margin-left: 15px; color: #00;">9. ค่าใช้จ่ายที่ใช้ในกิจกรรมด้านการตลาดว่ามีอะไรบ้างอธิบายมาพอสังเขป</p>	
<table id="myTable" style="width:100%">
<thead>
<tr>
<th style="text-align: center;" >ปีที่</th>
<th style="text-align: center;">จำนวนเงิน</th>
<th style="text-align: center;">หน่วย</th>
</tr>
</thead>
<tbody>';

for ($i = 0; $i < count($cost); $i++) {
	$str .= '<tr>
	<td style="text-align: center;" >' . ($i + 1) . '</td>
	<td style="text-align: center;" >' . $cost[$i]['money'] . '</td>
	<td style="text-align: center;" >' . $cost[$i]['unit'] . '</td>
	</tr>';
}
if (count($cost) < 12) {
	for ($i = count($cost); $i < 12; $i++) {
		$str .= '<tr>
		<td style="text-align: center;">' . ($i + 1) . '</td>
		<td></td>
		<td></td>	
		</tr>';
	}
}
$str .= '</tbody></table>';
function txtHead()
{
	$txt = '<strong>page {PAGENO} of {nb}</strong>';
	return $txt;
}
// echo $str;
if ($_GET['type'] == "PDF") {



	include("../lib/mpdf/mpdf.php");

	$mpdf = new mPDF('th', 'A4', '0', 'garuda');
	// echo $str;
	$mpdf->mirrorMargins = true;
	// $mpdf->SetHTMLHeader($str,'O');
	// $mpdf->SetHTMLHeader($html_head_pdf,'E');
	$mpdf->SetDisplayMode('fullpage', 'two');

	$mpdf->AddPage(
		'P', // L - landscape, P - portrait 
		'',
		'',
		'',
		'',
		10, // margin_left
		10, // margin right
		5, // margin top
		5, // margin bottom
		5, // margin header
		0
	); // margin foote
	$mpdf->setFooter('{PAGENO}');
	$mpdf->WriteHTML($str);
	$mpdf->Output();
}

if ($_GET['type'] == "DOWNLOAD") {
	// echo "<pre>";
	// print_r($oilstock);
	// echo "</pre>";

	// // echo $str;

	// include("../lib/mpdf/mpdf.php");

	// $mpdf = new mPDF('th', 'A4', '0', 'garuda');
	// $mpdf->mirrorMargins = true;

	// $mpdf->SetHTMLHeader($html_head_pdf, 'O');
	// $mpdf->SetHTMLHeader($html_head_pdf, 'E');
	// // $mpdf->SetDisplayMode('fullpage','two');
	// $mpdf->AddPage(
	// 	'P', // L - landscape, P - portrait 
	// 	'',
	// 	'',
	// 	'',
	// 	'',
	// 	10, // margin_left
	// 	10, // margin right
	// 	5, // margin top
	// 	5, // margin bottom
	// 	5, // margin header
	// 	0
	// ); // margin foote
	// $mpdf->setFooter('{PAGENO}');
	// $mpdf->WriteHTML($str);
	// $mpdf->Output('.pdf', 'D');
}
// else if($_GET['type'] == "Excel"){
// 	header("Content-type: application/vnd.ms-excel");
// 	// header('Content-type: application/csv'); //*** CSV ***//

// 	header("Content-Disposition: attachment; filename=delivery_driver$d1-$d2-$d3 $d4:$d5:$d6.xls");
// 	echo $str;
// }
// echo "$str";
?>
</div>
</div>
<style>
	table {
		border-collapse: collapse;
		border: 1px solid black;
	}

	div {
		background-color: lightgrey;
		width: 300px;
		padding: 25px;
		border: 25px solid navy;
		margin: 25px;
	}
</style>