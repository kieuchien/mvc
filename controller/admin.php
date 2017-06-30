<?php 
	include("../models/connect.php");
	$id = $_GET['id'];
	$edit = mysqli_query($connect,"SELECT * FROM user WHERE id=".$id);
	if(mysqli_num_rows($edit) > 0){

			$arredit = mysqli_fetch_array($edit);
	}
	if(isset($_POST['submit'])){
		$nameauthor = $_POST['nameauthor'];
                $age = $_POST['age'];
                $phone = $_POST['phone'];

                 $update = mysqli_query($connect,"UPDATE author SET name_author='".$nameauthor."',age_author=".$age.",numberPhone='".$phone."' WHERE id=".$id);

        if ($update) {
        	echo "Update thanh cong";
        	header("location:http://localhost/mvc2/views/admin.php");
        	die();
        } else {
        	echo "Update that bai";
        	header("location:http://localhost/mvc2/views/admin.php");
        	die();
        }
	}
?>

 