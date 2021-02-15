<div class="container">
	<form id="myForm" action="index.php?app=technique&action=addcost4" method="post"enctype="multipart/form-data" accept-charset="utf-8">
		<div class="row">
			<!-- <div class="col-md-10" style=" padding-left: 60px;">
				<p style="color: #ff8100;">3. รายละอียดค่าใช้จ่าย</p>
			</div> -->
			<div class="col-md-10" style=" padding-left: 60px; padding-top: 20px;">
				<div style="font-size: 20px; color: #32B4C1;"> 3.7 ค่าใช้จ่ายเกี่ยวกับระบบบําบัดสิ่งแวดล้อม เช่น การกําจัดของเสีย การบําบัดสิ่งปฏิกูล </div>
			</div>

			<div class="col-md-12">
				<P style=" padding-left: 70px;padding-top: 10px; font-size: 20px;">3.7.1 ขยะทั่วไป กําจัดโดยเทศบาล</P>
				<table style="width:100%" align="center" id="mytable">

					<tr style="background-color: #32B4C1;">
						<th style="text-align: center;">ลำดับที่</th>
						<th style="text-align: center;">ประเภทขยะ</th>
						<th style="text-align: center;">ชื่อขยะทั่วไป</th>
						<th style="text-align: center;">จำนวนพนักงาน</th>
						<th style="text-align: center;">ปริมาณ (กก.)</th>
						<th style="text-align: center;">ค่าดำเนินงาน</th>
						<th style="text-align: center;">รวมค่าใช้จ่าย</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="genre[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="num[]" value="" placeholder=""></td>
						<td><input type="text" name="volume[]" value="" placeholder=""></td>
						<td><input type="text" name="cost[]" value="" placeholder=""></td>
						<td><input type="text" name="sum[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="genre[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="num[]" value="" placeholder=""></td>
						<td><input type="text" name="volume[]" value="" placeholder=""></td>
						<td><input type="text" name="cost[]" value="" placeholder=""></td>
						<td><input type="text" name="sum[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="genre[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="num[]" value="" placeholder=""></td>
						<td><input type="text" name="volume[]" value="" placeholder=""></td>
						<td><input type="text" name="cost[]" value="" placeholder=""></td>
						<td><input type="text" name="sum[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="genre[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="num[]" value="" placeholder=""></td>
						<td><input type="text" name="volume[]" value="" placeholder=""></td>
						<td><input type="text" name="cost[]" value="" placeholder=""></td>
						<td><input type="text" name="sum[]" value="" placeholder=""></td>
					</tr>
				</table>
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields('mytable')" value="เพิ่มตาราง">
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction('mytable')" value="ลบตาราง">
			</div>
			<div class="col-md-12" style="padding-top: 30px;">
				<div class="col-md-12">
					<P style=" padding-left: 60px;  font-size: 20px;">3.7.2 ขยะอันตราย กําจัดผู้รับเหมาเอกชนที่ได้รับอนุญาตจากกรมโรงงานอุตสาหกรรม</p>
					</div>
					<table style="width:100%" align="center" id="mytable2">

						<tr>
							<th style="text-align: center;">ลำดับที่</th>
							<th style="text-align: center;">ประเภทขยะ</th>
							<th style="text-align: center;">ชื่อขยะอันตราย</th>
							<th style="text-align: center;">ปริมาณ</th>
							<th style="text-align: center;">ค่าดำเนินการ</th>
							<th style="text-align: center;">ค่าขนส่ง</th>
							<th style="text-align: center;">รวมค่าใช้จ่าย</th>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
							<td><input type="text" name="genre2[]" value="" placeholder=""></td>
							<td><input type="text" name="name2[]" value="" placeholder=""></td>
							<td><input type="text" name="num2[]" value="" placeholder=""></td>
							<td><input type="text" name="volume2[]" value="" placeholder=""></td>
							<td><input type="text" name="cost2[]" value="" placeholder=""></td>
							<td><input type="text" name="sum2[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
							<td><input type="text" name="genre2[]" value="" placeholder=""></td>
							<td><input type="text" name="name2[]" value="" placeholder=""></td>
							<td><input type="text" name="num2[]" value="" placeholder=""></td>
							<td><input type="text" name="volume2[]" value="" placeholder=""></td>
							<td><input type="text" name="cost2[]" value="" placeholder=""></td>
							<td><input type="text" name="sum2[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
							<td><input type="text" name="genre2[]" value="" placeholder=""></td>
							<td><input type="text" name="name2[]" value="" placeholder=""></td>
							<td><input type="text" name="num2[]" value="" placeholder=""></td>
							<td><input type="text" name="volume2[]" value="" placeholder=""></td>
							<td><input type="text" name="cost2[]" value="" placeholder=""></td>
							<td><input type="text" name="sum2[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
							<td><input type="text" name="genre2[]" value="" placeholder=""></td>
							<td><input type="text" name="name2[]" value="" placeholder=""></td>
							<td><input type="text" name="num2[]" value="" placeholder=""></td>
							<td><input type="text" name="volume2[]" value="" placeholder=""></td>
							<td><input type="text" name="cost2[]" value="" placeholder=""></td>
							<td><input type="text" name="sum2[]" value="" placeholder=""></td>
						</tr>

					</table>
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields2('mytable2')" value="เพิ่มตาราง">
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction2('mytable2')" value="ลบตาราง">

				</div>
				<div class="col-md-10" style=" padding-left: 60px; padding-top: 20px;">
					<div style="font-size: 20px; color: #32B4C1;"> 3.8 ค่าใช้จ่ายการตรวจสอบส่งรายงานให้กับทางราชการประจําปี เช่น ภาษีโรงเรือน ภาษีที่ดิน การตรวจสอบระบบไฟฟ้า </div>
				</div>
				<div class="col-md-12" style="padding-top: 20px;">
					<!-- 		<p style="font-size: 25px; padding-left:70px;">3.8.1 อาคารประจําปี</p> -->
					<table style="width:100%" align="center" id="mytable3">
						<tr style="background-color: #32B4C1;">
							<th style="text-align: center;">ลำดับที่</th>
							<th style="text-align: center;">ประเภทรายงาน</th>
							<th style="text-align: center;">ค่าใช้จ่าย</th>
							<th style="text-align: center;">หมายเหตุ</th>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no3[]" value="" placeholder=""></td>
							<td><input type="text" name="genre3[]" value="" placeholder=""></td>
							<td><input type="text" name="cost3[]" value="" placeholder=""></td>
							<td><input type="text" name="annotation3[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no3[]" value="" placeholder=""></td>
							<td><input type="text" name="genre3[]" value="" placeholder=""></td>
							<td><input type="text" name="cost3[]" value="" placeholder=""></td>
							<td><input type="text" name="annotation3[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no3[]" value="" placeholder=""></td>
							<td><input type="text" name="genre3[]" value="" placeholder=""></td>
							<td><input type="text" name="cost3[]" value="" placeholder=""></td>
							<td><input type="text" name="annotation3[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no3[]" value="" placeholder=""></td>
							<td><input type="text" name="genre3[]" value="" placeholder=""></td>
							<td><input type="text" name="cost3[]" value="" placeholder=""></td>
							<td><input type="text" name="annotation3[]" value="" placeholder=""></td>
						</tr>
					</table>
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields3('mytable3')" value="เพิ่มตาราง">
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction3('mytable3')" value="ลบตาราง">

				</div>
				<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
				<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
					<a href="index.php?app=technique&action=cost3">กลับ</a>
					<a class=" success" href="#" onclick="myFunction()">บันทึก</a>
					<a class=" success" href="#" onclick="myFunction()">หน้าต่อไป</a>
					<br><br>
				</div>
			</div>
		</form>
	</div>
	<style type="text/css" media="screen">
		table#mytable2 {
			width: 100%;
		}

		table#mytable2 tr:nth-child(even) {
			background-color: #fff;
		}

		table#mytable2 tr:nth-child(odd) {
			background-color: #fff;
		}

		table#mytable2 th {
			background-color: #32B4C1;
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
		var ssss = 4;

		function add_fields(id) {
			console.log(id);
			var str = '<tr>';
			str += '<td height="50px"><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '</tr>';
			document.getElementById(id).insertRow(ss+1).innerHTML = str;
			ss++;
		}

		function add_fields2(id) {
			console.log(id);
			var str = '<tr>';
			str += '<td height="50px"><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '</tr>';
			document.getElementById(id).insertRow(sss+1).innerHTML = str;
			sss++;
		}

		function add_fields3(id) {
			console.log(id);
			var str = '<tr>';
			str += '<td height="50px"><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			str += '<td><input type="text" name="" value="" placeholder=""></td>';
			document.getElementById(id).insertRow(ssss+1).innerHTML = str;
			ssss++;
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
		function myDeleteFunction3() {
			if(ssss>4){
				document.getElementById("mytable3").deleteRow(ssss);
				ssss--;
			}
		}
	</script>