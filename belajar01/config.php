<?php 	
		//('DB_SERVER','localhost');
		//('DB_USERNAME','root');
		// define('DB_PASSWORD','');
		// define('DB_NAME','informatika');

		// $link=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
		// if($link=== false){
		// 	die("erorr : could not connect.".mysqli_connect_error());
		// }
 ?>


 <?php 
$koneksi = mysqli_connect("localhost","root","","informatika");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>