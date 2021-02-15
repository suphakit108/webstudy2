<style type="text/css">
  table {
    border-collapse: collapse;
    width: 100%;
    color: #6d6d6d;
  }

  td, th {
    border: 1px solid #999;
    padding: 0.5rem;
  }


  p {
    color: #6d6d6d;
  }
</style>
<div class="container">
  <div class="container">
  </div>
  <div class="row">
    <h3 style="color: #32b4c1;padding-left: 30px;">2. อธิบายห่วงโซ่อุปทานขององค์กรของท่านเริ่มตั้งแต่ต้นน้ำจนถึงปลายน้ำ</h3>
  </div>
  <p style="padding-left: 20PX; padding-bottom: 20px; font-size: 18px;">โซ่อุปทานหมายถึงการใช้ระบบของหน่วยงาน คน เทคโนโลยี กิจกรรม ข้อมูลข่าวสาร และทรัพยากร มาประยุกต์เข้าด้วยกัน เพื่อการเคลื่อนย้ายสินค้าหรือบริการ จากผู้จัดหาไปยังลูกค้ากิจกรรมของห่วงโซ่อุปทาน
  จะแปรสภาพทรัพยากรธรรมชาติ วัตถุดิบ และวัสดุอื่น ๆ ให้กลายเป็นสินค้าสำเร็จ แล้วส่งไปจนถึงลูกค้าคนสุดท้าย (ผู้บริโภค หรือ End Customer)</p>
  <form id="myForm" action="index.php?app=user&action=addsupply_chain" method="post" accept-charset="utf-8">
    <table name = "mytable" id="mytable">
      <thead>
        <tr>
          <th style="text-align: center; background-color: #c9f5f5; height: 60px; color: #666666;">ห่วงโซ่ลำดับที่</th>
          <th style="text-align: center; background-color: #c9f5f5; color: #666666;">ผู้ส่งมอบลำดับที่ 3</th>
          <th style="text-align: center; background-color: #c9f5f5; color: #666666;">ผู้ส่งมอบลำดับที่ 2</th>
          <th style="text-align: center; background-color: #c9f5f5; color: #666666;">ผู้ส่งมอบลำดับที่ 1</th>
          <th style="text-align: center; background-color: #c9f5f5; color: #666666;">โรงงานของท่าน</th>
          <th style="text-align: center; background-color: #c9f5f5; color: #666666;">ลูกค้าลำดับที่ 1</th>
          <th style="text-align: center; background-color: #c9f5f5; color: #666666;">ลูกค้าลำดับที่ 2</th>
          <th style="text-align: center; background-color: #c9f5f5; color: #666666;">ลูกค้าลำดับที่ 3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>ลำดับที่ 1</td>
          <td><textarea rows="3" cols="10" style="width: 100%" name ="Supplier1" id ="Supplier1"><?php echo $supply_chain[0]['Supplier1'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="Supplier2" id ="Supplier2"><?php echo $supply_chain[0]['Supplier2'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="Supplier3" id ="Supplier3"><?php echo $supply_chain[0]['Supplier3'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="yourfactory" id ="yourfactory"><?php echo $supply_chain[0]['yourfactory'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="customer1" id ="customer1"><?php echo $supply_chain[0]['customer1'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="customer2" id ="customer2"><?php echo $supply_chain[0]['customer2'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="customer3" id ="customer3"><?php echo $supply_chain[0]['customer3'] ?></textarea></td>
        </tr>
        <tr>
          <td>ลำดับที่ 2</td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="Supplier11" id ="Supplier11"><?php echo $supply_chain[1]['Supplier1'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="Supplier12" id ="Supplier12"><?php echo $supply_chain[1]['Supplier2'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="Supplier13" id ="Supplier13"><?php echo $supply_chain[1]['Supplier3'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="yourfactory1" id ="yourfactory1"><?php echo $supply_chain[1]['yourfactory'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="customer11" id ="customer11"><?php echo $supply_chain[1]['customer1'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="customer12" id ="customer12"><?php echo $supply_chain[1]['customer2'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="customer13" id ="customer13"><?php echo $supply_chain[1]['customer3'] ?></textarea></td>
        </tr>
        <tr>
          <td>ลำดับที่ 3</td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="Supplier21" id ="Supplier21"><?php echo $supply_chain[2]['Supplier1'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="Supplier22" id ="Supplier22"><?php echo $supply_chain[2]['Supplier2'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="Supplier23" id ="Supplier23"><?php echo $supply_chain[2]['Supplier3'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="yourfactory2" id ="yourfactory2"><?php echo $supply_chain[2]['yourfactory'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="customer21" id ="customer21"><?php echo $supply_chain[2]['customer1'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="customer22" id ="customer22"><?php echo $supply_chain[2]['customer2'] ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name ="customer23" id ="customer23"><?php echo $supply_chain[2]['customer3'] ?></textarea></td>
        </tr>
        <tr style="visibility: hidden">
          <!-- <td><input type="text"  name="result" id="result"value=<?PHP echo $_GET['result']; ?>> </td> -->
        </tr>
      </tbody>
    </table>
    <!-- <input type="text" id="result" name="result" style="visibility: hidden;"value=<?php echo $_GET['result'];?>> -->
    <div class="col-sm-12" style="padding-top: 50px; text-align: center;">
      <div class="col-sm-12" style="padding-bottom: 50px;">
        <a class=" myButton " style="width: 80px;"  onclick="backFunction()"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <button class="myButton success" style="height: 30px;width: 120px;" href="#" onclick="myFunction()">บันทึก</button>
        <a class=" myButton " style="width: 80px;" href="#" onclick="myFunction()"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
     <!--  <a class = " success button1" href="index.php?app=user&action=customer">1</a>
      <a class = " success button2" href="index.php?app=user&action=supply_chain">2</a>
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
      <a class = " success button1" href="index.php?app=user&action=competitive_force">22</a>
      <a class = " success button1" href="index.php?app=user&action=cost">23</a>
      <a class = " success button1" href="index.php?app=user&action=show">24</a> -->
    </div>
  </form>
</div>
<script type="text/javascript">
  function myFunction() {
    document.getElementById("myForm").submit();
  }
  function backFunction(){
    window.location = "index.php?app=user&action=customer&result=";
  }  
</script>