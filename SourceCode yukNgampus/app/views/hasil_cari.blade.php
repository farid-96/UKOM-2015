<?php
$provinsi=isset($_GET['provinsi'])?$_GET['provinsi']:'';
$status=isset($_GET['status'])?$_GET['status']:'';
//$provinsi = trim($_POST['provinsi']);
//$status = trim($_POST['status']);
//$query = mysql_query("SELECT * FROM kampusdatas WHERE wilayah LIKE '%$provinsi%' and status like '%$status%'");
echo "<h1>Hasil Pencarian</h1><ul>";
//while($hasil = mysql_fetch_array($query)){
echo "<li>$provinsi</li>";
echo "</ul>";
?>