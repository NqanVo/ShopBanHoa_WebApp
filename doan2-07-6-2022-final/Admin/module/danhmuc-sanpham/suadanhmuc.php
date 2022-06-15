
<?php 
	$sql_sua_danhmuc = "SELECT * FROM danhmuc WHERE madanhmuc = '$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmuc = mysqli_query($mysqli,$sql_sua_danhmuc);
 ?>
<div class="card__danhmuc">
	<div class="card__danhmuc__header">
		<h3 style="text-align: center;">Sửa danh mục</h3>
	</div>
	<div class="card__danhmuc__content">	
		<table style="width:100%" border="1px">
			<form method="POST" action="module/danhmuc-sanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
			<?php 
				while($dong = mysqli_fetch_array($query_sua_danhmuc))
				{
			 ?>
			  <tr>
			    <td width="50%">Tên danh mục:</td>
			    <td><input type="text" name="tendanhmuc" value="<?php echo $dong['name'] ?>" width="100%"></td>			    
			  </tr>
			  <tr>
			    <td>Mã danh mục:</td>
			    <td><input type="text" name="madanhmuc" value="<?php echo $dong['madanhmuc'] ?>"></td>			    
			  </tr>
			  <tr>
			    <td>Ngày khởi tạo:</td>
			    <td><input type="date" name="ngaytao" value="<?php echo $dong['created_at'] ?>"></td>			    
			  </tr>
			  <tr>
			    <td>Ngày sửa đổi:</td>
			    <td><input type="date" name="ngaysua" value="<?php echo $dong['updated_at'] ?>"></td>			    
			  </tr>
			  <tr>
			    <td colspan="2" style="text-align: center;"><input type="submit" name="suadanhmuc" value="Sửa danh mục"></td>			    
			  </tr>
			  <?php 
				}
			   ?>
			</form>
		</table>
	</div>
</div>