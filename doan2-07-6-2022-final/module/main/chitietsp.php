<?php 
	$sql_chitiet = "SELECT * FROM danhmuc,sanpham where sanpham.madanhmuc = danhmuc.madanhmuc and sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);


	while ($row_chitiet = mysqli_fetch_array($query_chitiet)) 
	{
 ?>

<form method="POST" action="module/main/addcart.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
	<div class="row" style="margin-top: 10px">
		<div class="col l-6 c-12">
			<div class="container__chitiet__img">
				<img src="Admin/module/sanpham/uploads/<?php echo $row_chitiet['img']; ?>" alt="">
			</div>
		</div>
		<div class="col l-6 c-12">
			<div class="container__chitiet__info">
				<h1 class="container__chitiet__info-heading"><?php echo $row_chitiet['title'] ?></h1>
				<ul class="container__chitiet__info-desc">
					<li class="container__chitiet__info-desc-item"><h3>Thương hiệu: <?php echo $row_chitiet['hang'] ?></h3></li>
					<li class="container__chitiet__info-desc-item"><h3>Mã sản phẩm: <?php echo $row_chitiet['masanpham'] ?></h3></li>
					<li class="container__chitiet__info-desc-item">
						<h3>Loại:
						<?php 
									if($row_chitiet['madanhmuc'] == 1)
									{
								?>
									Hoa cưới
								<?php 
									}
									elseif ($row_chitiet['madanhmuc'] == 2)
									{
								?>
									Hoa trang trí
								<?php 
									}
									elseif ($row_chitiet['madanhmuc'] == 3)
									{
								?>
									Hoa chúc mừng
								<?php 
									}
									elseif ($row_chitiet['madanhmuc'] == 4)
									{
								?>
									Hoa chia buồn
								<?php 
									}
								?>
						</h3>
					</li>
					<li><h3>Kho: 
						<?php 
							if($row_chitiet['kho'] > 0) 
								echo $row_chitiet['kho'];
							else
								echo "Hết hàng";
						?>
					</h3></li>
				</ul>
				<h1 class="container__chitiet__info-heading">Giá: <?php echo number_format($row_chitiet['gia'],0,',',',') ?> đ</h1>
				<ul class="container__chitiet__info-desc2">
					<li class="container__chitiet__info-desc-item2"><h3><i class="fas fa-shipping-fast"></i> Miễn phí giao hàng trên toàn quốc</h3></li>
					<li class="container__chitiet__info-desc-item2"><h3><i class="fas fa-gift"></i> Tặng Banner, Thiệp (Trị Giá 20.000đ) Miễn Phí</h3></li>
					<li class="container__chitiet__info-desc-item2"><h3><i class="fas fa-check"></i> Cam kết hàng chính hãng 100%</h3></li>
					<li class="container__chitiet__info-desc-item2"><h3><i class="fas fa-check"></i> Cam Kết Hoa Tươi Trên 3 Ngày</h3></li>
					<li class="container__chitiet__info-desc-item2"><h3><i class="fas fa-history"></i> Cam Kết 100% Hoàn Lại Tiền Nếu Bạn Không Hài Lòng</h3></li>
				</ul>
				<div class="row">
					<div class="col l-12 c-12">
						<div class="layout__button">
							<input type="submit" value="Mua ngay" name="muangay" class="btn-buy btn-success">
							<input type="submit" value="Thêm vào giỏ hàng" name="themgiohang" class="btn-buy">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col l-12 c-12">
			<div class="container__chitiet__content">
				<h1 class="container__chitiet__content_heading"><i class="fas fa-info-circle"></i> Chi tiết sản phẩm</h1>
				<div class="container__chitiet__content_body">
					<p>
					<?php echo $row_chitiet['content'] ?>
					</p>
				</div>
			</div>
		</div>
	</div>

</form>
<?php 
}
 ?>














 <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->


<!-- 
<?php 
		while ($row_chitiet = mysqli_fetch_array($query_chitiet)) 
		{

 ?>
<form method="POST" action="module/main/addcart.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
<div class="row" style="margin-top: 10px">
	<div class="col l-6 c-12">
		<div class="container__chitiet__img">
			<img src="https://mondaycareer.com/wp-content/uploads/2020/11/background-%C4%91%E1%BA%B9p-3-1024x682.jpg" alt="">
		</div>
	</div>
	<div class="col l-6 c-12">
		<div class="container__chitiet__info">
			<h1 class="container__chitiet__info-heading"><?php echo $row_chitiet['title'] ?></h1>
			<ul class="container__chitiet__info-desc">
				<li class="container__chitiet__info-desc-item"><h3>Thương hiệu: <?php echo $row_chitiet['hang'] ?></h3></li>
				<li class="container__chitiet__info-desc-item"><h3>Mã sản phẩm: <?php echo $row_chitiet['masanpham'] ?></h3></li>
				<li class="container__chitiet__info-desc-item">
					<h3>Loại:
					<?php 
							 	if($row_chitiet['madanhmuc'] == 1)
							 	{
							  ?>
								Hoa cưới
							<?php 
								}
								elseif ($row_chitiet['madanhmuc'] == 2)
								{
							  ?>
								Hoa trang trí
							<?php 
								}
								elseif ($row_chitiet['madanhmuc'] == 3)
								{
							  ?>
								Hoa chúc mừng
							<?php 
								}
								elseif ($row_chitiet['madanhmuc'] == 4)
								{
							  ?>
								Hoa chia buồn
							<?php 
								}
							 ?>
					</h3>
				</li>
				<li><h3>Kho: 
					<?php 
						if($row_chitiet['kho'] > 0) 
							echo $row_chitiet['masanpham'];
						else
							echo "Hết hàng";
					?>
				</h3></li>
			</ul>
			<h1 class="container__chitiet__info-heading">Giá:10000 đ</h1>
			<ul class="container__chitiet__info-desc2">
				<li class="container__chitiet__info-desc-item2"><h3><i class="fas fa-shipping-fast"></i> Miễn phí giao hàng trên toàn quốc</h3></li>
				<li class="container__chitiet__info-desc-item2"><h3><i class="fas fa-gift"></i> Tặng Banner, Thiệp (Trị Giá 20.000đ) Miễn Phí</h3></li>
				<li class="container__chitiet__info-desc-item2"><h3><i class="fas fa-check"></i> Cam kết hàng chính hãng 100%</h3></li>
				<li class="container__chitiet__info-desc-item2"><h3><i class="fas fa-check"></i> Cam Kết Hoa Tươi Trên 3 Ngày</h3></li>
				<li class="container__chitiet__info-desc-item2"><h3><i class="fas fa-history"></i> Cam Kết 100% Hoàn Lại Tiền Nếu Bạn Không Hài Lòng</h3></li>
			</ul>
			<div class="row">
				<div class="col l-12 c-12">
					<div class="layout__button">
						<input type="submit" value="Mua ngay" name="muangay" class="btn-buy btn-success">
						<input type="submit" value="Thêm vào giỏ hàng" name="themgiohang" class="btn-buy">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col l-12 c-12">
		<div class="container__chitiet__content">
			<h1 class="container__chitiet__content_heading"><i class="fas fa-info-circle"></i> Chi tiết sản phẩm</h1>
			<div class="container__chitiet__content_body">
				<p>
					hahahahahhahahahahhahahahahhahahahahhahahahahhahahahahhahahahahhahahahahhahahahahhahahahahhahahahahhahahahahhahahahah
					hahah
				</p>
			</div>
		</div>
	</div>
</div>
</form>
<?php 
		}
?> -->