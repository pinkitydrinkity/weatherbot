<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
<link rel="stylesheet" href="./index.css">
<style>

html, body {
  background-image: url("backround.jpg");

  color: white;
  font-family: "Times New Roman", Times, serif;
  text-transform: uppercase;
  text-shadow: 0.5px 0.5px 0 #CCCCCC;
  -webkit-background-size: cover;
   
    top:0; 
    bottom:0; 
    left:0; 
    right:0; 
  
}

.card {
  margin-left: 400px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 250px;
  height: 450px;
  margin-top: 300px;
  margin-left: 130px;
  text-align: center;
  background-color: black;
  border: 3px solid;
  border-color: black;
  
}

.title {
  font-size: 18px;
  color: black;
  background-color: white;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;

}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

.name{
    color: black;
    background-color: white;
    font-size: 25px;
    
}

.uni{
    color: black;
    background-color: white;
}

.card2 {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 250px;
  height: 450px;
  margin-top: -455px;
  margin-left: 965px;
  text-align: center;
  background-color: black;
  border: 3px solid;
  border-color: black;
  
}

.title2 {
  font-size: 18px;
  color: black;
  background-color: white;
}

.name2{
    color: black;
    background-color: white;
    font-size: 25px;
    
}

.uni2{
    color: black;
    background-color: white;
}

.card3 {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 250px;
  height: 450px;
  margin-top: -455px;
  margin-left: 550px;
  text-align: center;
  background-color: black;
  border: 3px solid;
  border-color: black;
  
}

.title3 {
  font-size: 18px;
  color: black;
  background-color: white;
}

.name3{
    color: black;
    background-color: white;
    font-size: 25px;
    
}

.uni3{
    color: black;
    background-color: white;
}

.card4 {
  
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 250px;
  height: 450px;
  margin-top: -460px;
  margin-left: 1400px;
  text-align: center;
  background-color: black;
  border: 3px solid;
  border-color: black;
  
}

.title4 {
  font-size: 18px;
  color: black;
  background-color: white;
}

.name4{
    color: black;
    background-color: white;
    font-size: 25px;
    
}

.uni4{
    color: black;
    background-color: white;
}

.nav {
    
    position: absolute;
    top: 50%;
    left: 43%;
    margin-top: -400px;
    margin-left: -120px;
  }

.rules{
  
  margin-left: 230px;
}

.rules1 {
  margin-top: 200px;
  margin-left: 50px;
}
.rules2 {
  margin-top: -585px;
  margin-left: 730px;
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
<div> 

<a href="logout.php" id="button">Logout</a>

</div>
<body>
<div class="card">
  <img src="placeholder.png" alt="Valentin" style="width:100%">
  <h1 class="name">Valentin Palahanov</h1>
  <p class="title">Gaming, Formula 1, Fun</p>
  <p class="uni">Fontys University</p>

  <p><button>valkopalahanauni@gmail.com</button></p>
</div>



<div class="card3">
  <img src="placeholder.png" alt="Justin" style="width:100%">
  <h1 class="name3">Nansi Apostolova</h1>
  <p class="title3">Gaming, Formula 1, Fun</p>
  <p class="uni3">Fontys University</p>

  <p><button>nansi@yahoo.com</button></p>
</div>

<div class="card2">
  <img src="placeholder.png" alt="Justin" style="width:100%">
  <h1 class="name2">Justin <br>
    Dirks</h1>
  <p class="title2">Gaming, Formula 1, Fun</p>
  <p class="uni2">Fontys University</p>

  <p><button>justindirks@yahoo.com</button></p>
</div>

<div class="card4">
  <img src="placeholder.png" alt="Justin" style="width:100%">
  <h1 class="name4">Namgyal Dhonden</h1>
  <p class="title4">Gaming, Formula 1, Fun</p>
  <p class="uni4">Fontys University</p>

  <p><button>namgyal@yahoo.com</button></p>
</div>

<div class="nav">

<ul class="menu-bar">
        <li> <a href="index.php" style="color: white; text-decoration: none;">Home</a> </li>
        <li><a href="InfoPage.php" style="color: white; text-decoration: none;">Info</a></li>
        <li><a href="https://discord.gg/SvXuAYs3Ye" target="blank" style="color: white; text-decoration: none;">Discord</a></li>
        
    </ul>
</div>
<div class="rules">
<div class="rules1">
<img src="rules1.png" alt="rules">
</div>
<div class="rules2">
<img src="rules2.png" alt="rules">
</div>
</div>

<p> Landlord contact: thestudentlandlord@gmail.com </p>

</body>
</html>