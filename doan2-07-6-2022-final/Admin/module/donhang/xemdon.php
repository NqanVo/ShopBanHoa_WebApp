<?php 
	$sql_lietke_donhang = "SELECT * FROM chitiethoadon,sanpham where chitiethoadon.id_sanpham = sanpham.id_sanpham and chitiethoadon.id_hoadon = '$_GET[codehoadon]'  ORDER BY chitiethoadon.id_chitiethoadon DESC";
	$query_lietke_donhang = mysqli_query($mysqli,$sql_lietke_donhang);

	$sql_lietke_donhang1 = "SELECT * FROM chitiethoadon,sanpham where chitiethoadon.id_sanpham = sanpham.id_sanpham and chitiethoadon.id_hoadon = '$_GET[codehoadon]'  ORDER BY chitiethoadon.id_chitiethoadon DESC";
	$query_lietke_donhang1 = mysqli_query($mysqli,$sql_lietke_donhang1);
	$row1 = mysqli_fetch_array($query_lietke_donhang1);

	$sql_lietke_donhang2 = "SELECT status_hoadon FROM hoadon where hoadon.id_hoadon = '$_GET[codehoadon]'";
	$query_lietke_donhang2 = mysqli_query($mysqli,$sql_lietke_donhang2);
	$row2 = mysqli_fetch_array($query_lietke_donhang2);

	if(isset($_POST['submit_vanchuyen']))
	{
		$status_vanchuyen = $_POST['status_vanchuyen'];
		$sql_update ="UPDATE hoadon SET status_transport_hoadon='$status_vanchuyen' WHERE id_hoadon='".$_GET['codehoadon']."'";
		$query = mysqli_query($mysqli,$sql_update);
		echo '<script type="text/javascript">alert("Cập nhật thành công!");</script>';
	}

 ?>
<div class="card__danhmuc" style="width: 100%;">
	<div class="card__danhmuc__header">
		<h3 style="text-align: center;">Chi tiết đơn</h3>
	</div>
	<div class="card__danhmuc__content">	
		<table style="width:100%; text-align: center; " border="1px" cellspacing="0">
		  <tr style="background-color: #f5f4f4; height: 40px; line-height: 40px;">
		    <td width="7%" style="text-align: center;">Code ĐH</td>
		    <td width="7%" style="text-align: center;">ID SP</td>
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
			    <td style="text-align: center;"><?php echo $row['id_hoadon'] ?></td>
			    <td style="text-align: center;"><?php echo $row['id_sanpham'] ?></td>
			    <td><a href="../Product.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" style="text-decoration: none; color: black;"><?php echo $row['title'] ?></a></td>	
			    <td style="text-align: center;"><?php echo $row['soluong_sp'] ?></td> 
			    <td><?php echo number_format($row['gia'],0,',',',') ?> đ</td>   
			    <td style="text-align: center;"><?php echo number_format($thanhtien,0,',',',')  ?></td> 		    
			  </tr>				  
		  	<?php
		  		} 
		  	 ?>
		  	<tr style="height: 50px;">
		  	 	<td colspan="6">Tổng tiền: <?php echo number_format($tongtien,0,',',',') ?> đ</td>
		  	</tr>
			<tr style="height: 50px;">
				<td colspan="6">
						<?php 
						if($row2['status_hoadon']==0)//da duyet don
						{
						?>
							<form method="POST" action="">
							<select name="status_vanchuyen" style="padding:10px">
				    			<option value="0">Đang chuẩn bị hàng</option>
				    			<option value="1">Đang vận chuyển</option>
								<option value="2">Đã nhận hàng</option>
				    		</select>
							<input type="submit" name="submit_vanchuyen" value="Cập nhật" style="padding:10px">
							</form>
						<?php 
						}
						?>
				</td>
			</tr>
		  	 <tr style="height: 50px;">
		  	 	<td colspan="6">
		  	 			<?php 
		  	 			if($row2['status_hoadon']==1)//chua duyet don
		  	 			{
		  	 			?>
						   <button style="height: 40px; line-height: 40px; width: 80px; font-size: 15px; margin: 5px 0;">
		  	 					<a href="index.php?action=quanlydonhang&query=lietke" style="text-decoration: none;"><p style="color:#EB5DB2;">Quay về<p></a>
		  	 				</button>
				    		<button style="height: 40px; line-height: 40px; width: 80px; font-size: 15px; margin: 5px 0;">
		  	 					<a href="module/donhang/xuly-dh.php?codehoadon=<?php echo $row1['id_hoadon']?>&status=duyetdon" style="text-decoration: none;"><p style="color:#EB5DB2;">Duyệt đơn<p></a>
		  	 				</button>
							<button style="height: 40px; line-height: 40px; width: 80px; font-size: 15px; margin: 5px 0;">
		  	 					<a href="module/donhang/xuly-dh.php?codehoadon=<?php echo $row1['id_hoadon']?>&status=huydon" style="text-decoration: none;"><p style="color:#EB5DB2;">Hủy đơn<p></a>
		  	 				</button>
				    	
				    	<?php 
				    	}
				    	else if($row2['status_hoadon']==2)//da huy don
				    	{
				    	?>
				    		<button style="height: 40px; line-height: 40px; width: 80px; font-size: 15px; margin: 5px 0;">
		  	 					<a href="index.php?action=quanlydonhang&query=lietke" style="text-decoration: none;"><p style="color:#EB5DB2;">Quay về<p></a>
		  	 				</button>
				    	<?php				    		
				    	}
						else//da duyet don
						{
						?>
							<button style="height: 40px; line-height: 40px; width: 80px; font-size: 15px; margin: 5px 0;">
		  	 					<a href="index.php?action=quanlydonhang&query=lietke" style="text-decoration: none;"><p style="color:#EB5DB2;">Quay về<p></a>
		  	 				</button>
							<button style="height: 40px; line-height: 40px; width: 80px; font-size: 15px; margin: 5px 0;">
		  	 					<a href="module/donhang/xuly-dh.php?codehoadon=<?php echo $row1['id_hoadon']?>&status=huydondaduyet" style="text-decoration: none;"><p style="color:#EB5DB2;">Hủy đơn<p></a>
		  	 				</button>
						<?php
						}
				    	?>
		  	 	</td>
		  	 </tr>
		</table>
	</div>
	</div>
