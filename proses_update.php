<?php
if (isset($_POST['update'])) {
    $nip        = $_POST['nip'];
    $nama       = $_POST['nama'];
    $tgl        = $_POST['tgl'];
    $alamat     = $_POST['alamat'];
    $kota       = $_POST['kota'];
    $kontak     = $_POST['kontak'];
    $departemen = $_POST['departemen'];
    
   

    include_once 'koneksi.php';
    
    $proses = mysqli_query($mysqli,"UPDATE karyawan SET nama='$nama', tgl='$tgl', alamat='$alamat', kota='$kota', kontak='$kontak',departemen='$departemen'
    where nip='$nip'");
    
    if ($proses) {
        echo "<script> alert('Data berhasil di Update');";
         header('location:basic_table.php');
    }
    else{
        echo "<script> alert('Data gagal di Update');";
    }
}
?>