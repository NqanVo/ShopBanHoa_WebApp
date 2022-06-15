<?php 
	include('../../config/config.php');
	$tendanhmucdm = $_POST['tendanhmuc'];
	$madanhmucdm = $_POST['madanhmuc'];
	$ngaytaodm = $_POST['ngaytao'];
	$ngaysuadm = $_POST['ngaysua'];
	if(isset($_POST['luudanhmuc']))
	{
		$sql_them = "INSERT INTO danhmuc(madanhmuc,name,created_at,updated_at) VALUE('".$madanhmucdm."','".$tendanhmucdm."','".$ngaytaodm."','".$ngaysuadm."')";
		mysqli_query($mysqli,$sql_them);
		header('Location:../../index.php?action=quanlysp&query=them');
	}
	elseif(isset($_POST['suadanhmuc']))
	{
		$sql_sua = "UPDATE danhmuc SET madanhmuc='".$madanhmucdm."',name='".$tendanhmucdm."',created_at='".$ngaytaodm."',updated_at='".$ngaysuadm."' WHERE madanhmuc ='$_GET[iddanhmuc]'";
		mysqli_query($mysqli,$sql_sua);
		header('Location:../../index.php?action=quanlysp&query=them');
	}
	else
	{
		$id = $_GET['iddanhmuc'];
		$sql_xoa = "DELETE FROM danhmuc WHERE madanhmuc ='".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=quanlysp&query=them');
	}

 ?>