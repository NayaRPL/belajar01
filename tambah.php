<?php 
include 'config.php';
$nama= $_POST['nama'];
$nim = $_POST['nim'];
$angkatan= $_POST['angkatan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$angkatan','$alamat')");

header("location:index.php");

?>