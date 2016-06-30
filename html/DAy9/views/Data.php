<!DOCTYPE html>

        <title>MVC Data Insertion</title>
        <link rel="stylesheet" type="text/css" href="views\mvc_style.css"/>

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
                <?php include 'form.php';
                if($result1==true)
                {
                    echo"<span>Successfull entry</span>";
                }
                ?>
            </div>
            <div class="footer">
                <?php include 'footer.php';?>
            </div>            
        </div>
   
