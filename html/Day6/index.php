<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css"></link>
    </head>
    <body>
        <?php
        session_start();
        include 'header.php';
        
        if(isset($_SESSION['uName'])){
            header('location:Welcome.php');
        }
        if(isset($_COOKIE['cookieId'])){
            header('location:cookieSet.php');
        }
        ?>
        <form action="Welcome.php" method="post">
            <table align="center">
                <tr>
                    <td align="left">
                        <h3><b>UserName</b></h3>
                    </td>
                    <td>
                        <input type="text"  name="userName" placeholder="Enter a valid name" required/>
                    </td>
                </tr>
                
                <tr align="left">
                    <td >
                        <h3><b>Email</b></h3>
                    </td>
                    <td>
                        <input type="email" name="eMail"  placeholder="Enter a valid email address" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>        
    </body>
</html>