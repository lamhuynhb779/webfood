<?php 
	define("DBSERVER", "localhost");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "banhang");

	date_default_timezone_set("Asia/Ho_Chi_Minh");

	$conn = mysqli_connect(DBSERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
	mysqli_set_charset($conn, 'UTF8');
	if(!$conn){
		echo "error";
	}
	else
		echo "success";
?>