<?php 
	session_start();

	if(isset($_GET['dangxuatuser']) && $_GET['dangxuatuser'] == 1)
	{
		unset($_SESSION['dangnhapuser']);
		header('Location:index.php');

	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>BEAUTY</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="css\grid.css">
	<link rel="stylesheet" type="text/css" href="css\style.css">
	<link rel="stylesheet" type="text/css" href="css\responsive.css">
	<link rel="icon" href="img\logo2.png">
	

	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<style type="text/css">

	</style>
</head>
<body>
<div class="hero">

	<?php 	include("Admin/config/config.php"); ?>

<!-- ------------HEARDER--------------- -->
		<?php 
			include("module_index/header_index.php");
		 ?>

<!-- ------------CONTAINER--------------- -->
		<?php 
			include("module_index/container_index.php");
		 ?>

<!-- ------------FOOTER--------------- -->
		<?php 
			include("module_index/footer_index.php");
		 ?>
     <?php 
			include("mess.php");
		 ?> 
	
</div>
<script src="./js/javascrip.js"></script>
</body>
</html>