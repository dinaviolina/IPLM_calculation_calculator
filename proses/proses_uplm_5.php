<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/img/logo_bjn.png" rel="icon">

    <title>Hasil UPLM 5</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }

        .hasil {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            margin: 5px 0;
        }

        .kembali {
        margin-top: 20px;
        margin-bottom : 10px
        }

        .kembali a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50; 
        color: #fff; 
        text-decoration: none; 
        border-radius: 5px;
        transition: background-color 0.3s ease;
        }

        .kembali a:hover {
        background-color: #45a049; 
        }

        .home {
        margin-top: 20px;
        margin-bottom : 10px
        }

        .home a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50; 
        color: #fff; 
        text-decoration: none; 
        border-radius: 5px;
        transition: background-color 0.3s ease;
        }

        .home a:hover {
        background-color: #45a049; 
        }
    </style>
</head>
<body>

    <?php 
      include 'koneksi.php';

      // Tangkap data dari formulir
      $standar_kabkota = isset($_POST['standar_kabkota']) ? $_POST['standar_kabkota'] : 0;
      $standar_kec = isset($_POST['standar_kec']) ? $_POST['standar_kec'] : 0;
      $standar_desa = isset($_POST['standar_desa']) ? $_POST['standar_desa'] : 0;
      $unit_kabkota= isset($_POST['unit_kabkota']) ? $_POST['unit_kabkota'] : 0;
      $unit_kec= isset($_POST['unit_kec']) ? $_POST['unit_kec'] : 0;
      $unit_desa= isset($_POST['unit_desa']) ? $_POST['unit_desa'] : 0;
      $standar_sdmi = isset($_POST['standar_sdmi']) ? $_POST['standar_sdmi'] : 0;
      $unit_sdmi = isset($_POST['unit_sdmi']) ? $_POST['unit_sdmi'] : 0;
      $standar_smp = isset($_POST['standar_smp']) ? $_POST['standar_smp'] : 0;
      $unit_smp = isset($_POST['unit_smp']) ? $_POST['unit_smp'] : 0;
      $standar_sma = isset($_POST['standar_sma']) ? $_POST['standar_sma'] : 0;
      $unit_sma = isset($_POST['unit_sma']) ? $_POST['unit_sma'] : 0;
      $standar_pt = isset($_POST['standar_pt']) ? $_POST['standar_pt'] : 0;
      $unit_pt = isset($_POST['unit_pt']) ? $_POST['unit_pt'] : 0;
      $standar_khusus = isset($_POST['standar_khusus']) ? $_POST['standar_khusus'] : 0;
      $unit_khusus = isset($_POST['unit_khusus']) ? $_POST['unit_khusus'] : 0;
      $angka_koreksi = isset($_POST['angka_koreksi']) ? $_POST['angka_koreksi'] : 0;


      $hitung_standar_kabkota = $standar_kabkota / $unit_kabkota;
      $hitung_standar_kec = $standar_kec / $unit_kec;
      $hitung_standar_desa = $standar_desa / $unit_desa;
      $ratio_standar_p_umum = $hitung_standar_kabkota + $hitung_standar_kec + $hitung_standar_desa;

      $hitung_standar_sdmi = $standar_sdmi / $unit_sdmi;
      $hitung_standar_smp = $standar_smp / $unit_smp;
      $hitung_standar_sma = $standar_sma / $unit_sma;
      $ratio_standar_p_sekolah = $hitung_standar_sdmi + $hitung_standar_smp + $hitung_standar_sma;

      $hitung_standar_pt = $standar_pt / $unit_pt;

      $hitung_standar_p_khusus = $standar_khusus / $unit_khusus;

      $hasil_uplm5 = ((0.5 * $ratio_standar_p_umum) + (0.2 * $ratio_standar_p_sekolah) + (0.2 * $hitung_standar_pt) + (0.1 * $hitung_standar_p_khusus)) * $angka_koreksi;

      ?>

    <div class="kembali">
        <a href="../form/uplm5.php">Kembali ke Form</a>
    </div>

    <div class="home">
        <a href="../index.php">Kembali ke Menu Utama</a>
    </div>


    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah standar Perpustakaan Umum</h2>
        <p>Kabupaten/kota: <?php echo $hitung_standar_kabkota; ?></p>
        <p>Kecamatan: <?php echo $hitung_standar_kec; ?></p>
        <p>Desa: <?php echo $hitung_standar_desa; ?></p>
        <p>Ratio Perpustakaan Umum: <?php echo $ratio_standar_p_umum; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah standar Perpustakaan Sekolah</h2>
        <p>SD/MI: <?php echo $hitung_standar_sdmi; ?></p>
        <p>SMP: <?php echo $hitung_standar_smp; ?></p>
        <p>SMA: <?php echo $hitung_standar_sma; ?></p>
        <p>Ratio Perpustakaan Sekolah: <?php echo $ratio_standar_p_sekolah; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah standar Perpustakaan Perguruan Tinggi</h2>
        <p>Perguruan Tinggi: <?php echo $hitung_standar_pt; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah standar Perpustakaan Khusus</h2>
        <p>Khusus: <?php echo $hitung_standar_p_khusus; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan UPLM 5</h2>
        <p>UPLM 5: <?php echo $hasil_uplm5; ?></p>
    </div>

    <?php
// Simpan hasil perhitungan ke dalam tabel
    $sql = "INSERT INTO uplm_5 (tgl_input, ratio_p_standar_umum, ratio_p_standar_sekolah, standar_pt, standar_p_khusus, hasil_uplm5) 
            VALUES (NOW() , $ratio_standar_p_umum, $ratio_standar_p_sekolah, $standar_pt, $hitung_standar_p_khusus, $hasil_uplm5)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
</body>
</html>
