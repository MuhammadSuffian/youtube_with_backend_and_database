<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Upload Video</title>
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
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    .form-group input[type="file"],
    .form-group input[type="text"] {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .form-group button {
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
    .form-group button:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Upload Video</h2>
    <form id="uploadForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="videoFile">Select Video File</label>
            <input type="file" id="videoFile" name="videoFile">
        </div>
        <div class="form-group">
            <label for="thumbnailFile">Select Thumbnail File</label>
            <input type="file" id="thumbnailFile" name="thumbnailFile">
        </div>
        <div class="form-group">
            <label for="videoTitle">Video Title</label>
            <input type="text" id="videoTitle" name="videoTitle" placeholder="Enter video title">
        </div>
        <div class="form-group">
            <button type="submit" name="submit">Upload</button>
        </div>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
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

    $videoTitle = $_POST["videoTitle"];

    $videoFileName = $_FILES["videoFile"]["name"];
    $videoFileTmp = $_FILES["videoFile"]["tmp_name"];
    $videoFileUploadPath = "Videos/" . basename($videoFileName);

    $thumbnailFileName = $_FILES["thumbnailFile"]["name"];
    $thumbnailFileTmp = $_FILES["thumbnailFile"]["tmp_name"];
    $thumbnailFileUploadPath = "thumbnails/" . basename($thumbnailFileName);

    // Move video file to uploads folder
    if (move_uploaded_file($videoFileTmp, $videoFileUploadPath)) {
        echo "Video file uploaded successfully.";
    } else {
        echo "Error uploading video file.";
    }

    // Move thumbnail file to thumbnails folder
    if (move_uploaded_file($thumbnailFileTmp, $thumbnailFileUploadPath)) {
        echo "Thumbnail file uploaded successfully.";
    } else {
        echo "Error uploading thumbnail file.";
    }

    // Now you can insert $videoTitle, $videoFileName, $thumbnailFileName into database
    // Insert code goes here
    $sql = "INSERT INTO videos (title, videoFile, thumbnail,videoID ) VALUES (?, ?, ?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $videoTitle, $videoFileName, $thumbnailFileName,10);

    if ($stmt->execute()) {
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>

</body>
</html>
