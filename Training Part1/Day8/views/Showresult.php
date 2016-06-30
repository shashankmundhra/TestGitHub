<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Result</title>
       
        <link rel="stylesheet" type="text/css" href="views\mvc_style.css"/>
    </head>
    <body>
        <div class="main">
            <div class="header">
               <?php include 'header.php';?>
            </div>
            <div class="menubar">
                <form method="POST">
                    <input type="submit" class="button" name="menuEnter" value="Enter Data"/>
                    <input type="submit" class="button" name="search" value="Search Data"/>
                    <input type="submit" class="button" name="delete" value="Delete Data"/>
                    <input type="submit" class="button" name="update" value="Update Data"/>
                </form>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Photo</th>
                    </tr>
                    <tr>
                        <?php
                        //$res as $key=>$value
                        echo "<td>". $res['firstName']."</td>";
                        echo "<td>". $res['lastName']."</td>";
                        echo "<td>". $res['age']."</td>";
                        echo "<td><img src='../images/". $res['file']."'></td>";
                        ?>
                        
                    </tr>
                </table>
            </div>
            <div class="footer">
                <?php include 'footer.php';?>
            </div>
        </div>
    </body>
</html>