<?php 
	session_start();
	include('../../Admin/config/config.php');
//themsl
	if(isset($_GET['cong']))
	{
		$id=$_GET['cong'];
		foreach ($_SESSION['cart'] as $cart_item)
		{
			if($cart_item['id']!=$id)
			{
				$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $cart_item['soluong'],'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );
				$_SESSION['cart'] = $sp;
			}
			else
			{
				$tangsoluong = $cart_item['soluong'] + 1;
				if ($cart_item['soluong'] <=19) 
				{
					$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $tangsoluong,'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );	
				}
				else
				{
					$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $cart_item['soluong'],'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );
				}
				$_SESSION['cart'] = $sp;

			}
		}
		header('location:../../product.php?quanly=cart');

	}

//trusl
	if(isset($_GET['tru']))
	{
		$id=$_GET['tru'];
		foreach ($_SESSION['cart'] as $cart_item)
		{
			if($cart_item['id']!=$id)
			{
				$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $cart_item['soluong'],'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );
				$_SESSION['cart'] = $sp;
			}
			else
			{
				$tangsoluong = $cart_item['soluong'] - 1;
				if ($cart_item['soluong'] >1) 
				{
					$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $tangsoluong,'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );	
				}
				else
				{
					$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $cart_item['soluong'],'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );
				}
				$_SESSION['cart'] = $sp;

			}
		}
		header('location:../../product.php?quanly=cart');

	}	

//xoasp
	if(isset($_SESSION['cart']) && isset($_GET['xoa']))
	{
		$id = $_GET['xoa'];
		foreach ($_SESSION['cart'] as $cart_item)
		{
			if($cart_item['id']!=$id)
			{
				$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $cart_item['soluong'],'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );
			}
			$_SESSION['cart'] = $sp;
			header('location:../../product.php?quanly=cart');
		}
	}

//xoatatca
	if(isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1)
	{
		unset($_SESSION['cart']);
		header('location:../../product.php?quanly=cart');
	}

//themsp
	if(isset($_POST['themgiohang']))
	{
		// session_destroy();
		$id = $_GET['idsanpham'];
		$soluong = 1;
		$sql = "SELECT * FROM sanpham where id_sanpham='".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row)
		{
			$new_sp = array(array('tensanpham'=>$row['title'],'id'=>$id,'giasanpham'=> $row['gia'],'soluong'=>$soluong,'anhsanpham'=>$row['img'],'masanpham'=>$row['masanpham']));
			if(isset($_SESSION['cart']))
			{
				$found = false;
				foreach ($_SESSION['cart'] as $cart_item) 
				{
					if($cart_item['id'] == $id)
					{
						$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $soluong+1,'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );
						$found = true;
					}
					else
					{
						$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $cart_item['soluong'] ,'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );
						
					}
				}
				if($found == false)
				{
					$_SESSION['cart'] = array_merge($sp, $new_sp);
				}
				else
				{
					$_SESSION['cart'] = $sp;
				}
			}
			else
			{
				$_SESSION['cart'] = $new_sp; 
			}
		
		}

		// echo '<script>alert("Thêm thành công!");</script>;';
		// echo header("refresh: 1");
		echo header('location:../../product.php?quanly=danhmuc&id=all');
		
	}

//muangay
	if(isset($_POST['muangay']))
	{
		// session_destroy();
		$id = $_GET['idsanpham'];
		$soluong = 1;
		$sql = "SELECT * FROM sanpham where id_sanpham='".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row)
		{
			$new_sp = array(array('tensanpham'=>$row['title'],'id'=>$id,'giasanpham'=> $row['gia'],'soluong'=>$soluong,'anhsanpham'=>$row['img'],'masanpham'=>$row['masanpham']));
			if(isset($_SESSION['cart']))
			{
				$found = false;
				foreach ($_SESSION['cart'] as $cart_item) 
				{
					if($cart_item['id'] == $id)
					{
						$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $soluong+1,'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );
						$found = true;
					}
					else
					{
						$sp[] = array('tensanpham' => $cart_item['tensanpham'],'id' => $cart_item['id'], 'giasanpham' => $cart_item['giasanpham'], 'soluong' => $cart_item['soluong'] ,'anhsanpham' => $cart_item['anhsanpham'], 'masanpham' => $cart_item['masanpham'] );
						
					}
				}
				if($found == false)
				{
					$_SESSION['cart'] = array_merge($sp, $new_sp);
				}
				else
				{
					$_SESSION['cart'] = $sp;
				}
			}
			else
			{
				$_SESSION['cart'] = $new_sp; 
			}
		
		}
		header('location:../../product.php?quanly=cart');
		
	}	
 ?>
 <script type="text/javascript"></script>