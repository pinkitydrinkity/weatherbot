<?php 
session_start();

	include("admin_connection.php");
	include("admin_functions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Student Complex</title>
  <script src="https://kit.fontawesome.com/334c1f623e.js" crossorigin="anonymous"></script><link rel="stylesheet" href="./index.css">
  <style>
    .container {
      position: relative;
    }
    
    .center {
    position: absolute;
    top: 50%;
    left: 40%;
    margin-top: -50px;
    margin-left: -50px;
    
    font-size: 40px;
    }

	.logout{
		margin-top: 50px;
    margin-left: 80px;

	}

  html, body {
  background-image: url("backround.jpg");
  font-family: "Times New Roman", Times, serif;
  color: white;
  text-transform: uppercase;
  text-shadow: 0.5px 0.5px 0 #CCCCCC;
  -webkit-background-size: cover;
  margin: 0;
  width: 100vw;
  height: 100vh;
  position:fixed; 
    top:0; 
    bottom:0; 
    left:0; 
    right:0; 
}

  .nav {
    position: absolute;
    top: 50%;
    left: 40%;
    margin-top: -300px;
    margin-left: -50px;
  }


  .title{
    margin-top: 50px;
    margin-left: 600px;
    font-size: 50px;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: black;
  }
  
  #button{
    
    padding: 10px;
    width: 100px;
    color: white;
    background-color: rgba(0, 0, 0, .4);
    border: none;
    color: white;
    text-decoration: none;
}
    </style>

</head>
<body>
<div> 

<a href="logout.php" id="button">Logout</a>

</div>
<div class="title">
  The Student Complex
</div>
<div class="nav">

<ul class="menu-bar">
        <li> <a href="index.php" style="color: white; text-decoration: none;">Pi-Hole</a> </li>
        <li><a href="InfoPage.php" style="color: white; text-decoration: none;">Switch</a></li>
        <li><a href="signup.php" style="color: white; text-decoration: none;">Signup</a></li>

        
        
    </ul>
</div>





<!-- partial -->

</body>
</html>