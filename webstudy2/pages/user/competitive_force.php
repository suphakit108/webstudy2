<div class="container">
  <div class="container">
  </div>
  <div class="row">
    <h3 style=" padding-left: 40px;">8. การใช้ทฤษฎีแรงกดดัน (Five Force Model) หรือพลังผลักดันทางการแข่งขัน (Competitive Force) ในองค์กรของท่าน</h3>
  </div>
  <form id="myForm" action="index.php?app=user&action=addcompetitive_force&result=<?php echo $_GET["result"]; ?>" method="post" accept-charset="utf-8">
    <div class="row">
      <div class="col-md-10" style=" padding-left: 50px;">
        <p style="color: #32b4c1;">8.1 ภัยคุกคามจากคู่แข่ง (Existing Firms)</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="threats1" name="threats1" value="จากผู้ผลิตชิ้นส่วน SME ด้วยกันในประเทศ">
        <label for="threats1"> จากผู้ผลิตชิ้นส่วน SME ด้วยกันในประเทศ</label><br>
        <input type="checkbox" id="threats2" name="threats2" value="จากชิ้นส่วนจากต่างประเทศ">
        <label for="threats2"> จากชิ้นส่วนจากต่างประเทศ</label><br>
        <input type="checkbox" id="threats3" name="threats3" value="จากโรงงานอุตสาหกรรมที่ SME รับจ้างช่วงผลิตแล้วดึงชิ้นงานกลับเพื่อทำการผลิตชิ้นส่วนเอง">
        <label for="threats3"> จากโรงงานอุตสาหกรรมที่ SME รับจ้างช่วงผลิตแล้วดึงชิ้นงานกลับเพื่อทำการผลิตชิ้นส่วนเอง</label><br>
        <input type="checkbox" id="threats4" name="threats4" value="จากค่ายผู้ผลิตรถยนต์เปลี่ยนเจ้าระบุให้เปลี่ยนเนื่องจากด้วยราคาและคุณภาพและการจัดส่ง">
        <label for="threats4"> จากค่ายผู้ผลิตรถยนต์เปลี่ยนเจ้าระบุให้เปลี่ยนเนื่องจากด้วยราคาและคุณภาพและการจัดส่ง</label><br>
        <input type="checkbox" id="threats5" name="threats5" value="t">
        <label for="threats5"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text1" id="text1"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 50px;">
        <p style="color: #32b4c1;">8.2 อำนาจต่อรองของผู้บริโภค (Customer)</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="customer1" name="customer1" value="ด้านดัชนีชี้วัดต่าง ๆ จากค่ายผู้ผลิตรถยนต์ เช่น การจัดส่ง คุณภาพ ราคา">
        <label for="customer1"> ด้านดัชนีชี้วัดต่าง ๆ จากค่ายผู้ผลิตรถยนต์ เช่น การจัดส่ง คุณภาพ ราคา</label><br>
        <input type="checkbox" id="customer2" name="customer2" value="ด้านกิจกรรมต่าง ๆ จากค่ายผู้ผลิตรถยนต์ เช่น การทำระบบโตโยต้า การทำคิวซีซี การประกวดการแข่งขันด้านความปลอดภัย เป็นต้น">
        <label for="customer2"> ด้านกิจกรรมต่าง ๆ จากค่ายผู้ผลิตรถยนต์ เช่น การทำระบบโตโยต้า การทำคิวซีซี การประกวดการแข่งขันด้านความปลอดภัย เป็นต้น</label><br>
        <input type="checkbox" id="customer3" name="customer3" value="t">
        <label for="customer3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text2" id="text2"></textarea>
      </div>
    </div> 
    <div class="row">
      <div class="col-md-10" style=" padding-left: 50px;">
        <p style="color: #32b4c1;">8.3 การเข้ามาของผู้ประกอบการรายใหม่ (New Entrant)</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="entrant1" name="entrant1" value="การเข้ามาของผู้ผลิตชิ้นส่วน SME รายใหม่เข้ามายากเนื่องจากค่ายผู้ผลิตรถยนต์ยังไม่ยอมรับยกเว้นรับจ้างผลิตต่อจากผู้ผลิตชิ้นส่วน SME เดิม">
        <label for="entrant1"> การเข้ามาของผู้ผลิตชิ้นส่วน SME รายใหม่เข้ามายากเนื่องจากค่ายผู้ผลิตรถยนต์ยังไม่ยอมรับยกเว้นรับจ้างผลิตต่อจาก</label><br>
        <input type="checkbox" style="visibility: hidden;">
        <label for="entrant1"> ผู้ผลิตชิ้นส่วน SME เดิม</label><br>
        <input type="checkbox" id="entrant2" name="entrant2" value="ค่ายผู้ผลิตรถยนต์กำหนดให้ใช้ชิ้นส่วนจากผู้ผลิตชิ้นส่วน SME รายเดิม">
        <label for="entrant2"> ค่ายผู้ผลิตรถยนต์กำหนดให้ใช้ชิ้นส่วนจากผู้ผลิตชิ้นส่วน SME รายเดิม</label><br>
        <input type="checkbox" id="entrant3" name="entrant3" value="เทคโนโลยีการผลิตที่ดีกว่าทำให้ราคาและคุณภาพที่ต่ำกว่าทำให้ผู้ผลิตชิ้นส่วน SME รายใหม่สามารถเข้ามาได้">
        <label for="entrant3"> เทคโนโลยีการผลิตที่ดีกว่าทำให้ราคาและคุณภาพที่ต่ำกว่าทำให้ผู้ผลิตชิ้นส่วน SME รายใหม่สามารถเข้ามาได้</label><br>
        <input type="checkbox" id="entrant4" name="entrant4" value="t">
        <label for="entrant4"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text3" id="text3"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 50px;">
        <p style="color: #32b4c1;">8.4 ภัยคุกคามจากสินค้าทดแทน (Substitute Products)</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="products1" name="products1" value="ค่ายผู้ผลิตรถยนต์ได้มีการเปลี่ยนรูปลักษณ์ หรือสมรรถนะทำให้กระทบชิ้นส่วนเดิม เช่น จากเหล็กเป็นเหล็กเหนียวเพื่อลดต้นทุน">
        <label for="products1"> ค่ายผู้ผลิตรถยนต์ได้มีการเปลี่ยนรูปลักษณ์ หรือสมรรถนะทำให้กระทบชิ้นส่วนเดิม เช่น จากเหล็กเป็นเหล็กเหนียวเพื่อลดต้นทุน</label><br>
        <input type="checkbox" id="products2" name="products2" value="การใช้วัตถุดิบอื่นเพื่อลดต้นทุนลงแต่สมรถถนะยังคงเท่าเดิมของค่ายผู้ผลิตรถยนต์">
        <label for="products2"> การใช้วัตถุดิบอื่นเพื่อลดต้นทุนลงแต่สมรถถนะยังคงเท่าเดิมของค่ายผู้ผลิตรถยนต์</label><br>
        <input type="checkbox" id="products3" name="products3" value="t">
        <label for="products3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text4" id="text4"></textarea>
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
      <a class = " success button1" href="index.php?app=user&action=target">21</a>
      <a class = " success button2" href="index.php?app=user&action=competitive_force">22</a>
      <a class = " success button1" href="index.php?app=user&action=cost">23</a>
      <a class = " success button1" href="index.php?app=user&action=show">24</a> -->
    </div>
  </form>
</div>
<script type="text/javascript">

  function backFunction(){
    window.location = "index.php?app=user&action=target";
  }  
  function myFunction() {
    document.getElementById("myForm").submit();
  }
  $('#threats1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text1");
     check.value+="จากผู้ผลิตชิ้นส่วน SME ด้วยกันในประเทศ";
   }
 });
  $('#threats2').change(function(){
   if(this.checked) {
     var check = document.getElementById("text1");
     check.value+="จากชิ้นส่วนจากต่างประเทศ";
   }
 });
  $('#threats3').change(function(){
   if(this.checked) {
     var check = document.getElementById("text1");
     check.value+="จากโรงงานอุตสาหกรรมที่ SME รับจ้างช่วงผลิตแล้วดึงชิ้นงานกลับเพื่อทำการผลิตชิ้นส่วนเอง";
   }
 });
  $('#threats4').change(function(){
   if(this.checked) {
     var check = document.getElementById("text1");
     check.value+="จากค่ายผู้ผลิตรถยนต์เปลี่ยนเจ้าระบุให้เปลี่ยนเนื่องจากด้วยราคาและคุณภาพและการจัดส่ง";
   }
 });

  $('#customer1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text2");
     check.value+="ด้านดัชนีชี้วัดต่าง ๆ จากค่ายผู้ผลิตรถยนต์ เช่น การจัดส่ง คุณภาพ ราคา";
   }
 });
  $('#customer2').change(function(){
   if(this.checked) {
     var check = document.getElementById("text2");
     check.value+="ด้านกิจกรรมต่าง ๆ จากค่ายผู้ผลิตรถยนต์ เช่น การทำระบบโตโยต้า การทำคิวซีซี การประกวดการแข่งขันด้านความปลอดภัย เป็นต้น";
   }
 });

  $('#entrant1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text3");
     check.value+="การเข้ามาของผู้ผลิตชิ้นส่วน SME รายใหม่เข้ามายากเนื่องจากค่ายผู้ผลิตรถยนต์ยังไม่ยอมรับยกเว้นรับจ้างผลิตต่อจากผู้ผลิตชิ้นส่วน SME เดิม";
   }
 });
  $('#entrant2').change(function(){
   if(this.checked) {
     var check = document.getElementById("text3");
     check.value+="ค่ายผู้ผลิตรถยนต์กำหนดให้ใช้ชิ้นส่วนจากผู้ผลิตชิ้นส่วน SME รายเดิม";
   }
 });
  $('#entrant3').change(function(){
   if(this.checked) {
     var check = document.getElementById("text3");
     check.value+="เทคโนโลยีการผลิตที่ดีกว่าทำให้ราคาและคุณภาพที่ต่ำกว่าทำให้ผู้ผลิตชิ้นส่วน SME รายใหม่สามารถเข้ามาได้";
   }
 });

  $('#products1').change(function(){
   if(this.checked) {
     var check = document.getElementById("text4");
     check.value+="ค่ายผู้ผลิตรถยนต์ได้มีการเปลี่ยนรูปลักษณ์ หรือสมรรถนะทำให้กระทบชิ้นส่วนเดิม เช่น จากเหล็กเป็นเหล็กเหนียวเพื่อลดต้นทุน";
   }
 });
  $('#products2').change(function(){
   if(this.checked) {
     var check = document.getElementById("text4");
     check.value+="การใช้วัตถุดิบอื่นเพื่อลดต้นทุนลงแต่สมรถถนะยังคงเท่าเดิมของค่ายผู้ผลิตรถยนต์";
   }
 });
  $( document ).ready(function() {
    <?php 

    for ( $i = 0; $i <  count($competitive_force) ; $i++) { ?>
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 1 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 && <?php echo $competitive_force[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("threats1").checked = true;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 1 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 2 ){
        document.getElementById("threats2").checked = true;
      }  
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 1 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 3 ){
        document.getElementById("threats3").checked = true;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 1 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 4 ){
        document.getElementById("threats4").checked = true;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 1 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 5 ){
        document.getElementById("threats5").checked = true;
        document.getElementById("text1").innerHTML  = "<?php echo $competitive_force[$i]['competitive_force_text'] ?>" ;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 2 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("customer1").checked = true;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 2 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 2 ){
        document.getElementById("customer2").checked = true;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 2 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 3){
        document.getElementById("customer3").checked = true;
        document.getElementById("text2").innerHTML  =  "<?php echo $competitive_force[$i]['competitive_force_text'] ?>" ;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 3 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("entrant1").checked = true;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 3 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 2 ){
        document.getElementById("entrant2").checked = true;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 3 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 3 ){
        document.getElementById("entrant3").checked = true;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 3 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 4){
        document.getElementById("entrant4").checked = true;
        document.getElementById("text3").innerHTML  =  "<?php echo $competitive_force[$i]['competitive_force_text'] ?>" ;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 4 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 1 ){
        document.getElementById("products1").checked = true;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 4 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 2 ){
        document.getElementById("products2").checked = true;
      }
      if(<?php echo $competitive_force[$i]['main_type'] ?> == 4 && <?php echo $competitive_force[$i]['type_analysis'] ?> == 1 &&<?php echo $competitive_force[$i]['value_numbre'] ?> == 3){
        document.getElementById("products3").checked = true;
        document.getElementById("text4").innerHTML  =  "<?php echo $competitive_force[$i]['competitive_force_text'] ?>" ;
      }
      <?php     
    }
    ?>
  });
</script>