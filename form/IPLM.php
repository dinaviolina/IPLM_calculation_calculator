<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <link href="../assets/img/logo_bjn.png" rel="icon">
    <title>IPLM</title>

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
    <div class="page-wrapper  p-t-10 p-b-50">
        <div class="wrapper mx-4">
            <a href="../index.php"><button class="btn btn--radius-2 btn-primary" style="margin-bottom: 10px;">Kembali</button></a>
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Form IPLM</h2>
                </div> 
                <div class="card-body">
                    <form action="../proses/proses_iplm.php" method="POST">

                        <!-- Awal Form IPLM -->
                        <div class="form-row" style="margin-top: 20px;">
                            <div class="name" style="color: black;">Indeks Pembangunan Literasi Masyarakat</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="nilai_uplm1">Masukkan Nilai UPLM 1 :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="nilai_uplm1" required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="nilai_uplm2">Masukkan Nilai UPLM 2 :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="nilai_uplm2" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="nilai_uplm3">Masukkan Nilai UPLM 3 :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="nilai_uplm3" required>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="row row-space" style="margin-top: 20px;">
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="nilai_uplm4">Masukkan Nilai UPLM 4 :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="nilai_uplm4" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="nilai_uplm5">Masukkan Nilai UPLM 5 :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="nilai_uplm5" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="nilai_uplm6">Masukkan Nilai UPLM 6 :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="nilai_uplm6" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-space" style="margin-top: 20px;">
                                    <div class="col-4">
                                        <div class="input-group-desc">
                                            <label for="nilai_uplm7">Masukkan Nilai UPLM 7 :</label>
                                            <input class="input--style-5" style="margin-top: 5px;" type="decimal" name="nilai_uplm7" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Form IPLM  -->
                            <button class="btn btn--radius-2 btn-success" type="submit">Hitung</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->