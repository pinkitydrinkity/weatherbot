<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from admin where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: admin_index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>  
<head>
    <style>
      html, body {
        background-image: url("backround.jpg");
        font-family: "Times New Roman", Times, serif;
        text-transform: uppercase;
        text-shadow: 0.5px 0.5px 0 #CCCCCC;
        -webkit-background-size: cover;
        position:fixed; 
        top:0; 
        bottom:0; 
        left:0; 
        right:0; 
        }
        </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Login as admin</title>
    </head>
    <body>
    
        <style type="text/css">
        
        #text{
    
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }
    
        #button{
    
            padding: 10px;
            width: 100px;
            color: white;
            background-color: lightblue;
            border: none;
        }
    
        #box{
            margin-top: 200px;
            margin-left: 750px;
            background-color: grey;
            width: 400px;
            padding: 20px;
            opacity: 0.8;
            box-sizing: border-box;
            padding: 2rem;
            border-radius: 1rem;
        }

        .guest{
            position: absolute;
            margin-top: -87px;
            margin-left: 883px;
            width: 300px;
            padding: 20px;
            opacity: 0.8;
        }

        .admin_login{
            position: absolute;
            margin-top: -87px;
            margin-left: 1000px;
            width: 300px;
            padding: 20px;
            opacity: 0.8;
        }
    
        </style>
           
        <div id="box">
            
            <form method="post">
                <div style="font-size: 20px;margin: 10px;color: white;">Login as admin</div>
    
                <input id="text" type="text" name="user_name"><br><br>
                <input id="text" type="password" name="password"><br><br>
    
                <input id="button" type="submit" value="Login">
                
                
                
            </form>
       
    </body>
    </html>
</head>
</html>
