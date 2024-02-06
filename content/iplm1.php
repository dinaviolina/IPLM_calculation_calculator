<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPLM 1</title>
  <link rel="stylesheet" href="form_uplm1.css">
</head>
<body>
      <form action="iplm/proses_uplm1.php" method="post">
        <label for="unit_kabkota">Jumlah Unit Perpustakaan Kab/Kota :</label>
        <input type="decimal" name="unit_kabkota" required>
        <br>
        <label for="angka_pembagi_ratio">Angka Pembagi Ratio :</label>
        <input type="decimal" name="angka_pembagi_ratio" required>
        <br>
        <label for="unit_kec">Jumlah Unit Perpustakaan Kecamatan :</label>
        <input type="decimal" name="unit_kec" required>
        <br>
        <label for="populasi_kabkota">Jumlah Populasi Kabupaten/Kota :</label>
        <input type="decimal" name="populasi_kabkota" required>
        <br>
        <label for="unit_desa">Jumlah Unit Perpustakaan Desa :</label>
        <input type="decimal" name="unit_desa" required>
        <br>
        <label for="populasi_kabkota">Jumlah Populasi Kabupaten/Kota :</label>
        <input type="decimal" name="populasi_kabkota" required>
        <br>
        <label for="unit_sdmi">Jumlah Unit Perpustakaan SD/MI :</label>
        <input type="decimal" name="unit_sdmi" required>
        <br>
        <label for="civitas_sdmi">Jumlah Civitas SD/MI :</label>
        <input type="decimal" name="civitas_sdmi" required>
        <br>
        <label for="unit_smp">Jumlah Unit Perpustakaan SMP :</label>
        <input type="decimal" name="unit_smp" required>
        <br>
        <label for="civitas_smp">Jumlah Civitas SMP :</label>
        <input type="decimal" name="civitas_smp" required>
        <br>
        <label for="unit_sma">Jumlah Unit Perpustakaan SMA :</label>
        <input type="decimal" name="unit_sma" required>
        <br>
        <label for="civitas_sma">Jumlah Civitas SMA :</label>
        <input type="decimal" name="civitas_sma" required>
        <br>
        <label for="unit_pt">Jumlah Unit Perpustakaan Perguruan Tinggi :</label>
        <input type="decimal" name="unit_pt" required>
        <br>
        <label for="civitas_akademika">Jumlah Civitas Akademika :</label>
        <input type="decimal" name="civitas_akademika" required>
        <br>
        <label for="unit_khusus">Jumlah Unit Perpustakaan Khusus :</label>
        <input type="decimal" name="unit_khusus" required>
        <br>
        <label for="pegawai">Jumlah Pegawai :</label>
        <input type="decimal" name="pegawai" required>
        <br>
        <label for="angka_koreksi">Angka Koreksi :</label>
        <input type="decimal" name="angka_koreksi" required>
        <button type="submit" name="submit">Hitung</button>
      </form>
      
</body>
</html>