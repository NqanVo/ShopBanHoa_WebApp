 <?php 

	if(isset($_SESSION['cart']))
	{

	}
	if($_SESSION['dangnhapuser'])
	{
		$account_user = $_SESSION['dangnhapuser'];
		$id_user = $_SESSION['id_user'];
	}
	$sql_user_shipping = mysqli_query($mysqli,"SELECT * from shipping where id_user='$id_user' limit 1");
	$row_user_shipping = mysqli_fetch_array($sql_user_shipping);
?>


<form action="module/main/xulythanhtoan.php" method="POST">
<div class="row">
	<div class="col l-12 c-12">
		<div class="card__cart">
			 <div class="card-cart-box">
			 	<div class="cart-cart-status">
					<div class="arrow-steps clearfix">
						<div class="step done"> <span> <a href="product.php?quanly=cart" >Cart</a></span> </div>
						<div class="step done"> <span><a href="product.php?quanly=vanchuyen" >Transport</a></span> </div>
						<div class="step current"> <span><a href="product.php?quanly=thanhtoan" >Payment</a><span> </div>
						<div class="step"> <span><a href="#" >Detail</a><span> </div>
					</div>
				</div>
				<div class="card-cart-box-content min-height-payment">
					<div class="card-cart-box-content-item">
						<h2>Phương thức thanh toán</h2>
					</div>
					<div class="card-cart-box-content-item">
						<ul class="card-cart-box-content-item-payment-list">
							<label class="form-check-label" for="checktienmat">
								<li class="card-cart-box-content-item-payment-list-item">
									<input class="form-check-input" type="radio" name="payment" id="checktienmat" value="tienmat" checked>
									
									<i class="fa-solid fa-wallet"></i>
									<p>Tiền mặt</p>
								</li>
							</label>
							<label class="form-check-label" for="checkvnpay">
								<li class="card-cart-box-content-item-payment-list-item">
									<input class="form-check-input" type="radio" name="payment" id="checkvnpay" value="vnpay">
									<img src="./img/vnpay-seeklogo.com.svg" alt=""> 
									<p>Chuyển khoản VNPAY</p>
								</li>
							</label>
						</ul>
					</div>
				</div>
				<div class="card-cart-box-content min-height-payment">
					<?php 
					if(isset($_SESSION['cart']))
					{
						$i = 0;
						$tongtien = 0;
						foreach ($_SESSION['cart'] as $cart_item)
						{
							$thanhtien = $cart_item['soluong']*$cart_item['giasanpham'];
							$tongtien+= $thanhtien;
							$i++;
					?>
						<div class="card-cart-box-content-item">
							<h1 class="card-cart-box-content-item-numberle"><?php echo $i ?></h1>
							<div class="card__cart__content__item__img">
								<img src="Admin/module/sanpham/uploads/<?php echo $cart_item['anhsanpham'] ?>" alt="" width="100px" height="100px" style="border-radius: 10px;">
							</div>
							<div class="card__cart__content__item__info">
								<h1><?php echo $cart_item['tensanpham'] ?></h1>
								<ul>
									<li>Giá: <?php echo number_format($cart_item['giasanpham'],0,',',',') ?> đ</li>
									<li>Số lượng: 
										<?php echo $cart_item['soluong'] ?>
									</li>
									<li>Mã sản phẩm: <?php echo $cart_item['masanpham'] ?></li>
								</ul>
							</div>
						</div>
								
					<?php 
							}	
					}	
					?>		
				</div>
				<div class="card-cart-box-thanhtoan">
					<div class="card-cart-box-thanhtoan-item">
						<div class="card__cart__thanhtoan__item__text">
							<h1>Thành tiền: <?php echo number_format($tongtien,0,',',',') ?> đ</h1>
						</div>
						<div class="card-cart-box-thanhtoan-item-btn">
						<a href="#"><input type="submit" name="redirect" value="Thanh toán" class="btn-buy btn-success"></a>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</form>
