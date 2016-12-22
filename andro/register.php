<?php
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$nama = $_POST['nama'];
	 	$email = $_POST['email'];
	 	$password = $_POST['password'];

	 	if($name == '' || $username == '' || $password == '' || $email == ''){
 		echo 'please fill all values';
		} else {
			include('dbConnect.php');
			$sql = "SELECT * FROM member WHERE email='$email'"; 
			$check = mysqli_fetch_array(mysqli_query($con,$sql));
			if(isset($check))
			{
				echo 'e-mail sudah terdaftar';
			} else 
			{ 
 				$sql = "INSERT INTO member (email,password,nama) VALUES('$email','$password','$nama')";
 				if(mysqli_query($con,$sql))
 				{
 					echo 'registrasi sukses!';
 				} else {
 					echo 'oops! coba lagi!';
 				}
 			}
 			mysqli_close($con);
 		}
	} else 
	{
		echo 'error';
	}
?>