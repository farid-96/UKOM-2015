@extends('layout.home')

@section('content')

<div class="margin10">
	<div class="grid fluid fg-darkCobalt">
		<div class="row">
			<div class="span12">
				<nav class="breadcrumbs">
						<ul>
							<li><a href="{{URL::to('beranda')}}"><i class="icon-home"></i></a></li>
							<li><a href="{{URL::to('beranda')}}">Beranda</a></li>
							<li class="active"><a href="{{URL::to('kampusdata')}}">Daftar Kampus</a></li>
						</ul>
			</nav>
				<br>
				<table class="table bordered striped hovered dataTable" id="dataTables-1">
				<thead>
					<tr>
						<th>Nama Kampus</th>
						<th>Singkatan</th>
						<th>Wilayah</th>
						<th>Alamat</th>
						<th>Website</th>
						<th class="text-center"></th>
					</tr>
				</thead>
				<tbody>
				@foreach($data as $tampil)
					<tr>
						<td class="size3">{{ $tampil->namakampus  }}</td>
						<td class="size2 text-center">{{ $tampil->akronim }}</td>
						<td  class="size2">{{ $tampil->wilayah }}</td>
						<td class="size4">{{ $tampil->alamat }}</td>
						<td>{{ $tampil->website }}</td>
						<td class="text-center">
						{{ link_to_action('KampusdataController@lihat', 'Selengkapnya', array($tampil->id))}}
						</td>
					</tr>
					@endforeach
				</tbody>
				</table>
			</div>
			
	</div>
</div>

 <script src="js/jquery/jquery.dataTables.js"></script>
 <script>
    $(function(){
        $('#dataTables-1').dataTable( {
            "bProcessing": true
        } );
    });
 </script>      
@stop