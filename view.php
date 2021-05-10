<?php
include 'koneksi.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Origin');
if (isset($_POST['view'])) {
		extract($_POST);
		$res = array();
		if (isset($_GET['search'])) {
			$add = "WHERE nama_lengkap LIKE '%$_GET[search]%'";
		}else{
			$add = "";
		}
		$q = mysqli_query($k, "SELECT * FROM tb_biodata $add");
		$bio = array();

		while ($data = mysqli_fetch_array($q)) {
			$bio['id'] = $data['id'];
			$bio['nama_lengkap'] = $data['nama_lengkap'];
			$bio['tempat_lahir'] = $data['tempat_lahir'];
			$bio['tgl_lahir'] = $data['tanggal_lahir'];
			$bio['email'] = $data['email'];
			$bio['phone'] = $data['phone'];
			$bio['pekerjaan'] = $data['pekerjaan'];
			$bio['gaji'] = $data['gaji'];
			 array_push($res, $bio);  
		}
		if ($q) {
			$res['pesan'] = 'Berhasil'; 

		}else{
			$res['pesan'] = 'Gagal';
		}
	echo	json_encode($res);

}