<?php
include 'koneksi.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Origin');
if (isset($_POST['delete'])) {
		extract($_POST);
		$res = array();
		$del = mysqli_query($k, "DELETE FROM tb_biodata WHERE id='$id'");
		if ($del) {
			$res['pesan'] = 'Berhasil Dihapus';
		}else{
			$res['pesan'] = 'Gagal';
		}
	echo	json_encode($res);

}