<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <link href="../assets/img/logo_bjn.png" rel="icon">
    <title>UPLM 1</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="css/main.css" rel="stylesheet" media="all">
    <style>
        .input--style-5 {
            background-color: white;
            border: 1px solid #ccc; /* Warna default untuk garis pinggir */
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); /* Efek shadow */
        }
    
        .input--style-5:focus {
            border: 1px solid #00ff00; /* Warna hijau untuk garis pinggir saat fokus */
        }
    </style>
</head>

<body>
    <div class="page-wrapper p-t-10 p-b-50">
        <div class="wrapper mx-4">
            <a href="../index.php"><button class="btn btn--radius-2 btn-primary" style="margin-bottom: 10px;">Kembali</button></a>
            <div class="card card-5 ">
                <div class="card-heading">
                    <h2 class="title">Form UPLM1</h2>
                </div>
                <div class="card-body">
                    <!-- Form Hitung -->
                    <form method="POST" action="../proses/proses_uplm_1.php">
                        
                        <!-- Awal Perpustakaan Umum -->
                        <div class="form-row m-b-55">
                            <div class="name"  style="color: black;">Perpustakaan Umum</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="unit_kabkota">Jumlah Unit Perpustakaan Kabupaten/Kota :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="unit_kabkota" required>                                          
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="unit_kec">Jumlah Unit Perpustakaan Kecamatan :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="unit_kec" required>                                          
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="unit_desa">Jumlah Unit Perpustakaan Desa :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="unit_desa" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row row-space" style="margin-top: 20px;">
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <label for="populasi_kabkota">Jumlah Populasi Kabupaten/Kota :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="populasi_kabkota" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <label for="angka_pembagi_ratio">Angka Pembagi Ratio Kabupaten/Kota :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="angka_pembagi_ratio" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Perpustakaan Umum -->

                        <!-- Awal Perpustakaan Sekolah -->
                        <div class="form-row" style="margin-top: 20px;">
                            <div class="name" style="color: black;">Perpustakaan Sekolah</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="unit_sdmi">Jumlah Unit Perpustakaan SD/MI :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="unit_sdmi" required>                                           
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="unit_smp">Jumlah Unit Perpustakaan SMP/MTs :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="unit_smp" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="unit_sma"> Jumlah Unit Perpustakaan SMA/K/MA :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="unit_sma" required>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row row-space" style="margin-top: 20px;">
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="civitas_sdmi">Jumlah Civitas SD/MI:</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="civitas_sdmi" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="civitas_smp">Jumlah Civitas SMP/MTs :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="civitas_smp" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="civitas_sma">Jumlah Civitas SMA/K/MA :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="civitas_sma" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Perpustakaan Sekolah -->

                        <!-- Awal Perpustakaan Kampus -->
                        <div class="form-row">
                            <div class="name">Perpustakaan Perguruan Tinggi</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <label for="unit_pt">Jumlah Unit Perpustakaan Perguruan Tinggi :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="unit_pt" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group-desc">
                                            <label for="civitas_akademika">Jumlah Civitas Akademika :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="civitas_akademika" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Perpustakaan Kampus -->
                
                        <!-- Awal Perpustakaan Khusus -->
                        <div class="form-row">
                            <div class="name">Perpustakaan Khusus</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="unit_khusus">Jumlah Unit Perpustakaan Khusus :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="unit_khusus" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="pegawai">Jumlah Populasi Penduduk Bekerja :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="pegawai" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="angka_koreksi">Angka Koreksi : </label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="angka_koreksi" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Perpustakaan Khusus -->

                            <button class="btn btn--radius-2 btn-success" type="submit">Hitung</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- end document-->