<?php
// Koneksi ke database
$host = 'localhost';
$username = 'hamz';
$password = 'root';
$database = 'testdb';

$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}

// Fungsi untuk mendapatkan data person dan hobinya
function getPersonData($connection, $searchKeyword = '') {
    $query = "SELECT person.id, person.nama, person.alamat, GROUP_CONCAT(hobi.hobi SEPARATOR ', ') AS hobinya
              FROM person
              LEFT JOIN hobi ON person.id = hobi.person_id
              WHERE person.nama LIKE '%$searchKeyword%'
              OR person.alamat LIKE '%$searchKeyword%'
              OR hobi.hobi LIKE '%$searchKeyword%'
              GROUP BY person.id";
    $result = mysqli_query($connection, $query);
    return $result;
}

// Menghandle form search
if (isset($_GET['search'])) {
    $searchKeyword = $_GET['search_keyword'];
    $result = getPersonData($connection, $searchKeyword);
} else {
    $result = getPersonData($connection);
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['alamat'] . "</td>";
    echo "<td>" . $row['hobinya'] . "</td>";
    echo "</tr>";
}

// Menutup koneksi database
mysqli_close($connection);
?>
