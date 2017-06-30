<?php 
    include ("../models/category.php"); 
    if(isset($_POST['submit'])){       
        $nameauthor = $_POST['nameauthor'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $insert = mysqli_query($connect,"INSERT INTO `author` (name_author,age_author,numberPhone) values ('".$nameauthor."',".$age.",".$phone.")") or die(mysqli_error($connect));
        if(isset($insert)){
            echo "Them thanh cong";
            header("location:http://localhost/mvc2/views/content.php");
            die;
        } else {
            echo "Them that bai";
            header("location:http://localhost/mvc2/views/content.php");
            die;
        }

    }
?>