<?php
include_once("backend.php");
include_once("db.php");
$target_dir = "./fotos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if (isset($_POST['album'])){
    $album = $_POST['album'];
} else {
    $album = 0;
}
echo $album."<br>---<br>";
$imageName = $_POST['imageName'];
$albumLaag = htmlspecialchars($_POST['albumLaag']);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
  echo "To big to be a sword";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "file has to be jpg,png or jpeg";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "What are you doing here?";
// if everything is ok, try to upload file
} else {
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "uploaded: ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). ".";
    } else {
        echo "lol, lmao";
    }
}
//check connection 
if ($conn->connect_error || $uploadOk == 0) {
    die("Connection failed: " . $conn->connect_error);
}
    insertDB($conn, $imageName,$album,$target_file,$albumLaag);
    echo "Connected successfully";
?>