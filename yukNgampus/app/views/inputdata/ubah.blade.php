@extends("layout.layout")

@section("content")
	<div class="margin20">
		<div class="clearfix">
			<div class="place-left">
			<h2>Edit Data Kampus</h2>
			</div>
		</div>
		<hr />
		{{ Form::model($data, array('route' => array('ganti', $data->id), 'method' =>'PUT')) }}
		<div class="grid">
			<div class="row">
				<div class="span7">
					<label>Nama Kampus</label>
					<div class="input-control text" data-role="input-control">
						<input type="text"name="namakampus" placeholder="Nama Kampus" value="{{ $data->namakampus}}"/>
					</div>
					<label>Akronim</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->akronim}}" placeholder="Akronim" name="akronim"/>
					</div>
					<label>Kota</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->wilayah}}" placeholder="Wilayah" name="wilayah"/>
					</div>
					<label>Alamat</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->alamat}}" placeholder="Alamat" name="alamat"/>
					</div>
					<label>Website</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->website}}" placeholder="website" name="website"/>
					</div>
					<label>Status</label>
					<div class="input-control select" data-role="input-control">
						<select name="status">
							<option>Negeri</option>
							<option>Swasta</option>
						</select>
					</div>
					<label>Akreditasi</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->akreditasi}}" placeholder="Akreditasi" name="akreditasi"/>
					</div>
					<label>Bahasa Pengantar</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->bahasa}}" placeholder="Bahasa Pengantar" name="bahasa"/>
					</div>
					<label>Kapasitas</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->kapasitas}}" placeholder="Kapasitas" name="kapasitas"/>
					</div>
				</div>
				<div class="span7">
					<div  class="form-control" data-role="input-control">
						{{ Form::label('fasilitas', 'Fasilitas')}}
						{{ Form::textarea('fasilitas', $data->fasilitas, array('class'=> 'input-control textarea','placeholder'=>'masukkan fasilitas'))}}
					</div><br>
					<label>Biaya Rata-rata per semester</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->biaya}}" placeholder="Biaya rata rata persemester" name="biaya"/>
					</div>
					<label>Beasiswa</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->beasiswa}}" placeholder="Beasiswa" name="beasiswa"/>
					</div>
					<label>Ujian Masuk</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->ujianmasuk}}"  placeholder="Ujian Masuk" name="ujianmasuk"/>
					</div>
					<div class="form-control" data-role="input-control">
						{{ Form::label('fakultas', 'Fakultas')}}
						{{ Form::textarea('fakultas', $data->fakultas, array('class'=> 'input-control textarea','placeholder'=>'masukkan fakultas'))}}
					</div>
				</div>
			</div>
			<div class="">
			<a href="{{ URL::to("inputdata/ubah")}}"><button class="button large info" style="">Ubah</button></a>
			<button class="button large">Batal</button>
			</div>
		</div>
	</div>
</form>

@stop