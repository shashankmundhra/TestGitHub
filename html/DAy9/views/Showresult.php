<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MVC Assignment</title>
       
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
                </form>
            </div>
            <div class="content">
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                    </tr>
                    <tr>
                        <?php
                        
                        foreach ($res as $key=>$value)
                        {
                            echo"<td>$value</td>";
                        }
                        
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