<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Databse eg </title>
        <link rel="stylesheet" href="mystyle.css">

    </head>
    <body>
        <?php
            $conn = mysql_connect('127.0.0.1','root','root');
            if(!$conn) {
                echo 'Failed to connect with myql';
                exit;
            }
            
            $db=  mysql_select_db('cust',$conn);
            if(!$db) {
                echo 'Failed to connect to db';
                exit;
            }
           $sql = 'select * from customers';
           $result = mysql_query($sql,$conn);
           if(!$result) {
               echo 'DB Error';
               echo 'MySqlError:'. mysql_error();
           }
           
           echo "<center><table>"
                . "<tr><th>customers_id</th>"
                . "<th>customers_name</th>"
                . "<th>customers_email</td></th>";
           
           while($row= mysql_fetch_assoc($result)){
               echo "<tr>";
               echo "<td>";
               echo$row['cust_id'];
               echo "</td>";
               echo "<td>";
               echo$row['cust_name'];
               echo "</td>";
               echo "<td>";
               echo$row['cust_email'];
               echo "</td>";
               echo "</tr>"; 
           }
               echo "</table>";
               
        ?>       
               <form action='' method='post'><br>            
               <label>Search</label><br>            
               <input type='text' name='name' required/><br>
               <input  type='submit' name='submit' /><br>
                </form>
        
        <?php
          
        if (isset ($_REQUEST['name']))
        {  
            $name1=$_REQUEST['name'];
            $sql2="SELECT  *  FROM customers WHERE cust_name LIKE '%" . $name1 . "%' " ;
              
            $result2=mysql_query($sql2);  
            if(!$result2){
                echo 'Error querying the database.';
                exit;
            }
            else if (mysql_num_rows($result2)==0)
            {
                echo 'Nothing found.';
                exit;
            }

               while($row=mysql_fetch_array($result2)){
               $custid  =$row['cust_id'];
               $custname=$row['cust_name'];
               $custemail=$row['cust_email'];

                echo "<ul>\n";
                echo "<li>" . "<a  href=\"second.php?id=$custid&name=$custname&email=$custemail\">"   .$custname . " " .  "</a></li>\n" ;
                echo  $custemail . " " .  "</a>\n";
               // echo  $custid . " " .  "</a>\n";
                echo "</ul>";
                }
                
                mysql_close($conn); 
            }
            else {
               
            }
            //<a  href=\"index.php?id=$custid\">"   .$custname . " " .  "</a>
        ?>
       
    </body>
</html

