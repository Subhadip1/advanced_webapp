<?php
session_start();
include 'dbh.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Member Area</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.htm">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" style="margin-top:50px">

      <div class="starter-template">
        <h1>New user registration</h1>
        <p class="lead">New users please register here.</p>
      </div>

    </div><!-- /.container -->
<form action = "signup.php" method="POST">
    

  <div class="form-group">
      <div class="col-xs-4">
    <label for="exampleInputName1">First Name</label>
    <input type="name" class="form-control" id="exampleInputName1" name="first" placeholder="First Name" required>
      </div></div>
    <br><br><br><br>
  <div class="form-group">
      <div class="col-xs-4">
    <label for="exampleInputName1">Last Name</label>
          <input type="name" class="form-control" id="exampleInputName1" name="last" placeholder="Last Name" required></div></div>
    <br><br><br><br>
    <div class="form-group">
      <div class="col-xs-4">
    <label for="exampleInputName1">User ID</label>
          <input type="name" class="form-control" id="exampleInputName1" name="uid" placeholder="User ID" required></div></div>
    <br><br><br><br>
    <div class="form-group">
      <div class="col-xs-4">
    <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Password" required></div></div>
    <br><br><br><br>
          <div class="col-xs-2">
<button type="submit" class="btn btn-success">Sign Up</button></div>
    <br><br><br><br>
     <div class="col-xs-4">
    <a href="index.htm">Go back to Login.</a>
     </div>
        </form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
