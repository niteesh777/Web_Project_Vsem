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
                $username=mysqli_real_escape_string($con,$_POST['username']);
                $email=mysqli_real_escape_string($con,$_POST['email']);
                $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
                $password=mysqli_real_escape_string($con,$_POST['password']);
                $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

                
                $pass=$password;
                $cpass=$password;
                //$pass=password_hash($password,PASSWORD_BCRYPT);
                //$cpass=password_hash($cpassword,PASSWORD_BCRYPT);

                $emailquery=" select * from registration where email='$email'";
                $query=mysqli_query($con,$emailquery);

                $emailcount=mysqli_num_rows($query);

                if($emailcount > 0)
                {
                    echo "email already exists";
                }else{
                    if($password === $cpassword)
                    {
                    
                        $insertquery="insert into registration(username, email, mobile, password, cpassword) VALUES ('$username','$email','$mobile','$pass','$cpass')";
                        $iquery=mysqli_query($con,$insertquery);
                        if($iquery)
                        {
                            ?>
                                <script>
                                    alert("created successfu");
                                </script>
                            <?php
                        }else{
                            ?>
                                <script>
                                    alert("creation not  successfu");
                                </script>
                            <?php
                        }
                        

                    }
                    else{
                        ?>
                            <script>
                                alert("Password not matching");
                            </script>
                        <?php
                    }
                }

            }

        ?>





        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width : 400px;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get Started with your free Account</p>
                <p>
                    <a href="" class="btn btn-block btn-gmail"><i class="fa fa-google"></i>Login via Gmail</a>
                    <a href="" class="btn btn-block btn-facebook"><i class="fa fa-facebook-f"></i>Login via Facebook</a>

                </p>

                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>

                    <form action="" method="POST"> 
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>

                            <input name="username" class="form-control" placeholder="Username" type="text" required>
                        </div><!--form group-->

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input name="email" class="form-control" placeholder="email address" type="email" required>
                        </div><!--form group-->


                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                            </div>

                            <input name="mobile" class="form-control" placeholder="phonenumber" type="number" required>
                        </div><!-- form group -->


                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>

                            <input class="form-control" placeholder="create password" type="password" name="password" value="" required>
                        </div> <!-- form-group-->

                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>

                            <input class="form-control" placeholder="repeat password" type="password" name="cpassword" required >
                        </div><!-- form-group-->

                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
                        </div>
                        <p class="text-center">Hace an account?<a href="login.php">Log In</a></p>
                    
                    </form>
            </article>
                                
        </div>

    
</body>
</html>  






