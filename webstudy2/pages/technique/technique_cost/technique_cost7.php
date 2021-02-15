<div class="container">
	<form id="myForm" action="index.php?app=technique&action=addcost7" method="post" enctype="multipart/form-data" accept-charset="utf-8">
		<div class="row">
			<div class="col-md-12">
				<p style=" padding-left: 70px;padding-top: 20px; font-size: 20px; ">3.11.3 ค่าใช้จ่ายอื่นๆ</p>
				<table style="width:100%" align="center" id="mytable">

					<tr style="background-color: #32B4C1">
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
			<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
			<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
				<a href="index.php?app=technique&action=cost6">กลับ</a>
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
	function myDeleteFunction() {
		if(ss>4){
			document.getElementById("mytable").deleteRow(ss);
			ss--;
		}
	}
</script>