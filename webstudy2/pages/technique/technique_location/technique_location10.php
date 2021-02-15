<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<style type="text/css" media="screen">
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
	
	<form id="myForm" action="index.php?app=technique&action=addlocation10" method="post" enctype="multipart/form-data" accept-charset="utf-8">
		<div class="col-md-12">
			<div class="col-md-12" style=" padding-left: 20px; padding-top: 20px;">
				<div style="font-size: 20px; color: #32b4c1;"> 2.10 เชื้อเพลิงและต้นกําลัง (Availability of power fuel utility) </div>
			</div>
			<!-- <input type="text" name="123" value="gvghbjbjh"> -->
			<div class="row">
				<div class="col-md-12" style="padding-top: 20px;">
					<table style="width:100%" align="center" id="mytable">
						<tr style="background-color: #32b4c1;">
							<th style="text-align: center;">ลำดับที่</th>
							<th style="text-align: center;">ประเภทหม้อต้ม</th>
							<th style="text-align: center;">ของเหลวที่ใช้เป็นสื่อ</th>
							<th style="text-align: center;">พลังงานหลัก</th>
							<th style="text-align: center;">การเผาไหม้อื่นๆ</th>
							<th style="text-align: center;">ปริมาณการใช้</th>
							<th style="text-align: center;">kw</th>
							<th style="text-align: center;">บริษัทผู้ผลิต</th>
							<th style="text-align: center;">ประเทศ</th>

						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="genre[]" value="" placeholder=""></td>
							<td><input type="text" name="liquid[]" value="" placeholder=""></td>
							<td><input type="text" name="main_power[]" value="" placeholder=""></td>
							<td><input type="text" name="ignition[]" value="" placeholder=""></td>
							<td><input type="text" name="volume[]" value="" placeholder=""></td>
							<td><input type="text" name="kw[]" value="" placeholder=""></td>
							<td><input type="text" name="firm[]" value="" placeholder=""></td>
							<td><input type="text" name="country[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="genre[]" value="" placeholder=""></td>
							<td><input type="text" name="liquid[]" value="" placeholder=""></td>
							<td><input type="text" name="main_power[]" value="" placeholder=""></td>
							<td><input type="text" name="ignition[]" value="" placeholder=""></td>
							<td><input type="text" name="volume[]" value="" placeholder=""></td>
							<td><input type="text" name="kw[]" value="" placeholder=""></td>
							<td><input type="text" name="firm[]" value="" placeholder=""></td>
							<td><input type="text" name="country[]" value="" placeholder=""></td>
						</tr>					
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="genre[]" value="" placeholder=""></td>
							<td><input type="text" name="liquid[]" value="" placeholder=""></td>
							<td><input type="text" name="main_power[]" value="" placeholder=""></td>
							<td><input type="text" name="ignition[]" value="" placeholder=""></td>
							<td><input type="text" name="volume[]" value="" placeholder=""></td>
							<td><input type="text" name="kw[]" value="" placeholder=""></td>
							<td><input type="text" name="firm[]" value="" placeholder=""></td>
							<td><input type="text" name="country[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="genre[]" value="" placeholder=""></td>
							<td><input type="text" name="liquid[]" value="" placeholder=""></td>
							<td><input type="text" name="main_power[]" value="" placeholder=""></td>
							<td><input type="text" name="ignition[]" value="" placeholder=""></td>
							<td><input type="text" name="volume[]" value="" placeholder=""></td>
							<td><input type="text" name="kw[]" value="" placeholder=""></td>
							<td><input type="text" name="firm[]" value="" placeholder=""></td>
							<td><input type="text" name="country[]" value="" placeholder=""></td>
						</tr>
					</table>
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields('mytable')" value="เพิ่มตาราง">
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction('mytable')" value="ลบตาราง">
				</div>
			</div>
		</div>
	</div>
	<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
	<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
		<a href="index.php?app=technique&action=location9">กลับ</a>
		<a class=" success" href="#" onclick="myFunction()">บันทึก</a>
		<a class=" success" href="#" onclick="myFunction()">หน้าต่อไป</a>
		<br><br>
	</div>
</form>
</div>
</div>
<script>
	function myFunction() {
		document.getElementById("myForm").submit();
	}

	function readURL1(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('.wrap1').hide();
				$('.image1').attr('src', e.target.result);
				$('.content1').show();
				$('.title1').html(input.files[0].name);
			};

			reader.readAsDataURL(input.files[0]);

		} else {
			removeUpload();
		}
	}

	function readURL2(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('.wrap2').hide();
				$('.image2').attr('src', e.target.result);
				$('.content2').show();
				$('.title2').html(input.files[0].name);
			};

			reader.readAsDataURL(input.files[0]);

		} else {
			removeUpload();
		}
	}

	function readURL3(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('.wrap3').hide();
				$('.image3').attr('src', e.target.result);
				$('.content3').show();
				$('.title3').html(input.files[0].name);
			};

			reader.readAsDataURL(input.files[0]);

		} else {
			removeUpload();
		}
	}

	function readURL4(input) {

		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('.wrap4').hide();
				$('.image4').attr('src', e.target.result);
				$('.content4').show();
				$('.title4').html(input.files[0].name);
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


	var ss = 4;
	var sss = 4;


	function add_fields(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="genre[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="liquid[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="main_power[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="ignition[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="volume[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="kw[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="firm[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="country[]" value="" placeholder=""></td>';
		str += '</tr>';
		document.getElementById(id).insertRow(ss+1).innerHTML = str;
		ss++;
	}

	function add_fields2(id) {
		console.log(id);
		var str = '<tr>';
		str += '<td height="50px"><input type="text" name="no1[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="genre1[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="num1[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="distance1[]" value="" placeholder=""></td>';
		str += '<td><input type="text" name="km1[]" value="" placeholder=""></td>';
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