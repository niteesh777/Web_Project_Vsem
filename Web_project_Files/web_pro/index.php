<?php
    session_start();

    if(!isset($_SESSION['username'])) 
    {
        echo "you are logged out";
        header('location:login.php');
    }   

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Test page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <src="https://code.jquery.com/jquery-3.5.1.min.js">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/script.js"></script>
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
     <!--Header End-->
     <!--Middle section-->
     <div class="container">
        <div class="row">
          <div class="col-sm-4" id="todo_list" >
            <a href="todo.php" style="text-decoration: none;"><p>To-do List</p></a>
           </div>
          <div class="col-sm-4" id="fself">
            <a href="futureself.php" style="text-decoration: none;"><p>Memories</p></a>
          </div>
          <div  class="col-sm-4" id="todo_list">
            <a href="ent.php" style="text-decoration: none;"><p>Entertainment List</p></a>
          </div>
        </div>
     </div>
     <!--Middle section End--> 
      
     
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
