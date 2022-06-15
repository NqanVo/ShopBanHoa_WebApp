<?php 
	include("../../Admin/config/config.php");
	if (isset($_POST['guihotro']))
	{
		$hoten = $_POST['hoten'];
		$gioitinh = $_POST['gioitinh'];
		$sdt = $_POST['sdt'];
		$noidung = $_POST['noidung'];
		$sql = "INSERT into hotro(hoten,gioitinh,sdt,noidung,status_hotro) values('".$hoten."','".$gioitinh."','".$sdt."','".$noidung."','1')";
		$query_sql = mysqli_query($mysqli, $sql);
		header('Location:../../index.php');
	}
	
 ?>