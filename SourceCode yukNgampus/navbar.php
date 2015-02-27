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

    <title>Metro UI CSS : Metro Bootstrap CSS Library</title>
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
				<li><a href="{{URL::to('../form.php')}}">Beranda</a></li>
				<li><a href="{{ URL::to('kampusdata') }}">Data Kampus</a></li>
				<li><a href="{{ URL::to('kampuscari') }}">Cari Jurusan</a></li>
				<li><a class="dropdown-toggle" href="#"><span class="icon-cog"></span> Pengaturan</a>
					<ul class="dropdown-menu place-right " data-role="dropdown">
						<li ><a href="/login" >Login Admin</a></li>
						<li><a href="#">Tentang</a></li>
					</ul>
				</li>
			</ul>         			
		</nav>
	</nav>
</header>
<title>Form Pencarian</title>

<body>
<h1>Form Pencarian</h1>
<form name="form1" method="post" action="hasil_cari.php">
<input name="cari" type="text" value="Pencarian.." />
<input name="status" type="text" value="Pencarian.." />
<input type="submit" name="Submit" value="Cari" />
</form>
</body>
</html>