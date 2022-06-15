<?php 

	if($_SESSION['dangnhapuser'])
	{
		$account_user = $_SESSION['dangnhapuser'];
		$id_user = $_SESSION['id_user'];
		
	}
	$sql_info = "SELECT * FROM hoadon where hoadon.id_user = '".$id_user."' ORDER BY id_hoadon DESC";
	$query_info = mysqli_query($mysqli,$sql_info);
	//$row_info = mysqli_fetch_array($query_info);
 ?>

<div class="row" style="margin-top: 10px">
	<div class="col l-12 c-12">
		<div class="container__cart__info">
			<div class="container__cart__info__header">
				<div class="container__cart__info__header__left">
					<h1>Lịch sử đặt hàng: <?php echo $account_user ?></h1>
				</div>
				
			</div>
			<div class="container__cart__info__content">
				<table width="100%" style="font-size: 16px;">
				<?php 
					while ($row_info = mysqli_fetch_array($query_info)) 
					{
				?>
					<tr style="height: 50px; text-align:center;">
						<td width="10%" style="border-bottom: 1px solid black;">Số hóa đơn:</td>
						<td width="10%" style="border-bottom: 1px solid black;"><?php echo $row_info['id_hoadon'] ?></td>
						<td width="10%" style="border-bottom: 1px solid black;">Ngày đặt:</td>
						<td width="20%" style="border-bottom: 1px solid black;"><?php echo $row_info['date_hoadon'] ?></td>
						<td width="10%" style="border-bottom: 1px solid black;">Thanh toán:</td>
						<td width="10%" style="border-bottom: 1px solid black;">
						<?php 
							if($row_info['phuongthucthanhtoan']==='tienmat'){
								echo 'Tiền mặt';
							}
							else if($row_info['phuongthucthanhtoan']==='vnpay'){
								echo 'VNPAY';
							}
							else{
								echo '';
							}
						?>
						</td>
						<td width="10%" style="border-bottom: 1px solid black;">
							<a href="product.php?quanly=chitietlichsudathang&codehoadon=<?php echo $row_info['id_hoadon'] ?>" style="color: black; text-decoration: none;" >Xem</a>
						</td>
						<td width="10%" style="border-bottom: 1px solid black;">
							<?php 
								if($row_info['status_hoadon']==1){
									echo '<p style="color:#EB5DB2;">Chờ duyệt<p>';
								}
								else if($row_info['status_hoadon']==2){
									echo '<p style="color:#fc5252;">Đã hủy<p>';
								}
								else if($row_info['status_hoadon']==0){
									echo '<p style="color:#50c535;">Đã duyệt<p>';
								}
							?>
						</td>
					</tr>
				<?php 
					}
				?>
				</table>
			</div>
		</div>
	</div>
</div>