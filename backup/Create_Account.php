<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube</title>
    <link rel="icon" href="Additional files/youtube.png" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .logo {
            display: block;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-group button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #ff0000;
            color: #fff;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #cc0000;
        }
        .form-group .links {
            margin-top: 10px;
            text-align: center;
        }
        .form-group .links a {
            color: #0073e6;
            text-decoration: none;
        }
        .form-group .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }  
?>
    <div class="container">
        <img src="Additional files/youtube.png" alt="YouTube Logo" class="logo" width=200 height=200>
        <form id='myForm' action="login Page.php" method="post">
            <div class="form-group">
                <label for="fullname">Channel Name</label>
                <input type="text" id="Channel-Name" name="Channel-Name" placeholder="Enter your Channel Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Choose a password">
            </div>
            <div class="form-group">
                <button type="submit" id="submitBtn">Create Account</button>
                <div class="links">
                    <a href="login Page.php">Already have an account? Log in</a>
                </div>
            </div>
        </form>

        <script>
function myFunction() {
    alert("auhf");
    <?php
$Channel_Name = $_POST['Channel-Name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO accounts (channel_name,email,password) VALUES (?, ?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $$Channel_Name,$email,$hashed_password);

if ($stmt->execute()) {
    this.submit();
} else {
   alert("Connection Time out");
}
$stmt->close();
$conn->close();
?>
}
alert("auhf");
var button = document.getElementById("submitBtn");
button.addEventListener("click", myFunction);
</script>

        <script>
            alert(fullname.trim());
document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();
    alert(fullname.trim());
    var Channel_Name = document.getElementById("Channel-Name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    alert(fullname.trim());
    if (fullname.trim() == "" || email.trim() == "" || backupPin.trim() == "" || password.trim() == "") {
        alert("Please fill in all fields.");
        //return;
    }
    else{
        <?php

$Channel_Name = $_POST['Channel-Name'];
$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO accounts (channel_name,email,password) VALUES (?, ?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $$Channel_Name,$email,$hashed_password);

if ($stmt->execute()) {
    this.submit();
} else {
   alert("Connection Time out");
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
    }
    
});
</script>

        

    </div>
</body>
</html>
