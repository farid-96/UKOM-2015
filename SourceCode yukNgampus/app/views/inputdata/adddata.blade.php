@extends("layout.layout")

@section("content")
<div class="margin20">
        <div class="clearfix">
            <div class="place-left">
                <nav class="breadcrumbs">
					<ul>
						<li><a href="/inputdata">Beranda</a></li>
						<li><a href="/inputdata">Daftar Kampus</a></li>
						<li class="active"><a href="/inputdata/create">Tambah Data</a></li>
					</ul>
				</nav>
            </div>
        </div>
        <hr />
            
<h2>Form Input Data Kampus</h2>
		{{ Form::open(array('url' => 'inputdata/post'))}}
        <div class="grid">
            <div class="row">
                <div class="span7">

                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Nama Kampus" name="namakampus"/>
                        </div>

                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Akronim" name="akronim"/>
                        </div>

                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Wilayah" name="wilayah"/>
                        </div>

                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Alamat" name="alamat"/>
                        </div>

                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="website" name="website"/>
                        </div>
                        <label>Status</label>
                        <div class="input-control select" data-role="input-control">
                            <select name="status">
                                <option>Negeri</option>
                                <option>Swasta</option>
                            </select>
                        </div>

                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Akreditasi" name="akreditasi"/>
                        </div>

                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Bahasa Pengantar" name="bahasa"/>
                        </div>

                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Kapasitas" name="kapasitas"/>
                        </div>
						<div  class="form-control" data-role="input-control">
							{{ Form::label('fasilitas', 'Fasilitas')}}
							{{ Form::textarea('fasilitas', null, array('class'=> 'input-control textarea','placeholder'=>'masukkan fasilitas'))}}
						</div>
						<br/>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Biaya rata rata persemester" name="biaya"/>
                        </div>

                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Beasiswa" name="beasiswa"/>
                        </div>

                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Ujian Masuk" name="ujianmasuk"/>
                        </div>
                        <div class="form-control" data-role="input-control">
							{{ Form::label('fakultas', 'Fakultas')}}
							{{ Form::textarea('fakultas', null, array('class'=> 'input-control textarea','placeholder'=>'masukkan fakultas'))}}
						</div>
						<br/>
					
				<input type="submit" name='submit' value="Input data" class="button info">
                    <button class="button large">Batal</button>
					
				<script>
				if( isset($_REQUEST['submit']) ){
					$direktori	= "D:";
					$namafile	= $_FILES['fotologo']['name'];
					$filename = basename($_FILES['fotologo']['name']);
					$namatemp	= $_FILES['fotologo']['tmp_name'];
					$uploadfile	= $direktori.$namakampus;
					
					move_uploaded_file($namatemp, $uploadfile);
					
				}
				</script>
                </div><div class="span1"></div>
                <div class="span3">
					<div class="image-container">
								<img src="../../images/default.png">						
								
					</div> 
					<td><input type="file" name="fotologo" size="40" /></td>
					
					

				</div>
            <div class="row">
    
            </div>
        </div>
        </form>

        </div>
<script>
if( isset($_REQUEST['submit']) ){
	$direktori	= "D:";
	$namafile	= $_FILES['fotologo']['name'];
	$filename = basename($_FILES['fotologo']['name']);
	$namatemp	= $_FILES['fotologo']['tmp_name'];
	$uploadfile	= $direktori.$namakampus;
	move_uploaded_file($namatemp, $uploadfile);
	
						echo"<script>alert('Data berhasil di input');</script>";
}
				
</script>
@stop