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
        Daftar EKTP
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
                <div class="container">


                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Elektronikk<span> - Kartu Tanda Penduduk</span></h1>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <form action="process/add_ektp.php" method="POST" enctype="multipart/form-data">



                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Nomor Induk Keluarga</label>
                                    <div class="col-md-12">
                                        <select required name="id_kk" class="form-control">
                                            <option value="" disabled selected>--</option>
                                            <?php
                                            $tampilkan_isi = "select * from kartu_keluarga";
                                            $tampilkan_isi_sql = mysqli_query($con, $tampilkan_isi);
                                            $no = 1;

                                            while ($isi = mysqli_fetch_array($tampilkan_isi_sql)) {
                                                echo "<option value='" . $isi['id_kk'] . "'>" . $isi['nik_kk'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Nama</label>
                                    <div class="col-md-12">
                                        <select required name="id_akta" class="form-control" required>
                                            <option value="" disabled selected>--</option>
                                            <?php
                                            $tampilkan_isi = "select * from akta_kelahiran";
                                            $tampilkan_isi_sql = mysqli_query($con, $tampilkan_isi);
                                            $no = 1;

                                            while ($isi = mysqli_fetch_array($tampilkan_isi_sql)) {
                                                echo "<option value='" . $isi['id_akta'] . "'>" . $isi['nama_akta'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="tgl_lahir_ektp" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir_ektp" name="tgl_lahir_ektp" require>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-md-12">
                                        <input type="text" name="tempat_lahir_ektp" class="form-control" placeholder="Tempat Lahir" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="jk_ektp" class="form-label">Jenis Kelamin</label>
                                    <select name="jk_ektp" id="jk_ektp" class="form-control" require>
                                        <option value="Laki-laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Alamat</label>
                                    <div class="col-md-12">
                                        <input type="text" name="alamat_ektp" class="form-control" placeholder="Tulis Alamat Anda Lengkap Dengan RT/RW" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="status_kawin" class="form-label">Status Kawin</label>
                                    <select name="status_kawin" id="status_kawin" class="form-control" require>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>

                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="kewarganegaraan_ektp" class="form-label">Kewarganegaraan</label>
                                    <select name="kewarganegaraan_ektp" id="kewarganegaraan_ektp" class="form-control" require>
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                </div>


                                <div class="form-group row mt-5">
                                    <div class="col-md-2">
                                        <a name="backBtn" id="backBtn" class="btn btn-dark btn-block btn-lg" href="../process/ektp.php" role="button">Kembali</a>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="submit" class="btn btn-success btn-block btn-lg" value="Tambah" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </li>
        </ul>
    </div>
</body>