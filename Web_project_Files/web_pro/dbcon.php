<?php

    $server="localhost";

    $user="root";

    $password="";

    $db="web_project";

    $con=mysqli_connect($server,$user,$password,$db);

    if($con)
    {
        ?>
            <script>
                alert("connection successful");
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("connection not  successful");
            </script>
        <?php
    }
?>