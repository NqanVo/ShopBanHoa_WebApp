<?php 
	include('../../config/config.php');
	$tieude = $_POST['title_baiviet'];
	$noidung = $_POST['noidungbaiviet'];
	$ngayviet = $_POST['ngayvietbaiviet'];
	$tinhtrang = $_POST['tinhtrang'];

	$anhbaiviet = $_FILES['anhbaiviet']['name'];
	$anhbaiviet_tmp = $_FILES['anhbaiviet']['tmp_name'];
	$anhbaiviet = time().'_'.$anhsanpham;


	if(isset($_POST['luubaiviet']))
	{
		$sql_them = "INSERT INTO baiviet(img_baiviet,title_baiviet,content_baiviet,status_baiviet,ngayviet) VALUES('".$anhbaiviet."','".$tieude."','".$noidung."','".$tinhtrang."','".$ngayviet."')";
		mysqli_query($mysqli,$sql_them);
		move_uploaded_file($anhbaiviet_tmp,'uploads/'.$anhbaiviet);
		header('Location:../../index.php?action=other&query=baiviet');
	}

	elseif(isset($_POST['suabaiviet']))
	{
		if(!empty($_FILES['anhbaiviet']['name']))
		{
			move_uploaded_file($anhbaiviet_tmp,'uploads/'.$anhbaiviet);
				
			$sql_sua = "UPDATE baiviet SET img_baiviet='".$anhbaiviet."',title_baiviet='".$tieude."',content_baiviet='".$noidung."',status_baiviet='".$tinhtrang."',ngayviet='".$ngayviet."' WHERE id_baiviet ='$_GET[idbaiviet]'";
			
			//xoa anh cu sau khi sua
			$sql = "SELECT * FROM baiviet WHERE id_baiviet = '$_GET[idbaiviet]' LIMIT 1";
			$query = mysqli_query($mysqli, $sql);
			while ($row = mysqli_fetch_array($query))
			{
				unlink('uploads/'.$row['img_baiviet']);
			}	
			
		}
		else
		{
			$sql_sua = "UPDATE baiviet SET title_baiviet='".$tieude."',content_baiviet='".$noidung."',status_baiviet='".$tinhtrang."',ngayviet='".$ngayviet."' WHERE id_baiviet ='$_GET[idbaiviet]'";
		}
		
		mysqli_query($mysqli,$sql_sua);
		header('Location:../../index.php?action=other&query=baiviet');
		
	}

	else
	{
		$id = $_GET['idbaiviet'];
		$sql = "SELECT * FROM baiviet WHERE id_baiviet = '$id' LIMIT 1";
		$query = mysqli_query($mysqli, $sql);
		while ($row = mysqli_fetch_array($query))
		{
			unlink('uploads/'.$row['img_baiviet']);
		}
		$sql_xoa = "DELETE FROM baiviet WHERE id_baiviet ='".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('Location:../../index.php?action=other&query=baiviet');
	}

 ?>