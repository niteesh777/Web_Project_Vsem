<?php
    session_start();

    if(!isset($_SESSION['username'])) 
    {
        echo "you are logged out";
        header('location:login.php');
    }   

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>About page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
  <?php include 'links/links.php' ?>
  <style>
      <?php include 'css/style_login.css' ?>
  </style>  
  <style>
      .userinfo{
    font-size: 20px;
    font-weight: 800;
    border: solid 3px;
    width: 100%;
    margin-top: 30px;
    margin-bottom: 1rem;
    color: #000000;
}
</style>
</head>

<body>
    <!--Header-->
    <div  id="top_header">
        <a href="index.html"><h1>Your Self</h1></a>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="about.php">About</a>
            <a href="logout.php">Logout</a>
          </div>

          
          <div id="main">
            <span onclick="openNav()">&#9776;</span>
          </div>

     </div>

    <?php 
        include 'dbcon.php';
        $val = $_SESSION['username'];
        $data="select * from registration where username='$val'";
        $result=mysqli_query($con,$data);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>

     <div class="container">
        
        <table class="userinfo">
        <tr>
         <td>Name</td>
         <td><?php echo $row['username']?></td>
       </tr>
       <tr>
         <td>email</td>
         <td><?php echo $row['email']?></td>
       </tr>
       <tr>
         <td>mobile</td>
         <td><?php echo $row['mobile']?></td>
       </tr>
       </table>

   </div>
   <a href="index.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a>
  
 <!--Footer-->
 <div class="footer">
        <p>About us</p>
        <a href="#" style="text-decoration: none;" class="fa fa-facebook"></a>
        <a href="#" style="text-decoration: none;" class="fa fa-twitter"></a>
        <a href="#" style="text-decoration: none;" class="fa fa-google"></a>
        <a href="#" style="text-decoration: none;" class="fa fa-linkedin"></a>
        <a href="#" style="text-decoration: none;" class="fa fa-youtube"></a>
        <a href="#" style="text-decoration: none;" class="fa fa-instagram"></a>
      </div>


     <!--Footer End-->
</body>
</html>