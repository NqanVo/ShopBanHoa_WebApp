<div class="row" style="margin-top: 10px">
<?php 
	if(isset($_POST['search']))
	{
		if(isset($_POST['locgia']))
		{
			$locgia = $_POST['locgia'];
			
			if($locgia==1)
			{
				$sql_gia_sanpham_cao = "SELECT * FROM sanpham ORDER BY sanpham.gia DESC";
				$query_gia_sanpham_cao = mysqli_query($mysqli,$sql_gia_sanpham_cao);
				while($row_sanpham_cao = mysqli_fetch_array($query_gia_sanpham_cao))
				{
				?>
				<div class="col l-3 c-6">
					<div class="product-card">
						<a href="product.php?quanly=sanpham&id=<?php echo $row_sanpham_cao['id_sanpham'] ?>" style="text-decoration: none; color: black;">
							<img src="Admin/module/sanpham/uploads/<?php echo $row_sanpham_cao['img']; ?>" alt="" class="product-card-img">
							<h3><?php echo $row_sanpham_cao['title'] ?></h3>
						</a>	
							<div class="product-card-body">
								<div class="product-card-body-info">
									<p>Giá: <?php echo number_format($row_sanpham_cao['gia'],0,',',',') ?> đ</p>
									<p>Thương hiệu: <?php echo $row_sanpham_cao['hang'] ?></p>
									<p>Xuất xứ: <?php echo $row_sanpham_cao['nuocsx'] ?></p>
								</div>
								<?php
								if($row_sanpham_cao['kho'] > 0)
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
								if($row_sanpham_cao['kho'] > 0)
								{
								?>
						<form method="POST" action="module/main/addcart.php?idsanpham=<?php echo $row_sanpham_cao['id_sanpham'] ?>">
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
			else if($locgia==2)
			{
				$sql_gia_sanpham_thap = "SELECT * FROM sanpham ORDER by sanpham.gia ASC";
				$query_gia_sanpham_thap = mysqli_query($mysqli,$sql_gia_sanpham_thap);
				while($row_sanpham_thap = mysqli_fetch_array($query_gia_sanpham_thap))
				{
				?>
				<div class="col l-3 c-6">
					<div class="product-card">
						<a href="product.php?quanly=sanpham&id=<?php echo $row_sanpham_thap['id_sanpham'] ?>" style="text-decoration: none; color: black;">
							<img src="Admin/module/sanpham/uploads/<?php echo $row_sanpham_thap['img']; ?>" alt="" class="product-card-img">
							<h3><?php echo $row_sanpham_thap['title'] ?></h3>
						</a>	
							<div class="product-card-body">
								<div class="product-card-body-info">
									<p>Giá: <?php echo number_format($row_sanpham_thap['gia'],0,',',',') ?> đ</p>
									<p>Thương hiệu: <?php echo $row_sanpham_thap['hang'] ?></p>
									<p>Xuất xứ: <?php echo $row_sanpham_thap['nuocsx'] ?></p>
								</div>
								<?php
								if($row_sanpham_thap['kho'] > 0)
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
								if($row_sanpham_thap['kho'] > 0)
								{
								?>
						<form method="POST" action="module/main/addcart.php?idsanpham=<?php echo $row_sanpham_thap['id_sanpham'] ?>">
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
	
		$keywork = $_POST['keywork'];
		if($keywork == '' && $locgia=='0')
		{
		?>	
			<!-- <script>alert("Không tìm thấy sản phẩm!");</script> -->
			<div class="col l-12 c-12">
				<div class="card__cart">
					<div class="card-cart-box">
						<div class="card__cart__content__item__trong" style="text-align:center">
							<h1 style="color: var(--txtcolor-black);">Không tìm thấy sản phẩm, vui lòng <a href="product.php?quanly=danhmuc&id=all" style="color: #E8A1F4">quay lại</a><i class="fa-solid fa-magnifying-glass" style="color: var(--txtcolor-black); font-size: 50px; margin-left: 20px"></i></h1>

						</div>
					</div>
				</div>
			</div>
		<?php
		}
		else if($keywork != '' && $locgia =='0')
		{
			$sql_sanpham = "SELECT * FROM sanpham where sanpham.title like '%".$keywork."%'";
			$query_sanpham = mysqli_query($mysqli,$sql_sanpham);
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
	}
	//mobile search
	else if(isset($_POST['search-mb']))
	{
		if(isset($_POST['locgia-mb']))
		{
			$locgia = $_POST['locgia-mb'];
			
			if($locgia==1)
			{
				$sql_gia_sanpham_cao = "SELECT * FROM sanpham ORDER BY sanpham.gia DESC";
				$query_gia_sanpham_cao = mysqli_query($mysqli,$sql_gia_sanpham_cao);
				while($row_sanpham_cao = mysqli_fetch_array($query_gia_sanpham_cao))
				{
				?>
				<div class="col l-3 c-6">
					<div class="product-card">
						<a href="product.php?quanly=sanpham&id=<?php echo $row_sanpham_cao['id_sanpham'] ?>" style="text-decoration: none; color: black;">
							<img src="Admin/module/sanpham/uploads/<?php echo $row_sanpham_cao['img']; ?>" alt="" class="product-card-img">
							<h3><?php echo $row_sanpham_cao['title'] ?></h3>
						</a>	
							<div class="product-card-body">
								<div class="product-card-body-info">
									<p>Giá: <?php echo number_format($row_sanpham_cao['gia'],0,',',',') ?> đ</p>
									<p>Thương hiệu: <?php echo $row_sanpham_cao['hang'] ?></p>
									<p>Xuất xứ: <?php echo $row_sanpham_cao['nuocsx'] ?></p>
								</div>
								<?php
								if($row_sanpham_cao['kho'] > 0)
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
								if($row_sanpham_cao['kho'] > 0)
								{
								?>
						<form method="POST" action="module/main/addcart.php?idsanpham=<?php echo $row_sanpham_cao['id_sanpham'] ?>">
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
			else if($locgia==2)
			{
				$sql_gia_sanpham_thap = "SELECT * FROM sanpham ORDER by sanpham.gia ASC";
				$query_gia_sanpham_thap = mysqli_query($mysqli,$sql_gia_sanpham_thap);
				while($row_sanpham_thap = mysqli_fetch_array($query_gia_sanpham_thap))
				{
				?>
				<div class="col l-3 c-6">
					<div class="product-card">
						<a href="product.php?quanly=sanpham&id=<?php echo $row_sanpham_thap['id_sanpham'] ?>" style="text-decoration: none; color: black;">
							<img src="Admin/module/sanpham/uploads/<?php echo $row_sanpham_thap['img']; ?>" alt="" class="product-card-img">
							<h3><?php echo $row_sanpham_thap['title'] ?></h3>
						</a>	
							<div class="product-card-body">
								<div class="product-card-body-info">
									<p>Giá: <?php echo number_format($row_sanpham_thap['gia'],0,',',',') ?> đ</p>
									<p>Thương hiệu: <?php echo $row_sanpham_thap['hang'] ?></p>
									<p>Xuất xứ: <?php echo $row_sanpham_thap['nuocsx'] ?></p>
								</div>
								<?php
								if($row_sanpham_thap['kho'] > 0)
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
								if($row_sanpham_thap['kho'] > 0)
								{
								?>
						<form method="POST" action="module/main/addcart.php?idsanpham=<?php echo $row_sanpham_thap['id_sanpham'] ?>">
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
	
		$keywork = $_POST['keywork-mb'];
		if($keywork == '' && $locgia=='0')
		{
		?>	
			<!-- <script>alert("Không tìm thấy sản phẩm!");</script>; -->
			<div class="col l-12 c-12">
				<div class="card__cart">
					<div class="card-cart-box">
						<div class="card__cart__content__item__trong" style="text-align:center">
							<h1 style="color: var(--txtcolor-black);">Không tìm thấy sản phẩm, vui lòng <a href="product.php?quanly=danhmuc&id=all" style="color: #E8A1F4">quay lại</a><i class="fa-solid fa-magnifying-glass" style="color: var(--txtcolor-black); font-size: 50px; margin-left: 20px"></i></h1>

						</div>
					</div>
				</div>
			</div>
		<?php
		}
		else if($keywork != '' && $locgia =='0')
		{
			$sql_sanpham = "SELECT * FROM sanpham where sanpham.title like '%".$keywork."%'";
			$query_sanpham = mysqli_query($mysqli,$sql_sanpham);
			// $row_check = mysqli_fetch_array($query_sanpham);
			$count = mysqli_num_rows($query_sanpham);
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
	}
?>
</div>


























