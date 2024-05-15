<?php
session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube_db";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT channel_name, email, password FROM accounts WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION['email'] = $email;
            $_SESSION['channel_name'] = $row['channel_name'];
            header("Location: youtube.php");
            exit();
        } else {
            $error_message = "Incorrect password";
        }
    } else {
        $error_message = "User not found"; 
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube</title>
    <link rel="icon" href="Additional files/youtube.png" type="image/x-icon">
    <style>
        /* Resetting default margin and padding */
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
        .error-message {
            color: red;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="Additional files/youtube-log.png" alt="YouTube Logo" class="logo" width=200 height=200>
        <form action="" method="post" id="myForm"> <!-- Removed action attribute to submit to current page -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <button type="submit" name="loginBtn">Log In</button>
            </div>
        </form>
        <div class="links">
            <a href="create_account.php">I am New! Create account</a>
        </div>
        <?php if (isset($error_message)) { ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>
    </div>
</body>
</html>
