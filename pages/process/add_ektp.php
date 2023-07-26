<?php
// include DB connection file
include '../../helper/koneksi.php';

// mendapatkan nilai dari form
$id_kk             = $_POST['id_kk'];
$id_akta           = $_POST['id_akta'];
$tgl_lahir_ektp     = $_POST['tgl_lahir_ektp'];
$tempat_lahir_ektp  = $_POST['tempat_lahir_ektp'];
$jk_ektp            = $_POST['jk_ektp'];
$alamat_ektp        = $_POST['alamat_ektp'];
$status_kawin    = $_POST['status_kawin'];
$kewarganegaraan_ektp = $_POST['kewarganegaraan_ektp'];



$query = "INSERT INTO ektp VALUES (id_ektp,'$id_kk','$id_akta','$tgl_lahir_ektp','$tempat_lahir_ektp','$jk_ektp','$alamat_ektp','$status_kawin','$kewarganegaraan_ektp')";

if (mysqli_query($con, $query)) {
    header("Location:../../process/ektp.php");
} else {
    header("Location:../form_edit.php");
}   
mysqli_close($con);


?>