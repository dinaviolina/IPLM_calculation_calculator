<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/img/logo_bjn.png" rel="icon">
    <title>Hasil UPLM 6</title>
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
      $keterlibatan_kabkota = isset($_POST['keterlibatan_kabkota']) ? $_POST['keterlibatan_kabkota'] : 0;
      $keterlibatan_kec = isset($_POST['keterlibatan_kec']) ? $_POST['keterlibatan_kec'] : 0;
      $keterlibatan_desa = isset($_POST['keterlibatan_desa']) ? $_POST['keterlibatan_desa'] : 0;
      $keterlibatan_sdmi = isset($_POST['keterlibatan_sdmi']) ? $_POST['keterlibatan_sdmi'] : 0;
      $keterlibatan_smp = isset($_POST['keterlibatan_smp']) ? $_POST['keterlibatan_smp'] : 0;
      $keterlibatan_sma = isset($_POST['keterlibatan_sma']) ? $_POST['keterlibatan_sma'] : 0;
      $keterlibatan_pt = isset($_POST['keterlibatan_pt']) ? $_POST['keterlibatan_pt'] : 0;
      $keterlibatan_khusus = isset($_POST['keterlibatan_khusus']) ? $_POST['keterlibatan_khusus'] : 0;
      $populasi_kabkota = isset($_POST['populasi_kabkota']) ? $_POST['populasi_kabkota'] : 0;
      $civitas_sdmi = isset($_POST['civitas_sdmi']) ? $_POST['civitas_sdmi'] : 0;
      $civitas_smp = isset($_POST['civitas_smp']) ? $_POST['civitas_smp'] : 0;
      $civitas_sma = isset($_POST['civitas_sma']) ? $_POST['civitas_sma'] : 0;
      $civitas_akademika = isset($_POST['civitas_akademika']) ? $_POST['civitas_akademika'] : 0;
      $pegawai = isset($_POST['pegawai']) ? $_POST['pegawai'] : 0;
      $angka_koreksi = isset($_POST['angka_koreksi']) ? $_POST['angka_koreksi'] : 0;


      $hitung_keterlibatan_kabkota = $keterlibatan_kabkota / $populasi_kabkota;
      $hitung_keterlibatan_kec = $keterlibatan_kec / $populasi_kabkota;
      $hitung_keterlibatan_desa = $keterlibatan_desa / $populasi_kabkota;
      $ratio_keterlibatan_p_umum = $hitung_keterlibatan_kabkota + $hitung_keterlibatan_kec + $hitung_keterlibatan_desa;

      $hitung_keterlibatan_sdmi = $keterlibatan_sdmi / $civitas_sdmi;
      $hitung_keterlibatan_smp = $keterlibatan_smp / $civitas_smp;
      $hitung_keterlibatan_sma = $keterlibatan_sma / $civitas_sma;
      $ratio_keterlibatan_p_sekolah = $hitung_keterlibatan_sdmi + $hitung_keterlibatan_smp + $hitung_keterlibatan_sma;

      $hitung_keterlibatan_pt = $keterlibatan_pt / $civitas_akademika;

      $hitung_keterlibatan_p_khusus = $keterlibatan_khusus / $pegawai;

      $hasil_uplm6 = ((0.5 * $ratio_keterlibatan_p_umum) + (0.2 * $ratio_keterlibatan_p_sekolah) + (0.2 * $hitung_keterlibatan_pt) + (0.1 * $hitung_keterlibatan_p_khusus)) * $angka_koreksi;

      ?>

    <div class="kembali">
        <a href="../form/uplm6.php">Kembali ke Form</a>
    </div>

    <div class="home">
        <a href="../index.php">Kembali ke Menu Utama</a>
    </div>


    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah keterlibatan Perpustakaan Umum</h2>
        <p>Kabupaten/kota: <?php echo $hitung_keterlibatan_kabkota; ?></p>
        <p>Kecamatan: <?php echo $hitung_keterlibatan_kec; ?></p>
        <p>Desa: <?php echo $hitung_keterlibatan_desa; ?></p>
        <p>Ratio Perpustakaan Umum: <?php echo $ratio_keterlibatan_p_umum; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah keterlibatan Perpustakaan Sekolah</h2>
        <p>SD/MI: <?php echo $hitung_keterlibatan_sdmi; ?></p>
        <p>SMP: <?php echo $hitung_keterlibatan_smp; ?></p>
        <p>SMA: <?php echo $hitung_keterlibatan_sma; ?></p>
        <p>Ratio Perpustakaan Sekolah: <?php echo $ratio_keterlibatan_p_sekolah; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah keterlibatan Perpustakaan Perguruan Tinggi</h2>
        <p>Perguruan Tinggi: <?php echo $hitung_keterlibatan_pt; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah keterlibatan Perpustakaan Khusus</h2>
        <p>Khusus: <?php echo $hitung_keterlibatan_p_khusus; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan UPLM 6</h2>
        <p>UPLM 6: <?php echo $hasil_uplm6; ?></p>
    </div>

    <?php
// Simpan hasil perhitungan ke dalam tabel
    $sql = "INSERT INTO uplm_6 (tgl_input, ratio_keterlibatan_p_umum, ratio_keterlibatan_p_sekolah, keterlibatan_pt, keterlibatan_p_khusus, hasil_uplm6) 
            VALUES (NOW() , $ratio_keterlibatan_p_umum, $ratio_keterlibatan_p_sekolah, $keterlibatan_pt, $hitung_keterlibatan_p_khusus, $hasil_uplm6)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
</body>
</html>
