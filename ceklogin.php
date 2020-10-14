<?php
	session_start();
	
	// menghubungkan dengan koneksi
	include 'koneksi.php';
	
	// menangkap data yang dikirim dari form
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// menyeleksi data admin dengan username dan password yang sesuai
	$guru = mysqli_query($db,"select * from guru where username='$username' and password='$password'");
	$siswa = mysqli_query($db,"select * from siswa where username='$username' and password='$password'");
	
	// menghitung jumlah data yang ditemukan
	$cekguru = mysqli_num_rows($guru);
	$ceksiswa = mysqli_num_rows($siswa);
	
	//Jika Guru yang login
	if($cekguru > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		//menuju ke halaman index guru
		header("location:guru/indexguru.php");
	}
	//Jika Murid Yang Login
	else if($ceksiswa > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		//menuju ke halaman index siswa
		header("location:siswa/indexsiswa.php");
	}
	else{
		//Login Gagal
		header("location:login.php?pesan=gagal");
	}
?>