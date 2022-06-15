<?php 
	$sql_lietke_user = "SELECT * FROM users";
	$query_lietke_user = mysqli_query($mysqli,$sql_lietke_user);
 ?>
<div class="card__danhmuc" style="width: 100%;">
	<div class="card__danhmuc__header">
		<h3 style="text-align: center;">Danh sách khách hàng</h3>
	</div>
	<div class="card__danhmuc__content">	
		<table style="width:100%; text-align: center;" border="1px" cellspacing="0">
		  <tr style="background-color: #f5f4f4; height: 40px; line-height: 40px;">
		    <td width="5%" style="text-align: center;">ID User</td>
		    <td width="20%"">Tên khách hàng</td>
		    <td width="15%">Gmail</td>	
		    <td width="10%">Số điện thoại</td>	
		    <td width="45%">Địa chỉ giao hàng</td> 
		    <td style="text-align: center;">Cập nhật</td>
		  </tr>
		   <?php
		   		while($row = mysqli_fetch_array($query_lietke_user))
		   		{
		    ?>

			   <tr style="height: 50px;">
			    <td style="text-align: center;"><?php echo $row['id_user'] ?></td>
			    <td><?php echo $row['name_user'] ?></td>
			    <td><?php echo $row['gmail_user'] ?></td>	
			    <td><?php echo $row['phone_user'] ?></td> 
			    <td><?php echo $row['address_user'] ?></td> 
			    <td style="text-align: center;"><a href="?action=suamkuser&query=mk&iduser=<?php echo $row['id_user'] ?>" style="color: black;">Mật khẩu</a></td>
			  </tr>				  
		  	<?php
		  		} 
		  	 ?>

		</table>
	</div>
	</div>
