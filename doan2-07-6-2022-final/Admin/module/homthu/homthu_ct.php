<?php 
	$idhotro = $_GET['idhotro'];
	$sql_chitiet_hotro = "SELECT * FROM hotro where id_hotro = '".$idhotro."'";
	$query_chitiet_hotro = mysqli_query($mysqli,$sql_chitiet_hotro);
	$row = mysqli_fetch_array($query_chitiet_hotro);

	$sql_update = "UPDATE hotro set status_hotro='0' where id_hotro = '".$idhotro."'";
	$query = mysqli_query($mysqli,$sql_update);
 ?>
<div class="main">
	<table style="margin: 0 auto;" border="1px;" cellspacing="0">
		<tr style="background-color: #f5f4f4; height: 40px; line-height: 40px; text-align: center;">
			<td colspan="2">Thông tin</td>
		</tr>
		<tr style="height: 20px; line-height: 20px;">
			<td width="30%">Họ tên:</td>
			<td width="70%"><input type="text" name="hoten" disabled style="border: none; border-bottom: 1px solid black" size="50px" value="<?php echo $row['hoten'] ?>"></td>
		</tr>
		<tr style="height: 20px; line-height: 20px;">
			<td>Giới tính:</td>
			<td>
				<?php 
					if($row['gioitinh'] == 1)
					{
				 ?>
				 	<input type="text" value="Nam" disabled style="border: none; border-bottom: 1px solid black">
				 	<?php 
				 }elseif($row['gioitinh'] == 0)
				 {
				 	 ?>
				 	<input type="text" value="Nữ" disabled style="border: none; border-bottom: 1px solid black"> 
				 <?php } ?>
			</td>
		</tr>
		<tr style="height: 20px; line-height: 20px;">
			<td>Số điện thoại:</td>
			<td><input type="text" name="sdt" style="border: none; border-bottom: 1px solid black" size="50px" disabled value="<?php echo $row['sdt'] ?>"></td>
		</tr>
		<tr style="height: 20px; line-height: 20px;">
			<td>Nội dung hỗ trợ:</td>
			<td>
				<div class="frame" style="min-height: 100px; width: 100%; word-wrap:break-word;">
				<p><?php echo $row['noidung'] ?></p>
				</div>
			</td>
		</tr>				
	</table>
</div>