<div class="container">
  <div class="container">
  </div>
  <div class="row">
    <h3 style=" padding-left: 30px;color: #32b4c1;">3. ช่วยเปรียบเทียบอุปสงค์และอุปทานในองค์กรของท่าน<h3p>
    </div>
    <p style="padding-left: 20PX; padding-bottom: 20px; font-size: 18px;">อุปสงค์ หมายถึง จำนวนความต้องการของลูกค้า อุปทาน หมายถึง จำนวนสินค้าที่พร้อมจะจำหน่ายเพื่อตอบสนองความต้องการซื้อของลูกค้าหรืออีกในหนึ่งหมายถึงกำลังการผลิตสินค้าเพื่อตอบสนอง
    ความต้องการของลูกค้าเพียงพอหรือไม่</p>
    <form id="myForm" action="index.php?app=user&action=adddemand_supply" method="post" accept-charset="utf-8">
      <table style="text-align: center;">
        <thead>
          <tr >
            <th style="text-align: center; background-color: #c9f5f5; height: 60px;color: #666666;" >เดือน</th>
            <th style="text-align: center; background-color: #c9f5f5;color: #666666;" >อุปสงค์</th>
            <th style="text-align: center; background-color: #c9f5f5;color: #666666;">หน่วย</th>
            <th style="text-align: center; background-color: #c9f5f5;color: #666666;">อุปทาน</th>
            <th style="text-align: center; background-color: #c9f5f5;color: #666666;">หน่วย</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>มกราคม</td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand" id ="demand"><?php echo  $demand_supply[0]['demand'];?></textarea></td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit" id ="demand_unit"><?php echo  $demand_supply[0]['demand_unit'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply" id ="supply"><?php echo  $demand_supply[0]['supply'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit" id ="supply_unit"><?php echo  $demand_supply[0]['supply_unit'];?></textarea></td>
          </tr>
          <tr>
            <td>กุมภาพันธ์</td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand2" id ="demand2"><?php echo  $demand_supply[1]['demand'];?></textarea></td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit2" id ="demand_unit2"><?php echo  $demand_supply[1]['demand_unit'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply2" id ="supply2"><?php echo  $demand_supply[1]['supply'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit2" id ="supply_unit2"><?php echo  $demand_supply[1]['supply_unit'];?></textarea></td>
          </tr>
          <tr>
            <td>มีนาคม</td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand3" id ="demand3"><?php echo  $demand_supply[2]['demand'];?></textarea></td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit3" id ="demand_uni3"><?php echo  $demand_supply[2]['demand_unit'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply3" id ="supply3"><?php echo  $demand_supply[2]['supply'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit3" id ="supply_unit3"><?php echo  $demand_supply[2]['supply_unit'];?></textarea></td>
          </tr>
          <tr>
            <td>เมษายน</td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand4" id ="demand4"><?php echo  $demand_supply[3]['demand'];?></textarea></td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit4" id ="demand_unit4"><?php echo  $demand_supply[3]['demand_unit'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply4" id ="supply4"><?php echo  $demand_supply[3]['supply'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit4" id ="supply_unit4"><?php echo  $demand_supply[3]['supply_unit'];?></textarea></td>
          </tr>
          <tr>
            <td>พฤษภาคม</td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand5" id ="demand5"><?php echo  $demand_supply[4]['demand'];?></textarea></td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit5" id ="demand_unit5"><?php echo  $demand_supply[4]['demand_unit'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply5" id ="supply5"><?php echo  $demand_supply[4]['supply'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit5" id ="supply_unit5"><?php echo  $demand_supply[4]['supply_unit'];?></textarea></td>
          </tr>
          <tr>
            <td>มิถุนายน</td>   
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand6" id ="demand6"><?php echo  $demand_supply[5]['demand'];?></textarea></td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit6" id ="demand_unit6"><?php echo  $demand_supply[5]['demand_unit'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply6" id ="supply6"><?php echo  $demand_supply[5]['supply'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit6" id ="supply_unit6"><?php echo  $demand_supply[5]['supply_unit'];?></textarea></td>
          </tr>
          <tr>
            <td>กรกฎาคม</td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand7" id ="demand7"><?php echo  $demand_supply[6]['demand'];?></textarea></td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit7" id ="demand_unit7"><?php echo  $demand_supply[6]['demand_unit'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply7" id ="supply7"><?php echo  $demand_supply[6]['supply'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit7" id ="supply_unit7"><?php echo  $demand_supply[6]['supply_unit'];?></textarea></td>
          </tr>
          <tr>
            <td>สิงหาคม</td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand8" id ="demand8"><?php echo  $demand_supply[7]['demand'];?></textarea></td>
            <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit8" id ="demand_unit8"><?php echo  $demand_supply[7]['demand_unit'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply8" id ="supply8"><?php echo  $demand_supply[7]['supply'];?></textarea></td> 
            <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit8" id ="supply_unit8"><?php echo  $demand_supply[7]['supply_unit'];?></textarea></td>
          </tr>
          <tr>
           <td>กันยายน</td>
           <td><textarea rows="2" cols="15" style="width: 100%" name = "demand9" id ="demand9"><?php echo  $demand_supply[8]['demand'];?></textarea></td>
           <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit9" id ="demand_unit9"><?php echo  $demand_supply[8]['demand_unit'];?></textarea></td> 
           <td><textarea rows="2" cols="15" style="width: 100%" name = "supply9" id ="supply9"><?php echo  $demand_supply[8]['supply'];?></textarea></td> 
           <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit9" id ="supply_unit9"><?php echo  $demand_supply[8]['supply_unit'];?></textarea></td>
         </tr>
         <tr>
           <td>ตุลาคม</td> 
           <td><textarea rows="2" cols="15" style="width: 100%" name = "demand10" id ="demand10"><?php echo  $demand_supply[9]['demand'];?></textarea></td>
           <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit10" id ="demand_unit10"><?php echo  $demand_supply[9]['demand_unit'];?></textarea></td> 
           <td><textarea rows="2" cols="15" style="width: 100%" name = "supply10" id ="supply10"><?php echo  $demand_supply[9]['supply'];?></textarea></td> 
           <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit10" id ="supply_unit10"><?php echo  $demand_supply[9]['supply_unit'];?></textarea></td>
         </tr>
         <tr>
          <td>พฤศจิกายน</td>
          <td><textarea rows="2" cols="15" style="width: 100%" name = "demand11" id ="demand11"><?php echo  $demand_supply[10]['demand'];?></textarea></td>
          <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit11" id ="demand_unit11"><?php echo  $demand_supply[10]['demand_unit'];?></textarea></td> 
          <td><textarea rows="2" cols="15" style="width: 100%" name = "supply11" id ="supply11"><?php echo  $demand_supply[10]['supply'];?></textarea></td> 
          <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit11" id ="supply_unit11"><?php echo  $demand_supply[10]['supply_unit'];?></textarea></td>
        </tr>
        <tr>
          <td>ธันวาคม</td> 
          <td><textarea rows="2" cols="15" style="width: 100%" name = "demand12" id ="demand12"><?php echo  $demand_supply[11]['demand'];?></textarea></td>
          <td><textarea rows="2" cols="15" style="width: 100%" name = "demand_unit12" id ="demand_unit12"><?php echo  $demand_supply[11]['demand_unit'];?></textarea></td> 
          <td><textarea rows="2" cols="15" style="width: 100%" name = "supply12" id ="supply12"><?php echo  $demand_supply[11]['supply'];?></textarea></td> 
          <td><textarea rows="2" cols="15" style="width: 100%" name = "supply_unit12" id ="supply_unit12"><?php echo  $demand_supply[11]['supply_unit'];?></textarea></td>
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
      <canter>
      <!-- <a class = " success button1" href="index.php?app=user&action=customer">1</a>
      <a class = " success button1" href="index.php?app=user&action=supply_chain">2</a>
      <a class = " success button2" href="index.php?app=user&action=demand_supply">3</a>
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
    </canter>
  </div>
</div>
</form>
</div>
<script type="text/javascript">
  function myFunction() {
    document.getElementById("myForm").submit();
  }
  function backFunction(){
    window.location = "index.php?app=user&action=supply_chain";
  }  
</script>