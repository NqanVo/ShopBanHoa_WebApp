
<?php 

	if(isset($_SESSION['cart']))
	{

	}
	if(!isset($_SESSION['dangnhapuser']))
	{
		$account_user = "";
	}
	else
		$account_user = $_SESSION['dangnhapuser'];
?>
<div class="row">
	<div class="col l-12 c-12">
		<div class="card__cart">
			<div class="card-cart-box">
				
				<?php 
				if(isset($_SESSION['cart'])&&$account_user)
				{
				?>
				<div class="cart-cart-status">
					<div class="arrow-steps clearfix">
						<div class="step current"> <span> <a href="product.php?quanly=cart" >Cart</a></span> </div>
						<div class="step"> <span><a href="#" >Transport</a></span> </div>
						<div class="step"> <span><a href="#" >Payment</a><span> </div>
						<div class="step"> <span><a href="#" >Detail</a><span> </div>
					</div>
				</div>
				<?php 
				}
				else{
				?>
				<div class="cart-cart-status">
				 	<div class="arrow-steps clearfix">
						<div class="step current"> <span> <a href="product.php?quanly=cart" >Cart</a></span> </div>
					</div>
				</div>
				<?php 
				}
				?>


				<div class="card-cart-box-content">
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
									<a href="module/main/addcart.php?tru=<?php echo $cart_item['id'] ?>"><i class="fas fa-minus-circle" style="color:#cc8a8a;"></i></a>
									<?php echo $cart_item['soluong'] ?>
									<a href="module/main/addcart.php?cong=<?php echo $cart_item['id'] ?>"><i class="fas fa-plus-circle" style="color:#cc8a8a;"></i></a>
										
								</li>
								<li>Mã sản phẩm: <?php echo $cart_item['masanpham'] ?></li>
								<li><a href="module/main/addcart.php?xoa=<?php echo $cart_item['id'] ?>"><input type="submit" name="" value="Xóa" style="width: 50px; background-color: #c54d4d; color: white; border: none; height: 20px; border-radius: 10px;" class="input3"></a></li>
							</ul>
						</div>
					</div>
							
				<?php 
						}		
				?>		
					<div class="card-cart-box-content-xoaall">
						<a href="module/main/addcart.php?xoatatca=1">Xóa tất cả</a>
					</div>
				</div>

				<div class="card-cart-box-thanhtoan">
					<div class="card-cart-box-thanhtoan-item">
						<div class="card__cart__thanhtoan__item__text">
							<h1>Thành tiền: <?php echo number_format($tongtien,0,',',',') ?> đ</h1>
						</div>
						<div class="card-cart-box-thanhtoan-item-btn">	
							<?php  
							if(isset($_SESSION['dangnhapuser']))
							{
							?>					
							<a href="product.php?quanly=vanchuyen"><input type="submit" name="nextvanchuyen" value="Hình thức vận chuyển" class="btn-buy btn-success"></a>				
							<?php				
							}
							else
							{
							?>
							<script language="javascript">confirm("Bạn cần đăng nhập để đặt hàng!");</script>
							<a href="product.php?quanly=dangnhapuser"><input type="submit" name="dangkyuser" value="Đăng nhập" class="btn-buy btn-success"></a>
							<?php 
							}
							?>
						</div>	
					</div>
				</div>
				<?php 
				}
				else
				{
				?>			
				<div class="card-cart-box-content-item">
					<div class="card__cart__content__item__trong">
						<h1>Hiện giỏ hàng trống <i class="fas fa-shopping-cart"></i></h1>
					</div>
				</div>
				<?php 
				}
				?>
			</div>
		</div>
	</div>
</div>

 