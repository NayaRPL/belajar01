<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$angkatan = $_POST['angkatan'];
$alamat = $_POST['alamat'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim',angkatan='$angkatan', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>