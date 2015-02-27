@extends('layout.layout')

@section('content')

<br>

			<div class="span14"> 
			<div class="clearfix">
                <nav class="breadcrumbs">
					<ul>
						<li><a href="/inputdata">Beranda</a></li>
						<li class="active"><a href="/inputdata">Daftar Kampus</a></li>
						<li><a href="{{ URL::to('inputdata/create')}}">Tambah Data</a></li>
					</ul>
				</nav>
               <hr>
            
<h2>Data Kampus</h2>
            <table class="table bordered striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr >
                    <th>Nama Kampus</th>
                    <th>Wilayah</th>
                    <th>Alamat</th>
                    <th>Website</th>
                    <th class="text-center">Aksi</th>
                    
                </tr>
                </thead>

                <tbody>
                    @foreach($inputdata as $tampil)
                     <tr>
						<td class="size3">{{ $tampil->namakampus  }}</td>
						<td  class="size2">{{ $tampil->wilayah }}</td>
						<td class="size6">{{ $tampil->alamat }}</td>
						<td class="size2">{{ $tampil->website }}</td>
                        <td class="text-center">
                            <a href="{{ URL::to("inputdata/" .$tampil->id." /edit") }}"><button class="button mini primary size1" >Edit</button></a>
                            <a href="{{ URL::to("inputdata/" .$tampil->id. "/destroy") }}"><button class="button mini warning size1" id="tombolhapus">Hapus</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table></div><br><a href="{{ URL::to('inputdata/create')}}"><button class="button large info" style="">Tambah</button></a><br><br> <br>
                   
              
            
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
  <script>
		$(function(){
			$('#tombolhapus').on('click', function(){
				$.Notify({
					shadow: true,
					position: 'bottom-right',
					content: "Berhasil Terhapus"
				});
			});
		});
                    </script>
@stop