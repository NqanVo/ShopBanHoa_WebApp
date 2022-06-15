<?php 

	$id_user = $_GET['iduser'];
	$sql_info = "SELECT * FROM users where users.id_user = '".$id_user."' limit 1";
	$query_info = mysqli_query($mysqli,$sql_info);
	$row_info = mysqli_fetch_array($query_info);


	if(isset($_POST['suamkuser']))
	{
		// $tk = $_POST['account_user'];
		$tk = $account_user;
		$mk_moi = md5($_POST['mkmoi']);
		$sql = "SELECT * from users where id_user='".$id_user."' limit 1";
		$row = mysqli_query($mysqli, $sql);
		$count = mysqli_num_rows($row);
		if($count>0)
		{
			$sql_update = mysqli_query($mysqli, "UPDATE users set password_user='".$mk_moi."' where id_user='".$id_user."'");
			
?>
			<script>alert("Đổi mật khẩu thành công!");</script>;
<?php	
			header('Location:index.php?action=quanlyuser&query=them');
			

		}
	}
	else if (isset($_POST['huychinhsua']))
		header('Location:index.php?action=quanlyuser&query=them');
 ?>

<div class="container">
	<div class="container__cart__info">
		<form method="POST" action="">
		<div class="container__cart__info__content">
			<table width="60%" style="font-size: 1.3rem; margin: 0 auto;">
				<tr style="height: 30px;">
					<td width="50%" style="border-bottom: 1px solid black;">ID:</td>
					<td style="border-bottom: 1px solid black;"><input type="text" placeholder="<?php echo $row_info['id_user'] ?>" style="border: none; height: 20px;" disabled></td>
				</tr>
				<tr style="height: 30px;">
					<td width="50%" style="border-bottom: 1px solid black;">Khách hàng:</td>
					<td style="border-bottom: 1px solid black;"><input type="text" placeholder="<?php echo $row_info['name_user'] ?>" style="border: none; height: 20px;" disabled></td>
				</tr>
				<tr style="height: 30px;">
					<td width="50%" style="border-bottom: 1px solid black;">Mật khẩu mới:</td>
					<td style="border-bottom: 1px solid black;"><input type="text" style="border: none; height: 20px;" name="mkmoi" size="100%"></td>
				</tr>
			</table>
		</div>
		<div class="container__cart__info__button" style="text-align: center;">
			<input type="submit" name="suamkuser" value="Lưu" style="background-color: #7adc6f; width: 60px; height: 30px;">
			<input type="submit" name="huychinhsua" value="Hủy" style="background-color: #ef7272; width: 60px; height: 30px;">
		</div>
		</form>
	</div>
</div>