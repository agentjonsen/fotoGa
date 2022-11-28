<?php include 'backend.php';?>
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
                <h2>Gallery</h2>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="text" id="imageName" name="imageName">
                    <input type="text" id="imageTags" name="imageTags">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                </form>
                <div class="gallery-container">
                    <a>
                        <img src="./fotos/1.jpg"></img>
                        <h3>Title</h3>
                    </a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>