

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="start.css">
    <style>
        body {
            background-image: url('images/back.png');
            background-size: cover;
            background-position: center;
            /* Add any additional styling for the body here */
        }

        .login-form {
            border-radius: 20px;
            background-color: rgb(60, 77, 134);
            
        }

        .welcome {
            display: flex;
            flex-direction: row;
            justify-content: space-around; /* To evenly distribute buttons */
         
        }
        .button-3d {
  position:relative;
  width: 200px;
  display:inline-block;
  color:#ecf0f1;
  text-decoration:none;
  border-radius:5px;
  border:solid 1px #f39c12;
  background:#e67e22;
  text-align:center;
  padding:16px 18px 14px;
  margin: 12px;
  
  -webkit-transition: all 0.1s;
	-moz-transition: all 0.1s;
	transition: all 0.1s;
	
  -webkit-box-shadow: 0px 6px 0px #d35400;
  -moz-box-shadow: 0px 6px 0px #d35400;
  box-shadow: 0px 6px 0px #d35400;
}

.button-3d:active{
    -webkit-box-shadow: 0px 2px 0px #d35400;
    -moz-box-shadow: 0px 2px 0px #d35400;
    box-shadow: 0px 2px 0px #d35400;
    position:relative;
    top:4px;
}
        
    </style>
</head>
<body>
   
    <div class="wrapper">
        <center>
        <form name="login-form" class="login-form" action="select.php" method="post">
            <div class="logo"><img src="images/logo.png" style="height: 250px;"></div>
          
            <div style="color: aliceblue;">
            <label for="">Player Name:</label>
            <label id="label"for=""> <?php
    // Display the username from the URL
    if (isset($_GET["username"])) {
        $username = $_GET["username"];
        echo " $username";
    }
    ?>
    </label>
        </div>
            <div class="welcome">
                
                <a href="index.php" class="button-3d">Select Defficulty level</a>
             
            </div>
            
        </form>

    </center>
    </div>

   
</body>
</html>
