<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	<div class="container" style="padding-top: 70px;  text-align: center; ">
		<h1 style=" color:#000000;">กรุณากรอกรหัสเพื่อเข้าใช้งาน</h1>
		<form id="myForm" action="index.php?app=search&action=search" method="post" accept-charset="utf-8">
			<div class="row" style=" justify-content: center;">
				<input style="  background-color: #ffffff!IMPORTANT; color: #00B0FF!IMPORTANT;  border-color:#00B0FF;border-radius:50px; width: 200px; height: 50px; font-size: 30px; text-align:center;" type="text" name="code"  id="code" style="width: 50%">
			</div>
		</form>
		<!-- <a class = " success" href="#" onclick="myFunction()">ค้นหา</a> -->
		<button class ="myButton success" style=" border-radius:50px; height: 40px;width: 110px; " href="#" type="button" onclick="myFunction()" >ค้นหา</button>
		<!-- 		      <button class="myButton success" style="height: 50px;width: 200px;" href="#" onclick="myFunction()">บันทึกข้อมูล</button> -->
		<div class="row" >
			<div class="col-md-12" align="center" style="padding-top: 50px;">
				<img src="../images/rrrr.png" width="40%">
			</div>
		</div> 
	</div>
</body>
</html>
<script type="text/javascript">
	function myFunction() {
		document.getElementById("myForm").submit();
	}
</script>