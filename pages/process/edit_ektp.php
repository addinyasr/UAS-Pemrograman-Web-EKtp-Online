<?php
    // include DB connection file
    include '../../helper/koneksi.php';

    // mendapatkan nilai dari form
    $id_ektp                    = $_POST['id_ektp'];
    $id_kk                      = $_POST['id_kk'];
    $id_akta                    = $_POST['id_akta'];
    $tgl_lahir_ektp             = $_POST['tgl_lahir_ektp'];
    $tempat_lahir_ektp          = $_POST['tempat_lahir_ektp'];
    $jk_ektp                    = $_POST['jk_ektp'];
    $alamat_ektp                = $_POST['alamat_ektp'];
    $status_kawin               = $_POST['status_kawin'];
    $kewarganegaraan_ektp       = $_POST['kewarganegaraan_ektp'];

    

   
    
    
    {
	// query untuk mengupdate data
    $query = "UPDATE ektp SET id_kk = '$id_kk',id_akta ='$id_akta',tgl_lahir_ektp ='$tgl_lahir_ektp',tempat_lahir_ektp = '$tempat_lahir_ektp',jk_ektp ='$jk_ektp',alamat_ektp ='$alamat_ektp',status_kawin = '$status_kawin', kewarganegaraan_ektp = '$kewarganegaraan_ektp' WHERE id_ektp = '$id_ektp'";


        // menjalankan query update data
        if (mysqli_query($con, $query))
        {
            header("Location:../../process/ektp.php");
        }
        else
        {
            $error = urldecode("Update gagal dijalankan");
            header("Location:../form_edit.php?error=$error");
        }
    }

    mysqli_close($con);
?>