<?php 
	session_start();
	include("db/dbconn.php");
	include("functions.php");

	if(isset($_SESSION['IS_LOGIN'])){
		// echo $_SESSION['IS_LOGIN'];
		header('location:details.php');
		die();
	}

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$answer = mysqli_real_escape_string($con,$_POST['answer']);

		$query = "select * from users where name = '$name'";
		$result = mysqli_query($con, $query);

		// if(mysqli_num_rows($result)>0){
		// 	$row=mysqli_fetch_assoc($result);
		// 	$verify=password_verify($answer,$row['answer']);
		// 	if($verify==1){
		// 		$_SESSION['IS_LOGIN']=true;
		// 		$_SESSION['user_id'] = $user_data['user_id'];
		// 		header('location:details.php');
		// 		die();
		// 	}else{
		// 		echo "Please enter correct password";
		// 	}
		// }else{
		// 	echo "Please enter correct username";
		// }

		if(!empty($name) && !empty($answer) && !is_numeric($name))
		{

			//read from database
			

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					$verify = password_verify($answer, $user_data['answer']);
					if($verify==1)
					{
						$_SESSION['IS_LOGIN']=true;
						$_SESSION['id'] = $user_data['id'];
						header("Location: details.php");
						die;
					}
				}
			}
			
			echo "wrong answer!";
		}else
		{
			echo "wrong username!";
		}
	}

?>

<?php 

    /*$err="";
    include 'db/dbconn.php';

    if(isset($_POST['login'])){

        $name = $_POST['name'];
        $answer = $_POST['answer'];

        $selectquery = "select * from user where name = '$name' && answer = '$answer'";
        $result = mysqli_query($con, $selectquery);
        $num = mysqli_num_rows($result);

        if($num == 1){
        ?>
            <script>
                location.replace("details.php");
            </script>
        <?php
            
        }else{
        ?>
            <script>
                alert("Invalid username or answer");
                location.replace("index.php");
            </script>
        <?php
        }
    }*/

?>