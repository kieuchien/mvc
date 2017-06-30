<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Creat Category</title>   
      <link rel="stylesheet" href="../public/css/dashboard.css">  
</head>
<body>
  <div id="wrap">
    <div id="regbar"> 
        <div id="navthing">
          <h2><a href="" id="loginform">Dashboard</a> | <a href="admin.php">User</a> | <a href="../controller/logout.php">Logout</a></h2>    
        </div>        
    </div>
    <div>
        <form action="../controller/addcategory.php" method="post" >
            <h2>Create Category</h2>
            <span>Category</span>
            <input type="text" name="nameauthor" placeholder="Nhap ten">
            <input type="text" name="age" placeholder="Nhap tuoi">
            <input type="text" name="phone" placeholder="Nhap so dien thoai">
            <input type="submit" name="submit">
        </form>
        <form >
          <table border="1" class="author" >
             <tr>
                 <th>Id</th>
                 <th>Name</th>
                 <th>Age</th>
                 <th>Phone</th>   
                 <th>Edit</th>
                 <th>Delete</th>             
              </tr>
              
              <?php 
                  include ("../models/category.php");
                  while ($row = mysqli_fetch_array($tb,MYSQLI_NUM)) {                                 
              ?>
              <tr>  
                
                <td><?php echo $row[0] ;?></td>
                <td><?php echo $row[1] ;?></td>
                <td><?php echo $row[2] ;?></td>
                <td><?php echo $row[3] ;?></td>
                <td><a href="editcategory.php?id=<?php echo $row[0]; ?>">Edit</a></td>
                <td><a href="../controller/deletecategory.php?id=<?php echo $row[0]; ?>" onclick='return deleteAction();'>Delete</a></td>
                 
              </tr>
              <?php } ?>
          </table>
        </form>
        
    </div>
  </div>



    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <!-- <script src="js/index.js"></script> -->
    <script type="text/javascript">
      function  deleteAction (){
        return confirm("Ban co muon xoa truong nay khong?");
      }
    </script>

</body>
</html>
