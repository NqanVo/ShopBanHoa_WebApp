<?php 
	$sql_lietke_sanpham = "SELECT * FROM sanpham,danhmuc WHERE sanpham.madanhmuc=danhmuc.madanhmuc ORDER BY id_sanpham DESC";
	$query_lietke_sanpham = mysqli_query($mysqli,$sql_lietke_sanpham);
 ?>

 <div class="card__sanpham__list">
	<div class="card__sp">
	<div class="card__sanpham__header">
		<h3 style="text-align: center;">Danh sách sản phẩm</h3>
		<form action="index.php?action=quanlysp&query=timkiem" method="POST">
			<input type="text" placeholder="Tìm kiếm sản phẩm..." name="keywork" style="height: 30px; border: none; border-bottom: 1px solid black;">
			<input type="submit" name="search" value="Tìm kiếm" style="margin-left: 8px; width: 70px; line-height: 30px; border: none; border-bottom: 1px solid black; background-color: white; cursor: pointer;">
			<!-- <input type="submit" name="searchall" value="Tất cả" style="margin-left: 8px; width: 70px; line-height: 30px; border: none; border-bottom: 1px solid black; background-color: white; cursor: pointer;"> -->
		</form>
	</div>
	<div class="card__sanpham__content">	
		<table style="width:100%; margin: 0 auto; border-color: white; text-align: center;" border="1px" cellspacing="0">
		  <tr style="background-color: #f5f4f4; height: 40px; line-height: 40px;" >
		    <td style="width:5%;">Mã SP</td>
		    <td style="width:5%;">Danh mục</td>
		    <td style="width:20%;">Tiêu đề</td>
		    <td style="width:6%;">Giá</td>	
		    <td style="width: 10%;">Ảnh</td>	
		    <!-- <td style="width: 10%;">Nội dung</td>	 -->
		    <td style="width: 8%;">Nước sản xuất</td>	
		    <td style="width:5%;">Hãng</td>	
		    <td style="width:5%;">Kho</td>
		    <td>Ngày khởi tạo</td>	
		    <td>Ngày chỉnh sửa</td>	
		    <td style="width:5%;">Tình trạng</td>
		    <td>Chỉnh sửa</td>    
		  </tr>
		   <?php 
		   		while($row = mysqli_fetch_array($query_lietke_sanpham))
		   		{	
		    ?>
			   <tr>
			    <td><?php echo $row['masanpham'] ?></td>
			    <td><?php echo $row['name'] ?></td>
			    <td><a href="../Product.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" style="text-decoration: none; color: black;"><?php echo $row['title'] ?></a></td>
			    <td><?php echo number_format($row['gia'],0,',',',')?>đ</td>
			    <td><img src="module/sanpham/uploads/<?php echo $row['img'] ?>" width="200px" height="150px"></td>
			    <td><?php echo $row['nuocsx'] ?></td>
			    <td><?php echo $row['hang'] ?></td>
			    <td><?php echo $row['kho'] ?></td>
			    <td><?php echo $row['created_at'] ?></td>	
			    <td><?php echo $row['updated_at'] ?></td>  
			    <td>
			    	<?php 
			    		if($row['tinhtrang']==1)
			    		{
			    			echo "Kích hoạt";
			    		}
			    		else
			    		{
			    			echo "Ẩn";
			    		}

			     	?>			     		
			    </td>
			    <td style="text-align: center;">
			    	<a href="?action=quanlyspsp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>" style="color: black;">Sửa</a>
			    	--
			    	<a href="module/sanpham/xulysanpham.php?idsanpham=<?php echo $row['id_sanpham'] ?>" style="color: black;">Xóa</a>
			    </td>  

			  </tr>				  
		  	<?php
		  		} 
		  	 ?>
		</table>
	</div>
	</div>
</div>
