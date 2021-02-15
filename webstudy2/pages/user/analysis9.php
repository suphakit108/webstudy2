<div class="container">
  <div class="container">
  </div>
  <br>
  <div class="row">
    <div class="col-md-11">
      <p style="color: #32b4c1;">4.4 อุปสรรค</p>
    </div>
  </div>
  <form id="myForm" action="index.php?app=user&action=addanalysis9&result=<?php echo $_GET["result"]; ?>" method="post" accept-charset="utf-8">
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(1) การย้ายฐานการผลิต</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="relocation1" name="relocation1" value="กลับประเทศเจ้าของ">
        <label for="relocation1"> กลับประเทศเจ้าของ</label><br>
        <input type="checkbox" id="relocation2" name="relocation2" value="ไปยังกลุ่มอาเซียน">
        <label for="relocation2"> ไปยังกลุ่มอาเซียน</label><br>
        <input type="checkbox" id="relocation3" name="relocation3" value="t">
        <label for="relocation3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text1" id="text1"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(2) ต้นทุนการผลิตสูงขึ้น</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="production_costs1" name="production_costs1" value="เหล็ก">
        <label for="production_costs1"> เหล็ก</label><br>
        <input type="checkbox" id="production_costs2" name="production_costs2" value="พลาสติก">
        <label for="production_costs2"> พลาสติก</label><br>
        <input type="checkbox" id="production_costs3" name="production_costs3" value="ชิ้นส่วนต่าง ๆ เพื่อนำมาประกอบ">
        <label for="production_costs3"> ชิ้นส่วนต่าง ๆ เพื่อนำมาประกอบ</label><br>
        <input type="checkbox" id="production_costs4" name="production_costs4" value="เคมีภัณฑ์">
        <label for="production_costs4"> เคมีภัณฑ์</label><br>
        <input type="checkbox" id="production_costs5" name="production_costs5" value="t">
        <label for="production_costs5"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text2" id="text2"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(3) การแข่งขันเรื่องราคา</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="competition1" name="competition1" value="ประเทศจีน">
        <label for="competition1"> ประเทศจีน</label><br>
        <input type="checkbox" id="competition2" name="competition2" value="ประเทศญี่ปุ่น">
        <label for="competition2"> ประเทศญี่ปุ่น</label><br>
        <input type="checkbox" id="competition3" name="competition3" value="ประเทศเกาหลี">
        <label for="competition3"> ประเทศเกาหลี</label><br>
        <input type="checkbox" id="competition4" name="competition4" value="ประเทศอินเดีย">
        <label for="competition4"> ประเทศอินเดีย</label><br>
        <input type="checkbox" id="competition5" name="competition5" value="ประเทศในกลุ่มอาเซียน">
        <label for="competition5"> ประเทศในกลุ่มอาเซียน</label><br>
        <input type="checkbox" id="competition6" name="competition6" value="t">
        <label for="competition6"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text3" id="text3"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(4) ไม่สามารถเพิ่มยอดได้</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="balance1" name="balance1" value="บริษัทผู้ผลิตรถยนต์">
        <label for="balance1"> บริษัทผู้ผลิตรถยนต์</label><br>
        <input type="checkbox" id="balance2" name="balance2" value="ศูนย์อะไหล่">
        <label for="balance2"> ศูนย์อะไหล่</label><br>
        <input type="checkbox" id="balance3" name="balance3" value="t">
        <label for="balance3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text4" id="text4"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(5) ตัวเลือกในลำดับรองนโยบายกีดกัน</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="deprivation1" name="deprivation1" value="บริษัทผู้ผลิตรถยนต์">
        <label for="deprivation1"> บริษัทผู้ผลิตรถยนต์</label><br>
        <input type="checkbox" id="deprivation2" name="deprivation2" value="บริษัทแม่ที่อยู่ต่างประเทศ">
        <label for="deprivation2"> บริษัทแม่ที่อยู่ต่างประเทศ</label><br>
        <input type="checkbox" id="deprivation3" name="deprivation3" value="บริษัทที่เป็นเครือข่ายในประเทศ">
        <label for="deprivation3"> บริษัทที่เป็นเครือข่ายในประเทศ</label><br>
        <input type="checkbox" id="deprivation4" name="deprivation4" value="บริษัทคู่แข่งที่สำคัญ">
        <label for="deprivation4"> บริษัทคู่แข่งที่สำคัญ</label><br>
        <input type="checkbox" id="deprivation5" name="deprivation5" value="t">
        <label for="deprivation5"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text5" id="text5"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(6) พิจารณาลำดับรองในการผลิตชิ้นส่วน</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="priority1" name="priority1" value="ภาษา">
        <label for="priority1"> ภาษา</label><br>
        <input type="checkbox" id="priority2" name="priority2" value="เชื้อชาติ">
        <label for="priority2"> เชื้อชาติ</label><br>
        <input type="checkbox" id="priority3" name="priority3" value="ความน่าเชื่อถือ">
        <label for="priority3"> ความน่าเชื่อถือ</label><br>
        <input type="checkbox" id="priority4" name="priority4" value="ความสามารถในการผลิต">
        <label for="priority4"> ความสามารถในการผลิต</label><br>
        <input type="checkbox" id="priority5" name="priority5" value="การบริหารจัดการ">
        <label for="priority5"> การบริหารจัดการ</label><br>
        <input type="checkbox" id="priority6" name="priority6" value="t">
        <label for="priority6"> อื่น ๆ</label><textarea rows="3" cols="15" style="width: 100%" name="text6" id="text6"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(7) การเข้ามาของคู่แข่ง</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style=" padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="competitors1" name="competitors1" value="ประเทศจีน">
        <label for="competitors1"> ประเทศจีน</label><br>
        <input type="checkbox" id="competitors2" name="competitors2" value="ประเทศญี่ปุ่น">
        <label for="competitors2"> ประเทศญี่ปุ่น</label><br>
        <input type="checkbox" id="competitors3" name="competitors3" value="ประเทศเกาหลี">
        <label for="competitors3"> ประเทศเกาหลี</label><br>
        <input type="checkbox" id="competitors4" name="competitors4" value="ประเทศอินเดีย">
        <label for="competitors4"> ประเทศอินเดีย</label><br>
        <input type="checkbox" id="competitors5" name="competitors5" value="ประเทศในกลุ่มอาเซียน">
        <label for="competitors5"> ประเทศในกลุ่มอาเซียน</label><br>
        <input type="checkbox" id="competitors6" name="competitors6" value="t">
        <label for="competitors6"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text7" id="text7"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(8) การย้ายฐานการผลิตเข้ามา</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style=" padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="production1" name="production1" value="ประเทศจีน">
        <label for="production1"> ประเทศจีน</label><br>
        <input type="checkbox" id="production2" name="production2" value="ประเทศญี่ปุ่น">
        <label for="production2"> ประเทศญี่ปุ่น</label><br>
        <input type="checkbox" id="production3" name="production3" value="ประเทศเกาหลี">
        <label for="production3"> ประเทศเกาหลี</label><br>
        <input type="checkbox" id="production4" name="production4" value="ประเทศอินเดีย">
        <label for="production4"> ประเทศอินเดีย</label><br>
        <input type="checkbox" id="production5" name="production5" value="ประเทศในกลุ่มอาเซียน">
        <label for="production5"> ประเทศในกลุ่มอาเซียน</label><br>
        <input type="checkbox" id="production6" name="production6" value="t">
        <label for="production6"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text8" id="text8"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(9) เปลี่ยนชนิดของรถยนต์</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="type1" name="type1" value="รถยนต์ปลั๊กอินไฮบริค">
        <label for="type1"> รถยนต์ปลั๊กอินไฮบริค</label><br>
        <input type="checkbox" id="type2" name="type2" value="รถยนต์ไฟฟ้าแบตเตอรี่">
        <label for="type2"> รถยนต์ไฟฟ้าแบตเตอรี่</label><br>
        <input type="checkbox" id="type3" name="type3" value="t">
        <label for="type3"> อื่น ๆ</label> <textarea rows="3" cols="15" style="width: 100%" name="text9" id="text9"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10" style=" padding-left: 60px;">
        <p style="color: #32b4c1;">(10) น้ำมันสูงขึ้น เศรษฐกิจตกต่ำ</p>
        <p style="color: #32b4c1; padding-left: 30px;">สามารถเลือกคำตอบได้มากกว่า 1 ข้อ</p>
      </div>
    </div>
    <div class="row" style="    padding-left: 90px;">
      <div class="col-md-12" style="width:100%">
        <input type="checkbox" id="economic1" name="economic1" value="ยอดจำหน่ายรถยนต์ลดลง">
        <label for="economic1"> ยอดจำหน่ายรถยนต์ลดลง</label><br>
        <input type="checkbox" id="economic2" name="economic2" value="รถเปลี่ยนอะไหล่ลดลง">
        <label for="economic2"> รถเปลี่ยนอะไหล่ลดลง</label><br>
        <input type="checkbox" id="economic3" name="economic3" value="t">
        <label for="economic3"> อื่น ๆ</label><textarea rows="3" cols="15" style="width: 100%" name="text10" id="text10"></textarea>
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
     <a class = " success button2" href="index.php?app=user&action=analysis9">12</a>
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
  window.location = "index.php?app=user&action=analysis8";
}  
function myFunction() {
  document.getElementById("myForm").submit();
}
$('#relocation1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text1");
   check.value+="กลับประเทศเจ้าของ";
 }
});
$('#relocation2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text1");
   check.value+="ไปยังกลุ่มอาเซียน";
 }
});

$('#production_costs1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text2");
   check.value+="เหล็ก";
 }
});
$('#production_costs2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text2");
   check.value+="พลาสติก";
 }
});
$('#production_costs3').change(function(){
 if(this.checked) {
   var check = document.getElementById("text2");
   check.value+="ชิ้นส่วนต่าง ๆ เพื่อนำมาประกอบ";
 }
});
$('#production_costs4').change(function(){
 if(this.checked) {
   var check = document.getElementById("text2");
   check.value+="เคมีภัณฑ์";
 }
});

$('#competition1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศจีน";
 }
});
$('#competition2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศญี่ปุ่น";
 }
});
$('#competition3').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศเกาหลี";
 }
});
$('#competition4').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศอินเดีย";
 }
});3
$('#competition5').change(function(){
 if(this.checked) {
   var check = document.getElementById("text3");
   check.value+="ประเทศในกลุ่มอาเซียน";
 }
});
////////////////analysis10////////////////////
$('#balance1').change(function(){
 if(this.checked) {
  var check = document.getElementById("text4");
  check.value+="บริษัทผู้ผลิตรถยนต์";
}
});
$('#balance2').change(function(){
 if(this.checked) {
  var check = document.getElementById("text4");
  check.value+="ศูนย์อะไหล่";
}
});

$('#deprivation1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text5");
   check.value+="บริษัทผู้ผลิตรถยนต์";
 }
});
$('#deprivation2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text5");
   check.value+="บริษัทแม่ที่อยู่ต่างประเทศ";
 }
});
$('#deprivation3').change(function(){
 if(this.checked) {
   var check = document.getElementById("text5");
   check.value+="บริษัทที่เป็นเครือข่ายในประเทศ";
 }
});
$('#deprivation4').change(function(){
 if(this.checked) {
   var check = document.getElementById("text5");
   check.value+="บริษัทคู่แข่งที่สำคัญ";
 }
});

$('#priority1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text6");
   check.value+="ภาษา";
 }
});
$('#priority2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text6");
   check.value+="เชื้อชาติ";
 }
});
$('#priority3').change(function(){
 if(this.checked) {
   var check = document.getElementById("text6");
   check.value+="ความน่าเชื่อถือ";
 }
});
$('#priority4').change(function(){
 if(this.checked) {
   var check = document.getElementById("text6");
   check.value+="ความสามารถในการผลิต";
 }
});
$('#priority5').change(function(){
 if(this.checked) {
   var check = document.getElementById("text6");
   check.value+="การบริหารจัดการ";
 }
});
//////////////////////analysis11//////////////
$('#competitors1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text7");
   check.value+="ประเทศจีน";
 }
});
$('#competitors2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text7");
   check.value+="ประเทศญี่ปุ่น";
 }
});
$('#competitors3').change(function(){
 if(this.checked) {
   var check = document.getElementById("text7");
   check.value+="ประเทศเกาหลี";
 }
});
$('#competitors4').change(function(){
 if(this.checked) {
   var check = document.getElementById("text7");
   check.value+="ประเทศอินเดีย";
 }
});
$('#competitors5').change(function(){
 if(this.checked) {
   var check = document.getElementById("text7");
   check.value+="ประเทศในกลุ่มอาเซียน";
 }
});

$('#production1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text8");
   check.value+="ประเทศจีน";
 }
});
$('#production2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text8");
   check.value+="ประเทศญี่ปุ่น";
 }
});
$('#production3').change(function(){
 if(this.checked) {
   var check = document.getElementById("text8");
   check.value+="ประเทศเกาหลี";
 }
});
$('#production4').change(function(){
 if(this.checked) {
   var check = document.getElementById("text8");
   check.value+="ประเทศอินเดีย";
 }
});
$('#production5').change(function(){
 if(this.checked) {
   var check = document.getElementById("text8");
   check.value+="ประเทศในกลุ่มอาเซียน";
 }
});
////////////////////////////analysis12/////////////////
$('#type1').change(function(){
 if(this.checked) {
  var check = document.getElementById("text9");
  check.value+="รถยนต์ปลั๊กอินไฮบริค";
}
});
$('#type2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text9");
   check.value+="รถยนต์ไฟฟ้าแบตเตอรี่";
 }
});

$('#economic1').change(function(){
 if(this.checked) {
   var check = document.getElementById("text10");
   check.value+="ยอดจำหน่ายรถยนต์ลดลง";
 }
});
$('#economic2').change(function(){
 if(this.checked) {
   var check = document.getElementById("text10");
   check.value+="รถเปลี่ยนอะไหล่ลดลง";
 }
});
//////////////////////////////////////////////////////
$( document ).ready(function() {
  <?php 

  for ( $i = 0; $i <  count($analysis) ; $i++) { ?>
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
      document.getElementById("relocation1").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
      document.getElementById("relocation2").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 1 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
      document.getElementById("relocation3").checked = true;
      document.getElementById("text1").innerHTML  = "<?php echo $analysis[$i]['analysis_text'] ?>" ;
    }

    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 2 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
      document.getElementById("production_costs1").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 2 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
      document.getElementById("production_costs2").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 2 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
      document.getElementById("production_costs3").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 2 &&<?php echo $analysis[$i]['value_numbre'] ?> == 4 ){
      document.getElementById("production_costs4").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 2 &&<?php echo $analysis[$i]['value_numbre'] ?> == 5){
      document.getElementById("production_costs5").checked = true;
      document.getElementById("text2").innerHTML  =  "<?php echo $analysis[$i]['analysis_text'] ?>" ;
    }

    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
      document.getElementById("competition1").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
      document.getElementById("competition2").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
      document.getElementById("competition3").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 4 ){
      document.getElementById("competition4").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 5){
      document.getElementById("competition5").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 3 &&<?php echo $analysis[$i]['value_numbre'] ?> == 6 ){
      document.getElementById("competition6").checked = true;
      document.getElementById("text3").innerHTML  = "<?php echo $analysis[$i]['analysis_text'] ?>" ;
    }
/////////////////////////////analysis10////////////////
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 4 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
  document.getElementById("balance1").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 4 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
  document.getElementById("balance2").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 4 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
  document.getElementById("balance3").checked = true;
  document.getElementById("text4").innerHTML  = "<?php echo $analysis[$i]['analysis_text'] ?>" ;
}

if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 5 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
  document.getElementById("deprivation1").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 5 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
  document.getElementById("deprivation2").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 5 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
  document.getElementById("deprivation3").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 5 &&<?php echo $analysis[$i]['value_numbre'] ?> == 4 ){
  document.getElementById("deprivation4").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 5 &&<?php echo $analysis[$i]['value_numbre'] ?> == 5){
  document.getElementById("deprivation5").checked = true;
  document.getElementById("text5").innerHTML  =  "<?php echo $analysis[$i]['analysis_text'] ?>" ;
}

if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 6 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
  document.getElementById("priority1").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 6 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
  document.getElementById("priority2").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 6 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
  document.getElementById("priority3").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 6 &&<?php echo $analysis[$i]['value_numbre'] ?> == 4 ){
  document.getElementById("priority4").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 6 &&<?php echo $analysis[$i]['value_numbre'] ?> == 5){
  document.getElementById("priority5").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 6 &&<?php echo $analysis[$i]['value_numbre'] ?> == 6 ){
  document.getElementById("priority6").checked = true;
  document.getElementById("text6").innerHTML  = "<?php echo $analysis[$i]['analysis_text'] ?>" ;
}
///////////////////////////////////analysis11////////////////////////////
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 7 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
  document.getElementById("competitors1").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 7 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
  document.getElementById("competitors2").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 7 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
  document.getElementById("competitors3").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 7 &&<?php echo $analysis[$i]['value_numbre'] ?> == 4 ){
  document.getElementById("competitors4").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 7 &&<?php echo $analysis[$i]['value_numbre'] ?> == 5 ){
  document.getElementById("competitors5").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 7 &&<?php echo $analysis[$i]['value_numbre'] ?> == 6 ){
  document.getElementById("competitors6").checked = true;
  document.getElementById("text7").innerHTML  = "<?php echo $analysis[$i]['analysis_text'] ?>" ;
}

if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 8 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
  document.getElementById("production1").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 8 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
  document.getElementById("production2").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 8 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
  document.getElementById("production3").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 8 &&<?php echo $analysis[$i]['value_numbre'] ?> == 4 ){
  document.getElementById("production4").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 8 &&<?php echo $analysis[$i]['value_numbre'] ?> == 5 ){
  document.getElementById("production5").checked = true;
}
if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 8 &&<?php echo $analysis[$i]['value_numbre'] ?> == 6){
  document.getElementById("production6").checked = true;
  document.getElementById("text8").innerHTML  =  "<?php echo $analysis[$i]['analysis_text'] ?>" ;
}
    /////////////////////////////analysis12/////////////////////////////////
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 9 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
      document.getElementById("type1").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 9 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
      document.getElementById("type2").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 9 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3 ){
      document.getElementById("type3").checked = true;
      document.getElementById("text9").innerHTML  = "<?php echo $analysis[$i]['analysis_text'] ?>" ;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 10 &&<?php echo $analysis[$i]['value_numbre'] ?> == 1 ){
      document.getElementById("economic1").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 10 &&<?php echo $analysis[$i]['value_numbre'] ?> == 2 ){
      document.getElementById("economic2").checked = true;
    }
    if(<?php echo $analysis[$i]['main_type'] ?> == 4 && <?php echo $analysis[$i]['type_analysis'] ?> == 10 &&<?php echo $analysis[$i]['value_numbre'] ?> == 3){
      document.getElementById("economic3").checked = true;
      document.getElementById("text10").innerHTML  =  "<?php echo $analysis[$i]['analysis_text'] ?>" ;
    }

    <?php     
  }
  ?>
});
</script>