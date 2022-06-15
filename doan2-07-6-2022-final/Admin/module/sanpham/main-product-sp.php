<?php 
	$sql_lietke_sanpham = "SELECT * FROM sanpham ORDER BY id_sanpham ASC";
	$query_lietke_sanpham = mysqli_query($mysqli,$sql_lietke_sanpham);
 ?>
<div class="card__main">

	<?php
		include("themsanpham.php");
		
	?>
</div>
<?php
		
		include("lietkesanpham.php");
	?>

