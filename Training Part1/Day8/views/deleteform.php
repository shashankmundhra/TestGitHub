<!DOCTYPE html>

        <title>Delete</title>

        <link rel="stylesheet" type="text/css" href="views\mvc_style.css"/>


    <body>
        <div class="main">
            <div class="header">
                <?php include 'header.php'; ?>
            </div>
            <div class="menubar">
               <input type="submit" class="button" name="menuEnter" value="Enter Data"/>
                    <input type="submit" class="button" name="search" value="Search Data"/>
                    <input type="submit" class="button" name="delete" value="Delete Data"/>
                    <input type="submit" class="button" name="update" value="Update Data"/>
            </div>
            <div class="content">
                <br><br><br>
                <form method="post">
                    <input type="text" name="age_delete" placeholder="enter user's age" required/>
                    <input type="submit" class="button" name="delete_age" value="Delete"/>
                </form>

            </div>
            <div class="footer">
                <?php include 'footer.php'; ?>
            </div>

        </div>

