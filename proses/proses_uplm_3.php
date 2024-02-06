<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/img/logo_bjn.png" rel="icon">
    <title>Hasil UPLM 3</title>
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
      $tenaga_kabkota = isset($_POST['tenaga_kabkota']) ? $_POST['tenaga_kabkota'] : 0;
      $tenaga_kec = isset($_POST['tenaga_kec']) ? $_POST['tenaga_kec'] : 0;
      $tenaga_desa = isset($_POST['tenaga_desa']) ? $_POST['tenaga_desa'] : 0;
      $populasi_kabkota= isset($_POST['populasi_kabkota']) ? $_POST['populasi_kabkota'] : 0;
      $tenaga_sdmi = isset($_POST['tenaga_sdmi']) ? $_POST['tenaga_sdmi'] : 0;
      $civitas_sdmi = isset($_POST['civitas_sdmi']) ? $_POST['civitas_sdmi'] : 0;
      $tenaga_smp = isset($_POST['tenaga_smp']) ? $_POST['tenaga_smp'] : 0;
      $civitas_smp = isset($_POST['civitas_smp']) ? $_POST['civitas_smp'] : 0;
      $tenaga_sma = isset($_POST['tenaga_sma']) ? $_POST['tenaga_sma'] : 0;
      $civitas_sma = isset($_POST['civitas_sma']) ? $_POST['civitas_sma'] : 0;
      $tenaga_pt = isset($_POST['tenaga_pt']) ? $_POST['tenaga_pt'] : 0;
      $civitas_akademika = isset($_POST['civitas_akademika']) ? $_POST['civitas_akademika'] : 0;
      $tenaga_khusus = isset($_POST['tenaga_khusus']) ? $_POST['tenaga_khusus'] : 0;
      $pegawai = isset($_POST['pegawai']) ? $_POST['pegawai'] : 0;
      $angka_koreksi = isset($_POST['angka_koreksi']) ? $_POST['angka_koreksi'] : 0;


      $hitung_tenaga_kabkota = $tenaga_kabkota / $populasi_kabkota;
      $hitung_tenaga_kec = $tenaga_kec / $populasi_kabkota;
      $hitung_tenaga_desa = $tenaga_desa / $populasi_kabkota;
      $ratio_tenaga_p_umum = ($hitung_tenaga_kabkota + $hitung_tenaga_kec + $hitung_tenaga_desa);

      $hitung_tenaga_sdmi = $tenaga_sdmi / $civitas_sdmi;
      $hitung_tenaga_smp = $tenaga_smp / $civitas_smp;
      $hitung_tenaga_sma = $tenaga_sma / $civitas_sma;
      $ratio_tenaga_p_sekolah = ($hitung_tenaga_sdmi + $hitung_tenaga_smp + $hitung_tenaga_sma);

      $hitung_tenaga_pt = $tenaga_pt / $civitas_akademika;

      $hitung_tenaga_p_khusus = $tenaga_khusus / $pegawai;

      $hasil_uplm3 = ((0.5 * $ratio_tenaga_p_umum) + (0.2 * $ratio_tenaga_p_sekolah) + (0.2* $hitung_tenaga_pt) + (0.1 * $hitung_tenaga_p_khusus)) * $angka_koreksi;

    //   $hitung_uplm1 = ((0.5 * $ratio_p_umum) + (0.2 * $ratio_p_sekolah) + (0.2 * $hitung_jup_pt) + (0.1 * $hitung_jup_khusus) * $angka_koreksi);

      ?>

    <div class="kembali">
        <a href="../form/uplm3.php">Kembali ke Form</a>
    </div>

    <div class="home">
        <a href="../index.php">Kembali ke Menu Utama</a>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah tenaga Perpustakaan Umum</h2>
        <p>Kabupaten/kota: <?php echo $hitung_tenaga_kabkota; ?></p>
        <p>Kecamatan: <?php echo $hitung_tenaga_kec; ?></p>
        <p>Desa: <?php echo $hitung_tenaga_desa; ?></p>
        <p>Ratio Perpustakaan Umum: <?php echo $ratio_tenaga_p_umum; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah tenaga Perpustakaan Sekolah</h2>
        <p>SD/MI: <?php echo $hitung_tenaga_sdmi; ?></p>
        <p>SMP: <?php echo $hitung_tenaga_smp; ?></p>
        <p>SMA: <?php echo $hitung_tenaga_sma; ?></p>
        <p>Ratio Perpustakaan Sekolah: <?php echo $ratio_tenaga_p_sekolah; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah tenaga Perpustakaan Perguruan Tinggi</h2>
        <p>Perguruan Tinggi: <?php echo $hitung_tenaga_pt; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah tenaga Perpustakaan Khusus</h2>
        <p>Khusus: <?php echo $hitung_tenaga_p_khusus; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan UPLM 3</h2>
        <p>UPLM 3: <?php echo $hasil_uplm3; ?></p>
    </div>

    <?php
  // Simpan hasil perhitungan ke dalam tabel
    $sql = "INSERT INTO uplm_3 (tgl_input, ratio_tenaga_p_umum, ratio_tenaga_p_sekolah, tenaga_pt, tenaga_p_khusus, hasil_uplm3) 
            VALUES (NOW() , $ratio_tenaga_p_umum, $ratio_tenaga_p_sekolah, $tenaga_pt, $hitung_tenaga_p_khusus, $hasil_uplm3)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
</body>
</html>
