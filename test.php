<?php require_once('db.php');
if(empty($_GET)){
    $albumLaag = 0;
} else {
    $albumLaag = htmlspecialchars($_GET['id']);
    
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>I dunno</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="gallery-links">
            <div class="wrapper">
                <h2>Test</h2>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="hidden" id="albumLaag" name="albumLaag" value="<?=$albumLaag;?>">
                    <input type="text" id="imageName" name="imageName" value="fotonaam">
                    <input type="checkbox" name="album" value="1">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
            </div>
        </section>
    </main>
</body>
</html>

<?php
$conn;
getGallery($conn,$albumLaag);
//    $stmt2 = $conn->prepare('SELECT * FROM minigallerij WHERE albumLaag = ? AND album = 0');
//    $stmt2->bind_param('s', $test);
//    $stmt2->execute();
//    $gallerij2 = $stmt2->get_result();
//    while($row2 = $gallerij2->fetch_assoc()){
//        echo '<a href="test.php?id='.$teller.'"><img src="'.$row['locatie'].'"></a>';
//    }
?>
