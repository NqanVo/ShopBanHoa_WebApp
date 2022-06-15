<?php 
	session_start();
	if(isset($_GET['dangxuatuser']) && $_GET['dangxuatuser'] == 1)
	{
		unset($_SESSION['dangnhapuser']);
		header('Location:index.php');

	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>BEAUTY About</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="css\grid.css">
	<link rel="stylesheet" type=" text/css" href="css\styleabout.css">
	<link rel="stylesheet" type="text/css" href="css\responsive.css">
	<link rel="icon" href="img\logo2.png">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<div class="hero">

<!-- ------------HEARDER--------------- -->
	<div class="header">
		<ul class="list">
			<li class="list-item"><img src="img\logo2.png" alt=""></img></li>
			<li class="list-item"><a href="index.php">Trang chủ</a></li>
			<li class="list-item"><a href="product.php?quanly=danhmuc&id=all">Sản phẩm</a>
				<ul class="sub-list">
					<li class="sub-item"><a href="product.php?quanly=danhmuc&id=1">Hoa cưới</a></li>
					<li class="sub-item"><a href="product.php?quanly=danhmuc&id=2">Hoa trang trí</a></li>
					<li class="sub-item"><a href="product.php?quanly=danhmuc&id=3">Hoa chúc mừng</a></li>
					<li class="sub-item"><a href="product.php?quanly=danhmuc&id=4">Hoa chia buồn</a></li>
				</ul>
			</li>
			<li class="list-item"><a href="about.php">Về chúng tôi</a></li>
		</ul>

		<ul class="list js-list">
			<li class="list-item js-icon-menu"><i class="fa-solid fa-bars" style="font-size: 20px; font-weight: 600; line-height: 80px"></i></li>	
		<ul>

		<ul class="list">
	<?php 
		if(isset($_SESSION['dangnhapuser']))
		{
	?>	
			
			<li class="list-item">
				<a href="product.php?quanly=thongtinuser">
					<i class="far fa-user-circle" style="font-size: 20px; font-weight: 600; line-height: 80px"></i>
				</a>
				<ul class="sub-list">
					<li class="sub-item"><a href="product.php?quanly=thongtinuser">Thông tin</a></li>
					<li class="sub-item"><a href="product.php?quanly=lichsudathang">Đơn hàng</a></li>
					<li class="sub-item"><a href="product.php?dangxuatuser=1">Đăng xuất</a></li>
				</ul>	
			</li>
	<?php 
		}
		else
		{
	?>
			<li class="list-item">
				<a href="product.php?quanly=dangky">
					<i class="fas fa-sign-in-alt" style="font-size: 20px; font-weight: 600; line-height: 80px"></i>
				</a>
			</li>
	<?php 
		}
	?>				
		</ul>


	</div>

	<div class="modal">
		<ul class="list-mb js-list-mb">
			<li class="list-item list-item-mb"><a href="index.php">Trang chủ <i class="fa-solid fa-house"></i></a></li>
			<li class="list-item list-item-mb"><a href="product.php?quanly=danhmuc&id=all">Sản phẩm <i class="fa-solid fa-bag-shopping"></i></a></li>
			<?php 
			if(isset($_SESSION['dangnhapuser']))
			{
			?>	
			<li class="list-item list-item-mb"><a href="product.php?quanly=thongtinuser">Thông tin <i class="fa-solid fa-user"></i></a></li>
			<li class="list-item list-item-mb"><a href="product.php?quanly=lichsudathang">Đơn hàng <i class="fa-solid fa-receipt"></i></a></li>
			<li class="list-item list-item-mb"><a href="product.php?dangxuatuser=1">Đăng xuất <i class="fa-solid fa-right-from-bracket"></i></a></li>
			<?php 
			}
			else{
			echo '<li class="list-item list-item-mb"><a href="product.php?quanly=dangky">Đăng ký <i class="fa-solid fa-user-plus"></i></a></li>';
			}
			?>
		</ul>
	</div>
		<div class="header-ghost" style="height: 80px"></div>
<!-- ------------CONTAINER--------------- -->
	<div class="page-style2">
		<div class="grid wide container">
			<div class="row">
				<div class="col c-12">
					<div class="container">
						<div class="card-content">
						<h3>B E A U T Y</h3>
							<p>Thiết kế: Võ Nguyễn Phúc Ngân</p>
							<p style="margin-top: -10px;">Hổ trợ phát triển: Trần Thiên Vạn</p>
							<p>Website cung cấp các kiểu hoa phục vụ cho nhu cầu khách hàng, luôn có sẳn các sản phẩm hoa mới nhất, đẹp nhất và chất lượng nhất.</p>
							<img src="img\logo2.png" alt="">
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>		

<!-- ------------FOOTER--------------- -->
		<div class="page-style2  bg-blur">
	<div class="grid wide container">
		<div class="row">
			<div class="col l-3 c-6">
				<div class="footer-col">
					<h3>Thông tin liên lạc</h3>
					<ul>
						<li>Phone: 0834011xxx</li>
						<li>Gmail: xxxxxx@gmail.com</li>	
					</ul>
				</div>
			</div>
			<div class="col l-3 c-6">
				<div class="footer-col">
					<h3>Địa chỉ cơ sở</h3>
					<ul>
						<li>Châu Thành, Bến Tre, Việt Nam</li>
						<li>Mỹ Tho, Tiền Giang, Việt Nam</li>	
					</ul>
				</div>
			</div>
			<div class="col l-3 c-6">
				<div class="footer-col">
					<h3>Sản phẩm</h3>
					<ul>
						<li><a href="product.php?quanly=danhmuc&id=1">Hoa cưới</a></li>
						<li><a href="product.php?quanly=danhmuc&id=2">Hoa trang trí</a></li>
						<li><a href="product.php?quanly=danhmuc&id=3">Hoa chúc mừng</a></li>
						<li><a href="product.php?quanly=danhmuc&id=4">Hoa chia buồn</a></li>
					</ul>
				</div>
			</div>
			<div class="col c-3">
				<div class="footer-col">
					<h3>Theo dõi chúng tôi</h3>
					<div class="linkfl">
						<a href="https://www.facebook.com/nagn.ov.50" target="_blank"><i class="fab fa-facebook">  Facebook</i></a>
						<a href="https://www.instagram.com/nagn.ov/" target="_blank"><i class="fab fa-instagram">  Instagram</i></a>	
						<a href="https://www.youtube.com/channel/UC9X1m3ctdwIxCVEJ29Ph0aw" target="_blank"><i class="fab fa-youtube">  Youtube</i></a>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>			
	</div>
	<script src="js\javascrip.js"></script>
</body>
</html>