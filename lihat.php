<?php 
	echo "<head><title>Hasil Pengiriman</title></head>";
	$fp=fopen("file.txt","r");
	echo "<table border=0>";

	while ($isi = fgets($fp))
	{
		$pisah=explode("|", $isi);
		echo "<tr><td>Nama Pengirim</td><td>: $pisah[0]</td></tr>";
		echo "<tr><td>Nama Penerima</td><td>: $pisah[1]</td></tr>";
		echo "<tr><td>Alamat</td><td>: $pisah[2]</td></tr>";
		echo "<tr><td>No Telepon</td><td>: $pisah[3]</td></tr>";
		echo "<tr><td>Jarak</td><td>: $pisah[4]</td></tr>";
		echo "<tr><td>Keterangan</td><td>: $pisah[5]</td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
	}

	echo "</table>";
	echo "<a href=responsi.html>Klik Disini </a> Isi ";
?>