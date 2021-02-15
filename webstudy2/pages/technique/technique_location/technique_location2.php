<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<style type="text/css" media="screen">
	table#t01 {
		width: 100%;
	}

	table#t01 tr:nth-child(even) {
		background-color: #eee;
	}

	table#t01 tr:nth-child(odd) {
		background-color: #fff;
	}

	table#t01 th {
		background-color: #000080;
		color: white;
	}

	body {
		font-family: sans-serif;
		background-color: #eeeeee;
	}

	.file-upload {
		background-color: #ffffff;
		width: 600px;
		margin: 0 auto;
		padding: 20px;
	}

	.file-upload-btn {
		width: 100%;
		margin: 0;
		color: #fff;
		background: #1FB264;
		border: none;
		padding: 10px;
		border-radius: 4px;
		border-bottom: 4px solid #15824B;
		transition: all .2s ease;
		outline: none;
		text-transform: uppercase;
		font-weight: 700;
	}

	.file-upload-btn:hover {
		background: #1AA059;
		color: #ffffff;
		transition: all .2s ease;
		cursor: pointer;
	}

	.file-upload-btn:active {
		border: 0;
		transition: all .2s ease;
	}

	.file-upload-content {
		display: none;
		text-align: center;
	}

	.file-upload-input {
		position: absolute;
		margin: 0;
		padding: 0;
		width: 100%;
		height: 100%;
		outline: none;
		opacity: 0;
		cursor: pointer;
	}

	.image-upload-wrap {
		margin-top: 20px;
		border: 4px dashed #1FB264;
		position: relative;
	}

	.image-dropping,
	.image-upload-wrap:hover {
		background-color: #1FB264;
		border: 4px dashed #ffffff;
	}

	.image-title-wrap {
		padding: 0 15px 15px 15px;
		color: #222;
	}

	.drag-text {
		text-align: center;
	}

	.drag-text h3 {
		font-weight: 100;
		text-transform: uppercase;
		color: #15824B;
		padding: 60px 0;
	}

	.file-upload-image {
		max-height: 500px;
		max-width: 500px;
		margin: auto;
		padding: 30px;
	}

	.remove-image {
		width: 200px;
		margin: 0;
		color: #fff;
		background: #cd4535;
		border: none;
		padding: 10px;
		border-radius: 4px;
		border-bottom: 4px solid #b02818;
		transition: all .2s ease;
		outline: none;
		text-transform: uppercase;
		font-weight: 700;
	}

	.remove-image:hover {
		background: #c13b2a;
		color: #ffffff;
		transition: all .2s ease;
		cursor: pointer;
	}

	.remove-image:active {
		border: 0;
		transition: all .2s ease;
	}
</style>
<div class="container">
	<form id="myForm" action="index.php?app=technique&action=addlocation2" method="post" enctype="multipart/form-data" accept-charset="utf-8">
		<div class="file-upload">
			<div class="center">
				<p>ภาพด้านบน</p>
			</div>
			<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">เพิ่มรูปภาพ</button>
			<div class="image-upload-wrap">
				<input class="file-upload-input" type='file' name="filUpload" onchange="readURL(this);" required="" accept="image/*" />
				<div class="drag-text">
					<h3>เพิ่มรูปภาพ</h3>
				</div>
			</div>
			<div class="file-upload-content">
				<img class="file-upload-image" src="#" alt="your image" />
				<div class="image-title-wrap">
					<button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title">Uploaded Image</span></button>
				</div>
			</div>
		</div>
		<div class="col-md-12" style="padding-left: 50;">
			<p style="font-size: 20px;">หมายเหตุ</p>
			<textarea rows="3" cols="50" style="width: 100%; height: 100px;" name="text1" id="text1"></textarea>
		</div>
		<div class="col-md-12"  style="padding-top: 40px;  padding-left: 70px;">
			<p style=" font-size: 20px;">2.1.2 ระยะห่างจากเมือง หรือ อำเภอที่สำคัญ 5 เมือง (ใช้ google map ในการหาระยะทาง)</p>
		</div>
		<div class="col-md-12">
			<table style="width:100%" align="center" id="mytable">
				<tr>
					<th style="text-align: center;">ลำดับที่</th>
					<th style="text-align: center;">จาก</th>
					<th style="text-align: center;">ถึง</th>
					<th style="text-align: center;">ระยะทาง</th>
					<th style="text-align: center;">กม.</th>
				</tr>
				<tr>
					<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
					<td><input type="text" name="from[]" value="" placeholder=""></td>
					<td><input type="text" name="to[]" value="" placeholder=""></td>
					<td><input type="text" name="distance[]" value="" placeholder=""></td>
					<td><input type="text" name="km[]" value="" placeholder=""></td>
				</tr>
				<tr>
					<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
					<td><input type="text" name="from[]" value="" placeholder=""></td>
					<td><input type="text" name="to[]" value="" placeholder=""></td>
					<td><input type="text" name="distance[]" value="" placeholder=""></td>
					<td><input type="text" name="km[]" value="" placeholder=""></td>
				</tr>
				<tr>
					<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
					<td><input type="text" name="from[]" value="" placeholder=""></td>
					<td><input type="text" name="to[]" value="" placeholder=""></td>
					<td><input type="text" name="distance[]" value="" placeholder=""></td>
					<td><input type="text" name="km[]" value="" placeholder=""></td>
				</tr>
				<tr>
					<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
					<td><input type="text" name="from[]" value="" placeholder=""></td>
					<td><input type="text" name="to[]" value="" placeholder=""></td>
					<td><input type="text" name="distance[]" value="" placeholder=""></td>
					<td><input type="text" name="km[]" value="" placeholder=""></td>
				</tr>
			</table>
			<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields('mytable')" value="เพิ่มตาราง">
			<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction('mytable')" value="ลบตาราง">
		</div>
		<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
		<div class="col-sm-12" style="padding-left: 0px; text-align: center; padding-bottom: 20px;">
			<a href="index.php?app=technique&action=location1">กลับ</a>
			<a class=" success" href="#" onclick="myFunction()">บันทึก</a>
			<a class=" success" href="#" onclick="myFunction()">หน้าต่อไป</a>
			<br>
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
	function removeUpload() {
		$('.file-upload-input').replaceWith($('.file-upload-input').clone());
		$('.file-upload-content').hide();
		$('.image-upload-wrap').show();
	}
	$('.image-upload-wrap').bind('dragover', function() {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function() {
		$('.image-upload-wrap').removeClass('image-dropping');
	});

	var ss = 3;
	function add_fields(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="from[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="to[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="distance[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="km[]" value="" placeholder=""></td>';
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