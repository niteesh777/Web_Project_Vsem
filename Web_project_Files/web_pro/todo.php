<?php
    session_start();

    if(!isset($_SESSION['username'])) 
    {
        echo "you are logged out";
        header('location:login.php');
    }   

?>




<!doctype html>
<html>
 <head>
  <title>Todo-List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/tstyle.css">
  
 </head>
 <body>
  <div class='header'>
   <div class='contener-header'>
    <div class='title'>
     <h1>Todo-List</h1>
    </div>
    <div>
     <input type='text' class='style1' id='input-todo'>
      <input type="date" id="date" value="Date" name="date">
      <button id='btn-send-todo'class='style1'>Add</button>
      <a style="right:20px" href="index.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a>
      

    </div>
   </div>
  </div>
  <div class='list-gen'>
   <div class='list-contener' id='list'>
    <div class='list'
     onclick='this.style.textDecoration = "line-through"'>
     <button class='cancel'
      onclick='this.parentElement.style.display = "none";'>×</button>
     <span class='text'>Buy milk</span>
    </div>
   </div>
  </div>

<!--low header-->
<div class="container">
        <div class="row">
        <div class="col-sm-6" id="fself">
          <div style="color:white ;height:500; background: linear-gradient(45deg,rgb(30, 31, 24),rgb(80, 80, 80));" width="500" height="500" >
          <h1 style="text-align:center">Today</h1>
          <hr>
         <table> 
          <tr>
       <th>Date</th>
       <th>Task</th>
       <th>Done</th>
       </tr>
          
<?php
       include 'dbcon.php';

       $name = $_SESSION['username'];
       $data="select * from todolist where username='$name'";
       $result=mysqli_query($con,$data);
       $today= date("Y-m-d");
      
       $i=0;
       if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {

           if($row['date'] == $today)
           {
            echo '<tr id="dem'.$i.'"><td>'.$row['date'].'</td>'.'<td>'.$row['task'].'</td><td>'.'<a onclick ="Removetodo2(\''.$row['task'].'\', \''.$i.'\')"  class="btn btn-secondary" 
            style="background:linear-gradient(45deg,rgb(30, 31, 24),rgb(80, 80, 80)); 
            color: white;font-weight:bold;">Completed</a>'.'</td></tr>';
            $i=$i+1;
           }
          
          
        }
      } else {
        echo "0 results";
      }
     

      ?>
      </table>
      </div>
    </div>
        <div class="col-sm-6" id="fself">
          <div style="color:white ;height:500; background: linear-gradient(45deg,rgb(30, 31, 24),rgb(80, 80, 80));" width="500" height="500" >
          <h1 style="text-align:center">Up Next</h1>
          <hr>
          <table> 
          <tr>
       <th>Date</th>
       <th>Task</th>
       <th>Done</th>
       </tr>
<?php
       include 'dbcon.php';

       $name = $_SESSION['username'];
       $data="select * from todolist where username='$name'";
       $result=mysqli_query($con,$data);
       $today= date("Y-m-d");
       $i=0;
       if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
         
          
          if($row['date'] != $today)
           {
            echo '<tr id="demo'.$i.'"><td>'.$row['date'].'</td>'.'<td>'.$row['task'].'</td><td>'.'<a onclick ="Removetodo1(\''.$row['task'].'\', \''.$i.'\')"  class="btn btn-secondary" 
            style="background:linear-gradient(45deg,rgb(30, 31, 24),rgb(80, 80, 80)); 
            color: white;font-weight:bold;">Completed</a>'.'</td></tr>';
            $i=$i+1;
           }
          
          
        }
      } else {
        echo "0 results";
      }
     
      ?>
      </table>
      </div>
      </div>
  </div>
  </div>
    

  



  
  <script src="js/script.js"></script>
 </body>
</html>
