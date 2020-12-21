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
    <meta charset="utf-8">
    <title>MovieInfo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_ent.css">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="js/ent_script.js"></script>
  <script>

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    //document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";

  }

  </script>
  </head>
  <body style="background-color: black;">

   
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="ent.php" style="color: rgb(214, 224, 155);">MovieInfo</a>
          <a class="navbar-brand" href="index.php" style="color: rgb(214, 224, 155) ;">Home</a>  
          <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="background-color: rgb(214, 224, 155);color:black; font-weight: bold;">
            List
          </a>
          <h3 class="navbar-brand" style="color: rgb(214, 224, 155); margin-left: 500px">Search</h3>
	    	<form class="navbar-brand" id="searchForm">
          <input  type="text" class="form-control" id="searchText" placeholder="Search Movies...">
	    	</form>       
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="about.php">About</a>
            <a href="logout.php">Logout</a>
          </div>
        <div id="main">
          <span style="color: rgb(214, 224, 155); cursor: pointer; font-size: 2em;" onclick="openNav()">&#9776; </span>
        </div>
      </div>
    </nav>

   <!-- <div class="container">
    	
	    	<h3 class="text-center" style="color: rgb(214, 224, 155);">Search For Any Movie</h3>
	    	<form id="searchForm">
	    		<input type="text" class="form-control" id="searchText" placeholder="Search Movies...">
        </form>
      
    </div>
  -->
    

    <div class="container" style="margin-top: 10%;">
      <div id="movies" class="row"></div>
    </div>

    <div class="collapse" id="collapseExample" >
      <div class="card card-body" id="list">
      <?php
       include 'dbcon.php';

       $name = $_SESSION['username'];
       $data="select * from entlist where username='$name'";
       $result=mysqli_query($con,$data);
       //$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
       $i=0;
       if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           $file = $row['poster']  ;
           echo '<div id="demo'.$i.'">';
           echo '<img style="border-radius:5px" width="200" height="200" src="'.$file.'">';
           echo '<h3>'.$row['moviename'].'</h3>';
           echo '<a onclick ="Removelist(\''.$row['moviename'].'\', \''.$i.'\')" class="btn btn-secondary" 
           style="background:linear-gradient(45deg,rgb(30, 31, 24),rgb(80, 80, 80)); 
           color: white;font-weight:bold;">Completed</a>';
           echo '<hr style="color:black">';
           echo '</div>';
           $i=$i+1;
        }

      } else {
        echo "0 results";
      }
     
      ?>
      
     


        
      </div>
      
    </div>
    
  </body>
</html>
