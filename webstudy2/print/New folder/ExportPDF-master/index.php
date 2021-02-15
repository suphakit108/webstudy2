<?php

require_once __DIR__ . '/vendor/autoload.php';

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
  'fontDir' => array_merge($fontDirs, [
    __DIR__ . '/tmp',
  ]),
  'fontdata' => $fontData + [
    'sarabun' => [
      'R' => 'THSarabunNew.ttf',
      'I' => 'THSarabunNew Italic.ttf',
      'B' => 'THSarabunNew Bold.ttf',
      'BI'=> 'THSarabunNew BoldItalic.ttf'
    ]
  ],
  'default_font' => 'sarabun'
]);

ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
  <style>
    body{
      font-family: 'Sarabun', sans-serif;
    }
  </style>
</head>
<body>
 <div class="container">

   <table  class="table table-striped" style="text-align: left;">  
    <tbody >  

      <tr>  
        <td style="width: 10%;">เวลา................................</td>  
        <td style="width: 10%;">พนักงาน.............................</td>  
      </tr>  
      <tr >  
        <td rowspan="2"> โทรศัพ.............................</td>  
        <td >นน.ถุง...............</td> 
      </tr>  
      <tr>  

        <td >กำหนด..........เดือน</td>  

      </tr>  

      <tr>  
        <td  colspan="2">ในห้างฯTerminal21 ถ.มิตรภาพ-หนองคาย ต.ในเมื่อง อ.เมือง จ.นครราชสีมา</td>  

      </tr>  
      <tr>  
        <td colspan="2" style="text-align: center;">วันที่ ............เดือน ...............พศ ...............</td>  
      </tr>  
      <tr>  
        <td colspan="2" style="text-align: center;">ข้าฯ ..................................................</td>  
      </tr>  
      <tr>  
        <td colspan="2">ได้ขานทรัพซึ้งเป็นของข้าฯโดยชอบและปราศจากภาระผูกพันใดๆกับผู้อื่นแก่นายอินทร์วัชร์ จารุกินเนิดกนก ดังรายการต่อไปนี้</td>  
      </tr>  
      <tr>  
        <td colspan="2">.....................................................................................</td>  
      </tr>  
      <tr>  
        <td >ราคา  ................................</td>   
        <td >บาท  (.............................)</td>  
      </tr> 
      <tr>  
        <td colspan="2">หากเกิดความเสียหายใดๆ ข้าฯขอยอมรับผิดทางแพ่งเเละทางอาญาเเละยอมชดใช้ค่าเสียหายทั้งหมดทันทีที่นายอินทร์วัชร์ จารุกินเนิดกนก<br>แจ้งให้ทราบ</td>  
      </tr> 
      <tr>  
        <td colspan="2" style="text-align: center;">ลงชื่อ ............................................................ผู้ขายทรัพ</td>  
      </tr>
      <tr>  
        <td colspan="2" style="text-align: center;">บัตรประชาชนเลขที่..................................................</td>  
      </tr>  
      <tr>  
        <td colspan="2" style="text-align: center;">ลงชื่อ..................................................พยาน</td>  
      </tr> 
      <tr>  
        <td colspan="2" style="text-align: center;">ลงชื่อ..................................................พยาน</td>  
      </tr>
      <tr>  
        <td colspan="2">___________________________________________________________</td>  
      </tr> 
      <tr>  
        <td colspan="2" style="text-align: right;">วันที่...........................................</td>  
      </tr> 
      <tr>  
        <td> อักษร........................................</td> 
        <td style="text-align: right;"> ราคา........................................ หมวด........................................</td>  
      </tr> 
      <tr>  
        <td>กรณีไม่ได้มารับเองกรุณากรอก</td>   
        <td style="text-align: right;">ขัาเจ้าชื่อ ........................................</td>  
      </tr> 

      <tr>  
        <td colspan="2">ไม่สามารถมารับเองได้มอบอำนาจให้......................................<br>มารับของเเทนข้าพเจ้า</td>  
      </tr>
    </tbody>  
  </table>  
  <?php
  $html=ob_get_contents();
  $mpdf->WriteHTML($html);
  $mpdf->Output("MyReport.pdf");
  ob_end_flush();
  ?>
  <a href="MyReport.pdf" class="btn btn-primary">โหลดผลการเรียน (pdf)</a>
</div>
</body>