<?php
    // include DB connection file
    include '../../helper/koneksi.php';

    // mendapatkan nilai dari form
    $id_ektp = $_GET['id_ektp'];

    $query = "Delete FROM ektp WHERE id_ektp=$id_ektp";

    // menjalankan query isi data
    if (mysqli_query($con, $query))
    {
        header("Location:../../process/ektp.php");
    }
    else
    {
        $error = urldecode("Data tidak berhasil dihapus");
        header("Location:../../process/ektp.php?error=$error");
    }

    mysqli_close($con);
?>