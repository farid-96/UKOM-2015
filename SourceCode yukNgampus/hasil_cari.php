<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">
    <link href="js/prettify/prettify.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>
    <script src="js/prettify/prettify.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    <script src="js/github.info.js"></script>

    <title>YukNgampus</title>
</head>
<body class="metro">
    <header class="bg-dark" data-load="header.html"></header>
    <div class="container">
        
	<nav class="navigation-bar default fixed-top">
		<nav class="navigation-bar-content">
			<a href="/" class="element"><span class="icon-book"></span> Yuk Ngampus</a>
			<span class="element-divider"></span>
			<a class="pull-menu element place-right" href="#"></a>
			<ul class="element-menu place-right">
				<li><a href="#">Beranda</a></li>
				<li><a href="http://localhost:8000/kampusdata">Data Kampus</a></li>
				<li><a href="http://localhost:8000/kampuscari">Cari Jurusan</a></li>
				<li><a class="dropdown-toggle" href="#"><span class="icon-cog"></span> Pengaturan</a>
					<ul class="dropdown-menu place-right " data-role="dropdown">
						<li ><a href="http://localhost:8000/login" >Login Admin</a></li>
						<li><a href="#">Tentang</a></li>
					</ul>
				</li>
			</ul>         			
		</nav>
	</nav>
</header>
<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("yukngampus");
$cari = trim($_POST['cari']);
$status = trim($_POST['status']);
$query = mysql_query("SELECT * FROM kampusdatas WHERE wilayah LIKE '%$cari%' and status like '%$status%'");

echo "<h1>Hasil Pencarian Untuk $cari</h1><br>";
while($hasil = mysql_fetch_array($query)){
echo "<table class='table bordered hovered'>";
echo "<tbody>";
						echo "<tr><td>$hasil[namakampus]</td></tr>";
					echo "</tbody>";
				echo "</table>";

}

?>
</body>
</html>