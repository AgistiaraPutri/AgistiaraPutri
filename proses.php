<?php 
	$nama = $_POST['nama'];
	$nama_pengirim = $_POST['nama_pengirim'];
	$nama_penerima = $_POST['nama_penerima'];
	$alamat = $_POST['alamat'];
	$no = $_POST['no_tlp'];
	$jarak = $_POST['jarak'];
	$keterangan = $_POST['keterangan'];
	$biaya = $jarak * 5000;
	$Tanggal = date("Y-m-d");

	echo "<center><h1>Terima Kasih telah menggunakan Jasa Pengiriman GISCO</h1></center>";
	$fp = fopen("file.txt", "a+");
	fputs($fp, "$Tanggal|$nama_pengirim|$nama_penerima|$alamat|$no|$jarak|$keterangan|$biaya\n");
	fclose($fp);
?>
