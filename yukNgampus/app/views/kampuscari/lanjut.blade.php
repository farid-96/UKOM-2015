@extends('layout.home')

@section('content')

@if(Request::path()== "kampuscari/lanjut")
<p>Halooo</p>

  @else(Request::path()== "") 
<div class="margin10">
	<div class="grid fluid">
		<div class="row">
			<div class="span9">
				<nav class="navigation-bar light">
					<div class="navigation-bar-content">
						<label>&nbsp;&nbsp;<a href="{{URL::to('beranda')}}">Beranda</a> / <a href="{{URL::to('kampuscari')}}">Cari Kampus</a> </label>
					</div>
				</nav>
				<br>
			<h2 id="__progress__">Progress bar</h2>
			

        <div class="example">
            <div class="progress-bar" data-role="progress-bar" data-value="10"></div>
            <div class="progress-bar" data-role="progress-bar" data-value="20" data-color="bg-green"></div>
            <div class="progress-bar" data-role="progress-bar" data-value="50" data-color="bg-red"></div>
            <div class="progress-bar" data-role="progress-bar" data-value="75" data-color="bg-pink"></div>
            <div class="progress-bar" data-role="progress-bar" data-value="100" data-color="#ccc"></div>
        </div>
	
			</div>
			<div class="span3">
				<nav class="navigation-bar light">
					<div class="navigation-bar-content">
						<label class="text-center">Rekomendasi Kampus</label>                
					</div>
				</nav>
				<table class="table bordered">
					<tbody>
						<tr><td>Universitas Indonesia</td></tr>
						<tr><td>Universitas Negeri Jakarta</td></tr>
						<tr><td>Universitas Gunadarma</td></tr>
						<tr><td>Universias Bunda Mulia</td></tr>
						<tr><td>Universitas Diponegoro</td></tr>
						<tr><td>Universitas Indonesia</td></tr>
						<tr><td>Universitas Negeri Jakarta</td></tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
  @endif
  <div></div>
 <script src="js/jquery/jquery.dataTables.js"></script>
 <script src="js/metro/metro-progressbar.js"></script>

			<!-- Load JavaScript Libraries -->
			<script src="js/jquery/jquery.min.js"></script>
			<script src="js/jquery/jquery.widget.min.js"></script>
			<script src="js/jquery/jquery.mousewheel.js"></script>
			<script src="js/prettify/prettify.js"></script>
			<script src="js/holder/holder.js"></script>

			<!-- Metro UI CSS JavaScript plugins -->
			<script src="js/load-metro.js"></script>

			<!-- Local JavaScript -->
			<script src="js/docs.js"></script>
			<script src="js/github.info.js"></script>
 <script>
    $(function(){
        $('#dataTables-1').dataTable( {
            "bProcessing": true
        } );
    });
 </script>      
@stop