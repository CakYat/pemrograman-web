<?php
$k = mysqli_connect("localhost","root","","datamhs");
 
//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()){
	echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
echo "Koneksi sukses";
// mysqli_close($koneksi);
?>