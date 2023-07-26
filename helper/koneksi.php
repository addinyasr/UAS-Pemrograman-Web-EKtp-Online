<?php

// connection
define("HOST", "localhost");
define("UNAME", "root");
define("PASS", "");
define("DB", "dukcapil_online");

$con = mysqli_connect(HOST,UNAME,PASS,DB);

// mengecek koneksi
if (mysqli_connect_errno())
{
    echo "Gagal koneksi ke MySQL : " . mysqli_connect_error();
}
;

?>