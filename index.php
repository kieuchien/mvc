<?php

include ("models/connect.php");
//xử lý đăng nhập
if(isset($_POST['login'])){
    if($_POST['email'] == ""){
        $is_error="Chưa điền tên người dùng";
    }else if($_POST['password'] == ""){
        $is_error="Chưa điền mật khẩu";
    }else{
        //xử lý đăng nhập
        $s="SELECT * FROM `user` WHERE email= '".$_POST['email']."'";
        $q=mysqli_query($connect, $s);
        if($r=mysqli_fetch_array($q, MYSQLI_ASSOC)){
            //kiểm tra có đúng mật khẩu không
            if($r['password']==$_POST['password']){
                //đúng mật khẩu
                $_SESSION['user']=$r['name'];
                header("location:http://localhost/mvc2/views/content.php");
                // include("category.php");
        	}else{
        	    $is_error="Sai mật khẩu";
        	}
        }else{
            $is_error="Người dùng không đúng";
        }
    }
}
include ("views/view.php");
?>