<div class="container">
<h1 style="text-align: center; margin-top: 10px;">Thống kê</h1>

	<p style="font-size: 1.5rem; margin-top: 20px; margin-left: 15%;">
		Thống kê đơn hàng theo: <span id="text-date"></span>
	</p>
	<p>
		<select class="select-date" style="font-size: 1.2rem; margin-top: 10px; margin-left: 15%;">
			<option value="7ngay">7 ngày</option>
			<option value="28ngay">30 ngày</option>
			<option value="90ngay">90 ngày</option>
			<option value="365ngay">365 ngày</option>
		</select>
	</p>
	<div class="thongke">
		<div id="chart" style="height: 250px; z-index: 1;"></div>
	</div>
	<div class="thongke" style="display:flex;">
		<div id="chart_donut_don" style="height: 250px;"></div>
		<div class="thongke_info" style="padding:20px">
			<p style="padding:10px">Tổng đơn mới: <a href="index.php?action=quanlydonhang&query=lietke"><span style="color:#EB5DB2"><?php echo $row_donmoi ?></span></a></p>
			<p style="padding:10px">Tổng đơn đã xử lý: <a href="index.php?action=quanlydonhang&query=lietke"><span style="color:#50c535"><?php echo $row_daduyet ?></span></a></p>
			<p style="padding:10px">Tổng đơn đã hủy: <a href="index.php?action=quanlydonhang&query=lietke"><span style="color:#fc5252;"><?php echo $row_dahuy ?></span></a></p>
		</div>
	</div>
	<div class="thongke" style="display:flex;">
		<div id="chart_donut_vanchuyen" style="height: 250px;"></div>
		<div class="thongke_info" style="padding:20px">
			<p style="padding:10px">Tổng đợi duyệt: <a href="index.php?action=quanlydonhang&query=lietke"><span style="color:#EB5DB2"><?php echo $row_doiduyetdon ?></span></a></p>
			<p style="padding:10px">Tổng đơn đang chuẩn bị hàng: <a href="index.php?action=quanlydonhang&query=lietke"><span style="color:black"><?php echo $row_chuanbihang ?></span></a></p>
			<p style="padding:10px">Tổng đơn đang vận chuyển: <a href="index.php?action=quanlydonhang&query=lietke"><span style="color:#3585c5;"><?php echo $row_dangvanchuyen ?></span></a></p>
			<p style="padding:10px">Tổng đơn đã giao: <a href="index.php?action=quanlydonhang&query=lietke"><span style="color:#50c535;"><?php echo $row_danhanhang ?></span></a></p>
			<p style="padding:10px">Tổng đơn đã hủy: <a href="index.php?action=quanlydonhang&query=lietke"><span style="color:#fc5252;"><?php echo $row_dahuyvanchuyen ?></span></a></p>
		</div>
	</div>
</div>
