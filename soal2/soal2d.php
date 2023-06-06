<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
    <link rel="stylesheet" href="soal2.css">
</head>
<body>
    <div>
    <?php
    if (isset($_POST['hobi'])) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $hobi = $_POST['hobi'];
        echo "Nama: " . $nama . "<br>";
        echo "Umur: " . $umur . "<br>";
        echo "Hobi: " . $hobi;
    }
    ?>
    </div>
</body>
</html>
