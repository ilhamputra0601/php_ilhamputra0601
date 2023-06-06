<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
    <link rel="stylesheet" href="soal2.css">
</head>
<body>
    <?php
    if (isset($_POST['umur'])) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
    }
    ?>

    <form action="soal2d.php" method="POST">
        <label for="hobi">Hobi:</label>
        <input type="text" name="hobi" id="hobi" required>
        <input type="hidden" name="nama" value="<?php echo $nama; ?>">
        <input type="hidden" name="umur" value="<?php echo $umur; ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
