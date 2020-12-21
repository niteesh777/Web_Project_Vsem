
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
    $username=$_SESSION['username'];
	
	$sql = "delete from entlist where username='$username' and moviename='$movie'";
	$query=mysqli_query($con,$sql);
    if($query)
    {?>
        <script>
            alert("deleted successfully");
        </script>
    <?php
    }
    else{
        ?>
            <script>
                alert(" not  successful");
                </script>
        <?php
    }
?>
 