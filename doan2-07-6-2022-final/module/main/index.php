<?php 
	$sql_sanpham = "SELECT * FROM danhmuc,sanpham where sanpham.madanhmuc = danhmuc.madanhmuc and sanpham.madanhmuc='$_GET[id]'  ORDER BY sanpham.id_sanpham ASC";
	$query_sanpham = mysqli_query($mysqli,$sql_sanpham);
	$sql_sanpham0 = "SELECT * FROM sanpham ORDER BY id_sanpham ASC";
	$query_sanpham0 = mysqli_query($mysqli,$sql_sanpham0);
 ?>


<div class="row" style="margin-top: 10px">
<?php 
	if(isset($_GET['quanly']) && $_GET['id'])
	{
		$quanly = $_GET['quanly'];
		$id = $_GET['id'];
	}
	else
	{
		$quanly= '';
		$id = '';
	}
	if($quanly=='danhmuc' && $id=='all')
	{
			while($row_sanpham = mysqli_fetch_array($query_sanpham0))
			{
				if($row_sanpham['tinhtrang']==1)
				{
?>
			<div class="col l-3 c-6">
				<div class="product-card">
					<a href="product.php?quanly=sanpham&id=<?php echo $row_sanpham['id_sanpham'] ?>" style="text-decoration: none; color: black;">
						<img src="Admin/module/sanpham/uploads/<?php echo $row_sanpham['img']; ?>" alt="" class="product-card-img">
						<h3><?php echo $row_sanpham['title'] ?></h3>
					</a>	
						<div class="product-card-body">
							<div class="product-card-body-info">
								<p>Giá: <?php echo number_format($row_sanpham['gia'],0,',',',') ?> đ</p>
								<p>Thương hiệu: <?php echo $row_sanpham['hang'] ?></p>
								<p>Xuất xứ: <?php echo $row_sanpham['nuocsx'] ?></p>
							</div>
<?php
							if($row_sanpham['kho'] > 0)
							{
?>
								<div class="product-card-body-status">
									<p>Còn hàng</p>
								</div>
<?php	
							}else
							{
?>						
								<div class="product-card-body-status status-error">
									<p>Hết hàng</p>
								</div>
<?php 
							}
?>
						</div>
<?php
							if($row_sanpham['kho'] > 0)
							{
?>
					<form method="POST" action="module/main/addcart.php?idsanpham=<?php echo $row_sanpham['id_sanpham'] ?>">
					<div class="product-card-btn">
						<input type="submit" value="Mua ngay" name="muangay" class="product-card-btn-buy btn-defaul btn-success">
						<input type="submit" value="Thêm giỏ hàng" name="themgiohang" class="product-card-btn-buy btn-defaul">
					</div>
					</form>
<?php	
							}else
							{
?>
					<div class="product-card-btn">
						<a href="" class="product-card-btn-buy btn-defaul btn-non-cursor">Mua ngay</a>
						<a href="" class="product-card-btn-buy btn-defaul btn-non-cursor">Thêm giỏ hàng</a>
					</div>
<?php 
							}
?>
				</div>
			</div>
<?php 
				}
			}
	}
	else
	{
			while($row_sanpham = mysqli_fetch_array($query_sanpham))
			{
				if($row_sanpham['tinhtrang']==1)
				{
?>
			<div class="col l-3 c-6">
				<div class="product-card">
					<a href="product.php?quanly=sanpham&id=<?php echo $row_sanpham['id_sanpham'] ?>" style="text-decoration: none; color: black;">
						<img src="Admin/module/sanpham/uploads/<?php echo $row_sanpham['img']; ?>" alt="" class="product-card-img">
						<h3><?php echo $row_sanpham['title'] ?></h3>
					</a>
						<div class="product-card-body">
							<div class="product-card-body-info">
								<p>Giá: <?php echo number_format($row_sanpham['gia'],0,',',',') ?> đ</p>
								<p>Thương hiệu: <?php echo $row_sanpham['hang'] ?></p>
								<p>Xuất xứ: <?php echo $row_sanpham['nuocsx'] ?></p>
							</div>
							<?php
							if($row_sanpham['kho'] > 0)
							{
?>
								<div class="product-card-body-status">
									<p>Còn hàng</p>
								</div>
<?php	
							}else
							{
?>						
								<div class="product-card-body-status status-error">
									<p>Hết hàng</p>
								</div>
<?php 
							}
?>
						</div>
<?php
							if($row_sanpham['kho'] > 0)
							{
?>
					<form method="POST" action="module/main/addcart.php?idsanpham=<?php echo $row_sanpham['id_sanpham'] ?>">
					<div class="product-card-btn">
						<input type="submit" value="Mua ngay" name="muangay" class="product-card-btn-buy btn-defaul btn-success">
						<input type="submit" value="Thêm giỏ hàng" name="themgiohang" class="product-card-btn-buy btn-defaul">
					</div>
					</form>
<?php	
							}else
							{
?>
					<div class="product-card-btn">
						<a href="" class="product-card-btn-buy btn-defaul btn-non-cursor">Mua ngay</a>
						<a href="" class="product-card-btn-buy btn-defaul btn-non-cursor">Thêm giỏ hàng</a>
					</div>
<?php 
							}
?>
				</div>
			</div>
<?php 
				}
			}
	}
?>

</div>
			
