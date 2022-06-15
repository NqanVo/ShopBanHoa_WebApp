<?php 
	session_start();
	// unset($_SESSION['cart']);
	if(isset($_GET['dangxuatuser']) && $_GET['dangxuatuser'] == 1)
	{
		unset($_SESSION['dangnhapuser']);
		header('Location:index.php');

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BEAUTY Product</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	
	<link rel="stylesheet" type="text/css" href="css\grid.css">
	<link rel="stylesheet" type="text/css" href="css\styleprod.css">
	<link rel="stylesheet" type="text/css" href="css\responsive.css">

	<link rel="icon" href="img\logo2.png">
	

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type=”text/css” rel=”stylesheet” href=”css/font-awesome.min.css” />

</head>
<body>
		<?php include("Admin/config/config.php"); ?>
	<div class="hero">
		<?php
			include("module/header.php");
		?>
		<div class="header-ghost" style="height: 80px"></div>
		<?php 
			include("module/menu.php");

			include("module/main.php");

			include("module/footer.php");

			include("mess.php");
		 ?>
	</div>

<script src="./js/javascrip.js"></script>
</body>
</html>