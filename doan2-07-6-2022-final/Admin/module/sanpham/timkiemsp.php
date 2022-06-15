<?php 
	if(isset($_POST['search']))
	{
		$keywork = $_POST['keywork'];
	}
	else
	{
		$keywork = '';
	}
	$sql_sanpham = "SELECT * FROM sanpham,danhmuc where sanpham.madanhmuc=danhmuc.madanhmuc and sanpham.title like '%".$keywork."%'";
	$query_sanpham = mysqli_query($mysqli,$sql_sanpham);
 ?>

<?php 
	if($keywork == '')
	{
?>	
		<script>alert("Không tìm thấy sản phẩm!");</script>;
<?php
	}
 ?>
		<div class="card__sanpham__content">	
		<table style="width:100%; margin: 0 auto; border-color: white; text-align: center;" border="1px" cellspacing="0">
		  <tr style="height: 50px; line-height: 50px; text-align: center;" >
		    <td style="width:5%;">Mã SP</td>
		    <td style="width:5%;">Danh mục</td>
		    <td style="width:20%;">Tiêu đề</td>
		    <td style="width:6%;">Giá</td>	
		    <td style="width: 10%;">Ảnh</td>
		    <td style="width: 8%;">Nước sản xuất</td>	
		    <td style="width:5%;">Hãng</td>	
		    <td style="width:5%;">Kho</td>
		    <td>Ngày khởi tạo</td>	
		    <td>Ngày chỉnh sửa</td>	
		    <td style="width:5%;">Tình trạng</td>
		    <td>Chỉnh sửa</td>    
		  </tr>
		   <?php 
		   		while($row = mysqli_fetch_array($query_sanpham))
		   		{		
		    ?>
			   <tr>
			    <td style="text-align: center;"><?php echo $row['masanpham'] ?></td>
			    <td style="text-align: center;"><?php echo $row['name'] ?></td>
			    <td><?php echo $row['title'] ?></td>
			    <td style="text-align: center;"><?php echo number_format($row['gia'],0,',',',')?>đ</td>
			    <td><img src="module/sanpham/uploads/<?php echo $row['img'] ?>" width="200px" height="150px"></td>
			    <td style="text-align: center;"><?php echo $row['nuocsx'] ?></td>
			    <td style="text-align: center;"><?php echo $row['hang'] ?></td>
			    <td style="text-align: center;"><?php echo $row['kho'] ?></td>
			    <td style="text-align: center;"><?php echo $row['created_at'] ?></td>	
			    <td style="text-align: center;"><?php echo $row['updated_at'] ?></td>  
			    <td style="text-align: center;">
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

	