<!DOCTYPE html>

        <meta charset="UTF-8">
        <title>MVC Data Search</title>
       
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
                <form method="POST">
                    <input class ="input" type="text" name="searchName" placeholder="Email only" required/>
                    <input type="submit" class="button" name="searchEnter" value="enter"/>
                </form>
            </div>
            <div class="footer">
                <?php include 'footer.php';?>
            </div>  
        </div>
 
