<?php 
  session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/styles.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400&display=swap"
    rel="stylesheet">

  <title>Security Manager</title>
</head>

<body>

  <div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="login.php" method="post">
            <div class="form-group row">
              <label for="username" class="col-md-2 col-form-label">Username</label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="username" name="name" placeholder="Enter your username">
              </div>
            </div>
            <div class="form-group row">
              <label for="answer" class="col-md-2 col-form-label">Answer</label>
              <div class="col-md-8">
                <input type="password" class="form-control" id="answer" name="answer" placeholder="Enter your answer here.">
              </div>
            </div>
            <div class="form-row">
              <button type="submit" class="btn btn-primary btn-sm offset-2" role="button" name="login">Sign in</button>
              <button type="button" class="btn btn-secondary btn-sm ml-1" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-bg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
      <a class="navbar-brand" href="#"><strong>
          <h1>Security Manager</h1>
        </strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link mr-5" href="#signup"><strong>Sign Up</strong> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" data-toggle="modal" id="LoginButton"
              data-target="#loginModal"><strong>Login</strong></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="hero-text">
      <h1>Welcome! You can safely store your username and passwords here.</h1>
      <h2>You can get started by creating a free account.</h2>
    </div>

  </div>

  <div class="container">

    <div class="card mt-5" id="signup">
      <h3 class="card-header bg-primary text-white">Create an Account</h3>
      <div class="card-body">

        <div class="row row-content">
          <div class="col-12 col-md-9">
            <form action="signup.php" method="post">
              <div class="form-group row">
                <label for="username" class="col-md-2 col-form-label">Username</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="username" name="name" placeholder="Username">
                </div>
              </div>

              <div class="form-group row">
                <label for="telnum" class="col-12 col-md-2 col-form-label">Contact no.</label>
                <div class="col-5 col-md-3">
                  <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area code">
                </div>
                <div class="col-7 col-md-7">
                  <input type="tel" class="form-control" id="telnum" name="contact" placeholder="Mob. number">
                </div>
              </div>
              <div class="form-group row">
                <label for="emailid" class="col-md-2 col-form-label">Email</label>
                <div class="col-md-10">
                  <input type="email" class="form-control" id="emailid" name="email" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <label for="securityque" class="col-md-2 col-form-label">Security Questions</label>
                <div class="col-7 col-md-7 mt-2">
                  <select>
                    <option disabled hidden selected>Choose Question</option>
                    <option value="Question1">1.What is your favorite food?</option>
                    <option value="Question2">2.What is the word that describes you perfectly?</option>
                    <option value="Question3">3.What is the name of the first school you attended?</option>
                    <option value="Question4">4.What is your dream place that you want to visit?</option>
                    <option value="Question5">5.What are your hobbies?</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="answer" class="col-md-2 col-form-label">Answer</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="answer" name="answer" placeholder="Answer">
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-md-2 col-md-10">
                  <button type="submit" class="btn btn-success btn-lg" name="create">Create Account</button>
                </div>
              </div>

              <div class="form-group row">
                <div class="offset-md-5 col-md-10">
                  <button type="button" class="btn btn-link" data-toggle="modal" id="LoginButton" data-target="#loginModal">Already have an account? Login</button>
                </div>
              </div>

            </form>
          </div>
          <div class="col-12 col-md">
          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>