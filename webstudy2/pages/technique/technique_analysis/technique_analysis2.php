<div class="container">
	<form id="myForm" action="index.php?app=technique&action=addanalysis2" method="post" accept-charset="utf-8">
		<div class="row">
			<div class="col-md-10" style=" padding-left: 60px; padding-top:20px;">
				<p style="color: #32b4c1 ;" >1.3 ขั้นตอนการผลิตโรงงาน</p>
			</div>
			<div class="col-md-12">
				<table style="width:100%" align="center" id="mytable2">
					<tr style="background-color: #32b4c1;">
						<th height="50px" style="text-align: center;">ลำดับที่</th>
						<th style="text-align: center;">ตัดให้ได้ขนาด</th>
						<th style="text-align: center;">กลึงปอกผิว</th>
						<th style="text-align: center;">กลึง 45องศา</th>
						<th style="text-align: center;">คว้านรู</th>
						<th style="text-align: center;">เจาะรู</th>
						<th style="text-align: center;">ชุบแข็ง</th>
						<th style="text-align: center;">ตอกรหัส</th>
						<th style="text-align: center;">ส่งให้ลูกค้า</th>
						<th style="text-align: center;">หมายเหตุ</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="cut[]" value="" placeholder=""></td>
						<td><input type="text" name="peeling[]" value="" placeholder=""></td>
						<td><input type="text" name="degrees[]" value="" placeholder=""></td>
						<td><input type="text" name="ream[]" value="" placeholder=""></td>
						<td><input type="text" name="perforate[]" value="" placeholder=""></td>
						<td><input type="text" name="harden[]" value="" placeholder=""></td>
						<td><input type="text" name="code[]" value="" placeholder=""></td>
						<td><input type="text" name="send[]" value="" placeholder=""></td>
						<td><input type="text" name="note[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="cut[]" value="" placeholder=""></td>
						<td><input type="text" name="peeling[]" value="" placeholder=""></td>
						<td><input type="text" name="degrees[]" value="" placeholder=""></td>
						<td><input type="text" name="ream[]" value="" placeholder=""></td>
						<td><input type="text" name="perforate[]" value="" placeholder=""></td>
						<td><input type="text" name="harden[]" value="" placeholder=""></td>
						<td><input type="text" name="code[]" value="" placeholder=""></td>
						<td><input type="text" name="send[]" value="" placeholder=""></td>
						<td><input type="text" name="note[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="cut[]" value="" placeholder=""></td>
						<td><input type="text" name="peeling[]" value="" placeholder=""></td>
						<td><input type="text" name="degrees[]" value="" placeholder=""></td>
						<td><input type="text" name="ream[]" value="" placeholder=""></td>
						<td><input type="text" name="perforate[]" value="" placeholder=""></td>
						<td><input type="text" name="harden[]" value="" placeholder=""></td>
						<td><input type="text" name="code[]" value="" placeholder=""></td>
						<td><input type="text" name="send[]" value="" placeholder=""></td>
						<td><input type="text" name="note[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="cut[]" value="" placeholder=""></td>
						<td><input type="text" name="peeling[]" value="" placeholder=""></td>
						<td><input type="text" name="degrees[]" value="" placeholder=""></td>
						<td><input type="text" name="ream[]" value="" placeholder=""></td>
						<td><input type="text" name="perforate[]" value="" placeholder=""></td>
						<td><input type="text" name="harden[]" value="" placeholder=""></td>
						<td><input type="text" name="code[]" value="" placeholder=""></td>
						<td><input type="text" name="send[]" value="" placeholder=""></td>
						<td><input type="text" name="note[]" value="" placeholder=""></td>
					</tr>
				</table>
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields2('mytable2')" value="เพิ่มตาราง">
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction2('mytable2')" value="ลบตาราง">
			</div>
			<div class="col-md-10" style=" padding-left: 60px; padding-top: 20px;">
				<p style="color: #32b4c1 ;">1.4 รายการวัตถุดิบโรงงาน</p>
			</div>
			<div class="col-md-12">
				<table style="width:100%" id="mytable">
					<tr>
						<th style="text-align: center;">ลำดับที่</th>
						<th style="text-align: center;">ชื่อวัตถุดิบ</th>
						<th style="text-align: center;">ประเภทของวัตถุดิบ</th>
						<th style="text-align: center;">ชนิด</th>
						<th style="text-align: center;">ประเทศ</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="raw_material[]" value="" placeholder=""></td>
						<td><input type="text" name="category[]" value="" placeholder=""></td>
						<td><input type="text" name="type[]" value="" placeholder=""></td>
						<td><input type="text" name="country[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="raw_material[]" value="" placeholder=""></td>
						<td><input type="text" name="category[]" value="" placeholder=""></td>
						<td><input type="text" name="type[]" value="" placeholder=""></td>
						<td><input type="text" name="country[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="raw_material[]" value="" placeholder=""></td>
						<td><input type="text" name="category[]" value="" placeholder=""></td>
						<td><input type="text" name="type[]" value="" placeholder=""></td>
						<td><input type="text" name="country[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="raw_material[]" value="" placeholder=""></td>
						<td><input type="text" name="category[]" value="" placeholder=""></td>
						<td><input type="text" name="type[]" value="" placeholder=""></td>
						<td><input type="text" name="country[]" value="" placeholder=""></td>
					</tr>
				</table>
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields('mytable')" value="เพิ่มตาราง">
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction('mytable')" value="ลบตาราง">
			</div>
		</div>
		<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
		<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
			<a href="index.php?app=technique&action=analysis1">กลับ</a>
			<a class=" success" href="#" onclick="myFunction()">บันทึก</a>
			<a class=" success" href="#" onclick="myFunction()">หน้าต่อไป</a>
			<br><br>
		</div>
	</div>
</div>
</form>
</div>
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

	function add_fields2(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="cut[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="peeling[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="degrees[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="ream[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="perforate[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="harden[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="code[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="send[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="note[]" value="" placeholder=""></td>';
		str += '</tr>';
		document.getElementById(id).insertRow(sss+1).innerHTML = str;
		sss++;
	}
	function add_fields(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="raw_material[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="category[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="type[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="country[]" value="" placeholder=""></td>';
		str += '</tr>';
		document.getElementById(id).insertRow(ss+1).innerHTML = str;
		ss++;
	}

	function myDeleteFunction2() {
		if(sss>4){
			document.getElementById("mytable2").deleteRow(sss);
			sss--;}
		}
		function myDeleteFunction() {
			if(ss>4){
				document.getElementById("mytable").deleteRow(ss);
				ss--;}
			}
		</script>