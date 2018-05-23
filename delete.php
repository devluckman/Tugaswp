<?php
include_once 'koneksi.php';
$nip=$_GET['nip'];
$proses = mysqli_query($mysqli,"delete from karyawan where nip='$nip'");
if ($proses) {
    echo "<script> alert ('Data Berhasil Dihapus');";
    header('location:basic_table.php');
 
}
else{
    echo "<script> alert ('Data Gagal Dihapus');";
}


?>