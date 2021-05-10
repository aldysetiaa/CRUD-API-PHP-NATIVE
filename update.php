<?php
include 'koneksi.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Origin');
if (isset($_POST['update'])) {
		extract($_POST);
		$res = array();
		$qry = mysqli_query($k, "UPDATE tb_biodata SET nama_lengkap='$nama', tempat_lahir='$tempat', tanggal_lahir='$tgl', email='$email', phone='$phone', pekerjaan='$pekerjaan', gaji='$gaji' WHERE id='$id'");
		if ($qry) { 
			$res['pesan'] = 'Berhasil';

		}else{
			$res['pesan'] = 'Gagal';
		}
	echo	json_encode($res);

}