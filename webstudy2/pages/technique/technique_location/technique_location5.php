<div class="container">
	<form id="myForm" action="index.php?app=technique&action=location6" method="post" accept-charset="utf-8">
		<div class="row">
			<div class="col-md-10" style=" padding-left: 60px;">
				<br>
				<br>
				<div style="font-size: 20px; color: #32b4c1;"> 2.6 แหล่งแหล่งแรงงานและทักษะ (Availability of Manpower and Skills) </div>
			</div>
			<div class="col-md-12" style=" padding-top: 20px;">
				<p style="font-size: 20px;">หมายเหตุ</p>
				<textarea rows="3" cols="50" style="width: 100%; height: 100px;" name="text1" id="text1"></textarea>
			</div>
		</div>
		<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
		<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
			<a href="index.php?app=technique&action=location4">กลับ</a>
			<a class=" success" href="#" onclick="myFunction()">บันทึก</a>
			<a class=" success" href="#" onclick="myFunction()">หน้าต่อไป</a>
			<br><br>
		</div>
		<!-- 	<div class="row">
			<div class="col-md-10" style=" padding-left: 60px;">
				<br>
				<br>
				<div style="font-size: 25px; color: #ff8100;"> 2.7 ด้านเทคโนโลยี (Technology)</div>
				<div style="font-size: 25px; color: #ff8100;"> 2.7.1 คน </div>
			</div>
			<div class="col-md-12">
				<table style="width:100%">
					<tr>
						<th>ลำดับที่</th>
						<th>จำนวน</th> 
						<th>ค่าใช้จ่าย/เดือน</th>
						<th>รวมค่าใช้จ่าย</th>
						<th>12 เดือน</th> 
						<th>อื่นๆ</th>
						<th>ระยะเวลาโครงการ/ปี</th>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
					</tr>
					<tr>
						<td height="50px"><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
						<td><input type="text" name="" value="" placeholder=""></td>
					</tr>
				</table>
			</div>
		</div> -->
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
</script>