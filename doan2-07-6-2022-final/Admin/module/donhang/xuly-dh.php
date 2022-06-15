<?php 
	use Carbon\Carbon;
    use Carbon\CarbonInterval;
	include('../../config/config.php');
    require('../../../carbon/autoload.php');
    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

    $status =  $_GET['status'];
    $date_old_select = "SELECT ngay_thongke FROM thongke ORDER BY ngay_thongke DESC LIMIT 1";
    $date_old_query = mysqli_query($mysqli,$date_old_select);
    $date_old_array = mysqli_fetch_array($date_old_query);
    $date_old = $date_old_array['ngay_thongke'];


	if(isset($_GET['codehoadon']) && $status =='duyetdon')
	{
		$codehoadon = $_GET['codehoadon'];
        $sql_update ="UPDATE hoadon SET status_hoadon=0,status_transport_hoadon=0 WHERE id_hoadon='".$codehoadon."'";
		$query = mysqli_query($mysqli,$sql_update);
        


        $sql_lietke_dh = "SELECT * FROM chitiethoadon,sanpham WHERE chitiethoadon.id_sanpham=sanpham.id_sanpham AND chitiethoadon.id_hoadon='$codehoadon' ORDER BY chitiethoadon.id_chitiethoadon DESC";
        $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);


    

        $sql_thongke = "SELECT * FROM thongke WHERE ngay_thongke='$now'"; 
        $query_thongke = mysqli_query($mysqli,$sql_thongke);

        $soluongmua = 0;
        $doanhthu = 0;
        while($row = mysqli_fetch_array($query_lietke_dh)){
              $soluongmua+=$row['soluong_sp'];
              
              //$doanhthu+=$row['gia'];
              $thanhtien = $row['gia']*$row['soluong_sp'];
              $doanhthu += $thanhtien;
        }

        if(mysqli_num_rows($query_thongke)==0){
                $soluongban = $soluongmua;
                $doanhthu = $doanhthu;
                $donhang = 1;
                $sql_update_thongke = mysqli_query($mysqli,"INSERT INTO thongke (ngay_thongke,soluongbanra_thongke,doanhthu_thongke,tongdon_thongke) VALUE('$now','$soluongban','$doanhthu','$donhang')" );
        }elseif(mysqli_num_rows($query_thongke)!=0){
            while($row_tk = mysqli_fetch_array($query_thongke)){
                $soluongban = $row_tk['soluongbanra_thongke']+$soluongban;
                $doanhthu = $row_tk['doanhthu_thongke']+$doanhthu;
                $donhang = $row_tk['tongdon_thongke']+1;
                $sql_update_thongke = mysqli_query($mysqli,"UPDATE thongke SET soluongbanra_thongke='$soluongban',doanhthu_thongke='$doanhthu',tongdon_thongke='$donhang' WHERE ngay_thongke='$now'" );
            }
        }

		header('Location:../../index.php?action=quanlydonhang&query=lietke');
	}
    else if(isset($_GET['codehoadon']) && $status =='huydon')
	{
		$codehoadon = $_GET['codehoadon'];
        $sql_update ="UPDATE hoadon SET status_hoadon=2,status_transport_hoadon=3 WHERE id_hoadon='".$codehoadon."'";
		$query = mysqli_query($mysqli,$sql_update);

		header('Location:../../index.php?action=quanlydonhang&query=lietke');
	}
    else if(isset($_GET['codehoadon']) && $status =='huydondaduyet')
	{
		$codehoadon = $_GET['codehoadon'];
        $sql_update ="UPDATE hoadon SET status_hoadon=2,status_transport_hoadon=3 WHERE id_hoadon='".$codehoadon."'";
		$query = mysqli_query($mysqli,$sql_update);


        $sql_lietke_dh = "SELECT * FROM chitiethoadon,sanpham WHERE chitiethoadon.id_sanpham=sanpham.id_sanpham AND chitiethoadon.id_hoadon='$codehoadon' ORDER BY chitiethoadon.id_chitiethoadon DESC";
        $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);


    

        $sql_thongke = "SELECT * FROM thongke WHERE ngay_thongke='$date_old'"; 
        $query_thongke = mysqli_query($mysqli,$sql_thongke);

        $soluongmua = 0;
        $doanhthu = 0;
        while($row = mysqli_fetch_array($query_lietke_dh)){
              $soluongmua+=$row['soluong_sp'];
              
              //$doanhthu+=$row['gia'];
              $thanhtien = $row['gia']*$row['soluong_sp'];
              $doanhthu += $thanhtien;
        }

        //huy don khi da duyet
        if(mysqli_num_rows($query_thongke)!=0){
            while($row_tk = mysqli_fetch_array($query_thongke)){
                $soluongban = $row_tk['soluongbanra_thongke']-$soluongban;
                $doanhthu = $row_tk['doanhthu_thongke']-$doanhthu;
                $donhang = $row_tk['tongdon_thongke']-1;
                $sql_update_thongke = mysqli_query($mysqli,"UPDATE thongke SET soluongbanra_thongke='$soluongban',doanhthu_thongke='$doanhthu',tongdon_thongke='$donhang' WHERE ngay_thongke='$date_old'" );
            }
        }

		header('Location:../../index.php?action=quanlydonhang&query=lietke');
	}

 ?>