<?php 
	if(isset($_GET['action'])=='taikhoan' && $_GET['query']=='dangxuat')
	{
		unset($_SESSION['loginadmin']);
		header('Location:login.php');
	}
 ?>
<div class="header__menu">
			<ul class="header__menu__list">
				<li class="header__menu__list__item"><a href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a></li>
				<li class="header__menu__list__item"><a href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a></li>
				<li class="header__menu__list__item"><a href="index.php?action=quanlyuser&query=them">Quản lý người dùng</a></li>
				<li class="header__menu__list__item"><a href="index.php">Thống kê</a></li>
				<li class="header__menu__list__item">Other <i class="fas fa-chevron-down"></i>
					<ul class="header__menu__list__item_subitem">
						<li class="header__menu__list__item_subitem__item"><a href="index.php?action=other&query=support">Hòm thư</a></li>
						<li class="header__menu__list__item_subitem__item"><a href="index.php?action=other&query=baiviet">Bài viết</a></li>
						<!-- <li class="header__menu__list__item_subitem__item"><a href="index.php?action=taikhoan&query=them">Tài khoản</a></li> -->
						<li class="header__menu__list__item_subitem__item"><a href="index.php?action=taikhoan&query=dangxuat">Đăng xuất</a></li>
					</ul>
				</li>
				<!-- <li class="header__menu__list__item"><a href="index.php?action=taikhoan&query=them">Tài khoản</a></li>
				<li class="header__menu__list__item"><a href="index.php?action=taikhoan&query=dangxuat">Đăng xuất: <?php 
					//if(isset($_SESSION['loginadmin']))
					{
					//	echo $_SESSION['loginadmin'];
					}
					 ?></a>
				</li> -->
			</ul>
		</div>