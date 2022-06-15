<?php

	if(isset($_POST['dangnhapuser']))
	{
		$tk = $_POST['account_user'];
		$mk = md5($_POST['password_user']);
		$sql = "SELECT * from users where account_user='".$tk."' and password_user='".$mk."' limit 1";
		$row = mysqli_query($mysqli, $sql);
		$count = mysqli_num_rows($row);
		if($count>0)
		{
			$row_data = mysqli_fetch_array($row);				
			$_SESSION['dangnhapuser'] = $tk;
			$_SESSION['id_user'] = $row_data['id_user'];
			$_SESSION['name_user'] = $row_data['name_user'];
			$_SESSION['phone_user'] = $row_data['phone_user'];
			$_SESSION['address_user'] = $row_data['address_user'];

			header('Location:product.php?quanly=cart');

		}
		else
		{
			echo '<script language="javascript">confirm("Tài khoản hoặc mật khẩu sai!");</script>';
		}
	}
	
 ?>

<form action="" method="POST">
	<div class="row">
		<div class="col l-12 c-12">
			<div class="card__dangky">
				<div class="card__dangky-box">
					<div class="card__dangky-box-heading">
						<h1>BEAUTY</h1>
						<h3>Welcome to the world flowers</h3>
					</div>
					<div class="space"></div>
					<div class="card__dangky-box-form-group">
						<h3>Tài khoản</h3>
						<input type="text" placeholder="" class="input-form" name="account_user" required="">
						<span class="message-error"></span>
					</div>
					<div class="card__dangky-box-form-group">
						<h3>Mật khẩu</h3>
						<input type="password" placeholder="" class="input-form" name="password_user" required="">
						<span class="message-error"></span>
					</div>
					
					<input type="submit" name="dangnhapuser" value="Đăng nhập" class="btn-sign">
					<br>
					<span class="card__dangky-box-note">Bạn chưa có tài khoản? <a href="product.php?quanly=dangky">Đăng ký</a></span>
					<div class="space"></div>
				</div>
			</div>
		</div>
	</div>
</form>