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
<div class="container">
	<form id="myForm" action="index.php?app=technique&action=addlocation3" method="post"  enctype="multipart/form-data"  accept-charset="utf-8">
		<div class="row">
			<div class="col-md-10" style=" padding-left: 60px;">
				<br>
				<br>
				<div style="font-size: 20px; color: #32b4c1;"> 2.2 ระบบสาธารณูประโภค (Availability of Public utility system)</div>
			</div>
			<div class="col-md-10" style=" padding-left: 80px; padding-top: 20px;">
				<table style="text-align: center;">
					<div class="row">
						<table style="width:50%" id="t01">
							<tr>
								<td style="text-align: right;">ระบบไฟฟ้า</td>
								<td><input rows="2" cols="15" style="width: 100%" name="demand" id="demand"></input></td>
							</tr>
							<tr>
								<td style="text-align: right;">ระบบประปา</td>
								<td><input rows="2" cols="15" style="width: 100%" name="demand" id="demand"><?php echo  $demand_supply[0]['demand']; ?></input></td>
							</tr>
							<tr style="text-align: center;">
								<td style="text-align: right;">ระบบโทรศัพท์</td>
								<td><input rows="2" cols="15" style="width: 100%" name="demand" id="demand"><?php echo  $demand_supply[0]['demand']; ?></input></td>
							</tr>
							<tr>
								<td style="text-align: right;">การเดินรถประจำทาง</td>
								<td><input rows="2" cols="15" style="width: 100%" name="demand" id="demand"><?php echo  $demand_supply[0]['demand']; ?></input></td>
							</tr>
						</div>
					</table>
				</div>
				<div class="col-md-12" style=" padding-left: 60px; padding-top: 20px;">
					<div style="font-size: 20px; color: #32b4c1;"> 2.3 การคมนาคมขนส่ง (Availability of Transportation facilities)</div>
				</div>
				<div class="col-md-12">
					<table style="width:100%" align="center" id="mytable">
						<tr>
							<th style="text-align: center;">ลำดับที่</th>
							<th style="text-align: center;">ประเภทของถนน</th>
							<th style="text-align: center;">กม.</th>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="street[]" value="" placeholder=""></td>
							<td><input type="text" name="km[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="street[]" value="" placeholder=""></td>
							<td><input type="text" name="km[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="street[]" value="" placeholder=""></td>
							<td><input type="text" name="km[]" value="" placeholder=""></td>
						</tr>
						<tr>
							<td height="50px"><input type="text" name="no[]" value="" placeholder=""></td>
							<td><input type="text" name="street[]" value="" placeholder=""></td>
							<td><input type="text" name="km[]" value="" placeholder=""></td>
						</tr>
					</table>
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="add_fields('mytable')" value="เพิ่มตาราง">
					<input style="height: 40px; width: 100%; font-size: 20px;" type="button" onclick="myDeleteFunction('mytable')" value="ลบตาราง">

				</div>
				<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
				<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
					<a href="index.php?app=technique&action=location2">กลับ</a>
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
			str += '<td><input type="text" name="street[]" value="" placeholder=""></td>';
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