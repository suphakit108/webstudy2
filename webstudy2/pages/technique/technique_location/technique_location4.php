<div class="container">
	<form id="myForm" action="index.php?app=technique&action=addlocation4" method="post"enctype="multipart/form-data" accept-charset="utf-8">
		<div class="row">
			<div class="col-md-10" style=" padding-left: 60px;">
				<br>
				<br>
				<div style="font-size: 20px; color: #32b4c1;"> 2.4 แหล่งวัตถุดิบ (Raw material availability)</div>
			</div>
			<p style="font-size: 20px; padding-left:70px;">โรงงานใกล้กับแหล่งวัตถุดิบ เนื่องจากโรงงานเป็นโรงงานเหล็ก ผลิดชิhนส่วนยานยนต์ มีผู้ส่งมอบหลายเจ้า
			และผู้ส่งมอบสามารถจัดส่งได้ทันทีโดยวิธีขนส่งทางรถยนต์อยู่ในจังหวัดชลบุรี จังหวัดสมุทรปราการ</p>
			<div class="col-md-12">
				<table style="width:100%" align="center" id="mytable">
					<tr>
						<th style="text-align: center;">ลำดับที่</th>
						<th style="text-align: center;">ประเภทวัตถุดิบ</th>
						<th style="text-align: center;">เกรด</th>
						<th style="text-align: center;">ชื่อผู้ส่งมอบ</th>
						<th style="text-align: center;">ที่อยู่</th>
						<th style="text-align: center;">จังหวัด</th>
						<th style="text-align: center;">ระยะทาง</th>
						<th style="text-align: center;">หน่วย</th>
						<th style="text-align: center;">ขนส่งโดยวิธี</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="genre[]" value="" placeholder=""></td>
						<td><input type="text" name="grade[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="address[]" value="" placeholder=""></td>
						<td><input type="text" name="province[]" value="" placeholder=""></td>
						<td><input type="text" name="length[]" value="" placeholder=""></td>
						<td><input type="text" name="unit[]" value="" placeholder=""></td>
						<td><input type="text" name="transport[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="genre[]" value="" placeholder=""></td>
						<td><input type="text" name="grade[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="address[]" value="" placeholder=""></td>
						<td><input type="text" name="province[]" value="" placeholder=""></td>
						<td><input type="text" name="length[]" value="" placeholder=""></td>
						<td><input type="text" name="unit[]" value="" placeholder=""></td>
						<td><input type="text" name="transport[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="genre[]" value="" placeholder=""></td>
						<td><input type="text" name="grade[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="address[]" value="" placeholder=""></td>
						<td><input type="text" name="province[]" value="" placeholder=""></td>
						<td><input type="text" name="length[]" value="" placeholder=""></td>
						<td><input type="text" name="unit[]" value="" placeholder=""></td>
						<td><input type="text" name="transport[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
						<td><input type="text" name="genre[]" value="" placeholder=""></td>
						<td><input type="text" name="grade[]" value="" placeholder=""></td>
						<td><input type="text" name="name[]" value="" placeholder=""></td>
						<td><input type="text" name="address[]" value="" placeholder=""></td>
						<td><input type="text" name="province[]" value="" placeholder=""></td>
						<td><input type="text" name="length[]" value="" placeholder=""></td>
						<td><input type="text" name="unit[]" value="" placeholder=""></td>
						<td><input type="text" name="transport[]" value="" placeholder=""></td>
					</tr>

				</table>
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields('mytable')" value="เพิ่มตาราง">
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction('mytable')" value="ลบตาราง">

			</div>
		</div>
		<div class="row">
			<div class="col-md-10" style=" padding-left: 60px;">
				<br>
				<br>
				<div style="font-size: 20px; color: #32b4c1;"> 2.5 แหล่งตลาด (Maket availability) </div>
			</div>
			<p style="font-size: 20px; padding-left:70px;">ถานที่จัดส่งไปยังลูกค้า ห่างมากน้อยเพียงใด วิธีการขนส่งเป็นแบบใดที่ส่งไปยังลูกค้า
				มีความสะดวกที่ลูกค้าจะได้รับสินค้าหรือไม่ สามารถจัด่ส่งสินค้าไปยังลูกค้าได้ในทุกกรณี เมื่อลูกค้ามีปัญหาเรื่องสินค้า
			หรือความต้องการด่วน ลูกค้าอยู่ใกล้กันหรือไม่ ระยะทางกึ่งกลางระหว่างลูกค้าหรือไม่</p>

			<div class="col-md-12">
				<table style="width:100%" align="center" id="mytable2">

					<tr>
						<th style="text-align: center;">ลำดับที่</th>
						<th style="text-align: center;">ชื่อลูกค้า</th>
						<th style="text-align: center;">จาก</th>
						<th style="text-align: center;">ระยะทาง</th>
						<th style="text-align: center;">กม.</th>
						<th style="text-align: center;">วิธีการจัดส่ง</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="name2[]" value="" placeholder=""></td>
						<td><input type="text" name="from2[]" value="" placeholder=""></td>
						<td><input type="text" name="length2[]" value="" placeholder=""></td>
						<td><input type="text" name="km2[]" value="" placeholder=""></td>
						<td><input type="text" name="shipping2[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="name2[]" value="" placeholder=""></td>
						<td><input type="text" name="from2[]" value="" placeholder=""></td>
						<td><input type="text" name="length2[]" value="" placeholder=""></td>
						<td><input type="text" name="km2[]" value="" placeholder=""></td>
						<td><input type="text" name="shipping2[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="name2[]" value="" placeholder=""></td>
						<td><input type="text" name="from2[]" value="" placeholder=""></td>
						<td><input type="text" name="length2[]" value="" placeholder=""></td>
						<td><input type="text" name="km2[]" value="" placeholder=""></td>
						<td><input type="text" name="shipping2[]" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
						<td><input type="text" name="name2[]" value="" placeholder=""></td>
						<td><input type="text" name="from2[]" value="" placeholder=""></td>
						<td><input type="text" name="length2[]" value="" placeholder=""></td>
						<td><input type="text" name="km2[]" value="" placeholder=""></td>
						<td><input type="text" name="shipping2[]" value="" placeholder=""></td>
					</tr>

				</table>
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields2('mytable2')" value="เพิ่มตาราง">
				<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction2('mytable2')" value="ลบตาราง">

			</div>
		</div>
		<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
		<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
			<a href="index.php?app=technique&action=location3">กลับ</a>
			<a class=" success" href="#" onclick="myFunction()">บันทึก</a>
			<a class=" success" href="#" onclick="myFunction()">หน้าต่อไป</a>
			<br><br>
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

	function add_fields(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="genre[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="grade[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="name[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="address[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="province[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="length[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="unit[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="transport[]" value="" placeholder=""></td>';
		str += '</tr>';
		document.getElementById(id).insertRow(ss+1).innerHTML = str;
		ss++;
	}

	function add_fields2(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="name2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="from2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="length2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="km2[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="shipping2[]" value="" placeholder=""></td>';
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