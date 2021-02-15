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
	
	<form id="myForm" action="index.php?app=technique&action=addlocation9" method="post" enctype="multipart/form-data" accept-charset="utf-8">
		<div class="col-md-12">
			<div class="col-md-12" style=" padding-left: 20px; padding-top: 20px;">
				<div style="font-size: 20px; color: #32b4c1;"> 2.9 สังคมและชุมชน (Society and Community) </div>
			</div>
			<div style="padding-left: 60px; padding-top: 20px;">
				<p  style=" font-size: 20px;"> สังคม ชุมชน หมู่บ้านโดยทั่วไปที่มีระยะใกล้กับโรงงานและจะส่งผลยังไงต่อสังคมและชุมชน เช่น การคมนาคม ขนส่ง ทําให้ชุมชนมีความหนาแน่น จากห้องเช่าของพนักงาน หรือการจัดการเรื่องของเสียมีการส่งเสียงดัง หรือ กลิ่น รบกวนชาวบ้าน รอบข้างโรงงานหรือไม่ </p>
			</div>
			<!-- <input type="text" name="123" value="gvghbjbjh"> -->
			<div class="row">
				<div class="col-md-12">
					<table style="width:100%" align="center" id="mytable">
						<tr>
							<th style="text-align: center;">ลำดับที่</th>
							<th style="text-align: center;">หมู่บ้าน</th>
							<th style="text-align: center;">จำนวนประชากร</th>
							<th style="text-align: center;">ตำบล</th>
							<th style="text-align: center;">อำเภอ</th>
							<th style="text-align: center;">จังหวัด</th>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="village[]" value="" placeholder=""></td>
							<td><input type="text" name="population[]" value="" placeholder=""></td>
							<td><input type="text" name="canton[]" value="" placeholder=""></td>
							<td><input type="text" name="district[]" value="" placeholder=""></td>
							<td><input type="text" name="county[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="village[]" value="" placeholder=""></td>
							<td><input type="text" name="population[]" value="" placeholder=""></td>
							<td><input type="text" name="canton[]" value="" placeholder=""></td>
							<td><input type="text" name="district[]" value="" placeholder=""></td>
							<td><input type="text" name="county[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="village[]" value="" placeholder=""></td>
							<td><input type="text" name="population[]" value="" placeholder=""></td>
							<td><input type="text" name="canton[]" value="" placeholder=""></td>
							<td><input type="text" name="district[]" value="" placeholder=""></td>
							<td><input type="text" name="county[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="village[]" value="" placeholder=""></td>
							<td><input type="text" name="population[]" value="" placeholder=""></td>
							<td><input type="text" name="canton[]" value="" placeholder=""></td>
							<td><input type="text" name="district[]" value="" placeholder=""></td>
							<td><input type="text" name="county[]" value="" placeholder=""></td>
						</tr>
					</table>
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields('mytable')" value="เพิ่มตาราง">
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction('mytable')" value="ลบตาราง">
				</div>
			</div>
			<div class="row">
				<div class="col-md-10" style=" padding-left: 60px; padding-top:20px">
					<p style="color: #32b4c1; font-size:20px">รูปภาพของชุมชน</p>
				</div>
				<!-- <<img src="../images/423164.jpg" alt=""> -->

				<div class="file-upload">
					<button class="file-upload-btn" type="button" onclick="$('.bt1').trigger( 'click' )">เพิ่มรูปภาพ</button>
					<div class="image-upload-wrap wrap1">
						<input class="file-upload-input bt1" type='file' name="filUpload" onchange="readURL1(this);" required="" accept="image/*" />
						<div class="drag-text">
							<h3>เพิ่มรูปภาพ</h3>
						</div>
					</div>
					<div class="file-upload-content content1">
						<img class="file-upload-image image1" src="#" alt="your image" />
						<div class="image-title-wrap title1">
							<button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title">Uploaded Image</span></button>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<p style=" font-size: 20px;">เทศบาล หรือ องค์การปกครองส่วนท้องถิ่น</p>
				<textarea rows="3" cols="12" style="width: 100%" name="text1" id="text1"></textarea>
			</div>
			<div class="row">
				<div class="col-md-10" style=" padding-left: 60px; padding-top: 20px;">
					<p style="font-size:20px; color: #32b4c1;">รูปองค์การปกครองส่วนท้องถิ่น</p>
				</div>
				<!-- <<img src="../images/423164.jpg" alt=""> -->
				<div class="file-upload">
					<button class="file-upload-btn" type="button" onclick="$('.bt2').trigger( 'click' )">เพิ่มรูปภาพ</button>
					<div class="image-upload-wrap wrap2">
						<input class="file-upload-input bt2" type='file' name="filUpload" onchange="readURL2(this);" required="" accept="image/*" />
						<div class="drag-text">
							<h3>เพิ่มรูปภาพ</h3>
						</div>
					</div>
					<div class="file-upload-content content2">
						<img class="file-upload-image image2" src="#" alt="your image" />
						<div class="image-title-wrap title2">
							<button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title">Uploaded Image</span></button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-12" style="padding-top: 20px;">
					<p style=" font-size: 20px;color: #32b4c1">2.9.1 โรงเรียนใกล้เคียง</p>
				</div>

				<p style=" font-size: 20px;padding-left: 60px;">สภาพโดยทั่วไปเนื่องจากการดําเนินกิจการโรงงานจะต้องกระทบกับโรงเรียนในเรื่องของมลพิษที่เกิดจากโรงงาน
					และส่งผลกระทบกับโรงเรียน หรือสถานศึกษาใกล้เคียง ตาม
					ซึ่งกฎกระทรวงฉบับที่ 2 (พ.ศ. 2535)ออกตามความในพระราชบัญญัติโรงงานพ.ศ. 2535 เรื่อง ที่ตั่ง สภาพแวดล้อม
					ลักษณะอาคารและลักษณะภายในของโรงงาน</p
					
					<div class="row">
						<table style="width:100%" align="center" id="mytable2">

							<tr>
								<th style="text-align: center;">ลำดับที่</th>
								<th style="text-align: center;">ประเภทโรงเรียน</th>
								<th style="text-align: center;">จำนวนโรงเรียน</th>
								<th style="text-align: center;">ระยะทาง</th>
								<th style="text-align: center;">กม.</th>
							</tr>
							<tr>
								<td height="50px"><input type="text" name="no1[]" value="" placeholder=""></td>
								<td><input type="text" name="genre1[]" value="" placeholder=""></td>
								<td><input type="text" name="num1[]" value="" placeholder=""></td>
								<td><input type="text" name="distance1[]" value="" placeholder=""></td>
								<td><input type="text" name="km1[]" value="" placeholder=""></td>
							</tr>
							<tr>
								<td height="50px"><input type="text" name="no1[]" value="" placeholder=""></td>
								<td><input type="text" name="genre1[]" value="" placeholder=""></td>
								<td><input type="text" name="num1[]" value="" placeholder=""></td>
								<td><input type="text" name="distance1[]" value="" placeholder=""></td>
								<td><input type="text" name="km1[]" value="" placeholder=""></td>
							</tr>
							<tr>
								<td height="50px"><input type="text" name="no1[]" value="" placeholder=""></td>
								<td><input type="text" name="genre1[]" value="" placeholder=""></td>
								<td><input type="text" name="num1[]" value="" placeholder=""></td>
								<td><input type="text" name="distance1[]" value="" placeholder=""></td>
								<td><input type="text" name="km1[]" value="" placeholder=""></td>
							</tr>
							<tr>
								<td height="50px"><input type="text" name="no1[]" value="" placeholder=""></td>
								<td><input type="text" name="genre1[]" value="" placeholder=""></td>
								<td><input type="text" name="num1[]" value="" placeholder=""></td>
								<td><input type="text" name="distance1[]" value="" placeholder=""></td>
								<td><input type="text" name="km1[]" value="" placeholder=""></td>
							</tr>
						</table>
						<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields2('mytable2')" value="เพิ่มตาราง">
						<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction2('mytable2')" value="ลบตาราง">

					</div>
					<div class="row">
						<div class="col-md-10" style=" padding-left: 60px; padding-top:20px">
							<p style="font-size:20px; color: #32b4c1;">รูปภาพโรงเรียน</p>
						</div>
						<!-- <<img src="../images/423164.jpg" alt=""> -->
						<div class="file-upload">
							<button class="file-upload-btn" type="button" onclick="$('.bt3').trigger( 'click' )">เพิ่มรูปภาพ</button>
							<div class="image-upload-wrap wrap3">
								<input class="file-upload-input bt3" type='file' name="filUpload" onchange="readURL3(this);" required="" accept="image/*" />
								<div class="drag-text">
									<h3>เพิ่มรูปภาพ</h3>
								</div>
							</div>
							<div class="file-upload-content content3">
								<img class="file-upload-image image3" src="#" alt="your image" />
								<div class="image-title-wrap title3">
									<button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title">Uploaded Image</span></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12" style="padding-top:20px;">
						<p style="font-size: 20px;color: #32b4c1">2.9.2 เทศบาลโรงพยาบาลหรือสถานพยาบาลใกล้เคียง</p>
					</div>
				</div>
				<div class="col-md-12" style=" font-size: 20px;padding-left: 60px;">
					<p>สภาพโดยทั่วไปเนื่องจากการดําเนินกิจการโรงงานจะต้องมีเหตุฉุกเฉินหรือเจ็บไข้ได้ป่วยของพนักงาน
					โดยจะต้องทราบชื่อสถานพยาบาลหรือโรงพยาบาลที่อยู่ใกล้เคียง</p>
				</div>
				<!-- <input type="text" name="123" value="gvghbjbjh"> -->
				<div class="col-md-12">
					<table style="width:100%" align="center" id="mytable3">

						<tr>
							<th style="text-align: center;">ลำดับที่</th>
							<th style="text-align: center;">สถานพยาบาลหรือโรงพยาบาล</th>
							<th style="text-align: center;">จํานวน</th>
							<th style="text-align: center;">ระยะทาง</th>
							<th style="text-align: center;">กม.</th>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
							<td><input type="text" name="genre2[]" value="" placeholder=""></td>
							<td><input type="text" name="num2[]" value="" placeholder=""></td>
							<td><input type="text" name="length2[]" value="" placeholder=""></td>
							<td><input type="text" name="km2[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
							<td><input type="text" name="genre2[]" value="" placeholder=""></td>
							<td><input type="text" name="num2[]" value="" placeholder=""></td>
							<td><input type="text" name="length2[]" value="" placeholder=""></td>
							<td><input type="text" name="km2[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
							<td><input type="text" name="genre2[]" value="" placeholder=""></td>
							<td><input type="text" name="num2[]" value="" placeholder=""></td>
							<td><input type="text" name="length2[]" value="" placeholder=""></td>
							<td><input type="text" name="km2[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>
							<td><input type="text" name="genre2[]" value="" placeholder=""></td>
							<td><input type="text" name="num2[]" value="" placeholder=""></td>
							<td><input type="text" name="length2[]" value="" placeholder=""></td>
							<td><input type="text" name="km2[]" value="" placeholder=""></td>
						</tr>

					</table>
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields3('mytable3')" value="เพิ่มตาราง">
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction3('mytable3')" value="ลบตาราง">

				</div>
				<div class="row">
					<div class="col-md-10" style=" padding-left: 60px; padding-top: 20px;">
						<p style="color: #32b4c1; font-size:20px;">รูปโรงพยาบาล</p>
					</div>
					<!-- <<img src="../images/423164.jpg" alt=""> -->
					<div class="file-upload">
						<button class="file-upload-btn" type="button" onclick="$('.bt4').trigger( 'click' )">เพิ่มรูปภาพ</button>
						<div class="image-upload-wrap wrap4">
							<input class="file-upload-input bt4" type='file' name="filUpload" onchange="readURL4(this);" required="" accept="image/*" />
							<div class="drag-text">
								<h3>เพิ่มรูปภาพ</h3>
							</div>
						</div>
						<div class="file-upload-content content4">
							<img class="file-upload-image image4" src="#" alt="your image" />
							<div class="image-title-wrap title4">
								<button type="button" onclick="removeUpload()" class="remove-image">ลบรูปภาพ <span class="image-title">Uploaded Image</span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
			<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
				<a href="index.php?app=technique&action=location8">กลับ</a>
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
		var ssss = 4;

		function add_fields(id) {
			console.log(id);
			var str = '<tr>';
			str += '<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>';
			str += '<td><input type="text" name="village[]" value="" placeholder=""></td>';
			str += '<td><input type="text" name="population[]" value="" placeholder=""></td>';
			str += '<td><input type="text" name="canton[]" value="" placeholder=""></td>';
			str += '<td><input type="text" name="district[]" value="" placeholder=""></td>';
			str += '<td><input type="text" name="county[]" value="" placeholder=""></td>';
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

		function add_fields3(id) {
			console.log(id);
			var str = '<tr>';
			str += '<td height="50px"><input type="text" name="no2[]" value="" placeholder=""></td>';
			str += '<td><input type="text" name="genre2[]" value="" placeholder=""></td>';
			str += '<td><input type="text" name="num2[]" value="" placeholder=""></td>';
			str += '<td><input type="text" name="length2[]" value="" placeholder=""></td>';
			str += '<td><input type="text" name="km2[]" value="" placeholder=""></td>';
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
		}
		function myDeleteFunction3() {
			if(ssss>4){
				document.getElementById("mytable3").deleteRow(ssss);
				ssss--;
			}
		}
	</script>