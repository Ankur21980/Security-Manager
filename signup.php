<?php 
    session_start();

	include("db/dbconn.php");
	include("functions.php");
    // if(isset($_SESSION['IS_LOGIN'])){
    //     // echo $_SESSION['IS_LOGIN'];
    //     header('location:details.php');
    //     die();
    // }

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $answer = $_POST['answer'];

		if(!empty($name) && !empty($answer) && !is_numeric($name))
		{

			//save to database
			$user_id = random_num(20);
            $answer=password_hash($answer,PASSWORD_DEFAULT);
			$query = "insert into users (user_id,name,contact,email,answer) 
            values ('$user_id','$name','$contact','$email','$answer')";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<?php 

    /*$err="";
    include 'db/dbconn.php';

    if(isset($_POST['create'])){

        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $answer = $_POST['answer'];

        $selectquery = "select * from user where name = '$name'";
        $result = mysqli_query($con, $selectquery);
        $num = mysqli_num_rows($result);

        if($num == 1){
        ?>
            <script>
                alert("Username already exist.");
                location.replace("index.php");
            </script>
        <?php
            
        }else{

            $insertquery = "INSERT INTO `user` (`uid`, `name`, `contact`, `email`, `answer`,`timestamp`) VALUES (null, '$name', '$contact', '$email', '$answer', current_timestamp())";
            $res = mysqli_query($con,$insertquery);

            if($res){
                ?>
                <script>
                    location.replace("index.php");
                </script>
                <?php
            }
            else{
                echo "unsuccessful";
            }
        }
    }*/

?>