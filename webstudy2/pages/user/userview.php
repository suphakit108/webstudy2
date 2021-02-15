
<div class="container">
	<table id="myTable">
		<thead>
			<tr>
				<th style="text-align: center;" >ชื่อโครงการ</th>
				<th style="text-align: center;">บริษัท</th>
				<th style="text-align: center;">สถานที่ตั้งโครงการ</th>
				<th style="text-align: center;">ประเภทกิจการ</th>
				<th style="text-align: center;">เสนอ</th>
				<th style="text-align: center;"> </th>
			</tr>
		</thead>
		<tbody>
			<?php 
			for($i=0; $i < count($company); $i++){
				?>
				<tr>
					<td style="text-align: center;" ><?php echo $company[$i]['company_project']; ?></td>
					<td style="text-align: center;" ><?php echo $company[$i]['company_name']; ?></td>
					<td style="text-align: center;" ><?php echo $company[$i]['company_local']; ?></td>
					<td style="text-align: center;" ><?php echo $company[$i]['company_type']; ?></td>
					<td style="text-align: center;" ><?php echo $company[$i]['offer']; ?></td>
					<td style="text-align: center;"  >  
						<ul><a href="index.php?app=user&action=delshow&id=<?php echo $company[$i]['company_code']; ?>"> 
							<i class="fas fa-trash" aria-hidden="true"></i> ลบ </a> 
							<a href="index.php?app=user&action=show&id=<?php echo $company[$i]['company_code']; ?>"> 
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข </a>
							</ul>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>