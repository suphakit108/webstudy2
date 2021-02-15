<div class="container">
  <div class="container">
  </div>
  <div class="row">
    <h3 style=" padding-left: 40px;">7. การกำหนดตลาดเป้าหมายขององค์กรควรเป็นอย่างไร</h3>
  </div>
  <form id="myForm" action="index.php?app=user&action=addtarget&result=<?php echo $_GET["result"]; ?>" method="post" accept-charset="utf-8">
    <div class="row">
      <div class="col-md-10" style=" padding-left: 50px;">
        <p style="color: #32b4c1;">7.1 การแบ่งส่วนตลาด</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="segmentation1" name="segmentation1" value="มีโอกาสน้อยจากชิ้นส่วนเดิมที่ผลิตอยู่">
        <label for="segmentation1"> มีโอกาสน้อยจากชิ้นส่วนเดิมที่ผลิตอยู่</label><br>
        <input type="checkbox" id="segmentation2" name="segmentation2" value="อาจจะมีโอกาสจากชิ้นส่วนเดิมที่ผลิตอยู่นำไปใช้กับผลิตภัณฑ์ใหม่ของผู้ผลิตรถยนต์">
        <label for="segmentation2"> อาจจะมีโอกาสจากชิ้นส่วนเดิมที่ผลิตอยู่นำไปใช้กับผลิตภัณฑ์ใหม่ของผู้ผลิตรถยนต์</label><br>
        <input type="checkbox" id="segmentation3" name="segmentation3" value="t">
        <label for="segmentation3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text1" id="text1"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 50px;">
        <p style="color: #32b4c1;">7.2 การกำหนดเป้าหมาย</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="targeting1" name="targeting1" value="ใช้ชิ้นส่วนที่ผลิตในปัจจุบันเพื่อใช้ในผลิตภัณฑ์ของค่ายรถยนต์อื่น">
        <label for="targeting1"> ใช้ชิ้นส่วนที่ผลิตในปัจจุบันเพื่อใช้ในผลิตภัณฑ์ของค่ายรถยนต์อื่น ๆ เช่นกัน</label><br>
        <input type="checkbox" id="targeting2" name="targeting2" value="t">
        <label for="targeting2"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text2" id="text2"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 50px;">
        <p style="color: #32b4c1;">7.3 การกำหนดตำแหน่ง</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="positioning1" name="positioning1" value="ยกระดับชิ้นส่วนที่ผลิตในปัจจุบันให้มีความหลากหลายเพิ่มมากขึ้น">
        <label for="positioning1"> ยกระดับชิ้นส่วนที่ผลิตในปัจจุบันให้มีความหลากหลายเพิ่มมากขึ้น</label><br>
        <input type="checkbox" id="positioning2" name="positioning2" value="t">
        <label for="positioning2"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text3" id="text3"></textarea>
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
     <a class = " success button1" href="index.php?app=user&action=marketing_analysis3">18</a>
     <a class = " success button1" href="index.php?app=user&action=marketing_mix">19</a>
     <a class = " success button1" href="index.php?app=user&action=marketing_mix2">20</a>
     <a class = " success button2" href="index.php?app=user&action=target">21</a>
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
  $('#segmentation1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text1");
     check.value+="มีโอกาสน้อยจากชิ้นส่วนเดิมที่ผลิตอยู่";
   }
 });
  $('#segmentation2').change(function(){
   if(this.checked) {
     var check = document.getElementById("text1");
     check.value+="อาจจะมีโอกาสจากชิ้นส่วนเดิมที่ผลิตอยู่นำไปใช้กับผลิตภัณฑ์ใหม่ของผู้ผลิตรถยนต์";
   }
 });

  $('#targeting1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text2");
     check.value+="ใช้ชิ้นส่วนที่ผลิตในปัจจุบันเพื่อใช้ในผลิตภัณฑ์ของค่ายรถยนต์อื่น";
   }
 });

  $('#positioning1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text3");
     check.value+="ยกระดับชิ้นส่วนที่ผลิตในปัจจุบันให้มีความหลากหลายเพิ่มมากขึ้น";
   }
 });
  $( document ).ready(function() {
    <?php 

    for ( $i = 0; $i <  count($target) ; $i++) { ?>
      if(<?php echo $target[$i]['main_type'] ?> == 1 && <?php echo $target[$i]['type_analysis'] ?> == 1&&<?php echo $target[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("segmentation1").checked = true;
      }
      if(<?php echo $target[$i]['main_type'] ?> == 1 && <?php echo $target[$i]['type_analysis'] ?> == 1 &&<?php echo $target[$i]['value_numbre'] ?> == 2 ){
        document.getElementById("segmentation2").checked = true;
      }
      if(<?php echo $target[$i]['main_type'] ?> == 1 && <?php echo $target[$i]['type_analysis'] ?> == 1 &&<?php echo $target[$i]['value_numbre'] ?> == 3 ){
        document.getElementById("segmentation3").checked = true;
        document.getElementById("text1").innerHTML  = "<?php echo $target[$i]['target_text'] ?>" ;
      }
      if(<?php echo $target[$i]['main_type'] ?> == 2 && <?php echo $target[$i]['type_analysis'] ?> == 1 &&<?php echo $target[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("targeting1").checked = true;
      }
      if(<?php echo $target[$i]['main_type'] ?> == 2 && <?php echo $target[$i]['type_analysis'] ?> == 1 &&<?php echo $target[$i]['value_numbre'] ?> == 2){
        document.getElementById("targeting2").checked = true;
        document.getElementById("text2").innerHTML  =  "<?php echo $target[$i]['target_text'] ?>" ;
      }
      if(<?php echo $target[$i]['main_type'] ?> == 3 && <?php echo $target[$i]['type_analysis'] ?> == 1 &&<?php echo $target[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("positioning1").checked = true;
      }
      if(<?php echo $target[$i]['main_type'] ?> == 3 && <?php echo $target[$i]['type_analysis'] ?> == 1 &&<?php echo $target[$i]['value_numbre'] ?> == 2){
        document.getElementById("positioning2").checked = true;
        document.getElementById("text3").innerHTML  =  "<?php echo $target[$i]['target_text'] ?>" ;
      }
      <?php     
    }
    ?>
  });
</script>