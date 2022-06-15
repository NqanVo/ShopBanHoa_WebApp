<?php
	$sql_danhmuc = "SELECT * FROM danhmuc ORDER BY madanhmuc ASC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
?>
<form action="product.php?quanly=timkiem" method="POST">	
	<div class="headersp">
		<div class="navbar_2">	
			<ul class="list2">
				<!-- PC menu -->
				<li class="list2-item">
						<select  name="locgia" style="border:none;">
								<option value="0">Sắp xếp giá</option>
								<option value="1">Cao đến thấp  </option>
								<option value="2" >Thấp đến cao </option>
						</select>
				</li>
				<li class="list2-item" style="width: 250px;">
					<input type="text" placeholder="Tìm kiếm sản phẩm..." name="keywork" style="height: 30px; border: none; border-bottom: 1px solid black;">
					<button type="submit" name="search" style="width: 70px; line-height: 30px; border: none; border-bottom: 1px solid black; background-color: white; cursor: pointer;">
					<i class="fas fa-search" style="background-color: white; height: 30px; line-height: 30px;"></i>
					</button>
				</li>

				
					
				<li class="list2-item"><a href="product.php?quanly=danhmuc&id=all" class="a">Tất cả</a></li>
				<?php
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) 
				{ 
				?>
					<li class="list2-item"><a href="product.php?quanly=danhmuc&id=<?php echo $row_danhmuc['madanhmuc'] ?>" class="a"><?php echo $row_danhmuc['name'] ?></a></li>
				<?php 
				}
				 ?>
				<li class="list2-item"><a href="product.php?quanly=cart" class="a" style="color: red"><i class="fas fa-cart-plus" style="font-size: 1.8rem; line-height: 40px; color: green;"></i></a></li>
			</ul>

			<!-- Mobile menu -->
			<ul class="list2">
				<li class="list2-item js-filter">
					Bộ lọc <i class="fa-solid fa-filter"></i>
				</li>
			</ul>
			<div class="filter .filter-open">
				<ul class="list2-filter">
					<li class="list2-item">
						<i class="fa-solid fa-xmark close-filter"></i>
					</li>
					<li class="list2-item">
							<select  name="locgia-mb" style="border:none;"  >
									<option value="0">Sắp xếp giá</option>
									<option value="1">Cao đến thấp  </option>
									<option value="2" >Thấp đến cao </option>
							</select>
					</li>
					<li class="list2-item" style="width: 250px;">
						<input type="text" placeholder="Tìm kiếm sản phẩm..." name="keywork-mb" style="height: 30px; border: none; border-bottom: 1px solid black;">
						<button type="submit" name="search-mb" style="width: 20%; line-height: 30px; border: none; border-bottom: 1px solid black; background-color: white; cursor: pointer;"><i class="fas fa-search" style="background-color: white; height: 30px; line-height: 30px;"></i></button>
					</li>
						
					<li class="list2-item"><a href="product.php?quanly=danhmuc&id=all" class="a">Tất cả</a></li>
					<?php
					while($row_danhmuc = mysqli_fetch_array($query_danhmuc)) 
					{ 
					?>
						<li class="list2-item"><a href="product.php?quanly=danhmuc&id=<?php echo $row_danhmuc['madanhmuc'] ?>" class="a"><?php echo $row_danhmuc['name'] ?></a></li>
					<?php 
					}
					 ?>
					<li class="list2-item"><a href="product.php?quanly=cart" class="a">Giỏ hàng<i class="fas fa-cart-plus" style="font-size: 1.8rem; line-height: 40px; color: green;"></i></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</form>
	









		


