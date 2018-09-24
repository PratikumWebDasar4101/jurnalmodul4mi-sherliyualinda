<?php
session_start();
//$_SESSION ['id']= isset($_SESSION['id']) ? $_SESSION['id']++ : 0;
if (isset($_POST['submit'])) {
	//foto
	$file_name =$_FILES['foto']['name'];
	$tmp_name =$_FILES ['foto']['tmp_name'];
	$file_move_success = move_uploaded_file($tmp_name, 'terkirim/'.$file_name);
	//
	if ($file_move_success) {
		$file = $_POST['hobby'];
		$_SESSION ['hobby']=$file;
		$_SESSION ['foto']=$file_name;
		header('location: halaman_akhir.php');
	}
}
?>