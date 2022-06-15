<?php 
	$sql_lietke_hotro = "SELECT * FROM hotro";
	$query_lietke_hotro = mysqli_query($mysqli,$sql_lietke_hotro);
 ?>
<div class="card__danhmuc" style="width: 100%;">
	<div class="card__danhmuc__header">
		<h3 style="text-align: center;">Phiếu yêu cầu</h3>
	</div>
	<div class="card__danhmuc__content">	
		<table style="width:100%; text-align: center;" border="1px" cellspacing="0">
		  <tr style="background-color: #f5f4f4; height: 40px; line-height: 40px;">
		    <td width="10%" style="text-align: center;">ID Support</td>
		    <td width="20%"">Tên khách hàng</td>
		    <td width="5%" style="text-align: center;">Giới tính</td>	
		    <td width="10%" style="text-align: center;">Số điện thoại</td>			    
		    <td width="5%" style="text-align: center;">Tình trạng</td>
		    <td width="5%" style="text-align: center;">Chi tiết</td>
		  </tr>
		   <?php
		   		while($row = mysqli_fetch_array($query_lietke_hotro))
		   		{
		    ?>

			   <tr style="height: 50px;">
			    <td style="text-align: center;"><?php echo $row['id_hotro'] ?></td>
			    <td><?php echo $row['hoten'] ?></td>
			    <td style="text-align: center;">
			    	<?php 
					if($row['gioitinh'] == 1)
					{
				 ?>
				 	<p>Nam</p>
				 	<?php 
				 }elseif($row['gioitinh'] == 0)
				 {
				 	 ?>
				 	<p>Nữ</p>
				 <?php } ?>
			    </td>	

			    <td><?php echo $row['sdt'] ?></td> 

			    <td style="text-align: center;">
			    	<?php 
					if($row['status_hotro'] == 1)
					{
				 ?>
				 	<a href="index.php?action=other&query=support_chitiet&idhotro=<?php echo $row['id_hotro']?>">Yêu cầu mới</a>
				 	<?php 
				 }elseif($row['status_hotro'] == 0)
				 {
				 	 ?>
				 	<p>Đã xem</p>
				 <?php } ?>
			    </td> 
			    <td style="text-align: center;"><a href="index.php?action=other&query=support_chitiet&idhotro=<?php echo $row['id_hotro']?>">Xem</a></td>
			  </tr>				  
		  	<?php
		  		} 
		  	 ?>

		</table>
	</div>
	</div>
