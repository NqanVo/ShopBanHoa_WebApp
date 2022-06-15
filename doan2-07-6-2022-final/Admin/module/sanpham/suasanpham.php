
<?php 
	$sql_sua_sanpham = "SELECT * FROM sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
	$query_sua_sanpham = mysqli_query($mysqli,$sql_sua_sanpham);
 ?>
<div class="crad_sp">
	<div class="card__sanpham">
		<div class="card__sanpham__header">
			<h3 style="text-align: center;">Sửa sản phẩm</h3>
		</div>
		<div class="card__sanpham__content">	
			<table style="width:100%" border="1px">
				<form method="POST" action="module/sanpham/xulysanpham.php?idsanpham=<?php echo $_GET['idsanpham'] ?>">
				<?php 
					while($dong = mysqli_fetch_array($query_sua_sanpham))
					{
				 ?>
				 <tr>
					    <td width="25%">Tiêu đề:</td>
					    <td><input type="text" value="<?php echo $dong['title'] ?>" name="tieudesanpham" style="width: 100%;" maxlength="400" required></td>			    
					  </tr>
					  <tr>
					    <td>Mã sản phẩm*:</td>
					    <td><input type="text" value="<?php echo $dong['masanpham'] ?>" name="masanpham" style="width: 100%;" required></td>			    
					  </tr>					  
					  <tr>
					    <td>Giá:</td>
					    <td><input type="text" value="<?php echo $dong['gia'] ?>"  name="giasanpham" style="width: 100%;" required></td>			    
					  </tr>
					  <tr>
					    <td>Ảnh:</td>
					    <td>
					    	<input type="file" name="anhsanpham" style="width: 100%;">
					    	<img src="module/sanpham/uploads/<?php echo $dong['img'] ?>" width="200px" height="150px">
					    </td>		

					  </tr>
					  <tr>
					    <td>Nội dung:</td>
					    <td><textarea rows="10" name="noidungsanpham" style="width: 100%; resize: none;" required><?php echo $dong['content'] ?> </textarea>
					    	<script>
                        		CKEDITOR.replace( 'noidungsanpham' );
                			</script>
					    </td>			    
					  </tr>
					  <tr>
					    <td>Nước sản xuất:</td>
					    <td><input type="text" value="<?php echo $dong['nuocsx'] ?>" name="sanxuatsanpham" style="width: 100%;" required></td>			    
					  </tr>
					  <tr>
					    <td>Hãng:</td>
					    <td><input type="text" value="<?php echo $dong['hang'] ?>" name="hangsanpham" style="width: 100%;" required></td>			    
					  </tr>
					  <tr>
					    <td>Kho:</td>
					    <td><input type="text" value="<?php echo $dong['kho'] ?>" name="kho" style="width: 100%;" required></td>			    
					  </tr>
					  <tr>
					    <td>Ngày khởi tạo:</td>
					    <td><input type="date" value="<?php echo $dong['created_at'] ?>" name="ngaytao" required></td>			    
					  </tr>
					  <tr>
					    <td>Ngày sửa đổi:</td>
					    <td><input type="date" value="<?php echo $dong['updated_at'] ?>" name="ngaysua" required></td>			    
					  </tr>
					  <tr>
					   <td>Danh mục:</td>
					    <td>
					    	<select name="madanhmuc" required>
					    		<?php 
					    			$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY madanhmuc ASC";
					    			$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
					    			while($row_danhmuc = mysqli_fetch_array($query_danhmuc))
					    			{
					    				if($row_danhmuc['madanhmuc']==$dong['madanhmuc'])
					    				{				    				
					    		?>
					    		<option selected value="<?php echo $row_danhmuc['madanhmuc'] ?>"><?php echo $row_danhmuc['name'] ?></option>
					    		<?php 
					    			}else{
					    		 ?>
					    		 <option value="<?php echo $row_danhmuc['madanhmuc'] ?>"><?php echo $row_danhmuc['name'] ?></option>
					    		<?php 
					    			}
					    		}
					    		 ?>
					    	</select>
					    </td>			    
					  </tr>
					   <tr>
					    <td>Tình trạng:</td>
					    <td>
					    	<select name="tinhtrang" required>
					    		<?php  
					    			if($dong['tinhtrang']==1)
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
					    <td colspan="2" style="text-align: center;"><input type="submit" name="suasanpham" value="Lưu chỉnh sửa"></td>			    
					  </tr>
				  <?php 
					}
				   ?>
				</form>
			</table>
		</div>
	</div>
</div>