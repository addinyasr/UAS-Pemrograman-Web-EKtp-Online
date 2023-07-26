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
        Data Akta
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
                    <h1 class="h3 mb-2 text-gray-800">Akta Kelahiran</h1>
                    <p class="mb-4">Berikut adalah tampilan data Akta Kelahiran <a> </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Akta</th>
                                            <th>Nama Akta</th>
                                            <th>Tanggal Lahir Akta</th>
                                          
                                            <th>Jenis Kelamin Akta</th>
                                            <th>Nama Ayah Akta</th>
                                            <th>Nama Ibu Akta</th>
                                          
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                        $query =
                                            "SELECT * FROM `akta_kelahiran`";

                                        $result = mysqli_query($con, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $index = 1;

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $id_akta = $row['id_akta'];
                                                echo "
                                        <tr>
                                            <td>" . $row["id_akta"] . "</td>                                            
                                            <td>" . $row["nama_akta"] . "</td>
                                            <td>" . $row["tgl_lahir_akta"] . "</td>                                          
                                            <td>" . $row["jk_akta"] . "</td>
                                            <td>" . $row["nama_ayah_akta"] . "</td>
                                            <td>" . $row["nama_ibu_akta"] . "</td>
                                          
                                           
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