<?php

// include("../php/config.php");
// include('../php/function.php');


// $thaimonth=array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"); 

// date_default_timezone_set("Asia/Bangkok");
// $d1=date("d");
// $d2=date("m");
// $d3=date("Y");
// $d4=date("H");
// $d5=date("i");
// $d6=date("s");
// $date = new DateTime;
// $date_set_page = $date->format('d-m-Y');
// $time_set_page = $date->format('H:i:s');

// $form = getFormById($conn,$_GET['id']);
// if($form['rewrite_no'] != 0){
// 	$form_name = $form['form_no'].'-RE-'.$form['rewrite_no'];
// }
$str='
<style type="text/css">
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
</style>

<table width="100%" style=" border: 0; " >
<tr style="border: 0; ">
<td align="left" width="140px" style=" border: 0;">
<p style="font-size: 10px;">

</p>
</td>
<td align="right" style=" border: 0; ">
<p style="font-size: 10px;">
หน้าที่ {PAGENO} / {nb}
</p>
</td>  
</tr>
</table>  

<meta charset="utf-8">
<div align="center">
<div class="row" style="margin-left: 8px; margin-right: 8px;">

<div class="col-lg-12">

<div class="panel-heading" align="center" style=" font-size: 16px;font-weight: bold;padding:0px;">
<div align="center">แบบฟอร์มบำรุงรักษาหม้อแปลง </div>
</div>
<br>
<div class="panel-heading" align="left" style=" font-size: 12px;font-weight: bold;padding:0px;">
<div align="left">
สถานที่ติดตั้ง : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
กฟฟ : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
PEA NO :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
SERIAL NO :  <br></div>

<div align="left">
ผลิตภัณฑ์/ยี่ห้อ :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ขนาด :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
PHASE,VECTOR GROUP: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
ตำแหน่ง TAP :  <br></div>

<div align="left">
พิกัดแรงสูง :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
กระแส :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
พิกัดแรงต่ำ: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
กระแส :  <br></div>


<div align="left">
ขนาด FUSE แรงต่ำ เฟส A : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ขนาด FUSE แรงต่ำ เฟส B : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ขนาด FUSE แรงต่ำ เฟส C:  <br></div>

<div align="left">
ขนาด FUSE แรงต่ำ เฟส A :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ขนาด FUSE แรงต่ำ เฟส B :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ขนาด FUSE แรงต่ำ เฟส C:  <br></div>


</div>
<div class="panel-body"  align="center"  style="padding: 0px;">
<div align="right">
</div> 
<div align="center" style="text-align:center; font-weight: bold;">
ตรวจสอบค่าทางเทคนิค
<br>
</div> 
<table  width="100%"  class="table" >
<thead>
<tr>
<th width="10">ลำดับ</th>
<th width="80">รายการ</th>
<th width="100">ค่าที่วัดได้</th>
<th width="100">หลังแก้ไข</th>

</tr>
</thead>
<tbody> 
<tr>

';




if($_GET['type'] == "PDF"){
	// echo "<pre>";
	// print_r($oilstock);
	// echo "</pre>";

	// echo $str;

	include("../lib/mpdf/mpdf.php");

	$mpdf=new mPDF('th', 'A4', '0', 'garuda');   
	$mpdf->mirrorMargins = true;
	$mpdf->SetHTMLHeader($html_head_pdf,'O');
	$mpdf->SetHTMLHeader($html_head_pdf,'E');
	// $mpdf->SetDisplayMode('fullpage','two');
	$mpdf->AddPage('P', // L - landscape, P - portrait 
		'', '', '', '',
	10, // margin_left
	10, // margin right
	5, // margin top
	5, // margin bottom
	5, // margin header
	0); // margin foote
	$mpdf->WriteHTML($str);
	$mpdf->Output();
}
if($_GET['type'] == "DOWNLOAD"){
	// echo "<pre>";
	// print_r($oilstock);
	// echo "</pre>";

	// echo $str;

	include("../lib/mpdf/mpdf.php");

	$mpdf=new mPDF('th', 'A4', '0', 'garuda');   
	$mpdf->mirrorMargins = true;
	$mpdf->SetHTMLHeader($html_head_pdf,'O');
	$mpdf->SetHTMLHeader($html_head_pdf,'E');
	// $mpdf->SetDisplayMode('fullpage','two');
	$mpdf->AddPage('P', // L - landscape, P - portrait 
		'', '', '', '',
	10, // margin_left
	10, // margin right
	5, // margin top
	5, // margin bottom
	5, // margin header
	0); // margin foote
	$mpdf->WriteHTML($str);
	$mpdf->Output($d1.$d2.$d3.$d4.$d5.'.pdf','D');
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