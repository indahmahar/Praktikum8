<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!--memanggil link bostrap--> 
<link rel="stylesheet" type="text/css" href="style.css"> <!--memanggil script css--> 
<style>
.warning {color: #FF0000;}  
</style><!--mengubah warna class warning--> 
</head>
<body>  

<?php
$error_tanggal = ""; //variabel eror
$error_nama = ""; //variabel eror
$error_jeniskelamin = ""; //variabel eror
$error_nisn = ""; //variabel eror
$error_nik =""; //variabel eror
$error_tempatlahir =""; //variabel eror
$error_tanggallahir =""; //variabel eror
$error_noregis =""; //variabel eror
$error_agama =""; //variabel eror
$error_kwn =""; //variabel eror
$error_khusus =""; //variabel eror
$error_alamatjalan =""; //variabel eror
$error_rt ="";  //variabel eror
$error_rw ="";  //variabel eror
$error_namadusun ="";  //variabel eror
$error_namakelurahan ="";  //variabel eror
$error_namakecamatan ="";  //variabel eror
$error_kodepos ="";  //variabel eror
$error_lintang ="";  //variabel eror
$error_bujur =""; //variabel eror
$error_ttinggal =""; //variabel eror
$error_mtrans =""; //variabel eror
$error_nokks =""; //variabel eror
$error_anak ="";  //variabel eror
$error_penerima =""; //variabel eror
$error_nokps ="";  //variabel eror


$nama = "";  //pendeklarasian variabel
$jeniskelamin = "";  //pendeklarasian variabel
$nisn = "";  //pendeklarasian variabel
$nik ="";  //pendeklarasian variabel
$tempatlahir ="";  //pendeklarasian variabel
$tanggallahir =""; //pendeklarasian variabel
$noregis ="";  //pendeklarasian variabel
$agama ="";  //pendeklarasian variabel
$kwn ="";  //pendeklarasian variabel
$khusus ="";  //pendeklarasian variabel
$alamatjalan ="";  //pendeklarasian variabel
$rt ="";  //pendeklarasian variabel
$rw ="";  //pendeklarasian variabel
$namadusun ="";  //pendeklarasian variabel
$namakelurahan =""; //pendeklarasian variabel
$namakecamatan =""; //pendeklarasian variabel
$kodepos ="";  //pendeklarasian variabel
$lintang ="";  //pendeklarasian variabel
$bujur ="";  //pendeklarasian variabel
$ttinggal =""; //pendeklarasian variabel
$mtrans ="";  //pendeklarasian variabel
$nokks ="";  //pendeklarasian variabel
$anak ="";  //pendeklarasian variabel
$penerima ="";  //pendeklarasian variabel
$nokps ="";  //pendeklarasian variabel


if ($_SERVER["REQUEST_METHOD"] == "POST") { // membuat request method dengan methode POST yang di deklarasikan ke variabel masing-masing
  if (empty($_POST["nama"])) 
  {
    $error_nama = "Nama tidak boleh kosong";
  } // jika input nama kosong maka akan muncul nama tidak boleh kosong
  else 
  {
    $nama = cek_input($_POST["nama"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nama)) 
    {
      $error_nama = "Inputan Hanya boleh huruf dan spasi"; 
    }//jika nama di inputkan hanya bisa menggunakan huruf dan angka dari abjad a-z/A-Z serta huruf dan spasi
  }
  
    if (empty($_POST["nisn"])) 
  {
    $error_nisn = "NISN tidak boleh kosong";
  } // jika input niss kosong maka akan muncul nisn tidak boleh kosong
  else 
  {
    $nisn = cek_input($_POST["nisn"]);

    if(!is_numeric($nisn)) 
    {
      $error_nisn = 'NISN hanya boleh angka';
    } //jika nisn di inputkan hanya boleh angka
  }

    if (empty($_POST["nik"])) 
  {
    $error_nik = "NIK tidak boleh kosong";
  } // jika input nik kosong maka akan muncul nik tidak boleh kosong
  else 
  {
    $nik = cek_input($_POST["nik"]);

    if(!is_numeric($nik)) 
    {
      $error_nik = 'NIK hanya boleh angka';
    } //jika nik di inputkan hanya boleh angka
  }

  	if (empty($_POST["tempatlahir"])) 
  {
    $error_tempatlahir = "Tempat Lahir tidak boleh kosong";
  }	  // jika input tempat tanggal lahir kosong maka akan muncul tempat tanggal lahir tidak boleh kosong

  	if (empty($_POST["noregis"])) 
  {
    $error_noregis = "No Registrasi tidak boleh kosong";
  } // jika input no regis kosong maka akan muncul no regis tidak boleh kosong
  else 
  {
    $noregis = cek_input($_POST["noregis"]);

    if(!is_numeric($noregis)) 
    {
      $error_noregis = 'No Registrasi hanya boleh angka';
    } //jika no regis di inputkan hanya boleh angka
  }

 	 if (empty($_POST["agama"])) 
  {
    $error_agama = "Agama tidak boleh kosong";
  }	  // jika inputagama kosong maka akan muncul agama tidak boleh kosong

if (empty($_POST["alamatjalan"])) 
  {
    $error_alamatjalan = "Alamat Jalan tidak boleh kosong";
  }	  // jika input alamat jalan kosong maka akan muncul alamat jalan tidak boleh kosong


}



function cek_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}  // di sini saya membuat function yang di mana untuk pengecekan data fungsi dari cek_input, trim digunakan untuk menghapus spasi, stripslashes untuk menghapus atau menghilangkan karakter backslashes tanda garis miring terbalik, dan  htmlspecialchars berfungsi mengkonversi 4 karakter 'khusus' HTML menjadi named entity sehingga tidak akan di 'proses' oleh web browser.
?>

<div class="row"> <!--membuat class-->
<div class="col-md-10"> <!--membuat class-->
<div class="card"> <!--membuat class-->
  <div class="card-header"> <!--membuat class-->
   <center> FORMULIR PESERTA DIDIK </center> 
  </div><br>

  <div class="form-group row"> <!--membuat class-->
    <label for="tanggal" class="col-sm-2 col-form-label">TANGGAL</label> <!--membuat label-->
    <div class="col-sm-3"> <!--membuat class-->
      <input type="date" name="tanggal" class="form-control <?php echo($error_tanggal !="" ? "is-invalid" : ""); ?>" id="tanggal" placeholder="" value="<?php echo $tanggal; ?>"><span class="warning"><?php echo $error_tanggal; ?></span>
    </div>
  </div> <!--membuat input-->

  <div class="header2"> <!--membuat class-->
   <center> DATA PRIBADI </center>  
  </div>


  <div class="card-body"><!--membuat class-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  <!--membuat form-->
	<div class="form-group row"> <!--membuat class-->
    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label> <!--membuat label-->
    <div class="col-sm-10"> <!--membuat class-->
      <input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="Nama Lengkap" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
    </div> <!--membuat input-->
  </div>

  <div class="jkel"> <!--membuat class-->
  		<td class="jkel"> Jenis Kelamin</td> <!--membuat class-->
  		<td>
  			<input type="radio" name="jenis_kelamin" class="laki"> Laki-laki
  			<input type="radio" name="jenis_kelamin" class="perempuan"> Perempuan
  		</td>
  </div><br><!--membuat input-->

   <div class="form-group row"> <!--membuat class-->
    <label for="nisn" class="col-sm-2 col-form-label">NISN</label> <!--membuat label-->
    <div class="col-sm-3"> <!--membuat class-->
      <input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>"><span class="warning"><?php echo $error_nisn; ?></span>
    </div> <!--membuat input-->
  </div>

  <div class="form-group row"> <!--membuat class-->
    <label for="nik" class="col-sm-2 col-form-label">NIK / NO.KITAS<br>(UNTUK WNA)</label> <!--membuat label-->
    <div class="col-sm-4">
      <input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK / NO.KITAS" value="<?php echo $nik; ?>"><span class="warning"><?php echo $error_nik; ?></span>
    </div> <!--membuat input-->
  </div>

   <div class="form-group row"> <!--membuat class-->
    <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label> <!--membuat label-->
    <div class="col-sm-3">
      <input type="text" name="tempatlahir" class="form-control <?php echo($error_tempatlahir !="" ? "is-invalid" : ""); ?>" id="tempatlahir" placeholder="Tempat Lahir" value="<?php echo $tempatlahir; ?>"><span class="warning"><?php echo $error_tempatlahir; ?></span>
    </div> <!--membuat input-->
  </div>

   <div class="form-group row"> <!--membuat class-->
    <label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir</label> <!--membuat label-->
    <div class="col-sm-3">
      <input type="date" name="tanggallahir" class="form-control <?php echo($error_tanggallahir !="" ? "is-invalid" : ""); ?>" id="tanggallahir" placeholder="Tanggal Lahir" value="<?php echo $tanggallahir; ?>"><span class="warning"><?php echo $error_tanggallahir; ?></span>
    </div>
  </div><!--membuat input-->

   <div class="form-group row"> <!--membuat class-->
    <label for="noregis" class="col-sm-2 col-form-label">No Registrasi Akta Lahir</label> <!--membuat label-->
    <div class="col-sm-10">
      <input type="text" name="noregis" class="form-control <?php echo($error_noregis !="" ? "is-invalid" : ""); ?>" id="noregis" placeholder="No Registrasi Akta Lahir" value="<?php echo $noregis; ?>"><span class="warning"><?php echo $error_noregis; ?></span>
    </div>
  </div> <!--membuat input-->

   <div class="form-group row"> <!--membuat class-->
    <label for="agama" class="col-sm-2 col-form-label">Agama & Kepercayaan</label> <!--membuat label-->
    <div class="col-sm-10">
      <input type="text" name="agama" class="form-control <?php echo($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" placeholder="Agama & Kepercayaan" value="<?php echo $agama; ?>"><span class="warning"><?php echo $error_agama; ?></span>
    </div>
  </div> <!--membuat input-->

    <div class="kwn"> <!--membuat class-->
  		<td> Kewarganegaraan</td>
  		<td>
  			<input type="radio" name="jenis_kelamin" class="in"> Indonesia(WNI)
  			<input type="radio" name="jenis_kelamin" class="as"> Asing(WNA)
  		</td> <!--membuat input-->
  </div><br>

   <div class="form-group row"> <!--membuat class-->
    <label for="khusus" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label> <!--membuat label-->
    <div class="col-sm-10">
      <input type="text" name="khusus" class="form-control <?php echo($error_khusus !="" ? "is-invalid" : ""); ?>" id="khusus" placeholder="Berkebutuhan Khusus" value="<?php echo $khusus; ?>"><span class="warning"><?php echo $error_khusus; ?></span>
    </div>
  </div> <!--membuat input-->

   <div class="form-group row"> <!--membuat class-->
    <label for="alamatjalan" class="col-sm-2 col-form-label">Alamat Jalan</label> <!--membuat label-->
    <div class="col-sm-10">
      <input type="text" name="alamatjalan" class="form-control <?php echo($error_alamatjalan !="" ? "is-invalid" : ""); ?>" id="alamatjalan" placeholder="Alamat Jalan" value="<?php echo $alamatjalan; ?>"><span class="warning"><?php echo $error_alamatjalan; ?></span>
    </div> <!--membuat input-->
  </div>

   <div class="form-group row"> <!--membuat class-->
    <label for="rt" class="col-sm-2 col-form-label">RT</label> <!--membuat label-->
    <div class="col-sm-3">
      <input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="RT" value="<?php echo $rt; ?>"><span class="warning"><?php echo $error_rt; ?></span>
    </div> <!--membuat input-->
  </div>

   <div class="form-group row"> <!--membuat class-->
    <label for="rw" class="col-sm-2 col-form-label">RW</label> <!--membuat label-->
    <div class="col-sm-3">
      <input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="RW" value="<?php echo $rw; ?>"><span class="warning"><?php echo $error_rw; ?></span>
    </div> <!--membuat input-->
  </div>

   <div class="form-group row"> <!--membuat class-->
    <label for="namadusun" class="col-sm-2 col-form-label">Nama Dusun</label> <!--membuat label-->
    <div class="col-sm-10">
      <input type="text" name="namadusun" class="form-control <?php echo($error_namadusun !="" ? "is-invalid" : ""); ?>" id="namadusun" placeholder="Nama Dusun" value="<?php echo $namadusun; ?>"><span class="warning"><?php echo $error_namadusun; ?></span>
    </div>
  </div> <!--membuat input-->

   <div class="form-group row"> <!--membuat class-->
    <label for="namadusun" class="col-sm-2 col-form-label">Nama Kelurahan / Desa</label> <!--membuat label-->
    <div class="col-sm-10">
      <input type="text" name="namadusun" class="form-control <?php echo($error_namadusun !="" ? "is-invalid" : ""); ?>" id="namadusun" placeholder="Nama Kelurahan / Desa" value="<?php echo $namadusun; ?>"><span class="warning"><?php echo $error_namadusun; ?></span>
    </div> <!--membuat input-->
  </div>

   <div class="form-group row"> <!--membuat class-->
    <label for="namakecamatan" class="col-sm-2 col-form-label">Kecamataan</label> <!--membuat label-->
    <div class="col-sm-10">
      <input type="text" name="namakecamatan" class="form-control <?php echo($error_namakecamatan !="" ? "is-invalid" : ""); ?>" id="namakecamatan" placeholder="Kecamataan" value="<?php echo $namakecamatan; ?>"><span class="warning"><?php echo $error_namakecamatan; ?></span>
    </div> <!--membuat input-->
  </div>

   <div class="form-group row"> <!--membuat class-->
    <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label> <!--membuat label-->
    <div class="col-sm-4">
      <input type="text" name="kodepos" class="form-control <?php echo($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Kode Pos" value="<?php echo $kodepos; ?>"><span class="warning"><?php echo $error_kodepos; ?></span> 
    </div> <!--membuat input-->
  </div>

 <div class="form-group row"> <!--membuat class-->
    <label for="lintang" class="col-sm-2 col-form-label">Lintang</label> <!--membuat label -->
    <div class="col-sm-10">
      <input type="text" name="lintang" class="form-control <?php echo($error_lintang !="" ? "is-invalid" : ""); ?>" id="lintang" placeholder="Lintang" value="<?php echo $lintang; ?>"><span class="warning"><?php echo $error_lintang; ?></span>
    </div> <!--membuat input-->
  </div>

  <div class="form-group row"> <!--membuat class-->
    <label for="bujur" class="col-sm-2 col-form-label">Bujur</label> <!--membuat label-->
    <div class="col-sm-10">
      <input type="text" name="bujur" class="form-control <?php echo($error_bujur !="" ? "is-invalid" : ""); ?>" id="bujur" placeholder="Bujur" value="<?php echo $bujur; ?>"><span class="warning"><?php echo $error_bujur; ?></span>
    </div> <!--membuat input-->
  </div>  

   <div class="form-group row"> <!--membuat class-->
    <label for="ttinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label> <!--membuat label-->
    <div class="col-sm-2">
      <input type="text" name="ttinggal" class="form-control <?php echo($error_ttinggal !="" ? "is-invalid" : ""); ?>" id="ttinggal" placeholder="Tempat Tinggal" value="<?php echo $ttinggal; ?>"><span class="warning"><?php echo $error_ttinggal; ?></span>
    </div>
  </div><!--membuat input-->

   <div class="form-group row"> <!--membuat class-->
    <label for="mtrans" class="col-sm-2 col-form-label">Moda Transportasi</label> <!--membuat label-->
    <div class="col-sm-2">
      <input type="text" name="mtrans" class="form-control <?php echo($error_mtrans !="" ? "is-invalid" : ""); ?>" id="mtrans" placeholder="Moda Transportasi" value="<?php echo $mtrans; ?>"><span class="warning"><?php echo $error_mtrans; ?></span>
    </div> <!--membuat input-->
  </div>

   <div class="form-group row"> <!--membuat class-->
    <label for="nokks" class="col-sm-2 col-form-label">Nomor KKS <br> (Kartu Keluarga Sejahtera)</label> <!--membuat label-->
    <div class="col-sm-10">
      <input type="text" name="nokks" class="form-control <?php echo($error_nokks !="" ? "is-invalid" : ""); ?>" id="nokks" placeholder="Nomor KKS" value="<?php echo $nokks; ?>"><span class="warning"><?php echo $error_nokks; ?></span>
    </div> <!--membuat input-->
  </div>

   <div class="form-group row"> <!--membuat class-->
    <label for="anak" class="col-sm-2 col-form-label">Anak ke-berapa <br> (Berdasarkan KK)</label> <!--membuat label-->
    <div class="col-sm-2">
      <input type="text" name="anak" class="form-control <?php echo($error_anak !="" ? "is-invalid" : ""); ?>" id="anak" placeholder="Anak ke-berapa" value="<?php echo $anak; ?>"><span class="warning"><?php echo $error_anak; ?></span>
    </div> 
  </div> <!--membuat input-->

    <div class="pnn"> <!--membuat class-->
  		<td> Penerima KPS / PKH</td>
  		<td>
  			<input type="radio" name="jenis_kelamin" class="yy">Ya
  			<input type="radio" name="jenis_kelamin" class="tt">Tidak
  		</td> <!--membuat input-->
  </div><br>

   <div class="form-group row"> <!--membuat class-->
    <label for="nokps" class="col-sm-2 col-form-label">Nomor KPS / PKH <br> (apabila menerima)</label> <!--membuat label-->
    <div class="col-sm-10">
      <input type="text" name="nokps" class="form-control <?php echo($error_nokps !="" ? "is-invalid" : ""); ?>" id="nokps" placeholder="Nomor KPS / PKH" value="<?php echo $nokps; ?>"><span class="warning"><?php echo $error_nokps; ?></span>
    </div>
  </div> <!--membuat input-->

  <div class="form-group row"> <!--membuat class-->
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">KIRIM</button>
    </div> <!--membuat button-->
  </div>
</form>

  </div>
</div>
</div>
</div>

<?php 

	include('koneksi.php'); //memanggil file konekns

	if(  isset($_POST['nama']) && isset($_POST['jeniskelamin'])  && isset($_POST['nisn'])  && isset($_POST['tempatlahir'])  && isset($_POST['tanggallahir'])  && isset($_POST['noregis'])  && isset($_POST['agama'])  && isset($_POST['kwn'])  && isset($_POST['khusus'])  && isset($_POST['alamatjalan'])  && isset($_POST['rt'])  && isset($_POST['rw'])  && isset($_POST['namadusun'])  && isset($_POST['namakelurahan'])  && isset($_POST['namakecamatan'])  && isset($_POST['kodepos'])  && isset($_POST['lintang'])  && isset($_POST['bujur'])  && isset($_POST['ttinggal'])  && isset($_POST['mtrans'])  && isset($_POST['nokks'])  && isset($_POST['anak'])  && isset($_POST['penerima'])  && isset($_POST['nokps']) ){
    //memasukkan data dalam method POST

		// menyimpan data dalam variabel
		$nama = $_POST ['nama'];
		$jeniskelamin = $_POST['jeniskelamin'];
		$nisn = $_POST ['nisn'];
		$tempatlahir = $_POST ['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$noregis = $_POST['noregis'];
		$agama = $_POST['agama'];
		$kwn = $_POST['kwn'];
		$khusus = $_POST['khusus'];
		$alamatjalan = $_POST['alamatjalan'];
		$rt = $_POST ['rt'];
		$rw = $_POST ['rw'];
		$namadusun = $_POST ['namadusun'];
		$namakelurahan = $_POST ['namakelurahan'];
		$namakecamatan = $_POST ['namakecamatan'];
		$kodepos = $_POST ['kodepos'];
		$lintang = $_POST ['lintang'];
		$bujur = $_POST ['bujur'];
		$ttinggal = $_POST ['ttinggal'];
		$mtrans = $_POST ['mtrans'];
		$nokks = $_POST ['nokks'];
		$anak = $_POST ['anak'];
		$penerima = $_POST ['penerima'];
		$nokps = $_POST ['nokps'];

    $sql = "INSERT INTO pesertadidik (nama,jeniskelamin,nisn,nik,tempatlahir,tanggallahir,noregis,agama,kwn,khusus,alamatjalan,rt,rw,namadusun,namakelurahan,namakecamatan,kodepos,lintang,bujur,ttinggal,mtrans,nokks,anak,penerima,nokps) VALUES ('$nama','$jeniskelamin','$nisn','$nik','tempatlahir','$tanggallahir','$noregis','$agama','kwn','khusus','alamatjalan','rt','rw','namadusun','namakelurahan','namakecamatan','kodepos','lintang','bujur','ttinggal','mtrans','nokks','anak','penerima','nokps')";
    //sql input kedalam tabel
		if (mysqli_query($conn,$sql)) {
			echo "<script type='text/javascript'>alert('TAMBAH PESERTA BERHASIL');</script>";
			echo "<script type='text/javascript'>window.location='TUGASPRAKTIKUM_8.php';</script>";
		}else{
			echo "TAMBAH PESERTA GAGAL". mysqli_error($conn);
		}
		mysqli_close($conn);
	}
 ?>
</body>
</html>