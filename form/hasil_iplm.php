<?php include '../proses/koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link href="../assets/img/logo_bjn.png" rel="icon">
    <title>Hasil IPLM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <link href="../assets/img/logo_bjn.png" rel="icon">
    <title>Riwayat IPLM</title>
</head>
<body>

<a href="../index.php"><button class="btn btn--radius-2 btn-primary" style="margin-top: 10px; margin-left : 10px;">Kembali</button></a>

<?php
// Query untuk mengambil data dari tabel iplm
$query = "SELECT * FROM iplm ORDER BY TGL_INPUT DESC LIMIT 1";
$result = $conn->query($query);



// Memeriksa apakah query berhasil dieksekusi
if ($result) {
    // Menampilkan header tabel
    
    echo "<table>
            <tr>
                <th style='background-color: #e86471;'>UPLM 1</th>
                <th style='background-color: #e86471;'>UPLM 2</th>
                <th style='background-color: #e86471;'>UPLM 3</th>
                <th style='background-color: #e86471;'>UPLM 4</th>
                <th style='background-color: #e86471;'>UPLM 5</th>
                <th style='background-color: #e86471;'>UPLM 6</th>
                <th style='background-color: #e86471;'>UPLM 7</th>
                <th style='background-color: #e86471;'>Tanggal Input</th>
                <th style='background-color: #e86471;'>Total IPLM</th>

            </tr>";

    // Menampilkan data dari tabel iplm
    while ($row = $result->fetch_assoc()) {
        echo "<tr>  
                <td>{$row['ID_UPLM1']}</td>
                <td>{$row['ID_UPLM2']}</td>
                <td>{$row['ID_UPLM3']}</td>
                <td>{$row['ID_UPLM4']}</td>
                <td>{$row['ID_UPLM5']}</td>
                <td>{$row['ID_UPLM6']}</td>
                <td>{$row['ID_UPLM7']}</td>
                <td>{$row['TGL_INPUT']}</td>
                <td>{$row['TOTAL_IPLM']}</td>
            </tr>";
    }

    // Menutup tag tabel
    echo "</table>";

    // Membebaskan hasil query
    $result->free();
} else {
    // Menampilkan pesan kesalahan jika query gagal dieksekusi
    echo "Error: " . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>

</body>
</html>
