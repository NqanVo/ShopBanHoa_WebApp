<?php
	include("config/config.php");
	//chart_don
		//tong don st_hd = 0-1-2
		$tong_don_query_daduyet = mysqli_query($mysqli,"SELECT COUNT(status_hoadon) FROM hoadon WHERE status_hoadon=0");//da duyet
		$tong_don_query_donmoi = mysqli_query($mysqli,"SELECT COUNT(status_hoadon) FROM hoadon WHERE status_hoadon=1");//don moi
		$tong_don_query_dahuy = mysqli_query($mysqli,"SELECT COUNT(status_hoadon) FROM hoadon WHERE status_hoadon=2");//da huy

 		$val_daduyet = mysqli_fetch_array($tong_don_query_daduyet);
 		$val_donmoi = mysqli_fetch_array($tong_don_query_donmoi);
 		$val_dahuy = mysqli_fetch_array($tong_don_query_dahuy);

		$row_daduyet = $val_daduyet['COUNT(status_hoadon)'];
		$row_donmoi = $val_donmoi['COUNT(status_hoadon)'];
		$row_dahuy = $val_dahuy['COUNT(status_hoadon)'];

		if($row_daduyet=='')
		{
			$row_daduyet = 0;
		}
		if($row_donmoi=='')
		{
			$row_donmoi = 0;
		}
		if($row_dahuy=='')
		{
			$row_dahuy = 0;
		}
	
	//chart_don
		//tong don st_trans_hd = 0-1-2-3-''
		$tong_don_query_chuanbihang = mysqli_query($mysqli,"SELECT COUNT(status_transport_hoadon) FROM hoadon WHERE status_transport_hoadon=0");//chuan bi hang
		$tong_don_query_dangvanchuyen = mysqli_query($mysqli,"SELECT COUNT(status_transport_hoadon) FROM hoadon WHERE status_transport_hoadon=1");//dang van chuyen
		$tong_don_query_danhanhang = mysqli_query($mysqli,"SELECT COUNT(status_transport_hoadon) FROM hoadon WHERE status_transport_hoadon=2");//da nhan hang
		$tong_don_query_dahuy = mysqli_query($mysqli,"SELECT COUNT(status_transport_hoadon) FROM hoadon WHERE status_transport_hoadon=3");//da huy
		$tong_don_query_doiduyetdon = mysqli_query($mysqli,"SELECT COUNT(status_transport_hoadon) FROM hoadon WHERE status_transport_hoadon=''");//doi duyet don

 		$val_chuanbihang = mysqli_fetch_array($tong_don_query_chuanbihang);
 		$val_dangvanchuyen = mysqli_fetch_array($tong_don_query_dangvanchuyen);
 		$val_danhanhang = mysqli_fetch_array($tong_don_query_danhanhang);
 		$val_dahuyvanchuyen = mysqli_fetch_array($tong_don_query_dahuy);
 		$val_doiduyetdon = mysqli_fetch_array($tong_don_query_doiduyetdon);

		$row_chuanbihang = $val_chuanbihang['COUNT(status_transport_hoadon)'];
		$row_dangvanchuyen  = $val_dangvanchuyen['COUNT(status_transport_hoadon)'];
		$row_danhanhang = $val_danhanhang['COUNT(status_transport_hoadon)'];
		$row_dahuyvanchuyen = $val_dahuyvanchuyen['COUNT(status_transport_hoadon)'];
		$row_doiduyetdon = $val_doiduyetdon['COUNT(status_transport_hoadon)'];

		if($row_chuanbihang=='')
		{
			$row_chuanbihang = 0;
		}
		if($row_dangvanchuyen=='')
		{
			$row_dangvanchuyen = 0;
		}
		if($row_danhanhang=='')
		{
			$row_danhanhang = 0;
		}
		if($row_dahuyvanchuyen=='')
		{
			$row_dahuyvanchuyen = 0;
		}
		if($row_doiduyetdon=='')
		{
			$row_doiduyetdon = 0;
		}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="module/css/styleadmin.css">
	<link type=”text/css” rel=”stylesheet” href=”css/font-awesome.min.css” />
	<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>

<?php 
	session_start();
	// unset($_SESSION['loginadmin']);
	if (!isset($_SESSION['loginadmin'])) {
		header('Location:login.php');
	}
 ?>

<body>
<div class="main">
	<div class="header">
		<?php
			include("config/config.php");
			include("module/header.php");
			include("module/menu.php");
		?>		
	</div>

	<div class="container">
		
		<?php
			include("config/config.php");
			include("module/main.php");
		?>
		
	</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<!-- chart_doanhthu -->
	<script type="text/javascript">
		$(document).ready(function(){
			thongke();
			var char = new Morris.Area({
				element: 'chart',
				
				xkey: 'date',
				// ykeys: ['order','sales','quantity'],
				// labels: ['Tổng đơn','Doanh thu','Số lượng bán ra']
				ykeys: ['order','sales'],
				labels: ['Tổng đơn','Doanh thu']
			});
			

			$('.select-date').change(function(){
					var thoigian = $(this).val();
					if(thoigian=='7ngay'){
						var text = '7 ngày qua';
					}else if(thoigian=='28ngay'){
						var text = '28 ngày qua';
					}else if(thoigian=='90ngay'){
						var text = '90 ngày qua';
					}else{
						var text = '365 ngày qua';
					}

					$.ajax({
							url:"module/thongke.php",
							method:"POST",
							dataType:"JSON",
							data:{thoigian:thoigian},
							success:function(data)
							{
								char.setData(data);
								$('#text-date').text(text);
							}   
						});
				})

			function thongke(){
			var text = '365 ngày qua';
			$('#text-date').text(text);
				$.ajax({
					url:"module/thongke.php",
					method:"POST",
					dataType:"JSON",
					success:function(data)
					{
						char.setData(data);
						$('#text-date').text(text);
					}   
				});
			}
		});
	</script>

	<!-- chart_don -->
	<script type="text/javascript">
		var char = new Morris.Donut({
			element: 'chart_donut_don',
			data: 
			[
				{label: "Da xu ly", value: <?php echo $row_daduyet ?>},
				{label: "Da huy", value: <?php echo $row_dahuy ?>},
				{label: "Don moi", value: <?php echo $row_donmoi ?>}
			]
		});
	</script>

	<!-- chart_vanchuyen -->
	<script type="text/javascript">
			var char = new Morris.Donut({
			element: 'chart_donut_vanchuyen',
			pointFillColors: ['Red'],
			data: 
			[
				{label: "Chuan bi hang", value: <?php echo $row_chuanbihang ?>},
				{label: "Van chuyen", value: <?php echo $row_dangvanchuyen ?>},
				{label: "Da nhan", value: <?php echo $row_danhanhang ?>},
				{label: "Da huy", value: <?php echo $row_dahuyvanchuyen ?>},
				{label: "Doi duyet", value: <?php echo $row_doiduyetdon ?>}
			]
		});
	</script>

</div>
</body>
</html>