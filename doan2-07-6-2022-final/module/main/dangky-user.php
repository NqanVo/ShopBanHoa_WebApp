<?php 
	if(isset($_POST['dangkyuser']))
	{
		$tennguoidung = $_POST['nameuser'];
		$gmailnguoidung = $_POST['gmailuser'];
		$diachinguoidung = $_POST['addressuser'];
		$sdtnguoidung = $_POST['phoneuser'];
		$tknguoidung = $_POST['accountuser'];
		$mknguoidung = md5($_POST['passworduser']);
		$sql_dangkyuser = mysqli_query($mysqli, "INSERT into users(name_user,gmail_user,account_user,password_user,phone_user,address_user) values ('".$tennguoidung."','".$gmailnguoidung."','".$tknguoidung."','".$mknguoidung."','".$sdtnguoidung."','".$diachinguoidung."')");
		if($sql_dangkyuser)
		{
			// $_SESSION['dangkyuser'] = $tknguoidung;
?>
			<script>alert("Đăng ký thành công!");</script>;
<?php
			header('Location:product.php?quanly=dangnhapuser');			
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
						<h3>Họ tên</h3>
						<input type="text" class="input-form" name="nameuser" required="">
						<span class="message-error"></span>
					</div>
					<div class="card__dangky-box-form-group">
						<h3>Email</h3>
						<input type="email" class="input-form" name="gmailuser" required="">
						<span class="message-error"></span>
					</div>
					<div class="card__dangky-box-form-group">
						<h3>Số điện thoại</h3>
						<input type="text" class="input-form" name="phoneuser" required="">
						<span class="message-error"></span>
					</div>
					<div class="card__dangky-box-form-group">
						<h3>Địa chỉ</h3>
						<input type="text" Vietnam" class="input-form" name="addressuser" required="">
						<span class="message-error"></span>
					</div>
					<div class="card__dangky-box-form-group">
						<h3>Tài khoản</h3>
						<input type="text" placeholder="" class="input-form" name="accountuser" required="">
						<span class="message-error"></span>
					</div>
					<div class="card__dangky-box-form-group">
						<h3>Mật khẩu</h3>
						<input type="password" placeholder="" class="input-form" name="passworduser" required="">
						<span class="message-error"></span>
					</div>
					
					<input type="submit" name="dangkyuser" value="Đăng ký" class="btn-sign">
					<br>
					<span class="card__dangky-box-note">Bạn đã có tài khoản? <a href="product.php?quanly=dangnhapuser">Đăng nhập</a></span>
					<div class="space"></div>
				</div>
			</div>
		</div>
	</div>
</form>