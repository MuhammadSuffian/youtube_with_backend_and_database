<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="test.php" method="post" id="myForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your Emaild">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <button type="submit" name="loginBtn">Log In</button>
            </div>
        </form>
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT channel_name,email,password FROM accounts where email='Muhammad.suffian.5959@gmail.com'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $hashed_password1 = $row['password'];
        echo "Hashed password from database: " . $hashed_password1 . "<br>"; // Debugging output
        echo "Password from form: " . $password . "<br>"; // Debugging output
        if (password_verify($password, $hashed_password1)) {
            echo "Password verification successful <br>";
        } else {
            echo "Password verification failed <br>";
        }
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>