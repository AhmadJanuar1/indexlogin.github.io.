<?php 
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "admin" && $password == "123"){
				echo "Login Berhasil <br>";
				echo "Selamat Datang di Aplikasi ...";
			  } 
			  else{
			  	echo "Login gagal";
			  }
	}

 ?>