<?php
mysql_connect("localhost","root","");
mysql_select_db("yukngampus");
$cari = trim($_POST['cari']);
$status = trim($_POST['status']);
$query = mysql_query("SELECT * FROM kampusdatas WHERE wilayah LIKE '%$cari%' and status like '%$status%'");
echo "<h1>Hasil Pencarian</h1><ul>";
while($hasil = mysql_fetch_array($query)){
echo "<li>$hasil[namakampus]</li>";
}echo "</ul>";

?>