<?php 

	class Database{

		public function saveUserData(){
			$link = mysqli_connect('localhost', 'root', '', 'tolet');

			$sql = "insert into user(name,email,phone,password) values('$_POST[name]','$_POST[email]', '$_POST[phone]', '$_POST[password]')";

			if(mysqli_query($link, $sql)){
				header('Location:index.php');
			}else{
				die('query problem'.mysqli_error($link));
			}
		}

		public function loginUser($data){
			$email = $data['email'];
			$password = $data['password'];
			$link = mysqli_connect('localhost', 'root', '', 'tolet');

			$sql = "select * from user where email='$email' AND password='$password' ";
			if(mysqli_query($link, $sql)){
			$result = mysqli_query($link, $sql);
			$use = mysqli_fetch_assoc($result);
			if($use){
				/*session_start();
				$_SESSION['id'] = $use['id'];				
				$_SESSION['name'] = $use['name'];*/				
				header('Location:advertise.php?email="$email"');
			}else{
				$msg = "not valid";
				return $msg;
			}
		}
			else{
				die('query problem'.mysqli_error($link));
			}
		}
	}
?>