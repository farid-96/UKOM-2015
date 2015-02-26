<?php
/*
* muslimpribadi.wordpress.com
* upload.php
*/
if( isset($_REQUEST['submit']) ){

	include('db.php');
	
					$namakampus                 = htmlspecialchars($_POST['namakampus']);
					$akronim                 = htmlspecialchars($_POST['akronim']);
					$wilayah                 = htmlspecialchars($_POST['wilayah']);
					$alamat                 = htmlspecialchars($_POST['alamat']);
					$website                 = htmlspecialchars($_POST['website']);
					$status                 = htmlspecialchars($_POST['status']);
					$akreditasi                 = htmlspecialchars($_POST['akreditasi']);
					$bahasa                 = htmlspecialchars($_POST['bahasa']);
					$kapasitas                = htmlspecialchars($_POST['kapasitas']);
					$fasilitas                 = htmlspecialchars($_POST['fasilitas']);
					$biaya               = htmlspecialchars($_POST['biaya']);
					$beasiswa                 = htmlspecialchars($_POST['beasiswa']);
					$ujianmasuk                 = htmlspecialchars($_POST['ujianmasuk']);
					$fakultas                 = htmlspecialchars($_POST['fakultas']);
        
				$direktori	= "C:/xampp\htdocs/yukNgampus/public/images";
				$namafile	= $_FILES['fotologo']['name'];
				$filename = basename($_FILES['fotologo']['name']);
				$namatemp	= $_FILES['fotologo']['tmp_name'];
				$uploadfile	= $direktori.$namakampus;
					if ($namakampus==""|| $wilayah==""|| $akronim==""|| $bahasa==""|| $alamat==""|| $website==""|| $akreditasi==""|| $status==""|| $kapasitas==""|| $fasilitas==""|| $biaya==""|| $ujianmasuk==""|| $fakultas=="")
					{
							echo"<script>alert('masih ada data yang kosong');</script>";
					}
					else
					{
						mysql_query("insert into kampusdatas values('$namakampus','$wilayah','$akronim','$bahasa','$alamat','$website','$akreditasi','$status','$kapasitas','$fasilitas','$biaya','$ujianmasuk','$fakultas')");
						move_uploaded_file($namatemp, $uploadfile);
						echo"<script>alert('Data berhasil di input');</script>";
										header('http://localhost/yukNgampus/Input.html');
						exit();
					}
}
?>