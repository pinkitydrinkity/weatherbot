<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Student Complex</title>
<link rel="stylesheet" href="./index.css">

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
  
    .bot_inf{
    position: absolute;
    top: 40%;
    left: 44%;
    margin-top: -50px;
    margin-left: 390px;
    font-size: 40px;

    }

    .twitter{
    position: absolute;
    top: 50%;
    left: 300px;
    margin-top: 10px;
    margin-left: -25px;
    }

    .twitter_inf{
    position: absolute;
    top: 128%;
    left: 43%;
    margin-top: -840px;
    margin-left: -520px;
    font-size: 55px;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: black;
    }
    
    
	.logout{
		margin-top: 50px;
	}

  body {
  background-image: url("backround.jpg");
  font-family: "Times New Roman", Times, serif;
  color: white;
  text-transform: uppercase;
  text-shadow: 0.5px 0.5px 0 #CCCCCC;
  -webkit-background-size: cover;
}

.nav{
  position: absolute;
    top: 50%;
    left: 39%;
    margin-top: -400px;
    margin-left: -120px;
}

.main-container {
  padding: 30px;
  margin-left: 1000px;
  margin-top: 220px;
}

/* HEADING */

.heading {
  text-align: center;
}

.heading__title {
  
  font-size: 55px;
  margin-right: 230px;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
}

.heading__link {
  text-decoration: none;
}

.heading__credits .heading__link {
  color: inherit;
}


.cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  margin: 20px;
  padding: 20px;
  width: 500px;
  min-height: 300px;
  display: grid;
  grid-template-rows: 20px 50px 1fr 50px;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.2s;
  color: black;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}

.card__link,
.card__exit,
.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
}

.card__link::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.6);
  transition: all 0.5s;
}

.card__link:hover::after {
  width: 100%;
}

.card__exit {
  grid-row: 1/2;
  justify-self: end;
}

.card__icon {
  grid-row: 2/3;
  font-size: 30px;
}

.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #ffffff;
}

.card__apply {
  grid-row: 4/5;
  align-self: center;
}



.card-1 {
  background: radial-gradient(#3fbafe, #cfd0d3);
}
    
@media (max-width: 1600px) {
  .cards {
    justify-content: center;
  }
}
#button{
    margin-top: -1000px;
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

<div class="twitter">
<a class="twitter-timeline" data-lang="en" data-width="500" data-height="350" data-theme="light" href="https://twitter.com/eindhovenbot?ref_src=twsrc%5Etfw">Tweets by eindhovenbot</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

<div class="twitter_inf">
  <p>LIVE FORECAST<p>
</div>

<div class="nav">

<ul class="menu-bar">
        <li> <a href="index.php" style="color: white; text-decoration: none;">Home</a> </li>
        <li><a href="InfoPage.php" style="color: white; text-decoration: none;">Info</a></li>
        <li><a href="services.php" style="color: white; text-decoration: none;">Services</a></li>
        <li><a href="" style="color: white; text-decoration: none;">Camera</a></li>
        <li><a href="https://discord.gg/SvXuAYs3Ye" target="blank" style="color: white; text-decoration: none;">Discord</a></li>
        
    </ul>
</div>

<div class="main-container">
  <div class="heading">
    <h1 class="heading__title">Energy Monitor</h1>
  </div>
  <div class="cards">
    <div class="card card-1">
      <div class="card__icon"><i class="fas fa-bolt"></i></div>
      <p class="card__exit"><i class="fas fa-times"></i></p>
      <h2 class="card__title" style= "color: black">The latest energy consumption measurment is: <?php echo rand(1, 100); ?> kWh</h2>
      <p class="card__apply">
        <a class="card__link" href="services.php" style= "color: black">Refresh </a>
      </p>
    </div>
    
  </div>
</div>



</body>

</html>
