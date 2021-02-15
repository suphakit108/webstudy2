<div class="container">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 10px;padding-bottom: 1px; padding-top: 1px; ">
     <a class="nav-link" style="font-size: 18px; color: black;" href="index.php?app=user&action=conclude"><img src="../home.png" style="width: 20px;height: 20px;"> สารบัญด้านการตลาด  /</a>
   </nav>
 </div>
 <form id="myForm" action="index.php?app=user&action=addmarketing_mix2&result=<?php echo $_GET["result"]; ?>" method="post" accept-charset="utf-8">
  <div class="row">
    <div class="col-md-10" style=" padding-left: 50px;">
      <p style="color: #1473e6;">6.3 ช่องทางการจำหน่าย</p>
      <p style="color: #ff8100; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
    </div>
  </div>
  <div class="row" style="    padding-left: 90px;">
    <div class="col-md-12" style="width:100%">
      <input type="checkbox" id="channels1" name="channels1" value="ส่งให้กับค่ายผู้ผลิตรถยนต์ที่ส่งตรงโรงงาน">
      <label for="channels1"> ส่งให้กับค่ายผู้ผลิตรถยนต์ที่ส่งตรงโรงงาน</label><br>
      <input type="checkbox" id="channels2" name="channels2" value="ส่งให้กับผู้ผลิตชิ้นส่วนยานยนต์ในลำดับถัดไปเพื่อประกอบเป็นชิ้นส่วนกึ่งสำเร็จรูปเพื่อส่งให้กับผู้ผลิตชิ้นส่วนนำไปประกอบเป็นชิ้นส่วนสำเร็จรูปก่อนส่งตรงไปยังโรงงานหรือรถของผู้ผลิตรถยนต์มารับเองตามรอบเวลา">
      <label for="channels2"> ส่งให้กับผู้ผลิตชิ้นส่วนยานยนต์ในลำดับถัดไปเพื่อประกอบเป็นชิ้นส่วนกึ่งสำเร็จรูปเพื่อส่งให้กับผู้ผลิตชิ้นส่วนนำไป</label><br>
      <input type="checkbox" value="Boat" style="visibility: hidden;">
      <label for="channels2" >ประกอบเป็นชิ้นส่วนสำเร็จรูปก่อนส่งตรงไปยังโรงงานหรือรถของผู้ผลิตรถยนต์มารับเองตามรอบเวลา (Milk run)</label><br>
      <input type="checkbox" id="channels3" name="channels3" value="ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์">
      <label for="channels3"> ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์</label><br>   
      <input type="checkbox" id="channels4" name="channels4" value="ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์ในต่างประเทศ">
      <label for="channels4"> ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์ในต่างประเทศ</label><br>
      <input type="checkbox" id="channels5" name="channels5" value="t">
      <label for="channels5"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text1" id="text1"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10" style=" padding-left: 50px;">
      <p style="color: #1473e6;">6.4 การส่งเสริมการตลาด</p>
      <p style="color: #ff8100; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
    </div>
  </div>
  <div class="row" style="    padding-left: 90px;">
    <div class="col-md-12" style="width:100%">
      <input type="checkbox" id="promotion1" name="promotion1" value="มีโอกาสน้อยเนื่องจากทางค่ายผู้ผลิตรถยนต์เป็นคนกำหนดและเลือกตามขั้นตอนกระบวนการคัดเลือกผู้ส่งมอบ">
      <label for="promotion1"> มีโอกาสน้อยเนื่องจากทางค่ายผู้ผลิตรถยนต์เป็นคนกำหนดและเลือกตามขั้นตอนกระบวนการคัดเลือกผู้ส่งมอบ</label><br>
      <input type="checkbox" id="promotion2" name="promotion2" value="ไม่สามารถนำชิ้นส่วนไปจำหน่ายเป็นอะไหล่เทียมให้กับตลาดล่างได้เนื่องจากมีความผิดตามกฎหมาย">
      <label for="promotion2"> ไม่สามารถนำชิ้นส่วนไปจำหน่ายเป็นอะไหล่เทียมให้กับตลาดล่างได้เนื่องจากมีความผิดตามกฎหมาย</label><br>
      <input type="checkbox" id="promotion3" name="promotion3" value="สามารถเข้าไปนำเสนอให้กับค่าบผู้ผลิตรถยนต์ได้เพื่อให้รับทราบความสามารถในกระบวนการผลิตทั้งเครื่องจักรและบุคลากรรวมถึงความสามารถในด้านการออกแบบและทดสอบผลิตภัณฑ์ถ้ามีการเปลี่ยนแปลงรูปโฉม (Minor Change)  หรือเปลี่ยนรถยนต์ใหม่หมด (Major Change) ของรถยนต์อาจส่งผลต่อการเลือกผู้ส่งมอบในอนาคตได้">
      <label for="promotion3"> สามารถเข้าไปนำเสนอให้กับค่าบผู้ผลิตรถยนต์ได้เพื่อให้รับทราบความสามารถในกระบวนการผลิตทั้งเครื่องจักร</label><br>
      <input type="checkbox" value="Boat" style="visibility: hidden;">
      <label for="promotion3" >และบุคลากรรวมถึงความสามารถในด้านการออกแบบและทดสอบผลิตภัณฑ์ถ้ามีการเปลี่ยนแปลงรูปโฉม (Minor Change) </label><br>
      <input type="checkbox"  value="Boat" style="visibility: hidden;">
      <label for="promotion3" > หรือเปลี่ยนรถยนต์ใหม่หมด (Major Change) ของรถยนต์อาจส่งผลต่อการเลือกผู้ส่งมอบในอนาคตได้</label><br>
      <input type="checkbox" id="promotion4" name="promotion4" value="t">
      <label for="promotion4"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text2" id="text2"></textarea>
    </div>
  </div>
  <input type="text" id="result" name="result" style="visibility: hidden;"value=<?php echo $_GET['result'];?>>

  <div class="col-sm-12" style="padding-left: 0px; text-align: center;">
    <div class="col-sm-12" style="padding-bottom: 50px;">
      <a class=" myButton " style="width: 80px;"  onclick="backFunction()"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
      <button class="myButton success" style="height: 30px;width: 120px;" href="#" onclick="myFunction()">บันทึก</button>
      <a class=" myButton " style="width: 80px;" href="#" onclick="myFunction()"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
      <!-- <a class = " success button1" href="index.php?app=user&action=customer">1</a>
      <a class = " success button1" href="index.php?app=user&action=supply_chain">2</a>
      <a class = " success button1" href="index.php?app=user&action=demand_supply">3</a>
      <a class = " success button1" href="index.php?app=user&action=analysis">4</a>
      <a class = " success button1" href="index.php?app=user&action=analysis2">5</a>
      <a class = " success button1" href="index.php?app=user&action=analysis3">6</a>
      <a class = " success button1" href="index.php?app=user&action=analysis4">7</a>
      <a class = " success button1" href="index.php?app=user&action=analysis5">8</a>
      <a class = " success button1" href="index.php?app=user&action=analysis6">9</a>
      <a class = " success button1" href="index.php?app=user&action=analysis7">10</a>
      <a class = " success button1" href="index.php?app=user&action=analysis8">11</a>
      <a class = " success button1" href="index.php?app=user&action=analysis9">12</a>
      <a class = " success button1" href="index.php?app=user&action=analysis10">13</a>
      <a class = " success button1" href="index.php?app=user&action=analysis11">14</a>
      <a class = " success button1" href="index.php?app=user&action=analysis12">15</a>
      <a class = " success button1" href="index.php?app=user&action=marketing_analysis">16</a>
      <a class = " success button1" href="index.php?app=user&action=marketing_analysis2&result=">17</a>
      <a class = " success button1" href="index.php?app=user&action=marketing_analysis3">18</a>
      <a class = " success button1" href="index.php?app=user&action=marketing_mix">19</a>
      <a class = " success button2" href="index.php?app=user&action=marketing_mix2">20</a>
      <a class = " success button1" href="index.php?app=user&action=target">21</a>
      <a class = " success button1" href="index.php?app=user&action=competitive_force">22</a>
      <a class = " success button1" href="index.php?app=user&action=cost">23</a>
      <a class = " success button1" href="index.php?app=user&action=show">24</a> -->
    </div>
  </form>
</div>
<script type="text/javascript">
 function backFunction(){
  window.location = "index.php?app=user&action=marketing_mix";
}  
function myFunction() {
  document.getElementById("myForm").submit();
}
$('#channels1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text1");
   check.value+="ส่งให้กับค่ายผู้ผลิตรถยนต์ที่ส่งตรงโรงงาน";
 }
});

$('#channels2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text1");
   check.value+="ส่งให้กับผู้ผลิตชิ้นส่วนยานยนต์ในลำดับถัดไปเพื่อประกอบเป็นชิ้นส่วนกึ่งสำเร็จรูปเพื่อส่งให้กับผู้ผลิตชิ้นส่วนนำไปประกอบเป็นชิ้นส่วนสำเร็จรูปก่อนส่งตรงไปยังโรงงานหรือรถของผู้ผลิตรถยนต์มารับเองตามรอบเวลา";
 }
});
$('#channels3').change(function(){
 if(this.checked) {
   var check = document.getElementById("text1");
   check.value+="ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์";
 }
});
$('#channels4').change(function(){
 if(this.checked) {
   var check = document.getElementById("text1");
   check.value+="ส่งให้กับตรงศูนย์อะไหล่ของค่ายผู้ผลิตรถยนต์ในต่างประเทศ";
 }
});

$('#promotion1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text2");
   check.value+="มีโอกาสน้อยเนื่องจากทางค่ายผู้ผลิตรถยนต์เป็นคนกำหนดและเลือกตามขั้นตอนกระบวนการคัดเลือกผู้ส่งมอบ";
 }
});
$('#promotion2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text2");
   check.value+="ไม่สามารถนำชิ้นส่วนไปจำหน่ายเป็นอะไหล่เทียมให้กับตลาดล่างได้เนื่องจากมีความผิดตามกฎหมาย";
 }
});
$('#promotion3').change(function(){
 if(this.checked) {
   var check = document.getElementById("text2");
   check.value+="สามารถเข้าไปนำเสนอให้กับค่าบผู้ผลิตรถยนต์ได้เพื่อให้รับทราบความสามารถในกระบวนการผลิตทั้งเครื่องจักรและบุคลากรรวมถึงความสามารถในด้านการออกแบบและทดสอบผลิตภัณฑ์ถ้ามีการเปลี่ยนแปลงรูปโฉม (Minor Change)  หรือเปลี่ยนรถยนต์ใหม่หมด (Major Change) ของรถยนต์อาจส่งผลต่อการเลือกผู้ส่งมอบในอนาคตได้";
 }
});

$( document ).ready(function() {
  <?php 

  for ( $i = 0; $i <  count($marketing_mix) ; $i++) { ?>
    if(<?php echo $marketing_mix[$i]['main_type'] ?> == 3 && <?php echo $marketing_mix[$i]['type_analysis'] ?> == 1&&<?php echo $marketing_mix[$i]['value_numbre'] ?> == 1 ){
      document.getElementById("channels1").checked = true;
    }
    if(<?php echo $marketing_mix[$i]['main_type'] ?> == 3 && <?php echo $marketing_mix[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_mix[$i]['value_numbre'] ?> == 2 ){
      document.getElementById("channels2").checked = true;
    }
    if(<?php echo $marketing_mix[$i]['main_type'] ?> == 3 && <?php echo $marketing_mix[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_mix[$i]['value_numbre'] ?> == 3 ){
      document.getElementById("channels3").checked = true;
    }
    if(<?php echo $marketing_mix[$i]['main_type'] ?> == 3 && <?php echo $marketing_mix[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_mix[$i]['value_numbre'] ?> == 4 ){
      document.getElementById("channels4").checked = true;
    }
    if(<?php echo $marketing_mix[$i]['main_type'] ?> == 3 && <?php echo $marketing_mix[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_mix[$i]['value_numbre'] ?> == 5 ){
      document.getElementById("channels5").checked = true;
      document.getElementById("text1").innerHTML  = "<?php echo $marketing_mix[$i]['marketing_mix_text'] ?>" ;
    }
    if(<?php echo $marketing_mix[$i]['main_type'] ?> == 4 && <?php echo $marketing_mix[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_mix[$i]['value_numbre'] ?> == 1 ){
      document.getElementById("promotion1").checked = true;
    }
    if(<?php echo $marketing_mix[$i]['main_type'] ?> == 4  && <?php echo $marketing_mix[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_mix[$i]['value_numbre'] ?> == 2 ){
      document.getElementById("promotion2").checked = true;
    }
    if(<?php echo $marketing_mix[$i]['main_type'] ?> == 4 && <?php echo $marketing_mix[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_mix[$i]['value_numbre'] ?> == 3 ){
      document.getElementById("promotion3").checked = true;
    }
    if(<?php echo $marketing_mix[$i]['main_type'] ?> == 4 && <?php echo $marketing_mix[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_mix[$i]['value_numbre'] ?> == 4){
      document.getElementById("promotion4").checked = true;
      document.getElementById("text2").innerHTML  =  "<?php echo $marketing_mix[$i]['marketing_mix_text'] ?>" ;
    }

    <?php     
  }
  ?>
});
</script>