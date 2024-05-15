<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT videoid,videoFile,title FROM videos where videoid=1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    echo "video id: " . $row["videoid"]. " - path: " . $row["videoFile"]. " " . $row["title"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>