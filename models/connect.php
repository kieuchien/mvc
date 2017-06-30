<?php
// kết nối với database
   $connect =mysqli_connect("localhost","root","1","blog") or die ("Loi ket noi co so du lieu");
   
 // Ket noi với database mvc
   $select_db = mysqli_select_db($connect, "blog") or die ("Loi ket noi database");
   
?>