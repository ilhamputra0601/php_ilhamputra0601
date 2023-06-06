<?php
$jml = $_GET['jml'];
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--)
{
  echo "<tr>\n";
  $total = 0; // Mengatur total awal sebagai 0
  for ($b = $a; $b > 0; $b--)
  {
    $total += $b; // Menambahkan nilai $b ke total
    echo "<td>$b</td>";
  }
  echo "</tr>\n";
  echo "<tr>\n";
  echo "<td colspan='$jml'>Total = $total</td>"; // Menampilkan total dalam satu sel dengan atribut colspan
  echo "</tr>\n";
  echo "<tr>\n";
}
echo "</table>";
?>