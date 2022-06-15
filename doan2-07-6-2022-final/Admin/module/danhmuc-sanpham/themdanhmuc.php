
<div class="card__danhmuc">
	<div class="card__danhmuc__header">
		<h3 style="text-align: center;">Thêm danh mục</h3>
	</div>
	<div class="card__danhmuc__content">	
		<table style="width:100%" border="1px">
			<form method="POST" action="module/danhmuc-sanpham/xuly.php">
			  <tr>
			    <td width="50%">Tên danh mục *:</td>
			    <td><input type="text" name="tendanhmuc" required></td>			    
			  </tr>
			  <tr>
			    <td>Mã danh mục *:</td>
			    <td><input type="text" name="madanhmuc" required></td>			    
			  </tr>
			  <tr>
			    <td>Ngày khởi tạo *:</td>
			    <td><input type="date" name="ngaytao" required></td>			    
			  </tr>
			  <tr>
			    <td>Ngày sửa đổi *:</td>
			    <td><input type="date" name="ngaysua" required></td>			    
			  </tr>
			  <tr>
			    <td colspan="2" style="text-align: center;"><input type="submit" name="luudanhmuc" value="Lưu danh mục" onclick="kiemtradm();"></td>			    
			  </tr>
			</form>
		</table>
	</div>
</div>



