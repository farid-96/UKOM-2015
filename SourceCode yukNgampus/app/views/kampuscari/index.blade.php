@extends('layout.home')

@section('content')
<div class="margin10">
	<div class="grid fluid">
		<div class="row">
			<div class="span9">
				<nav class="navigation-bar light">
					<div class="navigation-bar-content">
						<label>&nbsp;&nbsp;<a href="{{URL::to('beranda')}}">Beranda</a> / <a href="{{URL::to('kampuscari')}}">Cari Jurusan</a> </label>
					</div>
				</nav>
				<br>
				<div class="wizard" id="wizard">
                <div class="steps">
                    <div class="step">
						<form methode="post" name="test">
							<h3><center>Test Cari Jurusan</center></h3>
							1. <select name="jurusan">
									<option value="0">Pilih Jurusan Anda</option>
									<option value="1">IPA</option>
									<option value="2">IPS</option>
									<option value="3">Perkantoran</option>
									<option value="3">Perhotelan</option>
									<option value="3">Pariwisata</option>
									<option value="4">Akuntansi</option>
									<option value="4">Bisnis Manajemen</option>
									<option value="5">Rekayasa Perangkat Lunak</option>
									<option value="6">Komputer Jaringan</option>
							</select><br>
							<label class="inline-block">2.
								<input  name="eksperimen" type="checkbox"  />
								<span class="check"></span>
							Suka bereksperimen atau mencoba.
							</label><br>
							<label class="inline-block">3.
								<input  name="bicara" type="checkbox"  />
								<span class="check"></span>
							Cakap / pandai berbicara
							</label><br>
								<div class="input-control radio inline-block" data-role="input-control">
									<label class="inline-block">4. 
									<input type="radio" name="r1" value="1"/>
									<span class="check"></span>
									Lebih suka banyak bertindak daripada berfikir.
							</label><br>
							<label class="inline-block">&nbsp;&nbsp;&nbsp;
								<input type="radio" name="r1" value="2"  />
								<span class="check"></span>
								Lebih suka banyak berfikir daripada bertindak.
							</label>
							</div><br>
								<div class="input-control radio inline-block" data-role="input-control">
									<label class="inline-block">5. 
										<input type="radio" name="r2"/>
										<span class="check"></span>
										Dalam bekerja lebih suka dikerjakan sendiri.
									</label><br>
									<label class="inline-block">&nbsp;&nbsp;&nbsp;
										<input type="radio" name="r2"  />
										<span class="check"></span>
										Suka menghabiskan waktu kosong bersama teman-teman.
									</label>
								</div>&nbsp;&nbsp;&nbsp;<br>
								<button class="button info" input type=Submit name="submit" >Lihat Hasil</button>
								<button class="button info" input type=Submit name="submit" >Reset</button>
						</form>
								<?php
								$jurusan=isset($_GET['jurusan'])?$_GET['jurusan']:'';
								$eksperimen=isset($_GET['eksperimen'])?$_GET['eksperimen']:'';
								$bicara=isset($_GET['bicara'])?$_GET['bicara']:'';
								$r1=isset($_GET['r1'])?$_GET['r1']:'';
								$r2=isset($_GET['r2'])?$_GET['r2']:'';
								$test=isset($_GET['test'])?$_GET['test']:'';
								?>
								<?php
								if($jurusan=="1")
								{
								?>
								<a>Jurusan yang mungkin cocok untuk Anda :</a><br>
								<ol class="offset1">
									<li>MIPA&nbsp;&nbsp;(70%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="70" data-color="bg-cobalt"></div>
									<li>Kedokteran&nbsp;&nbsp;(50%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="50" data-color="bg-green"></div>
									<li>Teknik&nbsp;&nbsp;(35%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="35" data-color="bg-red"></div>
								</ol>
								<?php
								}
								elseif($jurusan=="2")
								{
								?>
								<a>Jurusan yang mungkin cocok untuk Anda :</a><br>
								<ol class="offset1">
									<li>Sosial dan Politik&nbsp;&nbsp;(85%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="85" data-color="bg-cobalt"></div>
									<li>Ekonomi Sosial&nbsp;&nbsp;(67%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="67" data-color="bg-green"></div>
									<li>Sastra dan Budaya&nbsp;&nbsp;(45%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="45" data-color="bg-red"></div>
								</ol>
								<?php
								}
								elseif($jurusan=="3")
								{
								?>
								<a>Jurusan yang mungkin cocok untuk Anda :</a><br>
								<ol class="offset1">
									<li>Marketing Komunikasi&nbsp;&nbsp;(80%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="80" data-color="bg-cobalt"></div>
									<li>Administrasi Negara&nbsp;&nbsp;(55%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="55" data-color="bg-green"></div>
									<li>Ilmu Komunikasi&nbsp;&nbsp;(40%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="40" data-color="bg-red"></div>
								</ol>
								<?php
								}
								elseif($jurusan=="4")
								{
								?>
								<a>Jurusan yang mungkin cocok untuk Anda :</a><br>
								<ol class="offset1">
									<li>Akuntansi&nbsp;&nbsp;(85%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="85" data-color="bg-cobalt"></div>
									<li>Ekonomi dan Bisnis&nbsp;&nbsp;(70%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="70" data-color="bg-green"></div>
									<li>Tata Niaga&nbsp;&nbsp;(50%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="50" data-color="bg-red"></div>
								</ol>
								<?php
								}
								elseif($jurusan=="5")
								{
								?>
								<a>Jurusan yang mungkin cocok untuk Anda :</a><br>
								<ol class="offset1">
									<li>Sistem Informasi&nbsp;&nbsp;(85%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="85" data-color="bg-cobalt"></div>
									<li>Teknik Informatika&nbsp;&nbsp;(70%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="70" data-color="bg-green"></div>
									<li>Teknik Komputer&nbsp;&nbsp;(40%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="40" data-color="bg-red"></div>
								</ol>
								<?php
								}
								elseif($jurusan=="6")
								{
								?>
								<a>Jurusan yang mungkin cocok untuk Anda :</a><br>
								<ol class="offset1">
									<li>Jaringan Komputer&nbsp;&nbsp;(78%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="78" data-color="bg-cobalt"></div>
									<li>Teknik Informatika&nbsp;&nbsp;(56%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="56" data-color="bg-green"></div>
									<li>Sistem Informasi&nbsp;&nbsp;(20%)</li>
									<div class="progress-bar large size5" data-role="progress-bar" data-value="20" data-color="bg-red"></div>
								</ol>
								<?php
								}
								?>
	
					</div>
                </div>
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
						@foreach($data as $tampil)
						<tr><td>{{ link_to_action('KampusdataController@lihat', $tampil->namakampus, array($tampil->id))}}</td></tr>
							@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

  
 <script src="js/jquery/jquery.dataTables.js"></script>
 <script>
  $("#teknik").on('click', function(){

});
 $("#lihathasil").on('click', function(){
    $.Dialog({
        shadow: true,
        overlay: false,
        icon: '<span class="icon-book"></span>',
        title: 'Hasil',
        width: 300,
		height: 100,
        padding: 20,
        content: 'Maaf sedang terjadi kesalahan... :('
    });
});
 </script>      
@stop