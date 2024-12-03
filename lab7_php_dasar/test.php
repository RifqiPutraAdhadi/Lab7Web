<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Umur dan Gaji</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        label { display: inline-block; width: 100px; margin-top: 10px; }
        input[type="text"], input[type="date"], select { width: 200px; padding: 5px; }
        input[type="submit"] { margin-top: 10px; padding: 5px 15px; }
    </style>
</head>
<body>
    <h2>Form Input Data</h2>
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        
        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br>
        
        <label>Pekerjaan:</label>
        <select name="pekerjaan" required>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Manager">Manager</option>
        </select><br><br>
        
        <input type="submit" value="Kirim">
    </form>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nama = htmlspecialchars($_POST["nama"]);
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $pekerjaan = $_POST["pekerjaan"];

        // Menghitung umur berdasarkan tanggal lahir
        $tanggal_lahir_obj = new DateTime($tanggal_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($tanggal_lahir_obj)->y;

        // Menentukan gaji berdasarkan pekerjaan
        $gaji = 0;
        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 10000000;
                break;
            case "Desainer":
                $gaji = 8000000;
                break;
            case "Manager":
                $gaji = 15000000;
                break;
            default:
                $gaji = 0;
        }

        // Tampilkan hasil
        echo "<h3>Hasil Input</h3>";
        echo "Nama: $nama <br>";
        echo "Tanggal Lahir: " . $tanggal_lahir_obj->format('d-m-Y') . "<br>";
        echo "Umur: $umur tahun <br>";
        echo "Pekerjaan: $pekerjaan <br>";
        echo "Gaji: Rp. " . number_format($gaji, 0, ',', '.') . "<br>";
    }
    ?>
</body>
</html>