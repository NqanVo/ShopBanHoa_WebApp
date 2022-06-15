<?php 
	include('../../config/config.php');
	$tieudesanphamsp = $_POST['tieudesanpham'];
	$masanphamsp = $_POST['masanpham'];
	$giasanphamsp = $_POST['giasanpham'];

	$anhsanpham = $_FILES['anhsanpham']['name'];
	$anhsanpham_tmp = $_FILES['anhsanpham']['tmp_name'];
	$anhsanpham = time().'_'.$anhsanpham;
	
	$noidungsanphamsp = $_POST['noidungsanpham'];
	$sanxuatsanphamsp = $_POST['sanxuatsanpham'];
	$hangsanphamsp = $_POST['hangsanpham'];
	$khosp = $_POST['kho'];
	$tinhtrang = $_POST['tinhtrang'];
	$ngaytaosp = $_POST['ngaytao'];
	$ngaysuasp = $_POST['ngaysua'];
	$madanhmuc = $_POST['madanhmuc'];

	if(isset($_POST['luusanpham']))
	{
		$sql_them = "INSERT INTO sanpham(masanpham,title,gia,img,content,created_at,updated_at,nuocsx,hang,kho,tinhtrang,madanhmuc) VALUE('".$masanphamsp."','".$tieudesanphamsp."','".$giasanphamsp."','".$anhsanpham."','".$noidungsanphamsp."','".$ngaytaosp."','".$ngaysuasp."','".$sanxuatsanphamsp."','".$hangsanphamsp."','".$khosp."','".$tinhtrang."','".$madanhmuc."')";
		mysqli_query($mysqli,$sql_them);
		move_uploaded_file($anhsanpham_tmp,'uploads/'.$anhsanpham);
		header('Location:../../index.php?action=quanlysp&query=them');
	}
	
	elseif(isset($_POST['suasanpham']))
	{
		if(!empty($_FILES['anhsanpham']['name']))
		{
			move_uploaded_file($anhsanpham_tmp,'uploads/'.$anhsanpham);
				
			$sql_sua = "UPDATE sanpham SET masanpham='".$masanphamsp."',title='".$tieudesanphamsp."',gia='".$giasanphamsp."',img='".$anhsanpham."',content='".$noidungsanphamsp."',created_at='".$ngaytaosp."',updated_at='".$ngaysuasp."',nuocsx='".$sanxuatsanphamsp."',hang='".$hangsanphamsp."',kho='".$khosp."',tinhtrang='".$tinhtrang."',madanhmuc='".$madanhmuc."' WHERE id_sanpham ='$_GET[idsanpham]'";
			
			//xoa anh cu sau khi sua
			$sql = "SELECT * FROM sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
			$query = mysqli_query($mysqli, $sql);
			while ($row = mysqli_fetch_array($query))
			{
				unlink('uploads/'.$row['img']);
			}	
			
		}
		else
		{
			$sql_sua = "UPDATE sanpham SET masanpham='".$masanphamsp."',title='".$tieudesanphamsp."',gia='".$giasanphamsp."',content='".$noidungsanphamsp."',created_at='".$ngaytaosp."',updated_at='".$ngaysuasp."',nuocsx='".$sanxuatsanphamsp."',hang='".$hangsanphamsp."',kho='".$khosp."',tinhtrang='".$tinhtrang."',madanhmuc='".$madanhmuc."' WHERE id_sanpham ='$_GET[idsanpham]'";
		}
		
		mysqli_query($mysqli,$sql_sua);
		header('Location:../../index.php?action=quanlysp&query=them');
		
	}
	

	else
	{
		$id = $_GET['idsanpham'];
		$sql = "SELECT * FROM sanpham WHERE id_sanpham = '$id' LIMIT 1";
		$query = mysqli_query($mysqli, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			unlink('uploads/'.$row['img']);
		}
		$sql_xoa = "DELETE FROM sanpham WHERE id_sanpham ='".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=quanlysp&query=them');
	}

 ?>