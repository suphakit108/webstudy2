<div class="container">
	<form id="myForm" action="index.php?app=technique&action=cost1" method="post" accept-charset="utf-8">
		<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>
		<div class="row">
			<div class="col-md-12"style="padding-left:50px; color: #32B4C1">
				<h3>2.11 กฎหมายที่เกี่ยวข้อง (Relative Law)</h3>
			</div>
			<div class="col-md-12" style="padding-left:60px;">
				<p style="font-size: 20px;">2.11.1 กฎหมายที่เกี่ยวข้องกับการขออนุญาตก่อสร้างโรงงาน</p>
			</div>
			<div class="col-md-12"style="padding-left:70px;color: #708090;">
				<a target ="_blank" href=" https://www.dpt.go.th/th/dpt-services/town-planning-information-service.html">1.) พระราชบัญญัติการผังเมือง พ.ศ. 2562- บริการข้อมูลผังเมือง</a><br>
				<a target ="_blank" href=" http://www.dpt.go.th/wan/lawdpt/menu1.asp">2.) การใช้ประโยชน์ที่ดินตามผังเมืองรวมในแต่ละพื้นที่- กฎกระทรวงผังเมือง </a><br>
				<a target ="_blank" href="  https://dptdds.dpt.go.th/dds2/maps/index.php">3.) การให้บริการข้อมูลดิจิตอลด้านการผังเมืองด้วยตัวท่านเอง</a><br>
			</div>
			<div class="col-md-12" style="padding-left:60px;">
				<p style="font-size: 20px;">2.11.2 กฎหมายที่เกี่ยวกับการขออนุญาตประกอบกิจการโรงงาน</p>
			</div>
			<div class="col-md-12"style="padding-left:70px;color: #708090;">
				<a target ="_blank" href="">1.) พระราชบัญญัติโรงงาน พ.ศ. 2562 </a><br>
				<a target ="_blank" href=" https://www.diw.go.th/hawk/content.php?mode=laws&tabid=1">2.) กฎกระทรวง/ประกาศกระทรวง/ประกาศกรมโรงงาน/คำสั่งกระทรวง </a><br>
				<a target ="_blank" href=" https://www.ieat.go.th/regulations-handbook/ieat-laws-and-regulations">3.) ข้อกำหนดและกฎหมาย การนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.) </a><br>
				<a target ="_blank" href=" https://www.boi.go.th/un/boi_announcements">4.) พระราชบัญญัติส่งเสริมการลงทุน พ.ศ.2520 </a><br>
			</div>
		</div>
		<div class="col-sm-12" style="padding-left: 0px; text-align: center;">
			<br>
			<br>
			<a href="index.php?app=technique&action=location10">กลับ</a>
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
	
</script>