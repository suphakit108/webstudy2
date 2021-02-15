<script type="text/javascript">
	$( document ).ready(function() {

	});

</script>

<?php

date_default_timezone_set("Asia/Bangkok");
$d1=date("d");
$d2=date("m");
$d3=date("Y");
$d4=date("h");
$d5=date("i");
$d6=date("s");

session_start();
// require_once('../../models/paymentModel.php');
// $payment_Model = new paymentModel;

// $receipt = $payment_Model -> getReceptByReceptNumber($_GET['code']);
// $receipt_detail = $payment_Model -> getReceptDetailByReceptNumberId($receipt['receipt_id']);
// if($receipt['receipt_rewrite_id'] != 0){
// 	$pr_name = $receipt['receipt_code']."-RE-".$receipt['receipt_rewrite_no'];
// }if($receipt['receipt_rewrite_id'] == 0){
// 	$pr_name = $receipt['receipt_code'];
// }
$str='

<table width="100%" height="100%" align="center" valign="center" class="no-border padding-tb">
<tr class="no-border">
<td class="no-border " width="100%"  align="center">
<img src="tbp_logo.jpg" style="width:150px; text-align : center;" align="left"/><br><br>
</td>
</tr>
<tr>
<td align="center">
<h2>ใบสำคัญรับ</2>
</td>
</tr>
<tr>
<td align="center">
<h2>receipt voucher</h2>
</td>
</tr>
</table>
<table width="100%" height="100%"  >
<tr>
<td colspan="3" align = "center">
<span style="align:center ;  font-size:18px;"></span>
</td>
</tr>
<tr>
<td>

<br>
<br>
</td>
</tr>
<tr>
<td>
<span>เลขที่ใบสำคัญรับ:</span>
</td>
<td align="right">
<span>วันที่: </span>
<span>เวลา: </span>
</td>
</tr>
<tr>
<td>
<span>รับจาก: </span>
</td>
</tr>

</table>
<br>

<table width="100%" height="100%" border="1" align="center" cellpadding="0" cellspacing="0">
<thead>
<tr>

<th style="text-align:center;" width="200" width="200" height="50"  >บัญชี</th>
<th style="text-align:center;" width="100">ประเภท</th>
<th style="text-align:center;" width="100">รายการ</th>
<th style="text-align:center;" width="100">บาท</th>

<th style="text-align:center;"  height="50" width="100">ประเภท</th>
<th style="text-align:center;" width="200">รายการ</th>
<th style="text-align:center;" width="100">บาท</th>

</thead>
<tr class="odd gradeX">
<td width="75" height="40"  style="text-align: center;">
<span></span>
</td>
<td width="75" height="40"  style="text-align: center;">
<span></span>
</td>
<td width="50" style="text-align: center;">
<span></span>
</td>
<td width="350" style="text-align: center;">
<span> รับเงินจาก</span>
</td>
<td width="100" style="text-align: center;" >
<span></span>
</td>
</tr>
<td width="75" height="40"  style="text-align: center;">
<span></span>
</td>
<td width="50" style="text-align: center;">
<span></span>
</td>
<td width="350" style="text-align: center;">
<span> รับเงินจาก </span>
</td>
<td width="100" style="text-align: center;" >
<span></span>
</td>
</tr>
<td width="100" height="40"  style="text-align: center;">
<span></span>
</td>
<td width="350" style="text-align: center;">
<span> รับเงินจาก </span>
</td>
<td width="100" style="text-align: center;" >
<span></span>
</td>
</tr>

<tr class="odd gradeX">
<td width="75" height="40"  style="text-align: center;">

</td>
<td width="75" height="40"  style="text-align: center;">

</td>
<td width="50" style="text-align: center;">

</td>
<td width="350" style="text-align: center;">

</td>
<td width="100" style="text-align: center;" >

</td>
</tr>
<td width="75" height="40"  style="text-align: center;">

</td>
<td width="50" style="text-align: center;">

</td>
<td width="350" style="text-align: center;">

</td>
<td width="100" style="text-align: center;" >

</td>
</tr>
<td width="100"  height="40" style="text-align: center;">

</td>
<td width="350" style="text-align: center;">

</td>
<td width="100" style="text-align: center;" >

</td>
</tr>

</tr>
</thead>
</table>
<br>
<br>
<table width="100%"  height="100%" align="center">
<tr>
</tr>
<tr>
<td align="center">
......................................................
</td>
<td align="center">
......................................................
</td>
<td align="center">
......................................................
</td>
<td align="center">
......................................................
</td>
</tr>
<tr>
<td align="center">
ผู้จัดทำ
</td>
<td align="center">
ผู้ตรวจสอบ
</td>
<td align="center">
ผู้อนุมัติ
</td>
<td align="center">
ผู้รับเงิน 
</td>
</tr>
<tr>
<td align="center">

</td>
<td align="center">

</td>
<td align="center">

</td>
<td align="center">
<h5>(ชื่อสกุล ตัวบรรจง)</h5>
</td>
</tr>
</table>
';


if(true){

	// echo $str;

	include("../../lib/mpdf/mpdf.php");
	$mpdf=new mPDF('th', 'A4-L', '0', 'garuda');   

	$mpdf->mirrorMargins = true;

	$mpdf->SetDisplayMode('fullpage','two');
	// $str1 = convertImg($str);
			$mpdf->AddPage('L', // L - landscape, P - portrait 
				'', '', '', '',
			10, // margin_left
			10, // margin right
			1, // margin top
			1, // margin bottom
			10, // margin header
			0); // margin foote
			$mpdf->WriteHTML($str);
			// $mpdf->SetJS('this.print();'); 
			$mpdf->Output();


		}
		else if(false){

			header("Content-type: application/vnd.ms-excel");
// header('Content-type: application/csv'); //*** CSV ***//

			header("Content-Disposition: attachment; filename=receipt $d1-$d2-$d3 $d4:$d5:$d6.xls");
			echo $str;
		} else {
//echo $str;
			?>
			<script language="javastript">

				window.print();
			</script>
			<?php 
		}
		?>
