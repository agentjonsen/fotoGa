<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "minigallerij";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function insertDb($conn, $fNaam, $album, $fLocatie, $albumLaag){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $stmt = $conn->prepare("INSERT INTO minigallerij (naam, album, locatie, albumLaag) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fNaam, $album, $fLocatie, $albumLaag);
    $stmt->execute();
}

function getGallery($conn, $type){
    $test = $type;
    $stmt = $conn->prepare('SELECT * FROM minigallerij WHERE albumLaag = ? AND album = 1');
    $stmt->bind_param('s', $test);
    $stmt->execute();
    $gallerij = $stmt->get_result();
    ++$test;
    while($row = $gallerij->fetch_assoc()){
        echo '
        <div class="lijst">
            <a class="image" href="test.php?id='.$test.'"><img src="'.$row['locatie'].'"></a>
            <p>'.$row["naam"].'</p>
        </div>';
    }
    return $test;
}
function getPictures($conn, $type){
    $test = $type;
    $stmt = $conn->prepare('SELECT * FROM minigallerij WHERE albumLaag = ? AND album = 0');
    $stmt->bind_param('s', $test);
    $stmt->execute();
    $gallerij = $stmt->get_result();
    ++$test;
    while($row = $gallerij->fetch_assoc()){
        echo '
        <div class="lijst">
            <img src="'.$row['locatie'].'">
            <p>'.$row["naam"].'</p>
        </div>';
    }
    echo'
        <div class="lijst">
            <button class="button" onclick="openForm()"><img src="./fotos/upload.png"></button>
            <p>Upload image</p>
        </div>';
    return $test;
}
?>  


