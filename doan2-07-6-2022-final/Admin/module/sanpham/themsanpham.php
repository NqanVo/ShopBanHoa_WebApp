<div class="card__sp">
	<div class="card__sanpham">
		<div class="card__sanpham__header">
			<h3 style="text-align: center;">Thêm sản phẩm</h3>
		</div>
		<div class="card__sanpham__content">	
			<table style="width:100%" border="1px">
				<form method="POST" action="module/sanpham/xulysanpham.php" enctype="multipart/form-data">
				  <tr>
				    <td width="25%">Tiêu đề *:</td>
				    <td><input type="text" name="tieudesanpham" style="width: 100%;" maxlength="400" required=""></td>			    
				  </tr>
				  <tr>
				    <td>Mã sản phẩm *:</td>
				    <td><input type="text" name="masanpham" style="width: 100%;" required=""></td>			    
				  </tr>					  
				  <tr>
				    <td>Giá *:</td>
				    <td><input type="text" name="giasanpham" style="width: 100%;" required=""></td>			    
				  </tr>
				  <tr>
				    <td>Ảnh *:</td>
				    <td><input type="file" name="anhsanpham" style="width: 100%;" required=""></td>			    
				  </tr>
				  <tr>
				    <td>Nội dung *:</td>
				    <td><textarea rows="10" name="noidungsanpham" style="width: 100%; resize: none;" required=""></textarea>
				    	<script>
                        CKEDITOR.replace( 'noidungsanpham' );
                		</script>
				    </td>			    
				  </tr>
				  <tr>
				    <td>Nước sản xuất *:</td>
				    <td><input type="text" name="sanxuatsanpham" style="width: 100%;" required=""></td>			    
				  </tr>
				  <tr>
				    <td>Hãng *:</td>
				    <td><input type="text" name="hangsanpham" style="width: 100%;" required=""></td>			    
				  </tr>
				  <tr>
				    <td>Kho *:</td>
				    <td><input type="text" name="kho" style="width: 100%;" required=""></td>			    
				  </tr>
				  <tr>
				    <td>Ngày khởi tạo *:</td>
				    <td><input type="date" name="ngaytao" required=""></td>			    
				  </tr>
				  <tr>
				    <td>Ngày sửa đổi *:</td>
				    <td><input type="date" name="ngaysua" required=""></td>			    
				  </tr>
				  <tr>
				    <td>Danh mục *:</td>
				    <td>
				    	<select name="madanhmuc" required="">
				    		<?php 
				    			$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY madanhmuc ASC";
				    			$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
				    			while($row_danhmuc = mysqli_fetch_array($query_danhmuc))
				    			{				    				
				    		?>
				    		<option value="<?php echo $row_danhmuc['madanhmuc'] ?>"><?php echo $row_danhmuc['name'] ?></option>
				    		<?php 
				    			}
				    		 ?>
				    	</select>
				    </td>			    
				  </tr>
				   <tr>
				    <td>Tình trạng *:</td>
				    <td>
				    	<select name="tinhtrang" required="">
				    		<option value="1">Kích hoạt</option>
				    		<option value="0">Ẩn</option>
				    	</select>
				    </td>			    
				  </tr>

				  <tr>
				    <td colspan="2" style="text-align: center;"><input type="submit" name="luusanpham" value="Lưu sản phẩm"></td>			    
				  </tr>
				</form>
			</table>
		</div>
	</div>
</div>



