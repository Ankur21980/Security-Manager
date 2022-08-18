<?php 
    session_start();
    $err="";
    include 'db/dbconn.php';

    if(isset($_POST['submit'])){
        // $query = "select * from users where name = '$name'";
		// $result = mysqli_query($con, $query);
        // $user_data = mysqli_fetch_assoc($result);
        $u_id = $_SESSION['id'];
        $platform = $_POST['platform'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $other = $_POST['other'];

        $insertquery = "INSERT INTO `details` (`id`, `u_id`, `platform`, `username`, `password`, `other`, `timestamp`) 
        VALUES (null, '$u_id', '$platform', '$username', '$password', '$other', current_timestamp())";
        $res = mysqli_query($con,$insertquery);

        if($res){
            ?>
            <script>
                location.replace("details.php");
            </script>
            <?php
        }
        else{
            echo "unsuccessful";
        }

    }

?>