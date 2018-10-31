<!doctype html>


<html>
    
    <head>
        <title>MySQLInfo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h2>MySQL Database Sever Information</h2>
        <?php
        $hostName = "localhost";
        $userName = "adminer";
        $password = "guess-tried-32";
        $DBConnect = mysqli_connect($hostName, $userName, $password);
        if (!$DBConnect) {
            echo "<p>Connection failed.</p>\n";
        }
        else {
            echo "<p>Connection successful.</p>\n";
            mysqli_close($DBConnect);
        }
        ?>
    </body>
</html>