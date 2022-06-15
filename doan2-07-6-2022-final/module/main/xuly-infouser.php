<?php 
	include('../../Admin/config/config.php');
	$name_user = $_POST['name_user'];
	$gmail_user = $_POST['gmail_user'];
	$phone_user = $_POST['phone_user'];
	$address_user = $_POST['address_user'];
	if(isset($_POST['luuinfo']))
	{
		$sql_sua_info = "UPDATE users SET name_user='".$name_user."',gmail_user='".$gmail_user."',phone_user='".$phone_user."',address_user='".$address_user."' WHERE id_user ='$_GET[iduser]'";
		mysqli_query($mysqli,$sql_sua_info);
		header('Location:../../product.php?quanly=thongtinuser');

	}
	elseif(isset($_POST['huychinhsua']))
	{
		header('Location:../../product.php?quanly=thongtinuser');
	}


 ?>