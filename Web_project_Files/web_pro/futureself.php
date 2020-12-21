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
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
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
        <style>
        body{

            background-color:rgb(80, 80, 80);
        }
          #info{
     border: 1px solid black;
     float:left;
    font-size: 10px;
    width: 28%;
    margin-left: 20px;
    margin-top: 10px;

}
}
#info h3{
    text-align: center;

    margin: 0 0 20px 0;
}
#info h4{

  margin-left:10px;
}


        </style>
</head>
<body>
 <!--Header-->
 <div  id="top_header">
        <a href="index.php"><h1>Your Self</h1></a>
        <a style="float:right" href="index.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a>

     </div>
     <!--Header End-->
     <!--Middle section-->
     <div class="container">
        <div class="row">
          <div class="col-sm-6" id="todo_list" >
            <div style=" height:500;background: linear-gradient(45deg, rgb(223, 204, 101),rgb(214, 224, 155));" >

                <h1 class="mt-4 ml-4" style="color:black; text-align:center">Note Your Memories</h1>
                <hr>
                <h4 style="font-size: xx-large; font-weight: 200; font-style: italic;"><dl><dt style="font-weight: 300;
    padding: 5%;">"I love this. I've written myself 5 times so far and every
                 year it's a surprise. Because I forget so easily.
                 Things end but memories last forever, I weep and laugh while reading these messages."<dt>
                  <hr>
                    <h4 style="color:white font-wight:bolder;padding:3%">-Hitesh<h5></dl></h4>
                <img src="img/memories.jpg" alt="Girl writing letter"  style=" float:left; width:100%;height:50%;">
                
              
            </div>
           </div>
          <div class="col-sm-6" id="fself">
          <div style="color:white ;height:500; background: linear-gradient(45deg,rgb(30, 31, 24),rgb(80, 80, 80));" >
          <article class="card-body mx-auto" style="max-width : 400px;">
                    <h4 class="card-title mt-3 text-center">Enter Your Note</h4>

                    <form action="" method="POST">
                        <div class="form-group input-group">
                            <textarea name="letter" cols="50" rows="5"></textarea>
                            
                        </div>

                        <div class="form-group input-group">
                            <!--<div class="input-group-prepend">
                                <span class="input-group-text"><i style="height:30px" class="fa fa-clock-o" aria-hidden="true"></i></span>
                            </div>-->

                            <input type="date" style="height:40px" name="trip-start" value="2020-07-22" min="2020-01-01"
                                max="2020-12-31">
                        </div>

                        <h4 class="card-title mt-3 text-center">Make This Message</h4>

                        <div class="form-group">
                            <button type="submit" name="private" class="btn btn-primary btn-block">Private</button>
                        </div>

                        <div class="form-group">
                            <button type="submit" id="mes" name="public" class="btn btn-primary btn-block">Public</button>
                        </div>
                        
                        <div class="form-group">
                            <a href="show.php" style="text-decoration: none;" class="btn btn-primary btn-block">Posts</a>
                        </div> 

                        <h4 class="card-title mt-3 text-center">User Review</h4>
                        <div class="form-group input-group">
                            <textarea name="user" cols="50" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="review" class="btn btn-primary btn-block">Review</button>
                        </div>

                        <div class="form-group">
                            <a href="index.php" style="text-decoration: none;" class="btn btn-primary btn-block">Back</a>
                        </div>
                        <!--form group-->
                    </form>
                </article>
          </div>
        </div>
     </div>
     <!--Middle section End--> 
    <div  style="background:linear-gradient(45deg,rgb(30, 31, 24),rgb(80, 80, 80));color:white">
     <h3 class="mt-3 text-center">User Reviews</h3>
        <?php
            include 'dbcon.php';

            $selectquery="select * from review ";

            $query=mysqli_query($con,$selectquery);

            $nums = mysqli_num_rows($query);
            while($res=mysqli_fetch_array($query))                            
            {                            
            ?>


                <div id="info">

                   <h4 style="color:black"><?php echo $res['comment'];?><h4>
                  <hr>
                    <h5 style="color:black"><?php echo "- ".$res['username'];?></h5>
                </div>
           
            <?php    
            }

        ?>


          </div>


    <!--Footer
    <div class="footer">
        <p>About us</p>
        <a href="#" style="text-decoration: none;" class="fa fa-facebook"></a>
        <a href="#" style="text-decoration: none;" class="fa fa-twitter"></a>
        <a href="#" style="text-decoration: none;" class="fa fa-google"></a>
        <a href="#" style="text-decoration: none;" class="fa fa-linkedin"></a>
        <a href="#" style="text-decoration: none;" class="fa fa-youtube"></a>
        <a href="#" style="text-decoration: none;" class="fa fa-instagram"></a>
      </div>


     Footer End-->
</body>
</html>
<?php

    include 'dbcon.php';
    if(isset($_POST['private']))
    {
      $message=$_POST['letter'];
      $date=$_POST['trip-start'];
      $name=$_SESSION['username'];

      $insertquery="insert into private(username,message,date) values('$name','$message','$date')";

      $result = mysqli_query($con,$insertquery);

      if($result)
      {
          ?> 
              <script>
                  alert("data inserted");
              </script>
          <?php
      }
      else{
          ?>
              <script>
                  alert("data not inserted");
              </script>
          <?php
      }
    }

    if(isset($_POST['public']))
    {
        $message=$_POST['letter'];
        $date=$_POST['trip-start'];
        $name=$_SESSION['username'];

        $insertquery="insert into public(username,message,date) values('$name','$message','$date')";

        $result = mysqli_query($con,$insertquery);

        if($result)
        {
            ?> 
                <script>
                    alert("data inserted");
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert("data not inserted");
                </script>
            <?php
        }
    }

    if(isset($_POST['review']))
    {
        $user=$_POST['user'];
        $name=$_SESSION['username'];

        if($user != "")
        {
            $insertquery="insert into review(username,comment) values('$name','$user')";

            $result = mysqli_query($con,$insertquery);

            if($result)
            {
                ?> 
                    <script>
                        alert("data inserted");
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert("data not inserted");
                    </script>
                <?php
            }
        }
    }

?>
