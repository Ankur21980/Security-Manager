<?php 
session_start();

	include("db/dbconn.php");
	include("functions.php");

	if(!isset($_SESSION['IS_LOGIN'])){
    echo $_SESSION['IS_LOGIN'];
    header('location:index.php');
    die();
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details Page</title>

  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@500&family=Montserrat:wght@500&display=swap" rel="stylesheet">

  <script src="functions.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class="main">
  <div id="enterModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Enter Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="insertdetails.php" method="post">
            <div class="form-group row">
              <label for="platform" class="col-md-2 col-form-label">Platform</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="platform" name="platform" placeholder="Platform name">
              </div>
            </div>
            <div class="form-group row">
              <label for="username" class="col-md-2 col-form-label">Username</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="username" name="username"
                  placeholder="Enter your username">
              </div>
            </div>
            <div class="form-group row">
              <label for="password" class="col-md-2 col-form-label">Password</label>
              <div class="col-md-8">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter the password which you want to save.">
              </div>
            </div>
            <div class="form-group row">
              <label for="other" class="col-md-2 col-form-label">Other details</label>
              <div class="col-md-8">
                  <textarea class="form-control" id="other" name="other" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-md-5 col-md-10">
                  <button type="submit" class="btn btn-dark btn-lg rounded-pill" name="submit">submit</button>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="topnav">
    <strong class="active">Security Manager</strong>
    <ul>
      <li><a href="index.php" class="rightcorner">HOME</a></li>
      <li><a href="logout.php" class="rightcorner">LOG OUT</a></li>
    </ul>
  </div>
  <div class="text">
    <img class="tick" src="images/tick-mark.png" alt="Tick Mark">
    <p class="bigtext"><strong>Congratulations! You have successfully loginned into our website.</strong></p>
    <p class="shorttext">You can get started by saving your username and password for future reference.</p>
  </div>
  <div class="btn1" class=text-center>
    <a class="BUTTON_DAW" data-toggle="modal" id="enterModal"
    data-target="#enterModal">+ ADD ACCOUNT DETAILS</a>
  </div>

  <div class="container my-3">
			<div id="table" class="mt-5">
				<h2>Details</h2>
				  <table id="myTable" class="table table-striped table-dark mr-4">
					  <thead>
					    <tr>
					      <th scope="col">S.No</th>
					      <th scope="col">Platform</th>
					      <th scope="col">Username</th>
					      <th scope="col">Password</th>
                <th scope="col">Other</th>
					    </tr>
					  </thead>
            <?php
                // $selectquery = "select * from details";
                $selectquery = "select * from details where details.u_id = $_SESSION[id]";
                $query = mysqli_query($con,$selectquery);
                 $nums = mysqli_num_rows($query);
                 $id = 1;
                 while($res = mysqli_fetch_array($query)){
            ?>
					  <tbody id="tableBody"> 
            <tr>
                 <td><?php echo $id++; ?></td>
                 <td><?php echo $res['platform']; ?></td>
                 <td><?php echo $res['username']; ?></td>
                 <td><?php echo $res['password']; ?></td>
                 <!-- <td><input style="background-color:#393939; color:white;"
                 type="password" id="pass" value="<?php echo $res['password']; ?>" readonly>
                 <span style="cursor:pointer;">
                 <i class="fa fa-eye" aria-hidden="true" id="eye"
                 onclick="toggle()"></i>
                 </span></td> -->
                 <td><?php echo $res['other']; ?></td>
            </tr>
            <?php             
                 }

            ?>
            </tbody>
				</table>
			</div>
		</div>
<script>
  // var state = false;
  // function toggle() {
  //   if(state) {
  //     document.getElementById("pass").setAttribute("type","password");
  //     document.getElementById("eye").style.color='white';
  //     state = false;
  //   }else {
  //     document.getElementById("pass").setAttribute("type","text");
  //     document.getElementById("eye").style.color='green';
  //     state = true;
  //   }
  // }
    // $(document).ready(function(){
    //   $('#eye').on('click', function(){
    //     var passf = $('#pass');

    //     var passFtype = passf.attr('type');
    //     if(passf.val() != '') {
    //       if(passFtype == 'password') {
    //         passf.attr('type','text');  
    //       }else {
    //         passf.attr('type','password');
    //       }
    //     }
    //   });
    // });


</script>
</body>

</html>