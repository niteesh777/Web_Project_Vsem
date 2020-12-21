<?php
    session_start(); //php session stores data on server rather than user's computer


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Php Database connection</title>
  <?php include 'links/links.php' ?>
  <style>
      <?php include 'css/style_login.css' ?>
  </style>  
</head>

<body>

    <?php 
        include 'dbcon.php';

        if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];

            $email_search="select * from registration where email='$email'";
            $query=mysqli_query($con,$email_search);

            $email_count=mysqli_num_rows($query);

            if($email_count)
            {
                $email_pass=mysqli_fetch_assoc($query);
                
                $db_pass=$email_pass['password'];//Fetching the password of the query
                
                $_SESSION['username']=$email_pass['username'];


                //$pass_decode=password_verify($password,$db_pass);

                if(strcmp($password,$db_pass)==0)
                {
                    echo 'login successful';
                    ?>
                        <script>
                            location.replace("index.php");
                        </script>

                    <?php
                }else{
                    echo 'password incorrect';
                }

            }
            else{
                echo "invalid email";
            }

        }

    ?>

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-widht : 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>
            <p class="text-center">Get Started With your free account</p>
            <p>
                <a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>Login via gmail</a>
                <a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook-f"></i>Login via Facebook</a>
            </p>

            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input name="email" class="form-control" placeholder="Username" type="email">
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input class="form-control" placeholder="password" type="password" name="password" value="">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Login Now</button>
                </div>
                <p class="text-center">Not Have an Account? <a href="regis.php">Sign up</a></p>
            </form>
        </article>
    </div>


</body>
</div>
</body>