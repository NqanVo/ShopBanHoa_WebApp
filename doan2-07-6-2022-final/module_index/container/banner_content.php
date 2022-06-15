<?php 
	$sql_chitiet = "SELECT * FROM baiviet where id_baiviet ='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	$row_chitiet = mysqli_fetch_array($query_chitiet);
 ?>


<div class="header-ghost" style="height: 80px"></div>
<div class="grid wide container">
	<div class="row">
		<div class="col c-12">
			<div class="slider">
				<div class="slider-img">
					<img src="Admin/module/baiviet/uploads/<?php echo $row_chitiet['img_baiviet'] ?>" alt="Không có ảnh">		
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col c-12">
			<div class="slider__form_content_layout">
				<div class="slider__form_content__title">
					<h1><?php echo $row_chitiet['title_baiviet'] ?></h1>
				</div>
				<div class="slider__formt_content__content2">
					<p>
						<?php echo $row_chitiet['content_baiviet'] ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>