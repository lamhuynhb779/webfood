<?php
	include_once('configdb.php');
	// $ham = $_POST['ham'];
	// switch ($ham) {
	// 	case 'guiThongTinDangKy':
	// 		$ham();
	// 		break;
	// }

	// function guiThongTinDangKy(){
	// 	global $conn;

	// 	$username = $_POST['username'];
	// 	$email = $_POST['email'];
	// 	$password = $_POST['password'];
	// 	$confirmPassword = $_POST['confirm-password'];

	// 	if($username!=null && $password == $confirmPassword){
	// 		if($conn){
	// 			$sql = "INSERT INTO nguoidung (TENND, USERNAME, PASSWORD, TYPE, SDT, EMAIL) VALUES ('".$username."', '".$username."', '".$password."', 1, 0164514785, '".$email."')";

	// 			$result = mysqli_query($conn, $sql);

	// 			if($result){
	// 				echo 'Thành công!';
	// 			}else
	// 				echo 'Thất bại!';
	// 		}
	// 	}
	// }

	function xuLyDangNhap(){
		global $conn;

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username!=null && $password!=null){
			if($conn){
				$sql = "SELECT * FROM nguoidung WHERE USERNAME = '".$username."' AND PASSWORD = '".$password."'";
				$result = mysqli_query($conn, $sql);
				if($result){
					header('location: index.php');
				}else
					echo 'Đăng nhập thất bại!';
			}
		}
	}

	// guiThongTinDangKy()
	xuLyDangNhap()
?>