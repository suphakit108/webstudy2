<div class="container">
  <div class="container">
  </div>
  <div class="row">
    <div class="col-md-11">
      <p style="color: #32b4c1;">4.3 โอกาส (Opportunities)</p>
    </div>
  </div>
  <form id="myForm" action="index.php?app=user&action=addanalysis8" method="post" accept-charset="utf-8">
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(1) อะไหล่ทดแทน</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="replacement_parts1" name="replacement_parts1" value="ยอดจำหน่ายรถยนต์ใหม่ที่เพิ่มสูงขึ้น">
        <label for="replacement_parts1"> ยอดจำหน่ายรถยนต์ใหม่ที่เพิ่มสูงขึ้น</label><br>
        <input type="checkbox" id="replacement_parts2" name="replacement_parts2" value="อะไหล่ของรถมือ 2 ที่เกิดจากการเสื่อมสภาพใช้งาน">
        <label for="replacement_parts2"> อะไหล่ของรถมือ 2 ที่เกิดจากการเสื่อมสภาพใช้งาน</label><br>
        <input type="checkbox" id="replacement_parts3" name="replacement_parts3" value="อะไหล่จากอู่ซ่อมรถที่เกิดอุบัติเหตุประกันภัย">
        <label for="replacement_parts3"> อะไหล่จากอู่ซ่อมรถที่เกิดอุบัติเหตุประกันภัย</label><br>
        <input type="checkbox" id="replacement_parts4" name="replacement_parts4" value="อะไหล่เพื่อเป็นรถต้นแบบของบริษัทผู้ผลิต">
        <label for="replacement_parts4"> อะไหล่เพื่อเป็นรถต้นแบบของบริษัทผู้ผลิต</label><br>
        <input type="checkbox" id="replacement_parts5" name="replacement_parts5" value="t">
        <label for="replacement_parts5"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text1" id="text1"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(2) ชิ้นส่วนมียอดจำหน่ายเพิ่มสูงขึ้นจากรถยนต์ทางเลือก</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="sales1" name="sales1" value="รถปลั๊กอินไฮบริด">
        <label for="sales1"> รถปลั๊กอินไฮบริด</label><br>
        <input type="checkbox" id="sales2" name="sales2" value="รถไฟฟ้าแบตเตอรี่">
        <label for="sales2"> รถไฟฟ้าแบตเตอรี่</label><br>
        <input type="checkbox" id="sales3" name="sales3" value="t">
        <label for="sales3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text2" id="text2"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(3) ต้นทุนของต่างประเทศสูงทำให้มีการสั่งซื้อเข้ามาที่ประเทศไทย</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="international_costs1" name="international_costs1" value="ประเทศในแถบยุโรป">
        <label for="international_costs1"> ประเทศในแถบยุโรป</label><br>
        <input type="checkbox" id="international_costs2" name="international_costs2" value="ประเทศในแถบอเมริกา">
        <label for="international_costs2"> ประเทศในแถบอเมริกา</label><br>
        <input type="checkbox" id="international_costs3" name="international_costs3" value="ประเทศในแถบแอฟริกา">
        <label for="international_costs3"> ประเทศในแถบแอฟริกา</label><br>
        <input type="checkbox" id="international_costs4" name="international_costs4" value="ประเทศญี่ปุ่น">
        <label for="international_costs4"> ประเทศญี่ปุ่น</label><br>
        <input type="checkbox" id="international_costs5" name="international_costs5" value="ประเทศเกาหลี">
        <label for="international_costs5"> ประเทศเกาหลี</label><br>
        <input type="checkbox" id="international_costs6" name="international_costs6" value="ประเทศในกลุ่มอาเซียน">
        <label for="international_costs6"> ประเทศในกลุ่มอาเซียน</label><br>
        <input type="checkbox" id="international_costs7" name="international_costs7" value="t">
        <label for="international_costs7"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text3" id="text3"></textarea>
      </div>
    </div>
    <input type="text" id="result" name="result" style="visibility: hidden;"value=<?php echo $_GET['result'];?>>
    <div class="col-sm-12" style="padding-left: 0px; text-align: center;">
      <div class="col-sm-12" style="padding-bottom: 50px;">
        <a class=" myButton " style="width: 80px;"  onclick="backFunction()"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <button class="myButton success" style="height: 30px;width: 120px;" href="#" onclick="myFunction()">บันทึก</button>
        <a class=" myButton " style="width: 80px;" href="#" onclick="myFunction()"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>

    <!--  <a class = " success button1" href="index.php?app=user&action=customer">1</a>
     <a class = " success button1" href="index.php?app=user&action=supply_chain">2</a>
     <a class = " success button1" href="index.php?app=user&action=demand_supply">3</a>
     <a class = " success button1" href="index.php?app=user&action=analysis">4</a>
     <a class = " success button1" href="index.php?app=user&action=analysis2">5</a>
     <a class = " success button1" href="index.php?app=user&action=analysis3">6</a>
     <a class = " success button1" href="index.php?app=user&action=analysis4">7</a>
     <a class = " success button1" href="index.php?app=user&action=analysis5">8</a>
     <a class = " success button1" href="index.php?app=user&action=analysis6">9</a>
     <a class = " success button1" href="index.php?app=user&action=analysis7">10</a>
     <a class = " success button2" href="index.php?app=user&action=analysis8">11</a>
     <a class = " success button1" href="index.php?app=user&action=analysis9">12</a>
     <a class = " success button1" href="index.php?app=user&action=analysis10">13</a>
     <a class = " success button1" href="index.php?app=user&action=analysis11">14</a>
     <a class = " success button1" href="index.php?app=user&action=analysis12">15</a>
     <a class = " success button1" href="index.php?app=user&action=marketing_analysis">16</a>
     <a class = " success button1" href="index.php?app=user&action=marketing_analysis2&result=">17</a>
     <a class = " success button1" href="index.php?app=user&action=marketing_analysis3">18</a>
     <a class = " success button1" href="index.php?app=user&action=marketing_mix">19</a>
     <a class = " success button1" href="index.php?app=user&action=marketing_mix2">20</a>
     <a class = " success button1" href="index.php?app=user&action=target">21</a>
     <a class = " success button1" href="index.php?app=user&action=competitive_force">22</a>
     <a class = " success button1" href="index.php?app=user&action=cost">23</a>
     <a class = " success button1" href="index.php?app=user&action=show">24</a> -->
   </div>
 </form>
</div>
<script type="text/javascript">

 function backFunction(){
  window.location = "index.php?app=user&action=analysis3";
}  
function myFunction() {
  document.getElementById("myForm").submit();
}  
$('#replacement_parts1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text1");
   check.value+="ยอดจำหน่ายรถยนต์ใหม่ที่เพิ่มสูงขึ้น";
 }
});
$('#replacement_parts2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text1");
   check.value+="อะไหล่ของรถมือ 2 ที่เกิดจากการเสื่อมสภาพใช้งาน";
 }
});
$('#replacement_parts3').change(function(){
 if(this.checked) {
   var check = document.getElementById("text1");
   check.value+="อะไหล่จากอู่ซ่อมรถที่เกิดอุบัติเหตุประกันภัย";
 }
});
$('#replacement_parts4').change(function(){
 if(this.checked) {
   var check = document.getElementById("text1");
   check.value+="อะไหล่เพื่อเป็นรถต้นแบบของบริษัทผู้ผลิต";
 }
});

$('#sales1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text2");
   check.value+="รถปลั๊กอินไฮบริด";
 }
});
$('#sales2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text2");
   check.value+="รถไฟฟ้าแบตเตอรี่";
 }
});

$('#international_costs1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศในแถบยุโรป";
 }
});
$('#international_costs2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศในแถบอเมริกา";
 }
});
$('#international_costs3').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศในแถบแอฟริกา";
 }
});
$('#international_costs4').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศญี่ปุ่น";
 }
});
$('#international_costs5').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศเกาหลี";
 }
});
$('#international_costs6').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศในกลุ่มอาเซียน";
 }
});

$( document ).ready(function() {
  <?php 

  for ( $i = 0; $i <  count($analysis) ; $i++) { ?>
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
      document.getElementById("replacement_parts1").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
      document.getElementById("replacement_parts2").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
      document.getElementById("replacement_parts3").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $analysis[$i]['value_numbre'] ?> == 4 ){
      document.getElementById("replacement_parts4").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $analysis[$i]['value_numbre'] ?> == 5 ){
      document.getElementById("replacement_parts5").checked = true;
      document.getElementById("text1").innerHTML  = "<?php echo $analysis[$i]['analysis_text'] ?>" ;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 2 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
      document.getElementById("sales1").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 2 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
      document.getElementById("sales2").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 2 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3){
      document.getElementById("sales3").checked = true;
      document.getElementById("text2").innerHTML  =  "<?php echo $analysis[$i]['analysis_text'] ?>" ;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
      document.getElementById("international_costs1").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
      document.getElementById("international_costs2").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
      document.getElementById("international_costs3").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 4 ){
      document.getElementById("international_costs4").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 5){
      document.getElementById("international_costs5").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 6){
      document.getElementById("international_costs6").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 3 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 7 ){
      document.getElementById("international_costs7").checked = true;
      document.getElementById("text3").innerHTML  = "<?php echo $analysis[$i]['analysis_text'] ?>" ;
    }
    <?php     
  }
  ?>
});
</script>