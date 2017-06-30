<?php 
	include ("../models/connect.php");
	$id = $_GET['id'];
	$delete = mysqli_query($connect,"DELETE FROM author WHERE id =" .$id);
	if($delete){
		echo "Ban da xoa thah cong";
		header("location:http://localhost/mvc2/views/content.php");
	}else {
		echo "Ban xoa khong thanh cong";

	}
 ?>