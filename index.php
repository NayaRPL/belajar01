<!DOCTYPE html>
<html>

<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>

<body>


</body>

</html>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>

<body>
	<div class="container">
		<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
		<br />
		<a href="tambahdata.php">+ TAMBAH MAHASISWA</a>
		<br />
		<br />
		<table class="table table-striped table-hover">
			<tr>
				<th>NO</th>
				<th>nama</th>
				<th>nim</th>
				<th>angkatan</th>
				<th>alamat</th>
				<th>opsi</th>
			</tr>
			<?php
			include 'config.php';
			$no = 1;
			$data = mysqli_query($koneksi, "select * from mahasiswa");
			while ($d = mysqli_fetch_array($data)) {
			?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['nim']; ?></td>
					<td><?php echo $d['angkatan']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td>
						<a class="btn btn-success" href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
						<a class="btn btn-danger"  href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
					</td>
				</tr>
			<?php
			}
			?>
		</table>


	</div>


	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>