<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello World";
    ?>

<h1>Menggunakan Variable</h1>
    
    <?php
    $nim = "312310281";
    $nama = "RIFQI PUTRA ADHADI";
    echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>

    <h2>Predefine Variable</h2>
    <?php
        if (isset($_POST['nama'])) {
            echo 'Selamat Datang ' . $_GET['nama'];
        }
    ?>

    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php
        if (isset($_POST['nama'])) {
            echo 'Selamat Datang ' . $_POST['nama'];
        }
    ?>

    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>

    <!-- if -->
    <?php
    $nama_hari = date("l");
    if ($nama_hari == "Sunday") {
    echo "Minggu";
    } elseif ($nama_hari == "Monday") {
    echo "Senin";
    } else {
    echo "Selasa";
    }
    ?>

    <!-- if switch -->
    <?php
    $nama_hari = date("l");
    switch ($nama_hari) {
    case "Sunday":
    echo "Minggu";
    break;
    case "Monday":
    echo "Senin";
    break;
    case "Tuesday":
    echo "Selasa";
    break;
    default:
    echo "Sabtu";
    }
    ?>
    
    <!-- for -->
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
    }
    ?>

    <!-- while -->
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    }
    ?>

    <!-- do-while -->
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
    echo "Perulangan ke: " . $i . '<br />';
    $i++;
    } while ($i<=10);
    ?>

</body>
</html>