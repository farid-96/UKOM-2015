@extends("layout.home")
<!--Index Jurusan-->
@section("content")
<div class="margin10">
	<div class="grid fluid">
		<div class="row">
			<div class="span9">
			<nav class="breadcrumbs">
                <ul>
                    <li><a href="{{URL::to('beranda')}}"><i class="icon-home"></i></a></li>
					<li><a href="{{URL::to('beranda')}}">Beranda</a></li>
                    <li class="active"><a href="{{URL::to('jurusan')}}">Jurusan</a></li>
                </ul>
            </nav>
			<hr/>
				<br>
				<table class="table striped hovered dataTable" id="dataTables-1">
				<thead>
					<tr>
						<th>Nama Jurusan</th>
						<th>Deskripsi</th>
						<th>Peluang Karir</th>
						<th class="text-center"></th>
					</tr>
				</thead>
				<tbody>
				@foreach($data as $jurusan)
					<tr>
						<td class="text-center">{{ $jurusan->prodi}}</td>
						<td class="text-center">{{ $jurusan->deskrip}}</td>
						<td class="text-center">{{ $jurusan->karir}}</td>
						<td class="text-center">
						{{ link_to_action('JurusanController@lihat', 'Lihat Detail', array($tampil->id))}}
						</td>
					</tr>
					@endforeach
				</tbody>
				</table>
			</div>
			<div class="span3">
				<nav class="navigation-bar light">
					<div class="navigation-bar-content">
						<label class="text-center">Rekomendasi Jurusan</label>                
					</div>
				</nav>
				<table class="table bordered">
					<tbody>
					@foreach($data as $tampil)
						<tr><td>{{ link_to_action('JurusanController@lihat', $tampil->namakampus, array($data->id))}}</td></tr>
							@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script>
$("#dialoglogin").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                icon: '<img src="images/excel2013icon.png">',
                                title: 'Flat window',
                                content: '',
                                padding: 10,
                                onShow: function(_dialog){
                                    var content = '<form class="user-input">' +
                                            '<label>Login</label>' +
                                            '<div class="input-control text"><input type="text" name="login"><button class="btn-clear"></button></div>' +
                                            '<label>Password</label>'+
                                            '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +
                                            '<div class="input-control checkbox"><label><input type="checkbox" name="c1" checked/><span class="check"></span>Check me out</label></div>'+
                                            '<div class="form-actions">' +
                                            '<button class="button primary">Login</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close()">Batal</button> '+
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("User login");
                                    $.Dialog.content(content);
                                }
                            });
                        });
		</script>
 <script src="js/jquery/jquery.dataTables.js"></script>
 <script>
    $(function(){
        $('#dataTables-1').dataTable( {
            "bProcessing": true
        } );
    });
 </script> 
@stop