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
    <script>
function openForm() {
  document.getElementById("fotoForm").style.display = "block";
}

function closeForm() {
  document.getElementById("fotoForm").style.display = "none";
}
</script>
</head>
<body>
    <main>
        <section class="gallery-links">
            <div class="wrapper">
                <h2>Test</h2>
                <form id="fotoForm" class="fotoForm" action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="hidden" id="albumLaag" name="albumLaag" value="<?=$albumLaag;?>">
                    <input type="text" id="imageName" name="imageName" value="fotonaam">
                    <input type="checkbox" name="album" value="1">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
            </div>
        </section>

<div class="album">
<?php
$conn;
getGallery($conn,$albumLaag);
getPictures($conn,$albumLaag);
?>
</div>
</main>
</body>
</html>
