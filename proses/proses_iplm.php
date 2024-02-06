<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../assets/img/logo_bjn.png" rel="icon">
    <title>Hasil Perhitungan IPLM</title>
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
        $nilai_uplm1 = isset($_POST['nilai_uplm1']) ? $_POST['nilai_uplm1'] : 0;
        $nilai_uplm2 = isset($_POST['nilai_uplm2']) ? $_POST['nilai_uplm2'] : 0;
        $nilai_uplm3 = isset($_POST['nilai_uplm3']) ? $_POST['nilai_uplm3'] : 0;
        $nilai_uplm4 = isset($_POST['nilai_uplm4']) ? $_POST['nilai_uplm4'] : 0;
        $nilai_uplm5 = isset($_POST['nilai_uplm5']) ? $_POST['nilai_uplm5'] : 0;
        $nilai_uplm6 = isset($_POST['nilai_uplm6']) ? $_POST['nilai_uplm6'] : 0;
        $nilai_uplm7 = isset($_POST['nilai_uplm7']) ? $_POST['nilai_uplm7'] : 0;
      
        $hitung_iplm = (((floatval($nilai_uplm1) + floatval($nilai_uplm2) + floatval($nilai_uplm3) + floatval($nilai_uplm4) + floatval($nilai_uplm5) + floatval($nilai_uplm6) + floatval($nilai_uplm7))/7 ) * 100);
    ?>

    <div class="kembali">
        <a href="../form/iplm.php">Kembali ke Form</a>
    </div>

    <div class="home">
        <a href="../index.php">Kembali ke Menu Utama</a>
    </div>

    <div class="hasil">
        <h2>Hasil Perhitungan Jumlah IPLM</h2>
        <p>UPLM 1 : <?php echo $nilai_uplm1; ?></p>
        <p>UPLM 2 : <?php echo $nilai_uplm2; ?></p>
        <p>UPLM 3 : <?php echo $nilai_uplm3; ?></p>
        <p>UPLM 4 : <?php echo $nilai_uplm4; ?></p>
        <p>UPLM 5 : <?php echo $nilai_uplm5; ?></p>
        <p>UPLM 6 : <?php echo $nilai_uplm6; ?></p>
        <p>UPLM 7 : <?php echo $nilai_uplm7; ?></p>
        <p>Hasil Perhitungan IPLM : <?php echo $hitung_iplm ?></p>
    </div>

    <?php
      $sql = "INSERT INTO iplm (id_uplm7, id_uplm6, id_uplm5, id_uplm4, id_uplm3, id_uplm2, id_uplm1, tgl_input, total_iplm) 
      VALUES ($nilai_uplm7, $nilai_uplm6, $nilai_uplm5, $nilai_uplm4, $nilai_uplm3, $nilai_uplm2, $nilai_uplm1, NOW(), $hitung_iplm)";

      if ($conn->query($sql) === TRUE) {
        echo '<button type="button" class="btn btn-outline-success">Success ! Data berhasil disimpan </button>'
        ;
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    ?>
</body>
</html>
