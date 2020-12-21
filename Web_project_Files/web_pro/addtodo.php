
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
	$date=$_POST['date'];
    $task=$_POST['task'];
    $username=$_SESSION['username'];
	
	$sql = "insert into todolist(username,task,date) VALUES ('$username','$task','$date')";
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
 