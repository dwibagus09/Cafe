<?php
include 'koneksi.php';


$name = $_POST["name"];
$provinsi = $_POST["provinsi"];
$kab = $_POST["kabupaten"];
$kec = $_POST["kecamatan"];
$kel = $_POST["kelurahan"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];
$no = $_POST["tlp"];
$fb = $_POST["fb"];
$wa  = $_POST["wa"];
$ig = $_POST["ig"];
$plt = $_POST["plt"];
$tgl = $_POST["tgl"];
$ket = ($_POST["ket"]);

$sql = "INSERT INTO biodata(nama,id_kab,id_kec,id_kel,id_prov,alamat,ttl,gender,no_tlp,email,ig,fb,wa,id_pelatihan,ket) VALUES ('$name','$kab','$kec','$kel','$provinsi','$alamat','$tgl','$gender','$no','$email','$ig','$fb','$wa','$plt','$ket')";
$query =mysqli_query($db1, $sql);

if ($query)
{
  header("location:success.php");
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db1);
}

mysqli_close($db1);

?>