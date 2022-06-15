
<?php 
	$sql_lietke_danhmuc = "SELECT * FROM danhmuc ORDER BY madanhmuc ASC";
	$query_lietke_danhmuc = mysqli_query($mysqli,$sql_lietke_danhmuc);
 ?>
<div class="card__danhmuc">
	<div class="card__danhmuc__header">
		<h3 style="text-align: center;">Danh mục sản phẩm</h3>
	</div>
	<div class="card__danhmuc__content">	
		<table style="width:100%" border="1px">
		  <tr>
		    <td width="25%" >Mã danh mục</td>
		    <td>Tên danh mục</td>
		    <td>Ngày khởi tạo</td>	
		    <td>Ngày sửa đổi</td>	
		    <td>Chỉnh sửa</td>    
		  </tr>
		   <?php 
		   		// $i = 0;
		   		while($row = mysqli_fetch_array($query_lietke_danhmuc))
		   		{	
		   			// $i++;	
		    ?>
			   <tr>
			    <td width="25%" style="text-align: center;"><?php echo $row['madanhmuc'] ?></td>
			    <td><?php echo $row['name'] ?></td>
			    <td><?php echo $row['created_at'] ?></td>	
			    <td><?php echo $row['updated_at'] ?></td>  
			    <td style="text-align: center;">
			    	<a href="?action=quanlysp&query=sua&iddanhmuc=<?php echo $row['madanhmuc'] ?>" style="color: black;">Sửa</a>
			    	--
			    	<a href="module/danhmuc-sanpham/xuly.php?iddanhmuc=<?php echo $row['madanhmuc'] ?>" style="color: black;">Xóa</a>
			    </td>  

			  </tr>				  
		  	<?php
		  		} 
		  	 ?>
		</table>
	</div>
	</div>
