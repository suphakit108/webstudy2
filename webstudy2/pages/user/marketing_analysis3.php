  <div class="container">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 10px;padding-bottom: 1px; padding-top: 1px; ">
       <a class="nav-link" style="font-size: 18px; color: black;" href="index.php?app=user&action=conclude"><img src="../home.png" style="width: 20px;height: 20px;"> สารบัญด้านการตลาด  /</a>
     </nav>
   </div>
   <div class="row">
      <!-- <div class="col-md-1" style="width: 25px; padding-left: 10px; padding-right: 10px;}">
      </div> -->
      <div class="col-md-11">
        <p style="color: #1473e6; padding-left: 30px">5.4 ปัจจัยทางด้านเทคโนโลยี (Technology)</p>
      </div>
    </div>
    <form id="myForm" action="index.php?app=user&action=addmarketing_analysis3&result=<?php echo $_GET["result"]; ?>" method="post" accept-charset="utf-8">
      <div class="row">
        <div class="col-md-10" style=" padding-left: 60px;">
          <p style="color: #ff8100;">(1) รถยนต์ที่ต้องการความสะดวกสบายและคล่องตัว</p>
          <p style="color: #ff8100; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
        </div>
      </div>
      <div class="row" style="    padding-left: 90px;">
        <div class="col-md-12" style="width:100%">
          <input type="checkbox" id="convenience1" name="convenience1" value="ชิ้นส่วนที่ผลิตได้รับผลกระทบในการรวบรวมหรือใช้เทคโนโลยีที่ทันสมัยเข้ามาทำให้ชิ้นส่วนที่ผลิตอยู่ลดลง">
          <label for="convenience1"> ชิ้นส่วนที่ผลิตได้รับผลกระทบในการรวบรวมหรือใช้เทคโนโลยีที่ทันสมัยเข้ามาทำให้ชิ้นส่วนที่ผลิตอยู่ลดลง</label><br>
          <input type="checkbox" id="convenience2" name="convenience2" value="ชิ้นส่วนที่ผลิตอยู่มีการรติดตั้งอุปกรณ์บางอย่างเพื่อรองรับเทคโนโลยีทำให้มูลค่าของชิ้นส่วนนั้นสูงขึ้น">
          <label for="convenience2"> ชิ้นส่วนที่ผลิตอยู่มีการรติดตั้งอุปกรณ์บางอย่างเพื่อรองรับเทคโนโลยีทำให้มูลค่าของชิ้นส่วนนั้นสูงขึ้น</label><br>
          <input type="checkbox" id="convenience3" name="convenience3" value="t">
          <label for="convenience3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text1" id="text1"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-11">
          <p style="color: #1473e6; padding-left: 30px;">5.5 ปัจจัยทางด้านกฎหมาย (Legal)</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10" style=" padding-left: 60px;">
          <p style="color: #ff8100;">(1) ปลอดภาษีนำเข้าชิ้นส่วน</p>
          <p style="color: #ff8100; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
        </div>
      </div>
      <div class="row" style="    padding-left: 90px;">
        <div class="col-md-12" style="width:100%">
          <input type="checkbox" id="duty1" name="duty1" value="ชิ้นส่วนนำเข้ามาด้วยราคาที่ถูกกว่าทำให้ชิ้นส่วนที่ผลิตอยู่เดิมกระทบเรื่องจำนวนการผลิตและราคาเดิมที่ผลิตอยู่">
          <label for="duty1"> ชิ้นส่วนนำเข้ามาด้วยราคาที่ถูกกว่าทำให้ชิ้นส่วนที่ผลิตอยู่เดิมกระทบเรื่องจำนวนการผลิตและราคาเดิมที่ผลิตอยู่</label><br>
          <input type="checkbox" id="duty2" name="duty2" value="ทำให้โครงสร้างราคาชิ้นส่วนทีมีอยู่เดิมได้รับผลกระทบและราคาที่มีอยู่เดิมลดลงได้">
          <label for="duty2"> ทำให้โครงสร้างราคาชิ้นส่วนทีมีอยู่เดิมได้รับผลกระทบและราคาที่มีอยู่เดิมลดลงได้</label><br>
          <input type="checkbox" id="duty3" name="duty3" value="t">
          <label for="duty3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text2" id="text2"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-11">
          <p style="color: #1473e6; padding-left: 30px;">5.6 ปัจจัยทางด้านสิ่งแวดล้อม (Environment)</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10" style=" padding-left: 60px;">
          <p style="color: #ff8100;">(1) รถยนต์ไฟฟ้าที่เป็นมิตรกับสิ่งแวดล้อม</p>
          <p style="color: #ff8100; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
        </div>
      </div>
      <div class="row" style="    padding-left: 90px;">
        <div class="col-md-12" style="width:100%">
          <input type="checkbox" id="electric1" name="electric1" value="ชิ้นส่วนที่ผลิตอยู่มีโอกาสเปลี่ยนไปใช้ชิ้นส่วนที่เป็นส่วนที่เกี่ยวข้องกับรถยนต์ไฟฟ้าเพิ่มสูงขึ้นทำให้ส่งผลกระทบกับจำนวนที่พยากรณ์การผลิตเอาไว้">
          <label for="electric1"> ชิ้นส่วนที่ผลิตอยู่มีโอกาสเปลี่ยนไปใช้ชิ้นส่วนที่เป็นส่วนที่เกี่ยวข้องกับรถยนต์ไฟฟ้าเพิ่มสูงขึ้นทำให้ส่งผลกระทบ</label><br>
          <input type="checkbox" value="Bike" style="visibility: hidden;">
          <label for="electric1">กับจำนวนที่พยากรณ์การผลิตเอาไว้</label><br>
          <input type="checkbox" id="electric2" name="electric2" value="ต้องปรับเปลี่ยนเครื่องมือหรือเครื่องจักรเพื่อให้สามารถผลิตชิ้นส่วนสำหรับรถยนต์ไฟฟ้าได้">
          <label for="electric2"> ต้องปรับเปลี่ยนเครื่องมือหรือเครื่องจักรเพื่อให้สามารถผลิตชิ้นส่วนสำหรับรถยนต์ไฟฟ้าได้</label><br>
          <input type="checkbox" id="electric3" name="electric3" value="t">
          <label for="electric3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text3" id="text3"></textarea>
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
       <a class = " success button1" href="index.php?app=user&action=analysis8">11</a>
       <a class = " success button1" href="index.php?app=user&action=analysis9">12</a>
       <a class = " success button1" href="index.php?app=user&action=analysis10">13</a>
       <a class = " success button1" href="index.php?app=user&action=analysis11">14</a>
       <a class = " success button1" href="index.php?app=user&action=analysis12">15</a>
       <a class = " success button1" href="index.php?app=user&action=marketing_analysis">16</a>
       <a class = " success button1" href="index.php?app=user&action=marketing_analysis2&result=">17</a>
       <a class = " success button2" href="index.php?app=user&action=marketing_analysis3">18</a>
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
    window.location = "index.php?app=user&action=marketing_analysis2";
  }  
  function myFunction() {
    document.getElementById("myForm").submit();
  } 
  $('#convenience1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text1");
     check.value+="ชิ้นส่วนที่ผลิตได้รับผลกระทบในการรวบรวมหรือใช้เทคโนโลยีที่ทันสมัยเข้ามาทำให้ชิ้นส่วนที่ผลิตอยู่ลดลง";
   }
 });
  $('#convenience2').change(function(){
   if(this.checked) {
     var check = document.getElementById("text1");
     check.value+="ชิ้นส่วนที่ผลิตอยู่มีการรติดตั้งอุปกรณ์บางอย่างเพื่อรองรับเทคโนโลยีทำให้มูลค่าของชิ้นส่วนนั้นสูงขึ้น";
   }
 });

  $('#duty1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text2");
     check.value+="ชิ้นส่วนนำเข้ามาด้วยราคาที่ถูกกว่าทำให้ชิ้นส่วนที่ผลิตอยู่เดิมกระทบเรื่องจำนวนการผลิตและราคาเดิมที่ผลิตอยู่";
   }
 });
  $('#duty2').change(function(){
   if(this.checked) {
     var check = document.getElementById("text2");
     check.value+="ทำให้โครงสร้างราคาชิ้นส่วนทีมีอยู่เดิมได้รับผลกระทบและราคาที่มีอยู่เดิมลดลงได้";
   }
 });

  $('#electric1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text3");
     check.value+="ชิ้นส่วนที่ผลิตอยู่มีโอกาสเปลี่ยนไปใช้ชิ้นส่วนที่เป็นส่วนที่เกี่ยวข้องกับรถยนต์ไฟฟ้าเพิ่มสูงขึ้นทำให้ส่งผลกระทบกับจำนวนที่พยากรณ์การผลิตเอาไว้";
   }
 });
  $('#electric2').change(function(){
   if(this.checked) {
     var check = document.getElementById("text3");
     check.value+="ต้องปรับเปลี่ยนเครื่องมือหรือเครื่องจักรเพื่อให้สามารถผลิตชิ้นส่วนสำหรับรถยนต์ไฟฟ้าได้";
   }
 });

  $( document ).ready(function() {
    <?php 

    for ( $i = 0; $i <  count($marketing_analysis) ; $i++) { ?>
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 4 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("duty1").checked = true;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 4 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 2 ){
        document.getElementById("duty2").checked = true;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 4 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 3 ){
        document.getElementById("duty3").checked = true;
        document.getElementById("text1").innerHTML  = "<?php echo $marketing_analysis[$i]['marketing_analysis_text'] ?>" ;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 5 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("convenience1").checked = true;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 5 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 2 ){
        document.getElementById("convenience2").checked = true;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 5 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 3){
        document.getElementById("convenience3").checked = true;
        document.getElementById("text2").innerHTML  =  "<?php echo $marketing_analysis[$i]['marketing_analysis_text'] ?>" ;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 6 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("electric1").checked = true;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 6 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 2 ){
        document.getElementById("electric2").checked = true;
      }
      if(<?php echo $marketing_analysis[$i]['main_type'] ?> == 6 && <?php echo $marketing_analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $marketing_analysis[$i]['value_numbre'] ?> == 3){
        document.getElementById("electric3").checked = true;
        document.getElementById("text3").innerHTML  =  "<?php echo $marketing_analysis[$i]['marketing_analysis_text'] ?>" ;
      }
      <?php     
    }
    ?>
  });
</script>