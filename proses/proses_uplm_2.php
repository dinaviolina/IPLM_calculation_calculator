<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/img/logo_bjn.png" rel="icon">
    <title>Hasil UPLM 2</title>
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
      $koleksi_kabkota = isset($_POST['koleksi_kabkota']) ? $_POST['koleksi_kabkota'] : 0;
      $koleksi_kec = isset($_POST['koleksi_kec']) ? $_POST['koleksi_kec'] : 0;
      $koleksi_desa = isset($_POST['koleksi_desa']) ? $_POST['koleksi_desa'] : 0;
      $populasi_kabkota= isset($_POST['populasi_kabkota']) ? $_POST['populasi_kabkota'] : 0;
      $koleksi_sdmi = isset($_POST['koleksi_sdmi']) ? $_POST['koleksi_sdmi'] : 0;
      $civitas_sdmi = isset($_POST['civitas_sdmi']) ? $_POST['civitas_sdmi'] : 0;
      $koleksi_smp = isset($_POST['koleksi_smp']) ? $_POST['koleksi_smp'] : 0;
      $civitas_smp = isset($_POST['civitas_smp']) ? $_POST['civitas_smp'] : 0;
      $koleksi_sma = isset($_POST['koleksi_sma']) ? $_POST['koleksi_sma'] : 0;
      $civitas_sma = isset($_POST['civitas_sma']) ? $_POST['civitas_sma'] : 0;
      $koleksi_pt = isset($_POST['koleksi_pt']) ? $_POST['koleksi_pt'] : 0;
      $civitas_akademika = isset($_POST['civitas_akademika']) ? $_POST['civitas_akademika'] : 0;
      $koleksi_khusus = isset($_POST['koleksi_khusus']) ? $_POST['koleksi_khusus'] : 0;
      $pegawai = isset($_POST['pegawai']) ? $_POST['pegawai'] : 0;
      $angka_koreksi = isset($_POST['angka_koreksi']) ? $_POST['angka_koreksi'] : 0;


      $hitung_koleksi_kabkota = $koleksi_kabkota / $populasi_kabkota;
      $hitung_koleksi_kec = $koleksi_kec / $populasi_kabkota;
      $hitung_koleksi_desa = $koleksi_desa / $populasi_kabkota;
      $ratio_koleksi_p_umum = $hitung_koleksi_kabkota + $hitung_koleksi_kec + $hitung_koleksi_desa;

      $hitung_koleksi_sdmi = $koleksi_sdmi / $civitas_sdmi;
      $hitung_koleksi_smp = $koleksi_smp / $civitas_smp;
      $hitung_koleksi_sma = $koleksi_sma / $civitas_sma;
      $ratio_koleksi_p_sekolah = $hitung_koleksi_sdmi + $hitung_koleksi_smp + $hitung_koleksi_sma;

      $hitung_koleksi_pt = $koleksi_pt / $civitas_akademika;

      $hitung_koleksi_p_khusus = $koleksi_khusus / $pegawai;

      $hasil_uplm2 = ((0.5 * $ratio_koleksi_p_umum) + (0.2 * $ratio_koleksi_p_sekolah) + (0.2 * $hitung_koleksi_pt) + (0.1 * $hitung_koleksi_p_khusus) * $angka_koreksi);

      ?>

    <div class="kembali">
        <a href="../form/uplm2.php">Kembali ke Form</a>
    </div>

    <div class="home">
        <a href="../index.php">Kembali ke Menu Utama</a>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Koleksi Perpustakaan Umum</h2>
        <p>Kabupaten/kota: <?php echo $hitung_koleksi_kabkota; ?></p>
        <p>Kecamatan: <?php echo $hitung_koleksi_kec; ?></p>
        <p>Desa: <?php echo $hitung_koleksi_desa; ?></p>
        <p>Ratio Perpustakaan Umum: <?php echo $ratio_koleksi_p_umum; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Koleksi Perpustakaan Sekolah</h2>
        <p>SD/MI: <?php echo $hitung_koleksi_sdmi; ?></p>
        <p>SMP: <?php echo $hitung_koleksi_smp; ?></p>
        <p>SMA: <?php echo $hitung_koleksi_sma; ?></p>
        <p>Ratio Perpustakaan Sekolah: <?php echo $ratio_koleksi_p_sekolah; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Koleksi Perpustakaan Perguruan Tinggi</h2>
        <p>Perguruan Tinggi: <?php echo $hitung_koleksi_pt; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Koleksi Perpustakaan Khusus</h2>
        <p>Khusus: <?php echo $hitung_koleksi_p_khusus; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan UPLM1</h2>
        <p>UPLM 2: <?php echo $hasil_uplm2; ?></p>
    </div>

    <?php
// Simpan hasil perhitungan ke dalam tabel
    $sql = "INSERT INTO uplm_2 (tgl_input, ratio_koleksi_p_umum, ratio_koleksi_p_sekolah, koleksi_pt, koleksi_p_khusus, hasil_uplm2) 
            VALUES (NOW() , $ratio_koleksi_p_umum, $ratio_koleksi_p_sekolah, $koleksi_pt, $hitung_koleksi_p_khusus, $hasil_uplm2)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
</body>
</html>
