<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "mydb";

	// membuat koneksi database
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Cmengecek koneksi database
	if (!$conn) {
		die("KONEKSI GAGAL :". mysqli_connect_error());
	}else{
		echo "  ";
	}
 ?>