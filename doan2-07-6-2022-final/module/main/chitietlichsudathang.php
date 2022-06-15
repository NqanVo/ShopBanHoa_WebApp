<?php 
	$sql_lietke_donhang = "SELECT * FROM chitiethoadon,sanpham where chitiethoadon.id_sanpham = sanpham.id_sanpham and chitiethoadon.id_hoadon = '$_GET[codehoadon]'  ORDER BY id_chitiethoadon DESC";
	$sql_lietke_donhang0 = "SELECT * FROM chitiethoadon,sanpham where chitiethoadon.id_sanpham = sanpham.id_sanpham and chitiethoadon.id_hoadon = '$_GET[codehoadon]'  ORDER BY id_chitiethoadon DESC";
	$query_lietke_donhang = mysqli_query($mysqli,$sql_lietke_donhang);
	$query_lietke_donhang0 = mysqli_query($mysqli,$sql_lietke_donhang0);
	$row0 = mysqli_fetch_array($query_lietke_donhang0);

	$sql_tinhtrang_donhang = "SELECT * FROM hoadon where hoadon.id_hoadon = '$_GET[codehoadon]'";
	$query_tinhtrang_donhang = mysqli_query($mysqli,$sql_tinhtrang_donhang);
	$row_tinhtrang = mysqli_fetch_array($query_tinhtrang_donhang);

	if(isset($_POST['btn-huydon']))
	{
		
		$sql_update ="UPDATE hoadon SET status_hoadon=2,status_transport_hoadon=3 WHERE id_hoadon='".$_GET['codehoadon']."'";
		$query = mysqli_query($mysqli,$sql_update);
		echo '<script type="text/javascript">alert("Hủy thành công!");</script>';
		echo header("refresh: 0.5");
	}
	else if(isset($_POST['btn-danhanhang']))
	{
		
		$sql_update ="UPDATE hoadon SET status_transport_hoadon=2 WHERE id_hoadon='".$_GET['codehoadon']."'";
		$query = mysqli_query($mysqli,$sql_update);
		echo '<script type="text/javascript">alert("Cập nhật thành công!");</script>';
		echo header("refresh: 0.5");
	}
	else if(isset($_POST['btn-quayve']))
	{
		
		header('Location:product.php?quanly=lichsudathang');
	}

 ?>

<div class="row" style="margin-top: 10px">
	<div class="col l-12">	
		<div class="container__cart__info">
			<div class="card__danhmuc" style="width: 100%;">

				<div class="container__cart__info__header">
					<div class="container__cart__info__header__left">
						<h1>Chi tiết đơn: <?php echo $row0['id_hoadon'] ?></h1>
					</div>			
				</div>

				<div class="container__cart__info__content">	
					<table style="width:100%; font-size: 13px; text-align: center;" border="1px" cellspacing="0">
					<tr>
						<td width="10%" style="text-align: center;">Code ĐH</td>
						<td width="40%">Tên sản phẩm</td>	
						<td width="10%">Số lượng</td>	
						<td width="18%">Giá</td>  
						<td width="18%">Thành tiền</td>  
					</tr>
					<?php 
							
									$tongtien = 0;
								while($row = mysqli_fetch_array($query_lietke_donhang))
								{
									$thanhtien = $row['gia']*$row['soluong_sp'];
									$tongtien += $thanhtien;

							?>
							<tr style="height: 50px;">
								<td><?php echo $row['id_hoadon'] ?></td>
								<td><a href="product.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" style="text-decoration: none; color: black;"><?php echo $row['title'] ?></a></td>	
								<td><?php echo $row['soluong_sp'] ?></td> 
								<td><?php echo number_format($row['gia'],0,',',',') ?> đ</td>   
								<td><?php echo number_format($thanhtien,0,',',',')?></td> 					    
							</tr>				  
							<?php
								} 
							?>
						<tr style="height: 50px;">
							<td colspan="6">Tổng tiền: <?php echo number_format($tongtien,0,',',',') ?> đ</td>
						</tr>
						<tr style="height: 50px;">
							<td colspan="6">Trạng thái đơn: 
								<?php 
									if($row_tinhtrang['status_hoadon']==1){
										echo '<p style="color:#EB5DB2;">Chờ duyệt<p>';
									}
									else if($row_tinhtrang['status_hoadon']==2){
										echo '<p style="color:#fc5252;">Đã hủy<p>';
									}
									else if($row_tinhtrang['status_hoadon']==0){
										echo '<p style="color:#50c535;">Đã duyệt<p>';
									}
								?>
							</td>
						</tr>
						<tr style="height: 50px;">
							<td colspan="6">Trạng thái vận chuyển: 
								<?php 
									if($row_tinhtrang['status_transport_hoadon']==1){
										echo '<p style="color:#3585c5;">Đang vận chuyển<p>';
										?>
											<form method="POST" action="">
												<button style="height: 40px; line-height: 40px; width: 80px; font-size: 15px; margin: 5px 0;" name="btn-danhanhang">
													<p style="color:#EB5DB2;">Đã nhận<p>
												</button>
											</form>
										<?php
									}
									else if($row_tinhtrang['status_transport_hoadon']==2){
										echo '<p style="color:#50c535;">Đã nhận hàng<p>';
									}
									else if($row_tinhtrang['status_transport_hoadon']==3){
										echo '<p style="color:#fc5252;">Đã hủy<p>';
									}
									else if($row_tinhtrang['status_transport_hoadon']==0){
										echo '<p>Đang chuẩn bị hàng<p>';
									}
									else
									{
										echo '<p style="color:#EB5DB2;">Đợi duyệt đơn<p>';
									}
								?>
							</td>
						</tr>
						<tr style="height: 50px;">
							<td colspan="6">
							<?php 
								if($row_tinhtrang['status_hoadon']==1)//chua duyet don
								{
								?>
								<form method="POST" action="">
									<button style="height: 40px; line-height: 40px; width: 80px; font-size: 15px; margin: 5px 0;" name="btn-quayve">
										<p style="color:#EB5DB2;">Quay về<p>
									</button>
									<button style="height: 40px; line-height: 40px; width: 80px; font-size: 15px; margin: 5px 0;" name="btn-huydon">
										<p style="color:#EB5DB2;">Hủy đơn<p>
									</button>
								</form>
								
								<?php 
								}
								else if($row_tinhtrang['status_hoadon']!=1)
								{
								?>
									<button style="height: 40px; line-height: 40px; width: 80px; font-size: 15px; margin: 5px 0;">
										<a href="product.php?quanly=lichsudathang" style="text-decoration: none;"><p style="color:#EB5DB2;">Quay về<p></a>
									</button>
								<?php				    		
								}
							?>
							</td>
						</tr>
					</table>

					<p style="font-size:16px; margin-top:10px;color:#fc5252;">*Bạn chỉ có thể hủy đơn khi đơn ở trạng thái "Chờ duyệt"</P>
				</div>
			</div>
		</div>
	</div>
</div>