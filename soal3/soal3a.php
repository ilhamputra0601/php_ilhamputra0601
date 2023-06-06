
<!DOCTYPE html>
<html>
<head>
    <title>Listing Data Person</title>
    <link rel="stylesheet" type="text/css" href="soal3.css">
</head>
<body>
    <h1>Listing Data Person</h1>

    <form method="GET" action="soal3a.php">
        <label for="search_keyword">Search:</label>
        <input type="text" name="search_keyword" id="search_keyword">
        <button type="submit" name="search">Search</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
        <?php include 'conn.php'; ?>
    </table>

</body>
</html>
