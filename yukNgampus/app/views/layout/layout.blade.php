<!DOCTYPE HTML>
<html>
<head>
    <title>Yuk Ngampus</title>
    @include("includes.head")
</head>
<body class="metro">
    @include("includes.navbaradmin")
    <div class="container">
       @yield("content")
	   
 <script type="text/javascript">
	$document).ready(function(){
	@yield("script")
	});
	</script>
    </div>
</body>
</html>