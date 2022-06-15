
<?php 
	$sql_sua_baiviet = "SELECT * FROM baiviet WHERE id_baiviet = '$_GET[idbaiviet]' LIMIT 1";
	$query_sua_baiviet = mysqli_query($mysqli,$sql_sua_baiviet);
 ?>
<div class="baiviet__them">
	<h1 style="text-align: center; font-size: 1.5rem;">Thêm bài viết mới</h1>
		<table style="width:100%" border="1px">
			<form method="POST" action="module/baiviet/xulybaiviet.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
			<?php 
				while($row = mysqli_fetch_array($query_sua_baiviet))
				{
			 ?>
			  <tr>
			    <td width="25%">Tiêu đề:</td>
			    <td><input type="text" name="title_baiviet" style="width: 100%;" value="<?php echo $row['title_baiviet'] ?>" required></td>			    
			  </tr>
			  <tr>
			    <td>Ảnh Banners (ưu tiên: 1500x400):</td>
			    <td><input type="file" name="anhbaiviet" style="width: 100%;">
			    <img src="module/baiviet/uploads/<?php echo $row['img_baiviet'] ?>" width="200px" height="150px">
			    </td>			    
			  </tr>					  
			  <tr>
			    <td>Nội dung:</td>
			    <td><textarea rows="10" name="noidungbaiviet" style="width: 100%; resize: none;" required><?php echo $row['content_baiviet'] ?></textarea>
			    	<script>
                    CKEDITOR.replace( 'noidungbaiviet' );
            		</script>			    	
			    </td>			    
			  </tr>
			  <tr>
			    <td>Ngày viết:</td>
			    <td><input type="date" name="ngayvietbaiviet" value="<?php echo $row['ngayviet'] ?>" required></td>			    
			  </tr>
			   <tr>
			    <td>Tình trạng:</td>
			    <td>
			    	<select name="tinhtrang" required>
			    		<?php  
			    			if($row['status_baiviet']==1)
			    			{			
			    		?>
				    		<option value="1" selected="">Kích hoạt</option>
				    		<option value="0">Ẩn</option>
			    		<?php 
			    		}
			    			else{ 
		    			?>
				    		<option value="1">Kích hoạt</option>
				    		<option value="0" selected="">Ẩn</option>
			    		<?php 
			    		} ?>	

			    	</select>
			    </td>			    
			  </tr>
			  <tr>
			    <td colspan="2" style="text-align: center;"><input type="submit" name="suabaiviet" value="Sửa bài viết"></td>			    
			  </tr>
			  <?php 
				}
			   ?>
			</form>
		</table>
	</div>