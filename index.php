<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Barista</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>


</head>
<body>
	<div id="container">
		<div id="side-left">
			<img src="./assets/barista.jpg">
		</div>
		<div id="side-right">
			<form action="proses_simpan_data.php" method="POST" >
				<h1>FORM PENDAFTARAN</h1>
				<div class="form-group" >
					<label for="name">Nama Lengkap</label>
					<input class="form-control" type="text" name="name" id="name" required>
				</div>
				<div class="form-group" >
					<label for="name">Alamat Lengkap</label>
					<input class="form-control" type="text" name="alamat" id="alamat" required>
				</div>
				<div class="form-group">
					<label for="name">Tanggal Lahir</label>
					<input class="form-control" type="date" name="tgl" id="tgl" required>
				</div>
				<div class="form-group">
					<label for="name">Gender &nbsp;</label>

					<input type="radio" name="gender" id="gender" value="Pria" required>
					<label for="male">Pria</label>
					<input type="radio" name="gender" id="gender" value="Wanita" required>
					<label for="female">Wanita</label>
				</div>
				<div class="row">
			<div >
			<div class="form-group col-sm-6" >
				<label>Provinsi</label>
				<select class="form-control" name="provinsi" id="provinsi">
					<option value=""> Pilih Provinsi</option>
				</select>
			</div>
			
			<div class="form-group col-sm-6" >
				<label>Kabupaten</label>
				<select class="form-control" name="kabupaten" id="kabupaten">
					<option value=""></option>
				</select>
			</div>
 
			<div class="form-group col-sm-6">
				<label>Kecamatan</label>
				<select class="form-control" name="kecamatan" id="kecamatan">
					<option value=""></option>
				</select>
			</div>
 
			<div class="form-group col-sm-6">
				<label>Kelurahan</label>
				<select class="form-control" name="kelurahan" id="kelurahan">
					<option value=""></option>
				</select>
			</div>
 
		</div>
	</div>
			<div class="form-group" >
					<label for="name">No Telepon</label>
					<input class="form-control" type="text" name="tlp" id="tlp" required>
				</div>
				<div class="form-group" >
					<label for="name">Email</label>
					<input class="form-control" type="text" name="email" id="email" required>
				</div>
				<div class="form-group">
					<label for="name">Instagram/IG</label>
					<input class="form-control" type="text" name="ig" id="ig" required>
				</div>
				<div class="form-group" >
					<label for="name">Facebook/FB</label>
					<input class="form-control" type="text" name="fb" id="fb" required>
				</div>
				<div class="form-group" >
					<label for="name">Whatsapp/WA</label>
					<input class="form-control" type="text" name="wa" id="wa" required>
				</div>
				<div class="form-group">
					<label for="name">Tertarik Pelatihan</label>
					<select  class="form-control" name="plt">
						<?php
    			include 'koneksi.php';
    			$query = mysqli_query($db1,"SELECT * FROM pelatihan ");
   			 while ($list = mysqli_fetch_array($query)) { ?>
    		 <option  value="<?php echo $list['id_pelatihan'];?>"><?php echo $list['nama_pel'];?></option>
    			<?php }?></select>
					
				</div>
				<div class="form-group">
					<label for="name">Keterangan Tambahan</label>
					<input class="form-control" type="text" name="ket" id="ket" required>
				</div>
	<hr>
		<input type="submit" value="Daftar" class="btn btn-primary btn-block">
			</form>
		</div>
	</div>

</body>
<script type="text/javascript">
	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "get_provinsi.php",
          	cache: false, 
          	success: function(msg){
              $("#provinsi").html(msg);
            }
        });
 
      	$("#provinsi").change(function(){
      	var provinsi = $("#provinsi").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_kabupaten.php",
              	data: {provinsi: provinsi},
              	cache: false,
              	success: function(msg){
                  $("#kabupaten").html(msg);
                }
            });
        });
 
        $("#kabupaten").change(function(){
      	var kabupaten = $("#kabupaten").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_kecamatan.php",
              	data: {kabupaten: kabupaten},
              	cache: false,
              	success: function(msg){
                  $("#kecamatan").html(msg);
                }
            });
        });
 
        $("#kecamatan").change(function(){
      	var kecamatan = $("#kecamatan").val();
          	$.ajax({
          		type: 'POST',
              	url: "get_kelurahan.php",
              	data: {kecamatan: kecamatan},
              	cache: false,
              	success: function(msg){
                  $("#kelurahan").html(msg);
                }
            });
        });
     });
</script>
</html>