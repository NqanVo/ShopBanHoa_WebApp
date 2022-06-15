<?php 

	if($_SESSION['dangnhapuser'])
	{
		$account_user = $_SESSION['dangnhapuser'];
		$id_user = $_SESSION['id_user'];
		
	}
	$sql_info = "SELECT * FROM users where users.id_user = '".$id_user."' limit 1";
	$query_info = mysqli_query($mysqli,$sql_info);
	$row_info = mysqli_fetch_array($query_info);

 ?>

<form method="POST" action="module/main/xuly-infouser.php?iduser=<?php echo $row_info['id_user'] ?>">
<div class="row" style="margin-top: 10px">
	<div class="col l-12 c-12">
		<div class="container__cart__info">
			<div class="container__cart__info__header">
				<div class="container__cart__info__header__left">
					<h1>Tài khoản: <?php echo $account_user ?></h1>
				</div>
				<a href="?quanly=suamkuser&iduser=<?php echo$row_info['id_user'] ?>">
					<div class="container__cart__info__header__right">
						<i class="fas fa-key"></i>
					</div>
				</a>
			</div>
			
			<div class="container__cart__info__content">
				<div class="card__dangky-box-form-group">
					<h3>ID</h3>
					<input type="text" placeholder="Ngan Vo" class="input-form" disabled value="<?php echo $row_info['id_user'] ?>">
					<span class="message-error"></span>
				</div>
				<div class="card__dangky-box-form-group">
					<h3>Họ tên</h3>
					<input type="text" placeholder="Ngan Vo" class="input-form" value="<?php echo $row_info['name_user'] ?>" name="name_user">
					<span class="message-error"></span>
				</div>
				<div class="card__dangky-box-form-group">
					<h3>Gmail</h3>
					<input type="text" placeholder="Ngan Vo" class="input-form" value="<?php echo $row_info['gmail_user'] ?>" name="gmail_user">
					<span class="message-error"></span>
				</div>
				<div class="card__dangky-box-form-group">
					<h3>Số điện thoại</h3>
					<input type="text" placeholder="Ngan Vo" class="input-form" value="<?php echo $row_info['phone_user'] ?>" name="phone_user">
					<span class="message-error"></span>
				</div>
				<div class="card__dangky-box-form-group">
					<h3>Địa chỉ</h3>
					<input type="text" placeholder="Ngan Vo" class="input-form" value="<?php echo $row_info['address_user'] ?>" name="address_user">
					<span class="message-error"></span>
				</div>
			</div>

			<div class="container__cart__info__button">
				<input type="submit" name="luuinfo" value="Lưu" class="btn-sign btn-success">
				<input type="submit" name="huychinhsua" value="Hủy" class="btn-sign">
			</div>
		</div>
	</div>
</div>
</form>