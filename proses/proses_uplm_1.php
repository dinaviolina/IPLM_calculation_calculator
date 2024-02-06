<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/img/logo_bjn.png" rel="icon">
    <title>Hasil  UPLM 1</title>
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

        
        $unit_kabkota = isset($_POST['unit_kabkota']) ? $_POST['unit_kabkota'] : 0;
        $angka_pembagi_ratio = isset($_POST['angka_pembagi_ratio']) ? $_POST['angka_pembagi_ratio'] : 0;
        $unit_kec = isset($_POST['unit_kec']) ? $_POST['unit_kec'] : 0;
        $populasi_kabkota = isset($_POST['populasi_kabkota']) ? $_POST['populasi_kabkota'] : 0;
        $unit_desa = isset($_POST['unit_desa']) ? $_POST['unit_desa'] : 0;
        $unit_sdmi = isset($_POST['unit_sdmi']) ? $_POST['unit_sdmi'] : 0;
        $civitas_sdmi = isset($_POST['civitas_sdmi']) ? $_POST['civitas_sdmi'] : 0;
        $unit_smp = isset($_POST['unit_smp']) ? $_POST['unit_smp'] : 0;
        $civitas_smp = isset($_POST['civitas_smp']) ? $_POST['civitas_smp'] : 0;
        $unit_sma = isset($_POST['unit_sma']) ? $_POST['unit_sma'] : 0;
        $civitas_sma = isset($_POST['civitas_sma']) ? $_POST['civitas_sma'] : 0;
        $unit_pt = isset($_POST['unit_pt']) ? $_POST['unit_pt'] : 0;
        $civitas_akademika = isset($_POST['civitas_akademika']) ? $_POST['civitas_akademika'] : 0;
        $unit_khusus = isset($_POST['unit_khusus']) ? $_POST['unit_khusus'] : 0;
        $pegawai = isset($_POST['pegawai']) ? $_POST['pegawai'] : 0;
        $angka_koreksi = isset($_POST['angka_koreksi']) ? $_POST['angka_koreksi'] : 0;

      
      
        $hitung_jup_kabkota = $unit_kabkota / $angka_pembagi_ratio;
        $hitung_jup_kec = $unit_kec / $populasi_kabkota;
        $hitung_jup_desa = $unit_desa / $populasi_kabkota;
        $ratio_p_umum = $hitung_jup_kabkota + $hitung_jup_kec + $hitung_jup_desa;
      
        $hitung_jup_sdmi = $unit_sdmi / $civitas_sdmi;
        $hitung_jup_smp = $unit_smp / $civitas_smp;
        $hitung_jup_sma = $unit_sma / $civitas_sma;
        $ratio_p_sekolah = $hitung_jup_sdmi + $hitung_jup_smp + $hitung_jup_sma;
      
        $hitung_jup_pt = $unit_pt / $civitas_akademika;
      
        $hitung_jup_khusus = $unit_khusus / $pegawai;
      
        $hitung_uplm1 = ((0.5 * $ratio_p_umum) + (0.2 * $ratio_p_sekolah) + (0.2 * $hitung_jup_pt) + (0.1 * $hitung_jup_khusus) * $angka_koreksi);
    ?>

    <div class="kembali">
        <a href="../form/uplm1.php">Kembali ke Form</a>
    </div>

    <div class="home">
        <a href="../index.php">Kembali ke Menu Utama</a>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Unit Perpustakaan Umum</h2>
        <p>Kabkota: <?php echo $hitung_jup_kabkota; ?></p>
        <p>Kecamatan: <?php echo $hitung_jup_kec; ?></p>
        <p>Desa: <?php echo $hitung_jup_desa; ?></p>
        <p>Ratio Perpustakaan Umum: <?php echo $ratio_p_umum; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Unit Perpustakaan Sekolah</h2>
        <p>SD/MI: <?php echo $hitung_jup_sdmi; ?></p>
        <p>SMP: <?php echo $hitung_jup_smp; ?></p>
        <p>SMA: <?php echo $hitung_jup_sma; ?></p>
        <p>Ratio Perpustakaan Sekolah: <?php echo $ratio_p_sekolah; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Unit Perpustakaan Perguruan Tinggi</h2>
        <p>Perguruan Tinggi: <?php echo $hitung_jup_pt; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah Unit Perpustakaan Khusus</h2>
        <p>Khusus: <?php echo $hitung_jup_khusus; ?></p>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan UPLM1</h2>
        <p>UPLM1: <?php echo $hitung_uplm1; ?></p>
    </div>


    <?php
      $sql = "INSERT INTO uplm_1 (tgl_input, ratio_unit_p_umum, ratio_unit_p_sekolah, perpus_pt, perpus_p_khusus, hasil_uplm1) 
      VALUES (NOW() , $ratio_p_umum, $ratio_p_sekolah, $hitung_jup_pt, $hitung_jup_khusus, $hitung_uplm1)";

      if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    ?>
</body>
</html>
