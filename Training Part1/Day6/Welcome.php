<html>
    <head>
        <meta charset="utf-8">
        <title>Welcome Page</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form method="post">
        <div class="display">
            <?php
            session_start();
            

            if (isset($_SESSION["uName"])) {
                echo "<div class ='welcome'>WELCOME     " . $_SESSION["uName"];
                echo "</div>";
            }
            else{
				$value=$_REQUEST["userName"];
            	$_SESSION["uName"] = $value;
            	$_SESSION["eMail"]= $_REQUEST["eMail"];
                header('location:index.php');
            }
            ?>
        </div>
            <div class="link">
                   <a href="cookieSet.php">click to create cookie</a>
                        
        </div>
            </form>
    </body>
</html>