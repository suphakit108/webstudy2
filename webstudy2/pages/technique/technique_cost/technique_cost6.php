<div class="container">
	<form id="myForm" action="index.php?app=technique&action=addcost6" method="post" enctype="multipart/form-data" accept-charset="utf-8">
		<div class="row">
			<!-- <div class="col-md-10" style=" padding-left: 60px;">
				<p style="color: #ff8100;">3. รายละอียดค่าใช้จ่าย</p>
			</div> -->
			<div class="col-md-10" style=" padding-left: 60px;">
				<br>
				<br>
				<div style="font-size: 20px; color: #32B4C1;"> 3.11 ค่าใช้จ่ายขออนุญาตก่อสร้างและประกอบกิจการ</div>
			</div>

			<div class="col-md-12" style="padding-top: 20px;">
				<p style="font-size: 20px; padding-left: 70px;">3.11.1 ขออนุญาตก่อสร้างโรงงานและเขียนแบบและรับรองแบบทางวิศวกรรม</p>
				<table style="width:100%" align="center" id="mytable">

					<tr style="background-color: #32B4C1;">
						<th style="text-align: center;">ลำดับที่</th>
						<th style="text-align: center;">ชื่อรายการ</th>
						<th style="text-align: center;">จำนวน</th>
						<th style="text-align: center;">ราคา</th>
						<th style="text-align: center;">รวมค่าใช้จ่าย</th>
						<th style="text-align: center;">หมายเหตุ</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="num[]" value="" placeholder=""></td>
						<td><input type="text" name="rates[]" value="" placeholder=""></td>
						<td><input type="text" name="sum[]" value="" placeholder=""></td>
						<td><input type="text" name="annotation[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="num[]" value="" placeholder=""></td>
						<td><input type="text" name="rates[]" value="" placeholder=""></td>
						<td><input type="text" name="sum[]" value="" placeholder=""></td>
						<td><input type="text" name="annotation[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="num[]" value="" placeholder=""></td>
						<td><input type="text" name="rates[]" value="" placeholder=""></td>
						<td><input type="text" name="sum[]" value="" placeholder=""></td>
						<td><input type="text" name="annotation[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="num[]" value="" placeholder=""></td>
						<td><input type="text" name="rates[]" value="" placeholder=""></td>
						<td><input type="text" name="sum[]" value="" placeholder=""></td>
						<td><input type="text" name="annotation[]" value="" placeholder=""></td>
					</tr>

				</table>
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields('mytable')" value="เพิ่มตาราง">
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction('mytable')" value="ลบตาราง">

			</div>
			<div class="col-md-10" style=" padding-left: 60px;">
				<br>
				<br>
			</div>

			<div class="col-md-12">
				<p style="font-size: 20px; padding-left: 70px;">3.11.2 ขออนุญาตประกอบกิจการโรงงานเขียนแบบและรับรองแบบทางวิศวกรรม</p>
				<table style="width:100%" align="center" id="mytable2">


					<tr style="background-color: #32B4C1;">
						<th style="text-align: center;">ลำดับที่</th>
						<th style="text-align: center;">ชื่อรายการ</th>
						<th style="text-align: center;">จำนวน</th>
						<th style="text-align: center;">ราคา</th>
						<th style="text-align: center;">รวมค่าใช้จ่าย</th>
						<th style="text-align: center;">หมายเหตุ</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[] " value="" placeholder=""></td>
						<td><input type="text" name="name2[]" value="" placeholder=""></td>
						<td><input type="text" name="num2[]" value="" placeholder=""></td>
						<td><input type="text" name="rates2[]" value="" placeholder=""></td>
						<td><input type="text" name="sum2[]" value="" placeholder=""></td>
						<td><input type="text" name="annotation2[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[] " value="" placeholder=""></td>
						<td><input type="text" name="name2[]" value="" placeholder=""></td>
						<td><input type="text" name="num2[]" value="" placeholder=""></td>
						<td><input type="text" name="rates2[]" value="" placeholder=""></td>
						<td><input type="text" name="sum2[]" value="" placeholder=""></td>
						<td><input type="text" name="annotation2[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[] " value="" placeholder=""></td>
						<td><input type="text" name="name2[]" value="" placeholder=""></td>
						<td><input type="text" name="num2[]" value="" placeholder=""></td>
						<td><input type="text" name="rates2[]" value="" placeholder=""></td>
						<td><input type="text" name="sum2[]" value="" placeholder=""></td>
						<td><input type="text" name="annotation2[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[] " value="" placeholder=""></td>
						<td><input type="text" name="name2[]" value="" placeholder=""></td>
						<td><input type="text" name="num2[]" value="" placeholder=""></td>
						<td><input type="text" name="rates2[]" value="" placeholder=""></td>
						<td><input type="text" name="sum2[]" value="" placeholder=""></td>
						<td><input type="text" name="annotation2[]" value="" placeholder=""></td>
					</tr>
				</table>
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields2('mytable2')" value="เพิ่มตาราง">
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction2('mytable2')" value="ลบตาราง">

			</div>
		</div>
		<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
		<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
			<a href="index.php?app=technique&action=cost5">กลับ</a>
			<a class=" success" href="#" onclick="myFunction()">บันทึก</a>
			<a class=" success" href="#" onclick="myFunction()">หน้าต่อไป</a>
			<br><br>
		</div>
	</div>
</form>
</div>
<style type="text/css" media="screen">
	table#t01 {
		width: 100%;
	}

	table#t01 tr:nth-child(even) {
		background-color: #fff;
	}

	table#t01 tr:nth-child(odd) {
		background-color: #fff;
	}

	table#t01 th {
		background-color: #000080;
		color: white;
	}
</style>
<script>
	function myFunction() {
		document.getElementById("myForm").submit();
	}

	function readURL(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('.image-upload-wrap').hide();

				$('.file-upload-image').attr('src', e.target.result);
				$('.file-upload-content').show();

				$('.image-title').html(input.files[0].name);
			};

			reader.readAsDataURL(input.files[0]);

		} else {
			removeUpload();
		}
	}
	var ss = 4;
	var sss = 4;

	function add_fields(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="name[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="num[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="retes[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="sum[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="annotation[]" value="" placeholder=""></td>';
		str += '</tr>';
		document.getElementById(id).insertRow(ss+1).innerHTML = str;
		ss++;
	}

	function add_fields2(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="name2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="num2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="retes2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="sum2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="annotation2[]" value="" placeholder=""></td>';
		str += '</tr>';
		document.getElementById(id).insertRow(sss+1).innerHTML = str;
		sss++;
	}
	function myDeleteFunction() {
		if(ss>4){
			document.getElementById("mytable").deleteRow(ss);
			ss--;
		}
	}
	function myDeleteFunction2() {
		if(sss>4){
			document.getElementById("mytable2").deleteRow(sss);
			sss--;
		}
	}
</script>