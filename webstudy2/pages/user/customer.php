
<div class="container font"  >
  <h3 style="color: #32b4c1;">1. ข้อมูลลูกค้า</h3>
  <div class="row">
    <p style="color: #32b4c1; padding-left: 30px;padding-bottom: 20px;">1. อธิบายชื่อ ที่อยู่ของลูกค้าแต่ละรายมาโดยสังเขป</p>
  </div>
  <form id="myForm"action="index.php?app=user&action=addcustomer" method="post" accept-charset="utf-8">
    <table>
      <thead>
        <tr >
          <th style="text-align: center; background-color: #c9f5f5; height: 60px;color: #666666;" >ชื่อบริษัท</th>
          <th style="text-align: center; background-color: #c9f5f5;color: #666666;">ที่อยู่</th>
          <th style="text-align: center; background-color: #c9f5f5;color: #666666;">เบอร์โทร</th>
          <th style="text-align: center; background-color: #c9f5f5;color: #666666;">Email</th>
          <th style="text-align: center; background-color: #c9f5f5;color: #666666;">ชื่อผู้<br>ประสานงาน</th>
          <th style="text-align: center; background-color: #c9f5f5;color: #666666;">เงื่อนไข<br>การชำระเงิน </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_name1"><?php echo $customer[0]['customer_name']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_local1"><?php echo $customer[0]['customer_local']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_phone1"><?php echo $customer[0]['customer_phone']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_email1"><?php echo $customer[0]['customer_email']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_employe1"><?php echo $customer[0]['customer_employe']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name=" customer_payment1"><?php echo $customer[0]['customer_payment']; ?></textarea></td>
        </tr>
        <tr>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_name2"><?php echo $customer[1]['customer_name']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_local2"><?php echo $customer[1]['customer_local']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_phone2"><?php echo $customer[1]['customer_phone']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_email2"><?php echo $customer[1]['customer_email']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_employe2"><?php echo $customer[1]['customer_employe']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name=" customer_payment2"><?php echo $customer[1]['customer_payment']; ?></textarea></td>
        </tr>
        <tr>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_name3"><?php echo $customer[2]['customer_name']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_local3"><?php echo $customer[2]['customer_local']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_phone3"><?php echo $customer[2]['customer_phone']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_email3"><?php echo $customer[2]['customer_email']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name="customer_employe3"><?php echo $customer[2]['customer_employe']; ?></textarea></td>
          <td><textarea rows="3" cols="15" style="width: 100%" name=" customer_payment3"><?php echo $customer[2]['customer_payment']; ?></textarea></td>
        </tr>
        <tr>
         <td><textarea rows="3" cols="15" style="width: 100%" name="customer_name4"><?php echo $customer[3]['customer_name']; ?></textarea></td>
         <td><textarea rows="3" cols="15" style="width: 100%" name="customer_local4"><?php echo $customer[3]['customer_local']; ?></textarea></td>
         <td><textarea rows="3" cols="15" style="width: 100%" name="customer_phone4"><?php echo $customer[3]['customer_phone']; ?></textarea></td>
         <td><textarea rows="3" cols="15" style="width: 100%" name="customer_email4"><?php echo $customer[3]['customer_email']; ?></textarea></td>
         <td><textarea rows="3" cols="15" style="width: 100%" name="customer_employe4"><?php echo $customer[3]['customer_employe']; ?></textarea></td>
         <td><textarea rows="3" cols="15" style="width: 100%" name=" customer_payment4"><?php echo $customer[3]['customer_payment']; ?></textarea></td>
       </tr>
       <tr>
        <td><textarea rows="3" cols="15" style="width: 100%" name="customer_name5"><?php echo $customer[4]['customer_name']; ?></textarea></td>
        <td><textarea rows="3" cols="15" style="width: 100%" name="customer_local5"><?php echo $customer[4]['customer_local']; ?></textarea></td>
        <td><textarea rows="3" cols="15" style="width: 100%" name="customer_phone5"><?php echo $customer[4]['customer_phone']; ?></textarea></td>
        <td><textarea rows="3" cols="15" style="width: 100%" name="customer_email5"><?php echo $customer[4]['customer_email']; ?></textarea></td>
        <td><textarea rows="3" cols="15" style="width: 100%" name="customer_employe5"><?php echo $customer[4]['customer_employe']; ?></textarea></td>
        <td><textarea rows="3" cols="15" style="width: 100%" name=" customer_payment5"><?php echo $customer[4]['customer_payment']; ?></textarea></td>
      </tr>
    </tbody>
  </table>

  <div class="col-sm-12" style="padding-top: 50px; text-align: center;">



    <div class="col-sm-12" style="padding-bottom: 50px;">
      <a class=" myButton " style="width: 80px; border-radius:50px;"  onclick="backFunction()"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
      <button class="myButton success" style="height: 30px;width: 120px;border-radius:50px;" href="#" onclick="myFunction()">บันทึก</button>
      <a class=" myButton " style="width: 80px;border-radius:50px;" href="#" onclick="myFunction()"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
<!--  <a class = " success button2" href="index.php?app=user&action=customer">1</a>
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
    window.location = "index.php?app=user";
  }  
</script>