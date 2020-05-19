<html>
<head>
	<title>Daftar Pendaftar</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<div id="a">
		<h1 style="text-align: center;">Daftar Pelamar Pekerjaan</h1>
	<table class="table1" >
		<thead>
			<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Minat Pelatihan</th>
		</tr>
		</thead>
		<tbody>
			 <?php 
                  include 'koneksi.php';
                  $result = mysqli_query($db1,"SELECT * FROM biodata JOIN pelatihan ON biodata.id_pelatihan = pelatihan.id_pelatihan JOIN provinsi ON biodata.id_prov = provinsi.id_prov JOIN kabupaten ON biodata.id_kab = kabupaten.id_kab JOIN kecamatan ON biodata.id_kec=kecamatan.id_kec JOIN kelurahan ON biodata.id_kel = kelurahan.id_kel") or die (mysql_error());
                  $nomor =  1;
                  while ($row = mysqli_fetch_array($result)){ ?>
                  <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat'].$row['nama_kel'].$row['nama_kec'].$row['nama_kab'].$row['nama_prov']; ?></td>
                    <td><?php echo $row['nama_pel']; ?></td>                    
                  </tr>
                  <?php }?>
		</tbody>
		
		
	</table>	
	</div>
	
</body>
</html>