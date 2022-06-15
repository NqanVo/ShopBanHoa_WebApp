<?php 

	if($_SESSION['dangnhapuser'])
	{
		$account_user = $_SESSION['dangnhapuser'];
		$id_user = $_SESSION['id_user'];
		
	}
	$sql_info = "SELECT * FROM users where users.id_user = '".$id_user."' limit 1";
	$query_info = mysqli_query($mysqli,$sql_info);
	$row_info = mysqli_fetch_array($query_info);
	


	if(isset($_POST['suamkuser']))
	{
		// $tk = $_POST['account_user'];
		$tk = $account_user;
		$mk_cu = md5($_POST['mkcu']);
		$mk_moi = md5($_POST['mkmoi']);
		$re_mk_moi = md5($_POST['remkmoi']);
		$thongbao ="Đổi mật khẩu thành công!";
		$sql = "SELECT * from users where id_user='".$id_user."' and password_user='".$mk_cu."' limit 1";
		$row = mysqli_query($mysqli, $sql);
		$count = mysqli_num_rows($row);
		$loi ="";
		if($count>0)
		{
			if($mk_moi == $re_mk_moi)
			{
				$sql_update = mysqli_query($mysqli, "UPDATE users set password_user='".$mk_moi."' where id_user='".$id_user."'");

				echo "<script>alert('Đổi mật khẩu thành công!');</script>;";
				// header('Location:Product.php?quanly=thongtinuser');
				
			}
			else
			{
?>
				<script>alert('Mật khẩu mới và nhập lại mật khẩu không trùng nhau');</script>;	
<?php			
			}

		}
		else
		{
?>
			<script>alert('Mật khẩu cũ sai!');</script>;
<?php
		}
	}
	elseif(isset($_POST['huychinhsua']))
	{
		header('Location:product.php?quanly=thongtinuser');
	}

 ?>




<form method="POST" action="">
<div class="row" style="margin-top: 10px">
	<div class="col l-12 c-12">
		<div class="container__cart__info">
			<div class="container__cart__info__header">
				<div class="container__cart__info__header__left">
					<h1>Tài khoản: <?php echo $account_user ?></h1>
				</div>
			</div>

			<div class="container__cart__info__content">
				<div class="card__dangky-box-form-group">
					<h3>ID</h3>
					<input type="text" placeholder="Ngan Vo" class="input-form" disabled value="<?php echo $row_info['id_user'] ?>">
					<span class="message-error"></span>
				</div>
				<div class="card__dangky-box-form-group">
					<h3>Mật khẩu cũ</h3>
					<input type="password" class="input-form" name="mkcu">
					<span class="message-error"></span>
				</div>
				<div class="card__dangky-box-form-group">
					<h3>Mật khẩu mới</h3>
					<input type="password" class="input-form" name="mkmoi">
					<span class="message-error"></span>
				</div>
				<div class="card__dangky-box-form-group">
					<h3>Nhập lại mật khẩu mới</h3>
					<input type="password" class="input-form" name="remkmoi">
					<span class="message-error"></span>
				</div>
			</div>

			<div class="container__cart__info__button">
				<input type="submit" name="suamkuser" value="Lưu" class="btn-sign btn-success">
				<input type="submit" name="huychinhsua" value="Hủy" class="btn-sign">
			</div>

		</div>
	</div>
</div>
</form>