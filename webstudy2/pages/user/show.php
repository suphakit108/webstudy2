<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		[data-title]:hover:after {
			opacity: 1;
			transition: all 0.1s ease 0.5s;
			visibility: visible;
		}

		[data-title]:after {
			content: attr(data-title);
			background-color: #fff;
			color: #111;
			font-size: 90%;
			position: absolute;
			padding: 1px 5px 2px 5px;
			bottom: -1.6em;
			/*left: 100%;*/
			/*white-space: nowrap;*/
			box-shadow: 1px 1px 3px #fff;
			opacity: 0;
			border: 1px solid #111111;
			z-index: 99999;
			visibility: hidden;
		}

		[data-title] {
			position: relative;
		}
	</style>

</head>

<body>
	<h3 align='center' ><b>PREVIEW</b></h3>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p>ชื่อโครงการ : <?php echo $company['company_project']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>บริษัท : <?php echo $company['company_name']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>สถานที่ตั้งโครงการ L: <?php echo $company['company_local']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>ประเภทกิจการ : <?php echo $company['company_type']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>ปี/เดือน/วัน : <?php echo $company['month']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>เสนอ : <?php echo $company['offer']; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p>ที่อยู่ : <?php echo $company['address']; ?></p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<p>ส่วนที่ 1. การศึกษาความเป็นไปได้ด้านการตลาด</p>
				<p style="color: #330099">1.ข้อมูลทั่วไปของลูกค้า</p>
				<table id="myTable">
					<thead>
						<tr>
							<th style="text-align: center;">ชื่อบริษัท</th>
							<th style="text-align: center;">ที่อยู่</th>
							<th style="text-align: center;">เบอร์โทร</th>
							<th style="text-align: center;">Email</th>
							<th style="text-align: center;">ชื่อผู้ประกอบการ</th>
							<th style="text-align: center;">เงื่อนไขการชำระเงิน </th>
						</tr>
					</thead>
					<tbody>
						<?php
						for ($i = 0; $i < count($customer); $i++) { ?>
							<tr>
								<td style="text-align: center;"><?php echo $customer[$i]['customer_name']; ?></td>
								<td style="text-align: center;"><?php echo $customer[$i]['customer_local']; ?></td>
								<td style="text-align: center;"><?php echo $customer[$i]['customer_phone']; ?></td>
								<td style="text-align: center;"><?php echo $customer[$i]['customer_email']; ?></td>
								<td style="text-align: center;"><?php echo $customer[$i]['customer_employe']; ?></td>
								<td style="text-align: center;"><?php echo $customer[$i]['customer_payment']; ?></td>
							</tr>
						<?php }
						if (count($customer) < 5) {
							for ($i = count($customer); $i < 5; $i++) { ?><tr>
								<td style="color: #fff;"> &nbsp;</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
						<?php }
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-12">
			<p style="color: #330099" class="test" data-title="โซ่อุปทาน หมายถึงการใช้ระบบของหน่วยงาน คน เทคโนโลยีกิจกรรม ข้อมูลข่าวสาร และ ทรัพยากร มาประยุกตเข้าด้วยกัน เพื่อการเคลื่อนย้ายสินค้าหรือบริการ จากผู้จัดหาไปยังลูกค้า กิจกรรมของห่วงโซ่อุปทานจะแปรสภาพทรัพยากรธรรมชาติ วตัถุดิบ และวัสดุอื่น ๆให้กลายเป็น สินค้าสำเร็จ แล้วส่งไปจนถึงลูกค้าคนสุดท้าย (ผู้บริโภค หรือ End Customer) ">2. ห่วงโซ่อุปทานขององค์กร</p>
			<table name="mytable" id="mytable">
				<thead>
					<tr>
						<th style="text-align: center;">ห่วงโซ่ลำดับที่</th>
						<th style="text-align: center;">ผู้ส่งมอบลำดับที่ 3</th>
						<th style="text-align: center;">ผู้ส่งมอบลำดับที่ 2</th>
						<th style="text-align: center;">ผู้ส่งมอบลำดับที่ 1</th>
						<th style="text-align: center;">โรงงานของท่าน</th>
						<th style="text-align: center;">ลูกค้าลำดับที่ 1</th>
						<th style="text-align: center;">ลูกค้าลำดับที่ 2</th>
						<th style="text-align: center;">ลูกค้าลำดับที่ 3</th>
					</tr>
				</thead>
				<tbody>
					<?php
					for ($i = 0; $i < count($supply_chain); $i++) { ?>
						<tr>
							<td style="text-align: center;">ลำดับที่ <?php echo $i + 1; ?></td>
							<td style="text-align: center;"><?php echo $supply_chain[$i]['Supplier1']; ?></td>
							<td style="text-align: center;"><?php echo $supply_chain[$i]['Supplier2']; ?></td>
							<td style="text-align: center;"><?php echo $supply_chain[$i]['Supplier3']; ?></td>
							<td style="text-align: center;"><?php echo $supply_chain[$i]['yourfactory']; ?></td>
							<td style="text-align: center;"><?php echo $supply_chain[$i]['customer1']; ?></td>
							<td style="text-align: center;"><?php echo $supply_chain[$i]['customer2']; ?></td>
							<td style="text-align: center;"><?php echo $supply_chain[$i]['customer3']; ?></td>
						</tr>

					<?php }
					if (count($supply_chain) < 3) {
						for ($i = count($supply_chain); $i < 3; $i++) { ?><tr>
							<td style="text-align: center;"> ลำดับที่ <?php echo $i + 1; ?></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					<?php }
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<br>
<div class="row">
	<div class="col-sm-12">
		<p style="color: #330099" data-title="อุปสงค์ หมายถึง จำนวนความต้องการของลูกค้า อุปทาน หมายถึง จำนวนสินค้าที่พร้อมจะจำหน่ายเพื่อตอบสนองความตอ้งการซื้อของลูกค้าหรืออีกในหนึ่งหมายถึงกำ ลังการผลิตสินค้าเพื่อตอบสนองความต้องการของลูกค้าเพียงพอหรือไม่">3. เปรียบเทียบอุปสงค์และอุปทาน</p>
		<table name="mytable" id="mytable">
			<thead>
				<tr>
					<th style="text-align: center;">เดือน</th>
					<th style="text-align: center;">อุปสงค์</th>
					<th style="text-align: center;">หน่วย</th>
					<th style="text-align: center;">อุปทาน</th>
					<th style="text-align: center;">หน่วย</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="text-align: center;">มกราคม</td>
					<td style="text-align: center;"><?php echo $demand_supply[0]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[0]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[0]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[0]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">กุมภาพันธ์</td>
					<td style="text-align: center;"><?php echo $demand_supply[1]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[1]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[1]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[1]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">มีนาคม</td>
					<td style="text-align: center;"><?php echo $demand_supply[2]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[2]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[2]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[2]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">เมษายน</td>
					<td style="text-align: center;"><?php echo $demand_supply[3]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[3]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[3]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[3]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">พฤษภาคม</td>
					<td style="text-align: center;"><?php echo $demand_supply[4]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[4]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[4]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[4]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">มิถุนายน</td>
					<td style="text-align: center;"><?php echo $demand_supply[5]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[5]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[5]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[5]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">กรกฎาคม</td>
					<td style="text-align: center;"><?php echo $demand_supply[6]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[6]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[6]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[6]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">สิงหาคม</td>
					<td style="text-align: center;"><?php echo $demand_supply[7]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[7]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[7]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[7]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">กันยายน</td>
					<td style="text-align: center;"><?php echo $demand_supply[8]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[8]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[8]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[8]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">ตุลาคม</td>
					<td style="text-align: center;"><?php echo $demand_supply[9]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[9]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[9]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[9]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">พฤศจิกายน</td>
					<td style="text-align: center;"><?php echo $demand_supply[10]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[10]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[10]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[10]['supply_unit']; ?></td>
				</tr>
				<tr>
					<td style="text-align: center;">ธันวาคม</td>
					<td style="text-align: center;"><?php echo $demand_supply[11]['demand']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[11]['demand_unit']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[11]['supply']; ?></td>
					<td style="text-align: center;"><?php echo $demand_supply[11]['supply_unit']; ?></td>
				</tr>
			</tbody>
		</table>

	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<p style="color: #330099">4. วิเคราะห์สภาพแวดล้อมทั้งภายในและภายนอก</p>
		<p style="margin-left: 15px; color: #330099;">4.1 จุดแข็ง (Stremgth)</p>
		<p style="margin-left: 30px; color: #000000;">4.1.1 แรงงาน (labor)</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 1 &&
				$analysis[$i]['type_analysis'] == 1 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.1.2 ทักษะ (The Skills)</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 1 &&
				$analysis[$i]['type_analysis'] == 2 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.1.3 การบริหารจัดการมาตราฐานระบบต่าง ๆ</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 1 &&
				$analysis[$i]['type_analysis'] == 3 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.1.4 ความสามารถในการออกแบบผลิตภัณฑ์และทดสอบผลิตภัณฑ์</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 1 &&
				$analysis[$i]['type_analysis'] == 4 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>

		<p style="margin-left: 15px; color: #330099;">4.2 จุดอ่อน (Weakness)</p>
		<p style="margin-left: 30px; color: #000000;">4.2.1 การนำเข้าวัตถุดิบและเทคโนโลยีจากต่างประเทศ</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 2 &&
				$analysis[$i]['type_analysis'] == 1 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.2.2 การตลาดและการเชื่อมโยงเพื่อสร้างมูลค่าเพิ่ม</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 2 &&
				$analysis[$i]['type_analysis'] == 2 &&
				$analysis[$i]['value_numbre'] == 5
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.2.3 เครื่องมือ อุปกรณ์ สำหรับการทดสอบชิ้นงานด้วยตัวเอง</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 2 &&
				$analysis[$i]['type_analysis'] == 3 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.2.4 ขาดแคลนแหล่งเงินทุน</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 2 &&
				$analysis[$i]['type_analysis'] == 4 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px;  color: #000000;">4.2.5 การขาดแคลนแรงงานที่มีทักษะและประสบการณ์</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 2 &&
				$analysis[$i]['type_analysis'] == 5 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.2.6 การทำงานระหว่างคนและเครื่องจักร</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 2 &&
				$analysis[$i]['type_analysis'] == 6 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.2.7 การบริหารจัดการเป็นธุรกิจครอบครัว (Family Business)</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 2 &&
				$analysis[$i]['type_analysis'] == 7 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.2.8 การแข่งขันและขาดการประสานงานในเครือข่ายผู้ผลิตชิ้นส่วน</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 2 &&
				$analysis[$i]['type_analysis'] == 8 &&
				$analysis[$i]['value_numbre'] == 4
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.2.9 ไม่สามารถเพิ่มราคาและช่่องทางจำหน่ายได้</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 2 &&
				$analysis[$i]['type_analysis'] == 9 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.2.10 แหล่งเงินทุนในการดำเนินธุรกิจ</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 2 &&
				$analysis[$i]['type_analysis'] == 10 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">4.3 โอกาส (Opportunities)</p>
		<p style="margin-left: 30px; color: #000000;">4.3.1 อะไหล่ทดแทน</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 3 &&
				$analysis[$i]['type_analysis'] == 1 &&
				$analysis[$i]['value_numbre'] == 5
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px;  color: #000000;">4.3.2 ชิ้นส่วนมียอดจำหน่ายเพิ่มสูงขึ้นจากรถยนต์ทางเลือก</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 3 &&
				$analysis[$i]['type_analysis'] == 2 &&
				$analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.3.3 ต้นทุนของต่างประเทศสูงทำให้มีการสั่งซื้อเข้ามาที่ประเทศไทย</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 3 &&
				$analysis[$i]['type_analysis'] == 3 &&
				$analysis[$i]['value_numbre'] == 7
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">4.4 อุปสรรค</p>
		<p style="margin-left: 30px; color: #000000;">4.4.1 การย้ายฐานการผลิต</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 4 &&
				$analysis[$i]['type_analysis'] == 1 &&
				$analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px;  color: #000000;">4.4.2 ต้นทุนการผลิตสูงขึ้น</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 4 &&
				$analysis[$i]['type_analysis'] == 2 &&
				$analysis[$i]['value_numbre'] == 5
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.4.3 การแข่งขันเรื่องราคา</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 4 &&
				$analysis[$i]['type_analysis'] == 3 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.4.4 ไม่สามารถเพิ่มยอดได้</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 4 &&
				$analysis[$i]['type_analysis'] == 4 &&
				$analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.4.5 ตัวเลือกในลำดับรองนโยบายกีดกัน</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 4 &&
				$analysis[$i]['type_analysis'] == 5 &&
				$analysis[$i]['value_numbre'] == 5
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.4.6 พิจารณาลำดับรองในการผลิตชิ้นส่วน</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 4 &&
				$analysis[$i]['type_analysis'] == 6 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.4.7 การเข้ามาของคู่แข่ง</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 4 &&
				$analysis[$i]['type_analysis'] == 7 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.4.8 การย้ายฐานการผลิตเข้ามา</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 4 &&
				$analysis[$i]['type_analysis'] == 8 &&
				$analysis[$i]['value_numbre'] == 6
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.4.9 เปลี่ยนชนิดของรถยนต์</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 4 &&
				$analysis[$i]['type_analysis'] == 9 &&
				$analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">4.4.10 น้ำมันสูงขึ้น เศรษฐกิจตกต่ำ</p>
		<?php for ($i = 0; $i < count($analysis); $i++) {
			if (
				$analysis[$i]['main_type'] == 4 &&
				$analysis[$i]['type_analysis'] == 10 &&
				$analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $analysis[$i]['analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="color: #330099">5. วิเเคราะห์สภาพแวดล้อมทางการตลาด 6 ด้าน (PESTEL) ขององค์กรของท่าน</p>
		<p style="margin-left: 15px; color: #330099;">5.1 ปัจจัยทางด้านการเมือง (Politic)</p>
		<p style="margin-left: 30px; color: #000000;">5.1.1 ความผันผวนทางการเมือง</p>
		<?php for ($i = 0; $i < count($marketing_analysis); $i++) {
			if (
				$marketing_analysis[$i]['main_type'] == 1 &&
				$marketing_analysis[$i]['type_analysis'] == 1 &&
				$marketing_analysis[$i]['value_numbre'] == 5
			) { ?>
				<p style="margin-left: 60px;"><?php echo $marketing_analysis[$i]['marketing_analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 30px; color: #000000;">5.1.2 นโยบายรถยนต์ทางเลือก เช่น รถยนต์ไฟฟ้า (Electric Vehicle)</p>
		<?php for ($i = 0; $i < count($marketing_analysis); $i++) {
			if (
				$marketing_analysis[$i]['main_type'] == 1 &&
				$marketing_analysis[$i]['type_analysis'] == 2 &&
				$marketing_analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $marketing_analysis[$i]['marketing_analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">5.2 ปัจจัยทางด้านเศรษฐศาสตร์ (Economic)</p>
		<p style="margin-left: 30px; color: #000000;">5.2.1 เศรษฐกิจตกต่ำ เงินบาทแข็งตัว</p>
		<?php for ($i = 0; $i < count($marketing_analysis); $i++) {
			if (
				$marketing_analysis[$i]['main_type'] == 2 &&
				$marketing_analysis[$i]['type_analysis'] == 1 &&
				$marketing_analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $marketing_analysis[$i]['marketing_analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">5.3 ปัจจัยทางด้านสังคม (Social)</p>
		<p style="margin-left: 30px; color: #000000;">5.3.1 ค่านิยมของคนเริ่มหันมาให้ความสำคัญกับรถยนต์ทางเลือก (Electric Vehicle)</p>
		<?php for ($i = 0; $i < count($marketing_analysis); $i++) {
			if (
				$marketing_analysis[$i]['main_type'] == 3 &&
				$marketing_analysis[$i]['type_analysis'] == 1 &&
				$marketing_analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $marketing_analysis[$i]['marketing_analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">5.4 ปัจจัยทางด้านเทคโนโลยี (Technology)</p>
		<p style="margin-left: 30px; color: #000000;">5.4.1 รถยนต์ที่ต้องการความสะดวกสบายและคล่องตัว</p>
		<?php for ($i = 0; $i < count($marketing_analysis); $i++) {
			if (
				$marketing_analysis[$i]['main_type'] == 4 &&
				$marketing_analysis[$i]['type_analysis'] == 1 &&
				$marketing_analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $marketing_analysis[$i]['marketing_analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">5.5 ปัจจัยทางด้านกฎหมาย (Legal)</p>
		<p style="margin-left: 30px; color: #000000;">5.5.1 ปลอดภาษีนำเข้าชิ้นส่วน</p>
		<?php for ($i = 0; $i < count($marketing_analysis); $i++) {
			if (
				$marketing_analysis[$i]['main_type'] == 5 &&
				$marketing_analysis[$i]['type_analysis'] == 1 &&
				$marketing_analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $marketing_analysis[$i]['marketing_analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">5.6 ปัจจัยทางด้านสิ่งแวดล้อม (Environment)</p>
		<p style="margin-left: 30px; color: #000000;">5.6.1 รถยนต์ไฟฟ้าที่เป็นมิตรกับสิ่งแวดล้อม</p>
		<?php for ($i = 0; $i < count($marketing_analysis); $i++) {
			if (
				$marketing_analysis[$i]['main_type'] == 6 &&
				$marketing_analysis[$i]['type_analysis'] == 1 &&
				$marketing_analysis[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 60px;"><?php echo $marketing_analysis[$i]['marketing_analysis_text']; ?></p>
			<?php }
		} ?>
		<p style="color: #330099">6. การกำหนดส่วนประสมทางการตลาด (Marketing Mix) (4P's) ขององค์กรของท่าน</p>
		<p style="margin-left: 15px; color: #330099;">6.1 ผลิตภัณฑ์</p>
		<?php for ($i = 0; $i < count($marketing_mix); $i++) {
			if (
				$marketing_mix[$i]['main_type'] == 1 &&
				$marketing_mix[$i]['type_analysis'] == 1 &&
				$marketing_mix[$i]['value_numbre'] == 4
			) { ?>
				<p style="margin-left: 30px;"><?php echo $marketing_mix[$i]['marketing_mix_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">6.2 ราคา</p>
		<?php for ($i = 0; $i < count($marketing_mix); $i++) {
			if (
				$marketing_mix[$i]['main_type'] == 2 &&
				$marketing_mix[$i]['type_analysis'] == 1 &&
				$marketing_mix[$i]['value_numbre'] == 4
			) { ?>
				<p style="margin-left: 30px;"><?php echo $marketing_mix[$i]['marketing_mix_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">6.3 ช่องทางการจำหน่าย</p>
		<?php for ($i = 0; $i < count($marketing_mix); $i++) {
			if (
				$marketing_mix[$i]['main_type'] == 3 &&
				$marketing_mix[$i]['type_analysis'] == 1 &&
				$marketing_mix[$i]['value_numbre'] == 5
			) { ?>
				<p style="margin-left: 30px;"><?php echo $marketing_mix[$i]['marketing_mix_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">6.4 การส่งเสริมการตลาด</p>
		<?php for ($i = 0; $i < count($marketing_mix); $i++) {
			if (
				$marketing_mix[$i]['main_type'] == 4 &&
				$marketing_mix[$i]['type_analysis'] == 1 &&
				$marketing_mix[$i]['value_numbre'] == 4
			) { ?>
				<p style="margin-left: 30px;"><?php echo $marketing_mix[$i]['marketing_mix_text']; ?></p>
			<?php }
		} ?>
		<p style="color: #330099">7. การกำหนดตลาดเป้าหมายขององค์กรควรเป็นอย่างไร</p>
		<p style="margin-left: 15px; color: #330099;">7.1 การแบ่งส่วนตลาด</p>
		<?php for ($i = 0; $i < count($target); $i++) {
			if (
				$target[$i]['main_type'] == 1 &&
				$target[$i]['type_analysis'] == 1 &&
				$target[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 30px;"><?php echo $target[$i]['target_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">7.2 การกำหนดเป้าหมาย</p>
		<?php for ($i = 0; $i < count($target); $i++) {
			if (
				$target[$i]['main_type'] == 2 &&
				$target[$i]['type_analysis'] == 1 &&
				$target[$i]['value_numbre'] == 2
			) { ?>
				<p style="margin-left: 30px;"><?php echo $target[$i]['target_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">7.3 การกำหนดตำแหน่ง</p>
		<?php for ($i = 0; $i < count($target); $i++) {
			if (
				$target[$i]['main_type'] == 3 &&
				$target[$i]['type_analysis'] == 1 &&
				$target[$i]['value_numbre'] == 2
			) { ?>
				<p style="margin-left: 30px;"><?php echo $target[$i]['target_text']; ?></p>
			<?php }
		} ?>
		<p style="color: #330099">8. การใช้ทฤษฎีแรงกดดัน (Five Force Model) หรือพลังผลักดันทางการแข่งขัน (Competitive Force) ในองค์กรของท่าน</p>
		<p style="margin-left: 15px; color: #330099;">8.1 ภัยคุกคามจากคู่แข่ง (Existing Firms)</p>
		<?php for ($i = 0; $i < count($competitive_force); $i++) {
			if (
				$competitive_force[$i]['main_type'] == 1 &&
				$competitive_force[$i]['type_analysis'] == 1 &&
				$competitive_force[$i]['value_numbre'] == 5
			) { ?>
				<p style="margin-left: 30px;"><?php echo $competitive_force[$i]['competitive_force_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">8.2 อำนาจต่อรองของผู้บริโภค (Customer)</p>
		<?php for ($i = 0; $i < count($competitive_force); $i++) {
			if (
				$competitive_force[$i]['main_type'] == 2 &&
				$competitive_force[$i]['type_analysis'] == 1 &&
				$competitive_force[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 30px;"><?php echo $competitive_force[$i]['competitive_force_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">8.3 การเข้ามาของผู้ประกอบการรายใหม่ (New Entrant)</p>
		<?php for ($i = 0; $i < count($competitive_force); $i++) {
			if (
				$competitive_force[$i]['main_type'] == 3 &&
				$competitive_force[$i]['type_analysis'] == 1 &&
				$competitive_force[$i]['value_numbre'] == 4
			) { ?>
				<p style="margin-left: 30px;"><?php echo $competitive_force[$i]['competitive_force_text']; ?></p>
			<?php }
		} ?>
		<p style="margin-left: 15px; color: #330099;">8.4 ภัยคุกคามจากสินค้าทดแทน (Substitute Products)</p>
		<?php for ($i = 0; $i < count($competitive_force); $i++) {
			if (
				$competitive_force[$i]['main_type'] == 4 &&
				$competitive_force[$i]['type_analysis'] == 1 &&
				$competitive_force[$i]['value_numbre'] == 3
			) { ?>
				<p style="margin-left: 30px;"><?php echo $competitive_force[$i]['competitive_force_text']; ?></p>
			<?php }
		} ?>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<p style="color: #330099">9. ค่าใช้จ่ายที่ใช้ในกิจกรรมด้านการตลาดว่ามีอะไรบ้างอธิบายมาพอสังเขป</p>
		<table id="myTable">
			<thead>
				<tr>
					<th style="text-align: center;">ปีที่</th>
					<th style="text-align: center;">จำนวนเงิน</th>
					<th style="text-align: center;">หน่วย</th>
				</tr>
			</thead>
			<tbody>
				<?php
				for ($i = 0; $i < count($cost); $i++) { ?>
					<tr>
						<td style="text-align: center;"><?php echo $i + 1; ?></td>
						<td style="text-align: center;"><?php echo $cost[$i]['money']; ?></td>
						<td style="text-align: center;"><?php echo $cost[$i]['unit']; ?></td>
					</tr>
				<?php }
				if (count($cost) < 12) {
					for ($i = count($cost); $i < 12; $i++) { ?><tr>
						<td style="text-align: center;"> <?php echo $i + 1; ?></td>
						<td></td>
						<td></td>
					</tr>
				<?php }
			}
			?>
		</tbody>
	</table>
</div>
</div>
<input type="text" id="result" name="result" style="visibility: hidden;" value=<?php echo $_GET['result']; ?>>

<div class="col-sm-12" style="padding-left: 0px; text-align: center;">

	<div class="col-sm-12" style="padding-bottom: 50px;">
		<a class=" myButton " style="width: 80px;"  onclick="backFunction()"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
		<a class=" myButton "  href="index.php?app=user&action=conclude&result=<?php echo $_GET['result']; ?>">สรุป</a>
		<a class=" myButton2 " href="../print/form_print.php?type=PDF&result=<?php echo $_SESSION['company']; ?>"><img src="../pdf.jpg" style="width: 30px;height: 30px;"> Export to PDF</a>

		<!-- <a target ="_blank" href=" https://www.diw.go.th/hawk/content.php?mode=laws&tabid=1">2.) กฎกระทรวง/ประกาศกระทรวง/ประกาศกรมโรงงาน/คำสั่งกระทรวง </a><br> -->

			<!-- 	<a class = " success button1" href="index.php?app=user&action=customer">1</a>
			<a class = " success button1" href="index.php?app=user&action=supply_chain">2</a>
			<a class = " success button1" href="index.php?app=user&action=demand_supply">3</a>
			<a class = " success button1" href="index.php?app=user&action=analysis">4</a>
			<a class = " success button1" href="index.php?app=user&action=analysis2">5</a>
			<a class = " success button1" href="index.php?app=user&action=analysis3">6</a>
			<a class = " success button1" href="index.php?app=user&action=analysis4">7</a>
			<a class = " success button1" href="index.php?app=user&action=analysis5">8</a>
			<a class = " success button1" href="index.php?app=user&action=analysis6">9</a>
			<a class = " success button1" href="index.php?app=user&action=analysis7">10</a>
			<a class = " success button1" href="index.php?app=user&action=analysis8">11</a>
			<a class = " success button1" href="index.php?app=user&action=analysis9">12</a>
			<a class = " success button1" href="index.php?app=user&action=analysis10">13</a>
			<a class = " success button1" href="index.php?app=user&action=analysis11">14</a>
			<a class = " success button1" href="index.php?app=user&action=analysis12">15</a>
			<a class = " success button1" href="index.php?app=user&action=marketing_analysis">16</a>
			<a class = " success button1" href="index.php?app=user&action=marketing_analysis2&result=">17</a>
			<a class = " success button1" href="index.php?app=user&action=marketing_analysis3">18</a>
			<a class = " success button1" href="index.php?app=user&action=marketing_mix">19</a>
			<a class = " success button1" href="index.php?app=user&action=marketing_mix2">20</a>
			<a class = " success button1" href="index.php?app=user&action=target">21</a>
			<a class = " success button1" href="index.php?app=user&action=competitive_force">22</a>
			<a class = " success button1" href="index.php?app=user&action=cost">23</a>
			<a class = " success button2" href="index.php?app=user&action=show">24</a> -->
		</div>
	</div>
</body>
<script type="text/javascript">
	function backFunction(){
		window.location = "index.php?app=user&action=cost";
	} 

	function myFunction() {
		document.getElementById("myForm").submit();
	}
</script>
</html>