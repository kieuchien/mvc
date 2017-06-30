
	<?php
// kết nối với database
   $connect =mysqli_connect("localhost","root","1","blog") or die ("Loi ket noi co so du lieu");
   
 // Ket noi với database mvc
   
   $sql = "SELECT * FROM `author`";
   $tb = mysqli_query($connect,$sql);
   
?>
