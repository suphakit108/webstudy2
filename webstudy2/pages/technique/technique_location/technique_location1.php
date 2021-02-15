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
	<form id="myForm" action="index.php?app=technique&action=location2" method="post" accept-charset="utf-8">
		<div class="row">
			<div class="col-md-10" style=" padding-left: 50px; padding-top: 20px;">
				<div style="font-size: 25px; color: #32b4c1" ;>2. รายละเอียดการเลือกทำเลที่ตั้งโรงงาน</div>
			</div>
			<div class="col-md-10" style=" padding-left: 70px;">
				<div style=" font-size: 20px; color: #32b4c1;">2.1 อธิบายลักษณะภูมิประเทศของที่ตั้งโรงงาน</div>
				<div class="row" style=" padding-left:130px; padding-top: 20px;">
					<p style=" font-size: 20px;">2.1.1 ลักษณะภูมิประเทศของโรงงาน</p>
					<br>
				</div>
				<div style="padding-left: 50%;">
					<p style="font-size: 25px"> พื้นที่ใกล้เคียง </p>
				</div>
				<table style="text-align: center;">
					<div class="row">
						<table style="width:100%" id="t01">
							<tr>
								<td style="text-align: right;">ทิศเหนือ</td>
								<td><input rows="2" cols="15" style="width: 100%" name="demand" id="demand"></input></td>
							</tr>
							<tr>
								<td style="text-align: right;">ทิศตะวันออก</td>
								<td><input rows="2" cols="15" style="width: 100%" name="demand" id="demand"><?php echo  $demand_supply[0]['demand']; ?></input></td>
							</tr>
							<tr style="text-align: center;">
								<td style="text-align: right;">ทิศใต้</td>
								<td><input rows="2" cols="15" style="width: 100%" name="demand" id="demand"><?php echo  $demand_supply[0]['demand']; ?></input></td>
							</tr>
							<tr>
								<td style="text-align: right;">ทิศตะวันตก</td>
								<td><input rows="2" cols="15" style="width: 100%" name="demand" id="demand"><?php echo  $demand_supply[0]['demand']; ?></input></td>
							</tr>
						</div>
					</table>
					<
					<form action="index.php?app=analysis1&action=upload_img" method="post" enctype="multipart/form-data">
						<div class="file-upload">
							<div class="center">
								<p>ภาพด้านบน</p>
							</div>
							<button class="file-upload-btn" type="button" onclick="$('.bt1').trigger( 'click' )">เพิ่มรูปภาพ</button>
							<div class="image-upload-wrap wrap1">
								<input class="file-upload-input bt1" type='file' name="filUpload" onchange="readURL(this);" required="" accept="image/*" />
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
						<div class="col-md-12">
							<div class="file-upload">
								<div class="center">
									<p>ทิศเนือ</p>
								</div>
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

							<div class="file-upload">
								<div class="center">
									<p>ทิศตะวันออก</p>
								</div>
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
					</form>
				</div>
				<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
				<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
					<a href="index.php?app=technique&action=analysis5">กลับ</a>
					<a class=" success" href="#" onclick="myFunction()">บันทึก</a>
					<a class=" success" href="#" onclick="myFunction()">หน้าต่อไป</a>
					<br><br>
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