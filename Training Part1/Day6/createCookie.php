<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form method="post">
            <div class="display">

                <?php
                session_start();
                if (isset($_SESSION["uName"])) {
                    if (isset($_COOKIE["cookieId"])) {
                        echo "<div>WELCOME " . $_SESSION["uName"];
                        echo "<br>";echo "<br>";
                        echo "<div>USER : " . $_COOKIE["cookieId"];
                        echo "</div>";
                        echo "<br>";echo "<br>";
                        echo "<div>Email : " . $_COOKIE["cookieEmail"];
                        echo "</div>";
                        echo "<br>";echo "<br>";
                    } else {
                        echo 'notset';
                    }
                } else {

                    header('location:Welcome.php');
                }
                ?>
            </div>
        </form>
        <div class="link">
            <a href="cookiedel.php">DELETE COOKIES</a>
        </div>
    </body>
</html>