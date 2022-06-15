<div class="baiviet__them">
	<h1 style="text-align: center; font-size: 1.5rem;">Thêm bài viết mới</h1>
		<table style="width:100%" border="1px">
			<form method="POST" action="module/baiviet/xulybaiviet.php" enctype="multipart/form-data">
			  <tr>
			    <td width="25%">Tiêu đề:</td>
			    <td><input type="text" name="title_baiviet" style="width: 100%;" required></td>			    
			  </tr>
			  <tr>
			    <td>Ảnh Banners (ưu tiên: 1500x400):</td>
			    <td><input type="file" name="anhbaiviet" style="width: 100%;" required></td>			    
			  </tr>					  
			  <tr>
			    <td>Nội dung:</td>
			    <td><textarea rows="10" name="noidungbaiviet" style="width: 100%; resize: none;" required></textarea>
			    	<script>
                    CKEDITOR.replace( 'noidungbaiviet' );
            		</script>			    	
			    </td>			    
			  </tr>
			  <tr>
			    <td>Ngày viết:</td>
			    <td><input type="date" name="ngayvietbaiviet" required></td>			    
			  </tr>
			   <tr>
			    <td>Tình trạng:</td>
			    <td>
			    	<select name="tinhtrang" required>
			    		<option value="1">Kích hoạt</option>
			    		<option value="0">Ẩn</option>
			    	</select>
			    </td>			    
			  </tr>
			  <tr>
			    <td colspan="2" style="text-align: center;"><input type="submit" name="luubaiviet" value="Lưu bài viết"></td>			    
			  </tr>
			</form>
		</table>
	</div>