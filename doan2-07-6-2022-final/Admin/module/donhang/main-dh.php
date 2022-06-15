<?php 
	$sql_lietke_donhang = "SELECT * FROM hoadon,users where hoadon.id_user = users.id_user ORDER BY hoadon.id_hoadon DESC";
	$query_lietke_donhang = mysqli_query($mysqli,$sql_lietke_donhang);
 ?>
<div class="card__danhmuc" style="width: 100%;">
	<div class="card__danhmuc__header">
		<h3 style="text-align: center;">Danh sách đơn</h3>
	</div>
	<div class="card__danhmuc__content">	
		<table style="width:100%; text-align: center;" border="1px" cellspacing="0">
		  <tr style="background-color: #f5f4f4; height: 40px; line-height: 40px;">
		    <td width="5%" style="text-align: center;">Code ĐH</td>
		    <td width="5%" style="text-align: center;">ID KH</td>
		    <td width="12%" style="text-align: center;">Tên khách hàng</td>	
		    <td width="10%" style="text-align: center;">Số điện thoại</td>	
		    <td width="25%" style="text-align: center;">Địa chỉ giao hàng</td>
			<td width="8%" style="text-align: center;">Vận chuyển</td>
		    <td width="8%" style="text-align: center;">Tình trạng</td> 
		    <td width="8%" style="text-align: center;">Thanh toán</td> 
		    <td width="11%" style="text-align: center;">Ngày đặt</td>
		    <td width="8%" style="text-align: center;"> Chi tiết đơn</td>  
		  </tr>
		   <?php 
		   		while($row = mysqli_fetch_array($query_lietke_donhang))
		   		{	
		    ?>
			   <tr style="height: 50px;">
			    <td style="text-align: center;"><?php echo $row['id_hoadon'] ?></td>
			    <td style="text-align: center;"><?php echo $row['id_user'] ?></td>
			    <td><?php echo $row['name_user'] ?></td>	
			    <td style="text-align: center;"><?php echo $row['phone_user'] ?></td> 
			    <td><?php echo $row['address_user'] ?></td> 
				<td style="text-align: center;">

			    	<?php 
					if($row['status_transport_hoadon']==0)
					{
    					echo '<p>Đang chuẩn bị hàng<p>';
    				}
					else if($row['status_transport_hoadon']==1)
					{
    					echo '<p style="color:#3585c5;">Đang vận chuyển<p>';
    				}
					else if($row['status_transport_hoadon']==2)
					{
    					echo '<p style="color:#50c535;">Đã nhận hàng<p>';
    				}
					else if($row['status_transport_hoadon']==3)
					{
    					echo '<p style="color:#fc5252;">Đã hủy<p>';
    				}
					else
					{
    					echo '<p style="color:#EB5DB2;">Đợi duyệt đơn<p>';
    				}
    				?>
			    <td style="text-align: center;">

			    	<?php 
					if($row['status_hoadon']==1)
					{
    					echo '<p style="color:#EB5DB2;">Đơn mới<p>';
    				}
					else if($row['status_hoadon']==2)
					{
    					echo '<p style="color:#fc5252;">Đã hủy<p>';
    				}
					else
					{
    					echo '<p style="color:#50c535;">Đã xử lý<p>';
    				}
    				?>
			    
			    </td>  
			    <td style="text-align: center;"><?php 
			    	switch ($row['phuongthucthanhtoan']) {
				case 'tienmat': echo "Tiền mặt";
					break;
				case 'chuyenkhoan': echo "Chuyển khoản";
					break;
				case 'momo': echo "MoMo";
					break;
				case 'paypal': echo "Paypal";
					break;
				case 'vnpay': echo "VNPAY";
					break;
				default:
					break;
				}
			    ?></td>
			    <td style="text-align: center;"><?php echo $row['date_hoadon'] ?></td>
			    <td style="text-align: center;" style="text-align: center;">
			    	<a href="index.php?action=quanlydh&query=chitiet&codehoadon=<?php echo $row['id_hoadon'] ?>" style="color: black; text-decoration: none;" >Xem</a>	    	
			    </td>  

			  </tr>				  
		  	<?php
		  		} 
		  	 ?>
		</table>
	</div>
	</div>

<!-- <a href="module/donhang/xuly-dh.php?codehoadon='.$row['code_hoadon'].'" style="text-decoration: none;"></a> -->