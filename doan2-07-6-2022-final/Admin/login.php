<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['loginadmin']))
	{
		$tk = $_POST['username'];
		$mk = md5($_POST['userpass']);
		$sql = "SELECT * from admin where account_admin='".$tk."' and password_admin='".$mk."' limit 1";
		$row = mysqli_query($mysqli, $sql);
		$count = mysqli_num_rows($row);
		if($count>0)
		{
			$_SESSION['loginadmin'] = $tk;
			header("Location:index.php");
		}
		else
		{
?>
			<script>alert("Tài khoản hoặc mật khẩu không đúng,vui lòng nhập lại.");</script>
<?php
		}

	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="module/css/stylelogin.css">
	<link type=”text/css” rel=”stylesheet” href=”css/font-awesome.min.css” />
</head>
<body>
	<div class="container">	
			<div class="container__cardlogin">
				<div class="container__cardlogin__header">
					<h1>Đăng nhập Admin</h1>
				</div>
				<form action="" method="POST">
					<div class="container__cardlogin__content">
						<table style="width: 90%; margin: 0 auto;" border="1px">
							<tr>
								<td width="35%">Tên đăng nhập:</td>
								<td><input type="text" name="username" style="width: 99%;"></td>
							</tr>
							<tr>
								<td>Mật khẩu:</td>
								<td><input type="password" name="userpass" style="width: 99%;"></td>
							</tr>
						</table>
					</div>
					<div class="container__cardlogin__foodter">
						<input type="submit" name="loginadmin" value="Đăng nhập">
					</div>
				</form>
			</div>
	</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>