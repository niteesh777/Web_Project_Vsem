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
    <meta name="viewport" width="device-width" initial-scale="1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php include 'links/links.php' ?>

    <script src="script.js"></script>
    <style>
    body{
    background:linear-gradient(45deg,rgb(30, 31, 24),rgb(80, 80, 80));
    color: white;
    }
    #info{
     border: 2px solid white;
     float:left;
     width:20%;
     margin:5%;


    }
    #mes{


        overflow: hidden;
        text-overflow: ellipsis;
    

    }
    #mes:hover {
  overflow: visible;
  width:auto;
  }


    </style>
</head>

<body>

    <h2 class="text-center mb-4">User Messages</h2>
    <a href="futureself.php" class="btn btn-primary btn-block float-right">Back</a>
    <a href="#" class="btn btn-primary btn-block float-right"style="background: linear-gradient(90deg, rgb(223, 204, 101),rgb(214, 224, 155)); color:black;">Public</a>
    <div class="dimension">
        <div class="container">
            <?php
                include 'dbcon.php';

                $selectquery="select * from public ";

                $query=mysqli_query($con,$selectquery);

                $nums = mysqli_num_rows($query);
                while($res=mysqli_fetch_array($query))                            
                {                            
                ?>
               
                    <div id="info" class="col-sm-4">
                        <h3><i class="fa fa-user" aria-hidden="true"></i><?php echo $res['username'];?></h3>
                        <hr style="color:white">
                        <h4 id="mes"><?php echo $res['message'];?></h4>
                        <h5><?php echo $res['date'];?></h5>
                    </div>
                <?php    
                }

            ?>


        </div>
    </div>

    <a href="#" class="btn btn-primary btn-block float-right" style="background: linear-gradient(90deg, rgb(223, 204, 101),rgb(214, 224, 155)); color:black;">Private</a>
    <div class="dimension">
        <div class="container">
            <?php
                include 'dbcon.php';
                  
                $name = $_SESSION['username'];
                $selectquery="select * from private where username='$name'";

                $query=mysqli_query($con,$selectquery);

                $nums = mysqli_num_rows($query);
                while($res=mysqli_fetch_array($query))                            
                {                            
                ?>
               
                    <div id="info" class="col-sm-4">
                        <h3><i class="fa fa-user" aria-hidden="true"></i><?php echo $res['username'];?></h3>
                        <hr style="color:white">
                        <h4 id="mes"><?php echo $res['message'];?></h4>
                        <h5><?php echo $res['date'];?></h5>
                    </div>
                <?php    
                }

            ?>


        </div>
    </div>

</body>
</html>