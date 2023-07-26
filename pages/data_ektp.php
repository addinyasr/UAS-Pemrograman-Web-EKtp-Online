<?php
include "../helper/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png/svg" href="https://upload.wikimedia.org/wikipedia/commons/4/40/Seal_of_the_Ministry_of_Internal_Affairs_of_the_Republic_of_Indonesia_%282020_version%29.svg">
    <title>
        Data E-KTP
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body>
    <div>
        <ul>
            <li>
                <hr>
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pendaftar Elektronik<span> - Kartu Tanda Penduduk</span></h1>
                    <p class="mb-4">Berikut adalah tampilan data pendaftar E-KTP <a> </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables </h6>
                        </div>
                        <div class="card-body">
                            <a href="../pages/form_data.php" class="btn btn-primary">Tambah Data</a>
                            <?php
                            $message = '';
                            if (isset($_GET["error"])) {
                                $message = $_GET["error"];
                                echo "<br><br>
                        <p style='color:red; font-style:italic'>$message</p>";
                            }
                            ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID E-KTP</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Status Kawin</th>
                                            <th>Kewarganegaraan</th>
                                           
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $query =
                                            "SELECT e.id_ektp, kk.nik_kk, a.nama_akta , e.tgl_lahir_ektp, e.tempat_lahir_ektp, e.jk_ektp, alamat_ektp, status_kawin, kewarganegaraan_ektp from ektp e, kartu_keluarga kk, akta_kelahiran a
                                            WHERE e.id_akta = a.id_akta AND e.id_kk = kk.id_kk;";

                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $index = 1;

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id_ektp = $row['id_ektp'];
                                                echo "
                                        <tr>
                                            <td>" . $row["id_ektp"] . "</td>
                                            <td>" . $row["nik_kk"] . "</td>
                                            <td>" . $row["nama_akta"] . "</td>
                                            <td>" . $row["tgl_lahir_ektp"] . "</td>
                                            <td>" . $row["tempat_lahir_ektp"] . "</td>
                                            <td>" . $row["jk_ektp"] . "</td>
                                            <td>" . $row["alamat_ektp"] . "</td>
                                            <td>" . $row["status_kawin"] . "</td>
                                            <td>" . $row["kewarganegaraan_ektp"] . "</td>
                                            <td>
                                                <a href='../pages/form_edit.php?id_ektp=$id_ektp' class='btn btn-primary'>Edit</a>
                                                <a href='../pages/process/delete_data.php?id_ektp=$id_ektp' class='btn btn-danger'>Delete</a>
                                            </td>
                                        </tr>
                                        ";
                                            }
                                        }

                                        mysqli_close($con);
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </li>
        </ul>
    </div>
</body>