<?php 
	if(isset($_GET['trang']))
	{
		$page = $_GET['trang'];
	}
	else
	{
		$page = '';
	}

	if($page == '' || $page == 1)
	{
		$begin = 0;
	}
	else
	{
		$begin = ($page*12)-12;
	}
	$sql_sanpham = "SELECT * FROM danhmuc,sanpham where sanpham.madanhmuc = danhmuc.madanhmuc and sanpham.madanhmuc='$_GET[id]' ORDER BY sanpham.id_sanpham ASC limit $begin,12";
	$query_sanpham = mysqli_query($mysqli,$sql_sanpham);

	$sql_trang = mysqli_query($mysqli,"SELECT * from sanpham");
	$row_count = mysqli_num_rows($sql_trang);
	$trang = ceil($row_count/12);
?>


<div class="fage">
		<form action="product.php?trang=<?php echo $i ?>" method="GET"></form>
		<div class="navbar_2">		
			<ul class="list">Trang
			<?php 
				for($i =1; $i <= $trang; $i++) 
				{

			 ?>
					<li class="list-item"><a href="product.php?trang=<?php echo $i ?>" style="text-decoration: none; color: white;"><?php echo $i ?></a></li>
			<?php 
				}
			 ?>
			</ul>

		</div>
	</div>