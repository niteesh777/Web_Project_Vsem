
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
	$task=$_POST['task'];
    $username=$_SESSION['username'];
	
	$sql = "delete from todolist where username='$username' and task='$task'";
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
 