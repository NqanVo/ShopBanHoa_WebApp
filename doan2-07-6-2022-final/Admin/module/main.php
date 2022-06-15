
<?php
	if(isset($_GET['action']) && $_GET['query'])
	{
		$tam = $_GET['action'];
		$query = $_GET['query'];
	}
	else
	{
		$tam= '';
		$query = '';
	}
//qldanhmuc-sanpham
	if($tam=='quanlysp' && $query=='them')
	{
		include("danhmuc-sanpham/main-product.php");
		include("sanpham/main-product-sp.php");
	}
	elseif($tam=='quanlyspsp' && $query=='sua')
	{
		include("sanpham/suasanpham.php");
		
	}
	elseif($tam=='quanlysp' && $query=='sua')
	{
		include("danhmuc-sanpham/suadanhmuc.php");
		
	}
	elseif($tam=='quanlysp' && $query=='timkiem')
	{
		include("sanpham/timkiemsp.php");
		
	}
//qluser
	elseif($tam=='quanlyuser' && $query=='them')
	{
		include("user/main-user.php");
	}
	elseif($tam=='suamkuser' && $query=='mk')
	{
		include("user/suamkuser.php");
	}

//qldonhang
	elseif($tam=='quanlydonhang' && $query=='lietke')
	{
		include("donhang/main-dh.php");
	}
	elseif($tam=='quanlydh' && $query=='chitiet')
	{
		include("donhang/xemdon.php");
	}
//baiviet
	elseif($tam=='other' && $query=='baiviet')
	{
		include("baiviet/main_baiviet.php");
	}
	elseif($tam=='other' && $query=='baivietsua')
	{
		include("baiviet/suabaiviet.php");
	}
//homthu
	elseif($tam=='other' && $query=='support')
	{
		include("homthu/homthu_lk.php");
	}
	elseif($tam=='other' && $query=='support_chitiet')
	{
		include("homthu/homthu_ct.php");
	}


//qladmin
	elseif($tam=='taikhoan' && $query=='them')
	{
		include("accountadmin/main-acc.php");
	}
	elseif($tam=='taikhoan' && $query=='info')
	{
		include("accountadmin/info-ad.php");
	}


	else
	{
		include("dashboard.php");
	}

?>	
