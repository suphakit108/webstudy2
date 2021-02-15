<div class="container">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 10px;padding-bottom: 1px; padding-top: 1px; ">
     <a class="nav-link" style="font-size: 18px; color: black;" href="index.php?app=user&action=conclude"><img src="../home.png" style="width: 20px;height: 20px;"> สารบัญด้านการตลาด  /</a>
   </nav>
 </div>
 <div class="row">
   <!--  <div class="col-md-1" style="width: 25px; padding-left: 10px; padding-right: 10px;}">

   </div> -->
   <div class="col-md-11">
    <p style="color: #1473e6; padding-left: 30px">5.2 ปัจจัยทางด้านเศรษฐศาสตร์ (Economic)</p>
  </div>
</div>


<form id="myForm" action="index.php?app=user&action=addmarketing_analysis2&result=<?php echo $_GET["result"]; ?>" method="post" accept-charset="utf-8">
  <div class="row">
    <div class="col-md-10" style=" padding-left: 60px;">
      <p style="color: #ff8100;">(1) เศรษฐกิจตกต่ำ เงินบาทแข็งตัว</p>
      <p style="color: #ff8100; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
    </div>
  </div>
  <div class="row" style="    padding-left: 90px;">
    <div class="col-md-12" style="width:100%">
      <input type="checkbox" id="economic1" name="economic1" value="ชะลอการซื้อรถยนต์ออกไป">
      <label for="economic1"> ชะลอการซื้อรถยนต์ออกไป</label><br>
      <input type="checkbox" id="economic2" name="economic2" value="รุ่นรถยนต์บางรุ่นย้ายไปผลิตประเทศอื่นเพื่อใช้จากการแข็งของค่าเงินบาท">
      <label for="economic2"> รุ่นรถยนต์บางรุ่นย้ายไปผลิตประเทศอื่นเพื่อใช้จากการแข็งของค่าเงินบาท</label><br>
      <input type="checkbox" id="economic3" name="economic3" value="t">
      <label for="economic3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text1" id="text1"></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-md-11">
      <p style="color: #1473e6; padding-left: 30px;">5.3 ปัจจัยทางด้านสังคม (Social)</p>
    </div>
  </div>

  <div class="row">
    <div class="col-md-10" style=" padding-left: 60px;">
      <p style="color: #ff8100;">(1) ค่านิยมของคนเริ่มหันมาให้ความสำคัญกับรถยนต์ทางเลือก (Electric Vehicle)</p>
      <p style="color: #ff8100; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
    </div>
  </div>
  <div class="row" style="    padding-left: 90px;">
    <div class="col-md-12" style="width:100%">
      <input type="checkbox" id="alternative1" name="alternative1" value="โอกาสผลิตชิ้นส่วนของรถยนต์ทางเลือกเพิ่มมากขึ้นด้านบวก">
      <label for="alternative1"> โอกาสผลิตชิ้นส่วนของรถยนต์ทางเลือกเพิ่มมากขึ้นด้านบวก</label><br>
      <input type="checkbox" id="alternative2" name="alternative2" value="ชิ้นส่วนยานยนต์ที่ผลิตปัจจุบันมีโอกาสได้รับผลกระทบด้านลบ">
      <label for="alternative2"> ชิ้นส่วนยานยนต์ที่ผลิตปัจจุบันมีโอกาสได้รับผลกระทบด้านลบ</label><br>
      <input type="checkbox" id="alternative3" name="alternative3" value="t">
      <label for="alternative3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text2" id="text2"></textarea>
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
    <a class = " success button2" href="index.php?app=user&action=marketing_analysis2&result=">17</a>
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
    window.location = "index.php?app=user&action=marketing_analysis";
  }  
  function myFunction() {
    document.getElementById("myForm").submit();
  }
  $('#economic1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text1");
     check.value+="ชะลอการซื้อรถยนต์ออกไป";
   }
 }); 
  $('#economic2').change(function(){
   if(this.checked) {
     var check = document.getElementById("text1");
     check.value+="รุ่นรถยนต์บางรุ่นย้ายไปผลิตประเทศอื่นเพื่อใช้จากการแข็งของค่าเงินบาท";
   }
 }); 

  $('#alternative1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text2");
     check.value+="โอกาสผลิตชิ้นส่วนของรถยนต์ทางเลือกเพิ่มมากขึ้นด้านบวก";
   }
 }); 
  $('#alternative2').change(function(){
   if(this.checked) {
     var check = document.getElementById("text2");
     check.value+="ชิ้นส่วนยานยนต์ที่ผลิตปัจจุบันมีโอกาสได้รับผลกระทบด้านลบ";
   }
 }); 
  $( document ).ready(function() {
    <?php 

    for ( $i = 0; $i <  count($marketing_analysis) ; $i++) { ?>
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 2 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("economic1").checked = true;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 2 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 2 ){
        document.getElementById("economic2").checked = true;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 2 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 3 ){
        document.getElementById("economic3").checked = true;
        document.getElementById("text1").innerHTML  = "<?php echo $marketing_analysis[$i]['marketing_analysis_text'] ?>" ;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 3 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("alternative1").checked = true;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 3 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 2 ){
        document.getElementById("alternative2").checked = true;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 3 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 3){
        document.getElementById("alternative3").checked = true;
        document.getElementById("text2").innerHTML  =  "<?php echo $marketing_analysis[$i]['marketing_analysis_text'] ?>" ;
      }

      <?php     
    }
    ?>
  });
</script>