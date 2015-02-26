@extends("layout.home")

@section("content")
                <div class="grid">
                    <div class="row">
					<div class="span11">
					<nav class="navigation-bar light">
						<div class="navigation-bar-content">
							<label>&nbsp;&nbsp;<a href="{{URL::to("beranda")}}">Beranda</a> / <a href="{{URL::to("kampusdata")}}">Daftar Kampus</a> / {{ $data->namakampus }}</label>
						</div>
					</nav>
						<h2>{{Form::label("$data->namakampus")}}</h2>
						<div class="span10">
						<table class="table hovered border ">
							<tr>
								<td>{{Form::label('Nama Kampus : ')}}</td>
								<td>{{Form::label("$data->namakampus")}}</td>
							</tr>
							<tr>
								<td>{{Form::label('Akronim : ')}}</td>
								<td>{{Form::label("$data->akronim")}}</td>
							</tr>
						<tr>
						<td>{{Form::label('Wilayah : ')}}</td>
								<td>{{Form::label("$data->wilayah")}}</td></tr>
						<tr>
						<td>{{Form::label('Alamat : ')}}</td>
								<td>{{Form::label("$data->alamat")}}</td></tr>
						<tr>
						<td>{{Form::label('Website : ')}}</td>
								<td>{{Form::label("$data->website")}}</td></tr>
						<tr>
						<td>{{Form::label('Status : ')}}</td>
						
								<td>{{Form::label("$data->status")}}</td>
								</tr>
						<tr>
						<td>{{Form::label('Akreditasi : ')}}</td>
								<td>{{Form::label("$data->akreditasi")}}</td></tr>
						<tr>
						<td>{{Form::label('Bahasa : ')}}</td>
								<td>{{Form::label("$data->bahasa")}}</td></tr>
						<tr>
						<td>{{Form::label('Kapasitas : ')}}</td>
								<td>{{Form::label("$data->kapasitas")}}</td></tr>
						<tr>
						<td>{{Form::label('Fasilitas : ')}}</td>
								<td>{{Form::label("$data->fasilitas")}}</td></tr>
						<tr>
						<td>{{Form::label('Biaya : ')}}</td>
								<td>{{Form::label("$data->biaya")}}</td></tr>
						<tr>
						<td>{{Form::label('Beasiswa : ')}}</td>
								<td>{{Form::label("$data->beasiswa")}}</td></tr>
						<tr>
						<td>{{Form::label('Ujian Masuk : ')}}</td>
								<td>{{Form::label("$data->ujianmasuk")}}</td></tr>
						<tr>
						<td>{{Form::label('Fakultas : ')}}</td>
								<td>{{Form::label("$data->fakultas")}}</td></tr>
						</table>
 
                            </div>

					</div>
                            
						<div class="span3">
							<div class="image-container shadow">
								<img src="../../images/{{$data->akronim}}.png">
								<div class="overlay-fluid">
									Logo {{$data->namakampus}}
								</div>
							</div>
							
						</div>
						
                    </div>
                </div>
@stop
