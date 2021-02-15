<style>
	table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	td, th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}
</style>
<!-- <?php echo $positioning; ?> -->
<div class="container" >
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style=" margin-bottom: 10px; padding-bottom: 10px; padding-top: 10px;">
		<p style="font-size: 20px; margin-right: 20px; padding-top: 10px;">เอกสารของฉัน</p>
		<a class="myButton2" href="../print/form_print.php?type=PDF&result=<?php echo $_SESSION['company']; ?>"><img src="../pdf.jpg" style="height:30px; border-radius:60px; width: 30px;"> Export to PDF</a>

		<a class="myButton2" style="font-size: 18px; color: black; margin-left:10px;" href="index.php?app=user&action=show"><img src="../view.jpg" style="width: 30px;height: 30px;"> Preview</a>

	</nav>
	<div class="container wrapper d-flex align-items-stretch" style="padding-bottom: 50px;">
		<?php
		$count=$customers+$supply_chains+$demand_supplys+$stremgth+$weakness+$opportunities+$barrier+$politic+$economic+$social+$technology+$legal+$environment+$product+$costss+$channels+$promotion+$segmentation+$targeting+$positioning+$firms+$cus+$entrant+$substitute+$costs;
		?>
		<table>
			<tr style="background-color: #C9f5f5; height: 60px;">
				<th style="text-align: center;color: #000000; font-size: 20px; ">หัวข้อ</th>
				<th style="text-align: center;color: #000000; font-size: 20px;">คะเเนน</th>
				<th style="text-align: center;color: #000000; font-size: 20px;"> เพิ่ม / แก้ไข</th>
			</tr>
			<tr>
				<td>1. ข้อมูลลูกค้า</td>
				<td style="text-align: center;"><?php echo $customers;?></td>
				<td style="text-align: center;"><a  class=" myButton1 " href="index.php?app=user&action=customer" class="success" style=" background-color: #32b4c1;  color: #ffffff;"><?php if($customers!=""){ ?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a> <?php } else{?>เพิ่ม</a><?php } ?></td>
			</tr>
			<tr>
				<td>2. อธิบายห่วงโซ่อุปทานขององค์กรของท่านเริ่มตั้งแต่ต้นน้ำจนถึงปลา</td>
				<td style="text-align: center;"><?php echo $supply_chains;?></td>
				<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=supply_chain"><?php if($supply_chains!=""){ ?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a> <?php } else{?>เพิ่ม</a><?php } ?></td>
			</tr>
			<tr>
				<td>3. เปรียบเทียบอุปสงค์และอุปทาน</td>
				<td style="text-align: center;"><?php echo $demand_supplys;?></td>
				<td style="text-align: center;"><a class=" myButton1 " href="index.php?app=user&action=demand_supply"><?php if($demand_supplys!=""){ ?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a> <?php } else{?>เพิ่ม</a><?php } ?></td>
			</tr>
			<tr>
				<td>4. วิเเคราะห์สถานการณ์สภาพแวดล้อมภายในและภายนอก</td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>  &nbsp &nbsp4.1 จุดแข็ง (Stremgth)</td>
				<td style="text-align: center;"> <?php if($stremgth!=""){ echo $stremgth; } ?></td>
				<td style="text-align: center;"><a class=" myButton1 " href="index.php?app=user&action=analysis"><?php if($stremgth!=""){ ?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a> <?php } else{?>เพิ่ม</a><?php } ?></td>
			</tr>
			<tr>
				<td>  &nbsp &nbsp4.2 จุดอ่อน (Weakness)</td>
				<td style="text-align: center;"> <?php if($weakness!=""){ echo $weakness;} ?></td>
				<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=analysis3"><?php if($weakness!=""){ ?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a> <?php } else{?>เพิ่ม</a><?php } ?></td>
			</tr>
			<tr>
				<td>  &nbsp &nbsp4.3 โอกาส (Opportunities)</td>
				<td style="text-align: center;"> <?php if($opportunities!=""){ echo $opportunities;} ?></td>
				<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=analysis8"><?php if($opportunities!=""){ ?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a> <?php } else{?>เพิ่ม</a><?php } ?></td>
				<tr>
					<td>  &nbsp &nbsp4.4 อุปสรรค</td>
					<td style="text-align: center;"> <?php if($barrier!=""){ echo $barrier; } ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=analysis9"><?php if($opportunities!=""){ ?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a> <?php } else{?>เพิ่ม</a><?php } ?></td>
				</tr>
				<tr>
					<td>5. วิเเคราะห์สภาพแวดล้อมทางการตลาด 6 ด้าน (PESTEL) ขององค์กรของท่าน</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp5.1 ปัจจัยทางด้านการเมือง (Politic)</td>
					<td style="text-align: center;"> <?php if($politic!=""){ echo $politic;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=marketing_analysis"><?php if($politic!=""){ ?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a> <?php } else{?>เพิ่ม</a><?php } ?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp5.2 ปัจจัยทางด้านเศรษฐศาสตร์ (Economic)</td>
					<td style="text-align: center;"> <?php if($economic!=""){ echo $economic;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=marketing_analysis"><?php if($economic !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp5.3 ปัจจัยทางด้านสังคม (Social)</td>
					<td style="text-align: center;"> <?php if($social!=""){ echo $social;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=marketing_analysis"><?php if($social !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp5.4 ปัจจัยทางด้านเทคโนโลยี (Technology)</td>
					<td style="text-align: center;"> <?php if($technology!=""){ echo $technology;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=marketing_analysis"><?php if($technology !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp5.5 ปัจจัยทางด้านกฎหมาย (Legal)</td>
					<td style="text-align: center;"> <?php if($legal!=""){ echo $legal;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=marketing_analysis"><?php if($legal !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp5.6 ปัจจัยทางด้านสิ่งแวดล้อม (Environment)</td>
					<td style="text-align: center;"> <?php if($environment!=""){ echo $environment;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=marketing_analysis"><?php if($environment !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>6. การกำหนดส่วนประสมทางการตลาด (Marketing Mix) (4P's) ขององค์กรของท่าน</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp6.1 ผลิตภัณฑ์</td>
					<td style="text-align: center;"> <?php if($product!=""){ echo $product;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=marketing_mix"><?php if($product !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp6.2 ราคา</td>
					<td style="text-align: center;"> <?php if($costss!=""){ echo $costss;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=marketing_mix"><?php if($costss !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp6.3 ช่องทางการจำหน่าย</td>
					<td style="text-align: center;"> <?php if($channels!=""){ echo $channels;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=marketing_mix"><?php if($channels !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>

				</tr>
				<tr>
					<td>  &nbsp &nbsp6.4 การส่งเสริมการตลาด</td>
					<td style="text-align: center;"> <?php if($promotion!=""){ echo $promotion;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=marketing_mix"><?php if($promotion !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>7. การกำหนดตลาดเป้าหมายขององค์กรควรเป็นอย่างไร</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp7.1 การแบ่งส่วนตลาด</td>
					<td style="text-align: center;"> <?php if($segmentation!=""){ echo $segmentation;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=target"><?php if($segmentation !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp7.2 การกำหนดเป้าหมาย</td>
					<td style="text-align: center;"> <?php if($targeting!=""){ echo $targeting;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=target"><?php if($targeting !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp7.3 การกำหนดตำแหน่ง</td>
					<td style="text-align: center;"> <?php if($positioning!=""){ echo $positioning;} ?> </td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=target"><?php if($positioning !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>8. การใช้ทฤษฎีแรงกดดัน (Five Force Model) หรือพลังผลักดันทางการแข่งขัน (Competitive Force) ในองค์กรของท่าน</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp8.1 ภัยคุกคามจากคู่แข่ง (Existing Firms)</td>
					<td style="text-align: center;"> <?php if($firms!=""){ echo $firms;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=competitive_force"><?php if($firms !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp8.2 อำนาจต่อรองของผู้บริโภค (Customer)</td>
					<td style="text-align: center;"> <?php if($cus!=""){ echo $cus;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=competitive_force"> <?php if($cus !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp8.3 การเข้ามาของผู้ประกอบการรายใหม่ (New Entrant)</td>
					<td style="text-align: center;"> <?php if($entrant!=""){ echo $entrant;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=competitive_force"><?php if($entrant !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>  &nbsp &nbsp8.4 ภัยคุกคามจากสินค้าทดแทน (Substitute Products)</td>
					<td style="text-align: center;"> <?php if($substitute!=""){ echo $substitute;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=competitive_force"><?php if($substitute !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td>9. ค่าใช้จ่ายที่ใช้ในกิจกรรมด้านการตลาดว่ามีอะไรบ้างอธิบายมาพอสังเขป</td>
					<td style="text-align: center;"> <?php if($costs!=""){ echo $costs;} ?></td>
					<td style="text-align: center;"><a class=" myButton1 "href="index.php?app=user&action=cost" ><?php if($costs !=""){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไข</a><?php } else {?>เพิ่ม</a><?php }?></td>
				</tr>
				<tr>
					<td style="text-align: center; color:#000000;font-size:  20px">คะแนนรวมทั้งหมด</td>
					<td style="text-align: center; color:#000000;font-size:  20px"><?php echo 	$count; ?></td>
					<td style="text-align: center; color:#000000;font-size:  20px">คะแนน</td>
				</tr>

			</table>	
		</div>
	</div>
