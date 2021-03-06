<html>
    <head>
        <title>Vulnerable Web Server</title>
    </head>
    <body>
        <h1>This is a vulnerable web server</h1>
        <form action="index.php" method="post" enctype="multipart/form-data">
            <label for="file">File:</label>
            <input type="file" name="file" id="file" /> 
            <br />
            <input type="submit" name="submit" value="Submit" />
        </form>
        <?php
            if ($_FILES["files"]["error"] > 0) {
                echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
            } else {
                if (move_uploaded_file($_FILES["file"]["tmp_name"],  $_FILES["file"]["name"])) {
                    echo "File is valid, and was successfully uploaded to /var/www/html/" . $_FILES["file"]["name"] . ".\n";
                } else {
                    echo "Upload failed";
                }
            }
        ?>
    </body>
</html>