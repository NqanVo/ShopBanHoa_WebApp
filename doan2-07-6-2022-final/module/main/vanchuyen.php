<?php 
	if($_SESSION['dangnhapuser'])
	{
		$account_user = $_SESSION['dangnhapuser'];
		$id_user = $_SESSION['id_user'];
	}
	$sql_info = "SELECT * FROM users where users.id_user = '".$id_user."' limit 1";
	$query_info = mysqli_query($mysqli,$sql_info);
	$row_info = mysqli_fetch_array($query_info);


	if(isset($_POST['nextthanhtoan']))
	{
		ob_start();
		ob_flush();

		header('Location:product.php?quanly=thanhtoan');
	}
	elseif(isset($_POST['vanchuyen_update']))
	{
		$name = $_POST['name_shipping'];
		$phone = $_POST['phone_shipping'];
		$address = $_POST['address_shipping'];
		$node = $_POST['node_shipping'];

		$sql_vanchuyen_update = mysqli_query($mysqli,"UPDATE shipping SET name_shipping='$name', phone_shipping='$phone', address_shipping='$address', node_shipping='$node' where id_user='$id_user'");
		if($sql_vanchuyen_update)
		{
			header("refresh: 1");
			echo '<script>alert("Cập nhật địa chỉ thành công!")</script>';
		}
	}
	elseif(isset($_POST['vanchuyen_insert']))
	{
		$name = $_POST['name_shipping'];
		$phone = $_POST['phone_shipping'];
		$address = $_POST['address_shipping'];
		$node = $_POST['node_shipping'];

		$sql_vanchuyen_insert = mysqli_query($mysqli,"INSERT into shipping(name_shipping,phone_shipping,address_shipping,node_shipping,id_user) values ('$name','$phone','$address','$node','$id_user')");
		if($sql_vanchuyen_insert)
		{
			echo '<script>alert("Thêm địa chỉ thành công!")</script>';
			
		}
	}
?>


<form action="" autocomplete="off" method="POST">
<div class="row">
	<div class="col l-12 c-12">
	 	<div class="card__cart">
			 <div class="card-cart-box">
				<div class="cart-cart-status">
					<div class="arrow-steps clearfix">
						<div class="step done"> <span> <a href="product.php?quanly=cart" >Cart</a></span> </div>
						<div class="step current"> <span><a href="product.php?quanly=vanchuyen" >Transport</a></span> </div>
						<div class="step"> <span><a href="#" >Payment</a><span> </div>
						<div class="step"> <span><a href="#" >Detail</a><span> </div>
					</div>
				</div>
			
	 		<div class="card-cart-box-content">
	 			<div class="card-cart-box-content-item" style="display:flex; flex-direction: column;">
					<div class="card__dangky-box-form-group">
						<h3>Họ tên</h3>
						<input type="text" placeholder="Ngan Vo" class="input-form" name="name_shipping" required="" value="<?php echo $row_info['name_user'] ?>">
						<span class="message-error"></span>
					</div>
					<div class="card__dangky-box-form-group">
						<h3>Số điện thoại</h3>
						<input type="text" placeholder="Ngan Vo" class="input-form" name="phone_shipping" required="" value="<?php echo $row_info['phone_user'] ?>">
						<span class="message-error"></span>
					</div>
					<div class="card__dangky-box-form-group">
						<h3>Địa chỉ</h3>
						<input type="text" placeholder="Ngan Vo" class="input-form" name="address_shipping" required="" value="<?php echo $row_info['address_user'] ?>">
						<span class="message-error"></span>
					</div>
					<div class="card__dangky-box-form-group">
						<h3>Ghi chú</h3>
						<?php 
						$sql_user_shipping = mysqli_query($mysqli,"SELECT * from shipping where id_user='$id_user' limit 1");
						$row_user_shipping = mysqli_fetch_array($sql_user_shipping);
						$count_row_user_shipping = mysqli_num_rows($sql_user_shipping);
						if($count_row_user_shipping>0)
						{
						 ?>
							<textarea rows="10" name="node_shipping" class="input-form"><?php echo $row_user_shipping['node_shipping'] ?></textarea>
								<script>
								CKEDITOR.replace( 'noidung' );
								</script>
						<?php 
						}else{
						 ?>
						 	<textarea rows="10" name="node_shipping" class="input-form"></textarea>
					    	<script>
	                        CKEDITOR.replace( 'noidung' );
	                		</script>
	                	<?php 
	                	}
	                	 ?>
						<span class="message-error"></span>
					</div>
	 			</div>	
			</div>
				
			<div class="card-cart-box-thanhtoan">
				<div class="card-cart-box-thanhtoan-item">
					<div class="card-cart-box-thanhtoan-item-btn">
						<?php 
							$sql_check_iduser_shipping = mysqli_query($mysqli,"SELECT * from shipping where id_user='$id_user' limit 1");
							$count = mysqli_num_rows($sql_check_iduser_shipping);
							if($count>0)
							{					
						?>
							<a href="#"><input type="submit" name="vanchuyen_update" value="Cập nhật địa chỉ" class="btn-buy btn-success"></a> 
							<a href="#"><input type="submit" name="nextthanhtoan" value="Thanh toán" class="btn-buy btn-success"></a>
						<?php 
							}
							else{
						?>
							<a href="#"><input type="submit" name="vanchuyen_insert" value="Thêm địa chỉ" class="btn-buy btn-success"></a>
						<?php 
						}
						?>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>

</form>