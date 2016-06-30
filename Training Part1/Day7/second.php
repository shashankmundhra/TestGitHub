<?php
$custid=$_REQUEST['id'];
$custname=$_REQUEST['name'];
$custemail=$_REQUEST['email'];
echo '<link rel="stylesheet" href="mystyle.css">';

  echo "<center><table>"
                . "<tr><th>customers_id</th>"
                . "<th>customers_name</th>"
                . "<th>customers_email</td></th>";
               echo "<tr>";
               echo "<td>";
                echo  'Custumer Id:'.$custid;
               echo "</td>";
               echo "<td>";
               echo 'Custumer Name:' .$custname;
               echo "</td>";
               echo "<td>";
               echo 'Custumer Email:' .$custemail;
               echo "</td>";
               echo "</tr>"; 
               echo "</table>";
  
 ?>