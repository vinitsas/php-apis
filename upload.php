<?php 

// Create connection
$conn = new mysqli('localhost','root','','reactjs');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$image_url = "http://localhost/php-upload/img/".$_FILES["image"]["name"];

$sql = "INSERT INTO uploaded_images (name,image_url) VALUES ('".$_FILES["image"]["name"]."','".$image_url."')";

if ($conn->query($sql) === TRUE) {
    move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $_FILES["image"]["name"]);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


