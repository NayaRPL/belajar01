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
		<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/h.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
		Home
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="https://unsulbar.ac.id/">Unsulbar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tentang
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://unsulbar.ac.id/sejarah/">Sejarah</a></li>
            <li><a class="dropdown-item" href="https://unsulbar.ac.id/visi-misi/">Visi dan Misi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://unsulbar.ac.id/akademik/">Infomasi Akdemik</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div>
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