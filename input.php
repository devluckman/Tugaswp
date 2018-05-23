<?php 
 include 'koneksi.php';
 
 $nip = $_POST['nip'];
 $nama = $_POST['nama'];
 $tgl = $_POST['tgl'];
 $alamat = $_POST['alamat'];
 $kota = $_POST['kota'];
 $kontak = $_POST['kontak'];
 $departemen = $_POST['departemen'];

 $proses = mysqli_query($mysqli,"INSERT INTO karyawan (nip, nama, tgl, alamat, kota, kontak, departemen) values('$nip','$nama', '$tgl', '$alamat', '$kota', '$kontak','$departemen')");

 if ($proses) {
 	echo "<script> alert('Data Berhasil Di Input');</script>";
 	header('location:basic_table.php');
 }
 ?>
