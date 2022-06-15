<?php 
	$sql_lietke_baiviet = "SELECT * FROM baiviet";
	$query_lietke_baiviet = mysqli_query($mysqli,$sql_lietke_baiviet);
 ?>

<div class="header-ghost" style="height: 80px"></div>
<div class="grid wide container">
	<div class="row">
		<div class="col c-12">
			<div class="slider">	
			<?php 
				while($row_chitiet = mysqli_fetch_array($query_lietke_baiviet))
				{
					if($row_chitiet['status_baiviet']==1)
					{
			 ?>			
			 <a href="index.php?trangchu=banner&id=<?php echo $row_chitiet['id_baiviet'] ?>">
					<div class="slider-img">
						<img src="Admin/module/baiviet/uploads/<?php echo $row_chitiet['img_baiviet'] ?>" alt="Không có ảnh">
						
					</div>
					<div class="slider-title">
						<h1><?php echo $row_chitiet['title_baiviet'] ?></h1>
					</div>
			<?php 
					}
				}
			 ?>	
			 </a>
			</div>
		</div>
	</div>
</div>

