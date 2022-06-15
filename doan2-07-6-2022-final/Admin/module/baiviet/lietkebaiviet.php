<?php 
	$sql_lietke_baiviet = "SELECT * FROM baiviet";
	$query_lietke_baiviet = mysqli_query($mysqli,$sql_lietke_baiviet);
 ?>

<div class="baiviet__header" style="margin-top: 30px;">
	<h1 style="text-align: center; font-size: 1.5rem;">Danh sách bài viết</h1>
</div>
<div class="baiviet__danhsach">
	<table width="100%" border="1px" style="text-align: center;">
		<tr style="background-color: #f5f4f4; height: 40px; line-height: 40px;">
			<td width="10%">ID</td>
			<td width="30%">Title</td>
			<td width="30%">Ảnh</td>
			<td width="10%">Ngày viết</td>
			<td width="10%">Trang thái</td>
			<td width="10%">Xử lý</td>
		</tr>
		<?php 
		while($row = mysqli_fetch_array($query_lietke_baiviet))
		{
 		?>
		<tr>
			<td><?php echo $row['id_baiviet'] ?></td>
			<td><?php echo $row['title_baiviet'] ?></td>
			<td><img src="module/baiviet/uploads/<?php echo $row['img_baiviet'] ?>" width="200px" height="150px"></td>
			<td><?php echo $row['ngayviet'] ?></td>
			<td>
			<?php 
		    		if($row['status_baiviet']==1)
		    		{
		    			echo "Kích hoạt";
		    		}
		    		else
		    		{
		    			echo "Ẩn";
		    		}

		     	?>	
			</td>
			<td>
				<a href="?action=other&query=baivietsua&idbaiviet=<?php echo $row['id_baiviet'] ?>" style="color: black;">Sửa</a>
			    	--
			    <a href="module/baiviet/xulybaiviet.php?idbaiviet=<?php echo $row['id_baiviet'] ?>" style="color: black;">Xóa</a>
			</td>
		</tr>
		<?php 
		}
		 ?>
	</table>
</div>
