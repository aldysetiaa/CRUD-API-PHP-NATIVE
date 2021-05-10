<?php
include 'koneksi.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Origin');
if (isset($_POST['insert'])) {
		extract($_POST);
		$res = array();
		$ins = mysqli_query($k, "INSERT INTO tb_biodata (nama_lengkap,tempat_lahir, tanggal_lahir, email, phone, pekerjaan, gaji) VALUES ('$nama','$tempat','$tgl','$email','$phone','$pekerjaan','$gaji')");
		if ($ins) {
			$res['pesan'] = 'Berhasil';
		}else{
			$res['pesan'] = 'Gagal';
		}
	echo	json_encode($res);

}