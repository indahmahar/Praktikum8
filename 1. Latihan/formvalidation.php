<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!--memanggil link bostrap--> 
	<title></title>
<style type="text/css">
.warning { color: #ff0000;}	
</style>
<!--Memberi warna pada tag warning-->
</head>
<body>

<?php 
$error_nama = ""; //variabel eror
$error_email= ""; //variabel eror
$error_web = ""; //variabel eror
$error_pesan = ""; //variabel eror
$error_telp =""; //variabel eror

$nama =""; //variabel nama
$email =""; //variabel email 
$web = ""; //variabel web
$pesan = ""; //variabel pesan
$telp = ""; //variabel telp

if ($_SERVER["REQUEST_METHOD"] == "POST") { // membuat request method dengan methode POST yang di deklarasikan ke variabel masing-masing
	
	if (empty($_POST["nama"])) 
	{
		$error_nama = "Nama tidak boleh kosong";
	}// jika input nama kosong maka akan muncul nama tidak boleh kosong
	else
	{
		$nama = cek_input($_POST["nama"]);
		//pengecekan input pada nama menggunakan method post
		if (!preg_match("/^[a-zA-Z ]*$/",$nama)) 
		{
			$error_nama = "Inputan hanya boleh huruf dan spasi";
		} //jika nama di inputkan hanya bisa menggunakan huruf dan angka dari abjad a-z/A-Z
	}
/////
if (empty($_POST["email"])) 
{
	$error_email = "Email tidak boleh kosong";
}// jika input email kosong maka akan muncul Email tidak boleh kosong
else 
{
	$email = cek_input($_POST["email"]);
	//pengecekan input pada email menggunakan method post
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		$error_email = "Format email invalid";
	}///Jika di inputkan email maka akan dicek oleh post dan jika sudah maka akan di fliter dan validasi apakah input tersebut tidak sesuai maka akan muncul format email invalid 	
}
///
if (empty($_POST["pesan"])) 
{
	$error_pesan = "Pesan tidak boleh kosong";
} // jika input email kosong maka akan muncul Email tidak boleh kosong
else
{
	$pesan = cek_input($_POST["pesan"]);
}

if (empty($_POST["web"])) 
{// pengecekan input dari pesan yang di simpan oleh method post
 ///////////
	$error_web = "Website tidak boleh kosong";
} // jika input email kosong maka akan muncul Email tidak boleh kosong
else
{
	$web = cek_input($_POST["web"]);

	if (!preg_match("/\b(?:(?: https?|ftp):\/\/|www\.)[-a-z0-9+$@#\/%=~_|]/i",$web)) 
	{
		$error_web = "URL tidak valid";
	}/// jika url tidak sesuai kriteria maka akan url tidak akan valid
}
///
if (empty($_POST["telp"])) 
{
	$error_telp = "Telp tidak boleh kosong";
} // jika mengkosongkan number telfon akan mucul notice telp tidak boleh kosong
else
{
	$telp = cek_input($_POST["telp"]);

	if (!is_numeric($telp)) 
	{
		$error_telp = 'NOMOR HP hanya boleh angka';
	} // pada input telfon kita harus meninputkan angka jika menyalahi aturan tersebut maka akan muncul notice nomot hp hanya boleh angka
}


}

function cek_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
} // di sini saya membuat function yang di mana untuk pengecekan data fungsi dari cek_input, trim digunakan untuk menghapus spasi, stripslashes untuk menghapus atau menghilangkan karakter backslashes tanda garis miring terbalik, dan  htmlspecialchars berfungsi mengkonversi 4 karakter 'khusus' HTML menjadi named entity sehingga tidak akan di 'proses' oleh web browser. 
?>

<div class="row">  <!--membuat class-->
<div class="col-md-6">  <!--membuat class-->
<div class="card">  <!--membuat class-->
	<div class="card-header">  <!--membuat class-->
		Contoh Validasi Form Dengan PHP
	</div>
	<div class="card-body">  <!--membuat class-->
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
	?>"> <!--membuat form--><div class="form-group row"><!--membuat class-->    
	<label for="nama" class="col-sm-2 col-form-label"> Nama </label> <!--membuat label-->
	<div class="col-sm-10"> <!--membuat class-->
		<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : "");?>" id="nama" placeholder="nama" value="<?php echo $nama;?>"><span class="warning"><?php echo $error_nama;?></span>
	</div> <!--membuat input form-->
</div>
	
	<div class="form-group row"> <!--membuat class-->	
		<label for="email" class="col-sm-2 col-form-label">Email</label> <!--membuat label-->	
		<div class="col-sm-10">
		<input type="text" name="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : "");?>" id="email" placeholder="email" value="<?php echo $email;?>"><span class="warning"><?php echo $error_email;?></span>
	</div> <!--membuat input form-->
</div>
	
	<div class="form-group row"> <!--membuat class-->	 
		<label for="web" class="col-sm-2 col-form-label">Website</label> <!--membuat label-->
		<div class="col-sm-10">
		<input type="text" name="web" class="form-control <?php echo ($error_web !="" ? "is-invalid" : "");?>" id="web" placeholder="web" value="<?php echo $web;?>"><span class="warning"><?php echo $error_web;?></span>
	</div> <!--membuat input form-->
</div>	

	<div class="form-group row"> <!--membuat class-->
		<label for="telp" class="col-sm-2 col-form-label">Telp</label> <!--membuat label-->
		<div class="col-sm-10">
		<input type="text" name="telp" class="form-control <?php echo ($error_telp !="" ? "is-invalid" : "");?>" id="telp" placeholder="telp" value="<?php echo $telp;?>"><span class="warning"><?php echo $error_telp;?></span>
	</div> <!--membuat input form-->
</div>
	<div class="form-group row"> <!--membuat class-->	
		<label for="pesan" class="col-sm-2 col-form-label">Pesan</label> <!--membuat label-->
		<div class="col-sm-10">
		<textarea type="text" name="pesan" class="form-control <?php echo ($error_pesan !="" ? "is-invalid" : "");?>" id="pesan" placeholder="pesan" value="<?php echo $pesan;?>"></textarea><span class="warning"><?php echo $error_pesan;?></span>
		</div> <!--membuat input form-->
</div>

	<div class="form-group row"> <!--membuat class--> 
	<div class="col-sm-10"> <!--membuat class-->
		<button type="submit" class="btn btn-primary"> Sign in</button>
<!--membuat button-->
	</div>	
</div>
</form>
	 	
</div>
</div>	
</div>
</div>

<?php 
echo "<h2>Your input: </h2>";  
//menanpilkan heading
echo "Nama = ". $nama;// memanggil dan mendaklarasikan data nama
echo "<br>";
echo "Email = ". $email; // memanggil dan mendaklarasikan data email
echo "<br>";
echo "Website = ". $web; // memanggil dan mendaklarasikan data website
echo "<br>";
echo "Telp = ". $telp;	 // memanggil dan mendaklarasikan data telp
echo "<br>";
echo "Pesan = ".$pesan;  // memanggil dan mendaklarasikan data pesan
?>

</body>
</html>