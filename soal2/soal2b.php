<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
    <link rel="stylesheet" href="soal2.css">
</head>
<body>
    <?php
    if (isset($_POST['nama'])) {
        $nama = $_POST['nama'];

    }
    ?>

    <form action="soal2c.php" method="POST">
        <label for="umur">Umur:</label>
        <input type="number" name="umur" id="umur" required>
        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
