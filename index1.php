<?php
session_start();
?>
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the username
    $username = $_POST["username"];
    // Create a database connection
    $servername = "localhost";
    $username_db = "root";
    $password_db = ""; // Your MySQL password
    $dbname = "maze(1)";

    // Create connection
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Prepare and execute the query to insert the username
    $stmt = $conn->prepare("INSERT INTO users (username) VALUES (?)");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    // Close the statement and the connection
    $stmt->close();
    $conn->close();
    // Redirect to the next page with the username in the URL
    header("Location: select.php?username=" . urlencode($username));
    exit();
}
?>

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
    </style>
</head>
<body>
    
    <div class="wrapper">
        <center><br><br><br><br><br><br>
        <form name="login-form" class="login-form" action="index1.php" method="post">
            <div class="logo"><img src="images/logo.png" style="height: 250px;"></div>
          
            
          
            <div class="welcome">
                <input type="text" id="username" placeholder="Enter your username" name="username">
                <button class="green" id="logbutton" type="submit">PLAY</button>
                <br><br><br><br> 
        
            </div> 
        </form>
    </center>
    </div>
</body>
</html>
