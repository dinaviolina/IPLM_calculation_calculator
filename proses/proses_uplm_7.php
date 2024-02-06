<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/img/logo_bjn.png" rel="icon">

    <title>Hasil UPLM 7</title>
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
      $anggota_kabkota = isset($_POST['anggota_kabkota']) ? $_POST['anggota_kabkota'] : 0;
      $anggota_kec = isset($_POST['anggota_kec']) ? $_POST['anggota_kec'] : 0;
      $anggota_desa = isset($_POST['anggota_desa']) ? $_POST['anggota_desa'] : 0;
      $populasi_kabkota= isset($_POST['populasi_kabkota']) ? $_POST['populasi_kabkota'] : 0;
      $anggota_sdmi = isset($_POST['anggota_sdmi']) ? $_POST['anggota_sdmi'] : 0;
      $civitas_sdmi = isset($_POST['civitas_sdmi']) ? $_POST['civitas_sdmi'] : 0;
      $anggota_smp = isset($_POST['anggota_smp']) ? $_POST['anggota_smp'] : 0;
      $civitas_smp = isset($_POST['civitas_smp']) ? $_POST['civitas_smp'] : 0;
      $anggota_sma = isset($_POST['anggota_sma']) ? $_POST['anggota_sma'] : 0;
      $civitas_sma = isset($_POST['civitas_sma']) ? $_POST['civitas_sma'] : 0;
      $anggota_pt = isset($_POST['anggota_pt']) ? $_POST['anggota_pt'] : 0;
      $civitas_akademika = isset($_POST['civitas_akademika']) ? $_POST['civitas_akademika'] : 0;
      $anggota_khusus = isset($_POST['anggota_khusus']) ? $_POST['anggota_khusus'] : 0;
      $pegawai = isset($_POST['pegawai']) ? $_POST['pegawai'] : 0;
      $angka_koreksi = isset($_POST['angka_koreksi']) ? $_POST['angka_koreksi'] : 0;


      $hitung_anggota_kabkota = $anggota_kabkota / $populasi_kabkota;
      $hitung_anggota_kec = $anggota_kec / $populasi_kabkota;
      $hitung_anggota_desa = $anggota_desa / $populasi_kabkota;
      $ratio_anggota_p_umum = $hitung_anggota_kabkota + $hitung_anggota_kec + $hitung_anggota_desa;

      $hitung_anggota_sdmi = $anggota_sdmi / $civitas_sdmi;
      $hitung_anggota_smp = $anggota_smp / $civitas_smp;
      $hitung_anggota_sma = $anggota_sma / $civitas_sma;
      $ratio_anggota_p_sekolah = $hitung_anggota_sdmi + $hitung_anggota_smp + $hitung_anggota_sma;

      $hitung_anggota_pt = $anggota_pt / $civitas_akademika;

      $hitung_anggota_p_khusus = $anggota_khusus / $pegawai;

      $hasil_uplm7 = ((0.5 * $ratio_anggota_p_umum) + (0.2 * $ratio_anggota_p_sekolah) + (0.2 * $hitung_anggota_pt) + (0.1 * $hitung_anggota_p_khusus)) * $angka_koreksi;

      ?>

    <div class="kembali">
        <a href="../form/uplm7.php">Kembali ke Form</a>
    </div>

    <div class="home">
        <a href="../index.php">Kembali ke Menu Utama</a>
    </div>


    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Anggota Perpustakaan Umum</h2>
        <p>Kabupaten/kota: <?php echo $hitung_anggota_kabkota; ?></p>
        <p>Kecamatan: <?php echo $hitung_anggota_kec; ?></p>
        <p>Desa: <?php echo $hitung_anggota_desa; ?></p>
        <p>Ratio Perpustakaan Umum: <?php echo $ratio_anggota_p_umum; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Anggota Perpustakaan Sekolah</h2>
        <p>SD/MI: <?php echo $hitung_anggota_sdmi; ?></p>
        <p>SMP: <?php echo $hitung_anggota_smp; ?></p>
        <p>SMA: <?php echo $hitung_anggota_sma; ?></p>
        <p>Ratio Perpustakaan Sekolah: <?php echo $ratio_anggota_p_sekolah; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Anggota Perpustakaan Perguruan Tinggi</h2>
        <p>Perguruan Tinggi: <?php echo $hitung_anggota_pt; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Anggota Perpustakaan Khusus</h2>
        <p>Khusus: <?php echo $hitung_anggota_p_khusus; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan UPLM 7</h2>
        <p>UPLM 7: <?php echo $hasil_uplm7; ?></p>
    </div>

    <?php
// Simpan hasil perhitungan ke dalam tabel
    $sql = "INSERT INTO uplm_7 (tgl_input, ratio_anggota_p_umum, ratio_anggota_p_sekolah, anggota_pt, anggota_p_khusus, hasil_uplm7) 
            VALUES (NOW() , $ratio_anggota_p_umum, $ratio_anggota_p_sekolah, $anggota_pt, $hitung_anggota_p_khusus, $hasil_uplm7)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    ?>
</body>
</html>
