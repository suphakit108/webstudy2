<div class="container">
	<form id="myForm" action="index.php?app=technique&action=addanalysis3" method="post" accept-charset="utf-8"enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-10" style=" padding-left: 60px; padding-top:20px;">
				<p style="color: #32b4c1 ;">1.5 ปริมาณการใช้ไฟฟ้า เชื้อเพลิง สาธารณูปโภคและวัสดุสิ้นเปลืองในโรงงาน</p>
				<p style="color: #32b4c1 ;">1.5.1 ปริมาณการใช้ไฟฟ้า </p>
			</div>
			<div class="col-md-12">
				<table style="width:100%" align="center" id="mytable">
					<tr>
						<th style="text-align: center;">ลำดับที่</th>
						<th style="text-align: center;">ชื่อเครื่องจักร</th>
						<th style="text-align: center;">จำนวน</th>
						<th style="text-align: center;">ชื่อผู้ผลิต</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="machine[]" value="" placeholder=""></td>
						<td><input type="text" name="number[]" value="" placeholder=""></td>
						<td><input type="text" name="manufacturer[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="machine[]" value="" placeholder=""></td>
						<td><input type="text" name="number[]" value="" placeholder=""></td>
						<td><input type="text" name="manufacturer[]" value="" placeholder=""></td>
					</tr>	
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="machine[]" value="" placeholder=""></td>
						<td><input type="text" name="number[]" value="" placeholder=""></td>
						<td><input type="text" name="manufacturer[]" value="" placeholder=""></td>
					</tr>	
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="machine[]" value="" placeholder=""></td>
						<td><input type="text" name="number[]" value="" placeholder=""></td>
						<td><input type="text" name="manufacturer[]" value="" placeholder=""></td>
					</tr>
				</table>
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields('mytable')" value="เพิ่มตาราง">
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction('mytable')" value="ลบตาราง">

			</div>
			<div class="col-md-12" style=" padding-left: 70px; padding-top: 20px;">
				<p style="color: #32b4c1 ;">1.5.2 ปริมาณการใช้นํ้า </p>
			</div>
			<div class="col-md-12">
				<table style="width:100%" align="center" id="mytable2">
					<tr>
						<th style="text-align: center;">ลำดับที่</th>
						<th style="text-align: center;">ชื่อเครื่องจักร</th>
						<th style="text-align: center;">จำนวน</th>
						<th style="text-align: center;">ชื่อผู้ผลิต</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="machine2[]" value="" placeholder=""></td>
						<td><input type="text" name="number2[]" value="" placeholder=""></td>
						<td><input type="text" name="manufacturer2[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="machine2[]" value="" placeholder=""></td>
						<td><input type="text" name="number2[]" value="" placeholder=""></td>
						<td><input type="text" name="manufacturer2[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="machine2[]" value="" placeholder=""></td>
						<td><input type="text" name="number2[]" value="" placeholder=""></td>
						<td><input type="text" name="manufacturer2[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="machine2[]" value="" placeholder=""></td>
						<td><input type="text" name="number2[]" value="" placeholder=""></td>
						<td><input type="text" name="manufacturer2[]" value="" placeholder=""></td>
					</tr>
				</table>
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields2('mytable2')" value="เพิ่มตาราง">
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction2('mytable2')" value="ลบตาราง">
			</div>
			<div class="col-md-12" style=" padding-left: 70px; padding-top: 20px;">
				<p style="color: #32b4c1 ;">1.5.3 ปริมาณการใช้สิ้นเปลือง เช่น ถุงมือ เศษผ้า อื่นๆ </p>
			</div>
			<div class="col-md-12">
				<table style="width:100%" align="center" id="mytable3">
					<tr>
						<th style="text-align: center;">ลำดับที่</th>
						<th style="text-align: center;">รายการ</th>
						<th style="text-align: center;">จำนวน</th>
						<th style="text-align: center;">หน่วย</th>
						<th style="text-align: center;">ราคาต่อหน่วย</th>
						<th style="text-align: center;">ราคารวม</th>
						<th style="text-align: center;">ปริมาณการใช้</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no3[]" value="" placeholder=""></td>
						<td><input type="text" name="list3[]" value="" placeholder=""></td>
						<td><input type="text" name="number3[]" value="" placeholder=""></td>
						<td><input type="text" name="unit3[]" value="" placeholder=""></td>
						<td><input type="text" name="price3[]" value="" placeholder=""></td>
						<td><input type="text" name="total_price3[]" value="" placeholder=""></td>
						<td><input type="text" name="volume3[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no3[]" value="" placeholder=""></td>
						<td><input type="text" name="list3[]" value="" placeholder=""></td>
						<td><input type="text" name="number3[]" value="" placeholder=""></td>
						<td><input type="text" name="unit3[]" value="" placeholder=""></td>
						<td><input type="text" name="price3[]" value="" placeholder=""></td>
						<td><input type="text" name="total_price3[]" value="" placeholder=""></td>
						<td><input type="text" name="volume3[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no3[]" value="" placeholder=""></td>
						<td><input type="text" name="list3[]" value="" placeholder=""></td>
						<td><input type="text" name="number3[]" value="" placeholder=""></td>
						<td><input type="text" name="unit3[]" value="" placeholder=""></td>
						<td><input type="text" name="price3[]" value="" placeholder=""></td>
						<td><input type="text" name="total_price3[]" value="" placeholder=""></td>
						<td><input type="text" name="volume3[]" value="" placeholder=""></td>
					</tr>	<tr>
						<td height="50px"><input type="text" name="no3[]" value="" placeholder=""></td>
						<td><input type="text" name="list3[]" value="" placeholder=""></td>
						<td><input type="text" name="number3[]" value="" placeholder=""></td>
						<td><input type="text" name="unit3[]" value="" placeholder=""></td>
						<td><input type="text" name="price3[]" value="" placeholder=""></td>
						<td><input type="text" name="total_price3[]" value="" placeholder=""></td>
						<td><input type="text" name="volume3[]" value="" placeholder=""></td>
					</tr>
				</table>
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields3('mytable3')" value="เพิ่มตาราง">
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction3('mytable3')" value="ลบตาราง">
			</div>
		</div>	
		<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
		<div class="col-sm-12" style="text-align: center;">
			<a href="index.php?app=technique&action=analysis2">กลับ</a>
			<a class=" success" href="#" onclick="myFunction()">บันทึก</a>
			<a class=" success" href="#" onclick="myFunction()">หน้าต่อไป</a><br>
		</div>
		<div class="row">
			<div class="col-md-10" style=" padding-left: 60px;">
			</div>
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
	var ssss = 4;

	function add_fields(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="machine[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="number[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="manufacturer[]" value="" placeholder=""></td>';
		str += '</tr>';
		document.getElementById(id).insertRow(ss+1).innerHTML = str;
		ss++;
	}

	function add_fields2(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="machine2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="number2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="manufacturer2[]" value="" placeholder=""></td>';
		str += '</tr>';
		document.getElementById(id).insertRow(sss+1).innerHTML = str;
		sss++;
	}

	function add_fields3(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no3[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="list3[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="number3[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="unit3[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="price3[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="total_price3[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="volume3[]" value="" placeholder=""></td>';

		str += '</tr>';
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
	}function myDeleteFunction3() {
		if(ssss>4){
			document.getElementById("mytable3").deleteRow(ssss);
			ssss--;
		}
	}
</script>