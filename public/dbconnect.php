<?php 
 	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_NAME','petfinder');
 	//Tạo đối tượng kết nối
 	$connect = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
 	//Chuyển font chữ
 	$connect->set_charset('utf8');
 	//Kiểm tra lỗi
 	if (mysqli_connect_errno()) {
 		echo "Có lỗi khi ".mysqli_connect_error();
 		die();
 	}
 ?>