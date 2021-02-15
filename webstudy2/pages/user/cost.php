<div class="container" >
  <div class="container">
  </div>
  <div class="row">
    <h3 style=" padding-top: 20px;padding-bottom: 20px;padding-left: 30px;">9. ค่าใช้จ่ายที่ใช้ในกิจกรรมด้านการตลาดว่ามีอะไรบ้างอธิบายมาพอสังเขป</h3>
  </div>
  <form id="myForm"action="index.php?app=user&action=addcost" method="post" accept-charset="utf-8">
    <table >
      <tr>
        <th style="text-align: center; width: 10%; background-color: #c9f5f5;color:#666666; height: 60px; " >ปีที่</th>
        <th style="text-align: center; background-color: #c9f5f5; color:#666666;">จำนวนเงิน</th>
        <th style="text-align: center; background-color: #c9f5f5; color:#666666;">หน่วย</th>
      </tr>
      <tr>
        <td style="text-align: center;" >1</td>
        <td><textarea rows="2"  style="width: 100%" name="money1"><?php echo $cost[0]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit1"><?php echo $cost[0]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">2</td>
        <td><textarea rows="2"  style="width: 100%" name="money2"><?php echo $cost[1]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit2"><?php echo $cost[1]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">3</td>
        <td><textarea rows="2"  style="width: 100%" name="money3"><?php echo $cost[2]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit3"><?php echo $cost[2]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">4</td>
        <td><textarea rows="2"  style="width: 100%" name="money4"><?php echo $cost[3]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit4"><?php echo $cost[3]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">5</td>
        <td><textarea rows="2"  style="width: 100%" name="money5"><?php echo $cost[4]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit5"><?php echo $cost[4]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">6</td>
        <td><textarea rows="2"  style="width: 100%" name="money6"><?php echo $cost[5]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit6"><?php echo $cost[6]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">7</td>
        <td><textarea rows="2"  style="width: 100%" name="money7"><?php echo $cost[6]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit7"><?php echo $cost[6]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">8</td>
        <td><textarea rows="2" style="width: 100%" name="money8"><?php echo $cost[7]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit8"><?php echo $cost[7]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">9</td>
        <td><textarea rows="2" style="width: 100%" name="money9"><?php echo $cost[8]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit9"><?php echo $cost[8]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">10</td>
        <td><textarea rows="2" style="width: 100%" name="money10"><?php echo $cost[9]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit10"><?php echo $cost[9]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">11</td>
        <td><textarea rows="2" style="width: 100%" name="money11"><?php echo $cost[10]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit11"><?php echo $cost[10]['unit']; ?></textarea></td>
      </tr>
      <tr>
        <td style="text-align: center;">12</td>
        <td><textarea rows="2" style="width: 100%" name="money12"><?php echo $cost[11]['money']; ?></textarea></td>
        <td><textarea rows="2" style="width: 100%" name="unit12"><?php echo $cost[11]['unit']; ?></textarea></td>
      </tr>
      <tr style="visibility: hidden">
        <td><input type="text"  name="result" id="result"value=<?PHP echo $_GET['result']; ?>> </td></tr>
      </table>
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
     <a class = " success button1" href="index.php?app=user&action=target">21</a>
     <a class = " success button1" href="index.php?app=user&action=competitive_force">22</a>
     <a class = " success button2" href="index.php?app=user&action=cost">23</a>
     <a class = " success button1" href="index.php?app=user&action=show">24</a> -->
   </div>
 </form>
</div>
<script type="text/javascript">
  function backFunction(){
    window.location = "index.php?app=user&action=competitive_force";
  }  
  function myFunction() {
    document.getElementById("myForm").submit();
  }
</script>