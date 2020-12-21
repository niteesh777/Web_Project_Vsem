
<?php
session_start();

if(!isset($_SESSION['username'])) 
{
    echo "you are logged out";
    header('location:login.php');
}   
?>
<?php
	include 'dbcon.php';
	$movie=$_POST['movie'];
    $poster=$_POST['poster'];
    $username=$_SESSION['username'];
	
	$sql = "insert into entlist(username,moviename,poster) VALUES ('$username','$movie','$poster')";
	$query=mysqli_query($con,$sql);
    if($query)
    {?>
        <script>
            alert("created successfu");
        </script>
    <?php
    }
    else{
        ?>
                                <script>
                                    alert("creation not  successfu");
                                </script>
                            <?php
    }
?>
 