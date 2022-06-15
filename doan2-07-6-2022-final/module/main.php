<div class="page-style2">
	<div class="grid wide container">
		<?php
			if(isset($_GET['quanly']))
			{
				$tam = $_GET['quanly'];
				
				
			}
			else
			{
				$tam= '';
				

			}
			//product
			if($tam=='danhmuc')
			{
				include("main/index.php");
			}
			elseif($tam=='cart')
			{
				include("main/cart.php");
			}
			elseif($tam=='vanchuyen')
			{
				include("main/vanchuyen.php");
			}
			elseif($tam=='thanhtoan')
			{
				include("main/thanhtoan.php");
			}
			elseif($tam=='chitietcart')
			{
				include("main/chitietcart.php");
			}
			elseif($tam=='thanks')
			{
				include("main/thanks.php");
			}
			elseif($tam=='sanpham')
			{
				include("main/chitietsp.php");
			}
			elseif($tam=='timkiem')
			{
				include("main/timkiem.php");
			}

			//user
			elseif($tam=='dangky')
			{
				include("main/dangky-user.php");
			}
			elseif($tam=='dangnhapuser')
			{
				include("main/dangnhap-user.php");
			}
			elseif($tam=='thongtinuser')
			{
				include("main/infouser.php");
			}
			elseif($tam=='lichsudathang')
			{
				include("main/lichsudathang.php");
			}
			elseif($tam=='chitietlichsudathang')
			{
				include("main/chitietlichsudathang.php");
			}
			elseif($tam=='suathongtinuser')
			{
				include("main/sua-infouser.php");
			}
			elseif($tam=='field=gia&sort=desc')
			{
				include("main/theogia.php");
			}
			elseif($tam=='suamkuser')
			{
				include("main/sua-mk-infouser.php");
			}
			else
			{
				include("main/index.php");
				
			}
			

		?>
	</div>
</div>
