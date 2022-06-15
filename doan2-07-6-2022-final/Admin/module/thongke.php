<?php 
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    include('../config/config.php');
    require('../../carbon/autoload.php');

    if(isset($_POST['thoigian'])){
    	$thoigian = $_POST['thoigian'];
	}else{
		$thoigian = '';
		$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();	
	}


	if($thoigian=='7ngay'){
    	$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
	}elseif($thoigian=='28ngay'){
    	$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(28)->toDateString();
	}elseif($thoigian=='90ngay'){
    	$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(90)->toDateString();
	}elseif($thoigian=='365ngay'){
		$subdays = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();	
	}

	$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString(); 

	//chart_doanhthu
		$sql = "SELECT * FROM thongke WHERE ngay_thongke BETWEEN '$subdays' AND '$now' ORDER BY ngay_thongke ASC";
		$sql_query = mysqli_query($mysqli,$sql);

		while($val = mysqli_fetch_array($sql_query)){

			$chart_data[] = array(
				'date' => $val['ngay_thongke'],
				'order' => $val['tongdon_thongke'],
				'sales' => $val['doanhthu_thongke'],
				'quantity' => $val['soluongbanra_thongke']

			);
		}
		// print_r($chart_data);
		echo $data = json_encode($chart_data);
 ?>
