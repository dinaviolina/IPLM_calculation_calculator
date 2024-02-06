<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/img/logo_bjn.png" rel="icon">

    <title>Hasil UPLM 4</title>
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
      $kunjungan_kabkota = isset($_POST['kunjungan_kabkota']) ? $_POST['kunjungan_kabkota'] : 0;
      $kunjungan_kec = isset($_POST['kunjungan_kec']) ? $_POST['kunjungan_kec'] : 0;
      $kunjungan_desa = isset($_POST['kunjungan_desa']) ? $_POST['kunjungan_desa'] : 0;
      $populasi_kabkota= isset($_POST['populasi_kabkota']) ? $_POST['populasi_kabkota'] : 0;
      $kunjungan_sdmi = isset($_POST['kunjungan_sdmi']) ? $_POST['kunjungan_sdmi'] : 0;
      $civitas_sdmi = isset($_POST['civitas_sdmi']) ? $_POST['civitas_sdmi'] : 0;
      $kunjungan_smp = isset($_POST['kunjungan_smp']) ? $_POST['kunjungan_smp'] : 0;
      $civitas_smp = isset($_POST['civitas_smp']) ? $_POST['civitas_smp'] : 0;
      $kunjungan_sma = isset($_POST['kunjungan_sma']) ? $_POST['kunjungan_sma'] : 0;
      $civitas_sma = isset($_POST['civitas_sma']) ? $_POST['civitas_sma'] : 0;
      $kunjungan_pt = isset($_POST['kunjungan_pt']) ? $_POST['kunjungan_pt'] : 0;
      $civitas_akademika = isset($_POST['civitas_akademika']) ? $_POST['civitas_akademika'] : 0;
      $kunjungan_khusus = isset($_POST['kunjungan_khusus']) ? $_POST['kunjungan_khusus'] : 0;
      $pegawai = isset($_POST['pegawai']) ? $_POST['pegawai'] : 0;
      $angka_koreksi = isset($_POST['angka_koreksi']) ? $_POST['angka_koreksi'] : 0;


      $hitung_kunjungan_kabkota = $kunjungan_kabkota / $populasi_kabkota;
      $hitung_kunjungan_kec = $kunjungan_kec / $populasi_kabkota;
      $hitung_kunjungan_desa = $kunjungan_desa / $populasi_kabkota;
      $ratio_kunjungan_p_umum = $hitung_kunjungan_kabkota + $hitung_kunjungan_kec + $hitung_kunjungan_desa;

      $hitung_kunjungan_sdmi = $kunjungan_sdmi / $civitas_sdmi;
      $hitung_kunjungan_smp = $kunjungan_smp / $civitas_smp;
      $hitung_kunjungan_sma = $kunjungan_sma / $civitas_sma;
      $ratio_kunjungan_p_sekolah = $hitung_kunjungan_sdmi + $hitung_kunjungan_smp + $hitung_kunjungan_sma;

      $hitung_kunjungan_pt = $kunjungan_pt / $civitas_akademika;

      $hitung_kunjungan_p_khusus = $kunjungan_khusus / $pegawai;

      $hasil_uplm4 = ((0.5 * $ratio_kunjungan_p_umum) + (0.2 * $ratio_kunjungan_p_sekolah) + (0.2 * $hitung_kunjungan_pt) + (0.1 * $hitung_kunjungan_p_khusus) * $angka_koreksi);

      ?>

    <div class="kembali">
        <a href="../form/uplm4.php">Kembali ke Form</a>
    </div>

    <div class="home">
        <a href="../index.php">Kembali ke Menu Utama</a>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Kunjungan Perpustakaan Umum</h2>
        <p>Kabupaten/kota: <?php echo $hitung_kunjungan_kabkota; ?></p>
        <p>Kecamatan: <?php echo $hitung_kunjungan_kec; ?></p>
        <p>Desa: <?php echo $hitung_kunjungan_desa; ?></p>
        <p>Ratio Perpustakaan Umum: <?php echo $ratio_kunjungan_p_umum; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Kunjungan Perpustakaan Sekolah</h2>
        <p>SD/MI: <?php echo $hitung_kunjungan_sdmi; ?></p>
        <p>SMP: <?php echo $hitung_kunjungan_smp; ?></p>
        <p>SMA: <?php echo $hitung_kunjungan_sma; ?></p>
        <p>Ratio Perpustakaan Sekolah: <?php echo $ratio_kunjungan_p_sekolah; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah kunjungan Perpustakaan Perguruan Tinggi</h2>
        <p>Perguruan Tinggi: <?php echo $hitung_kunjungan_pt; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah kunjungan Perpustakaan Khusus</h2>
        <p>Khusus: <?php echo $hitung_kunjungan_p_khusus; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan UPLM 4</h2>
        <p>UPLM 4: <?php echo $hasil_uplm4; ?></p>
    </div>

    <?php
// Simpan hasil perhitungan ke dalam tabel
    $sql = "INSERT INTO uplm_4 (tgl_input, ratio_kunjungan_p_umum, ratio_kunjungan_p_sekolah, kunjungan_pt, kunjungan_p_khusus, hasil_uplm4) 
            VALUES (NOW() , $ratio_kunjungan_p_umum, $ratio_kunjungan_p_sekolah, $kunjungan_pt, $hitung_kunjungan_p_khusus, $hasil_uplm4)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
</body>
</html>
