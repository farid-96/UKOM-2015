@extends('layout.home')

@section('content')

		<h3>Lihat Data</h3>
		<p>Nama  : {{$inputdata->namakampus}}</p>
		<p>Usia  : {{$inputdata->akronim}}</p>
		<p>Alamat  : {{$inputdata->alamat}}</p>
		<p>Telepon  : {{$inputdata->telepon}}</p>
		<p>Jenis Kelamin  : {{$inputdata->jenis_kelamin}}</p>
		<p>Email  : {{$inputdata->email}}</p>
		<br/>
		<a href="{{ route('beranda') }}">Kembali ke Index</a>
   
@stop