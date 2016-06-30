<br>
&lthtml><br>
&lthead><br>
&lttitle>Title goes here&lt/title><br>
&lt/head><br>
&ltbody><br>

&ltform action="" method="post"><br>
&ltlabel>Enter Num1:</label><br>
&ltinput type="text" name="num1" /><br>
&ltlabel>Enter Num2:</label><br>
&ltinput type="text" name="num2" /><br>
&ltinput  type="submit" name="btn_submit" value="Add"><br>
&lt/form>
<br>
&lt?php<br>
    if(isset($_POST['btn_submit']))<br>
    {<br>
        $num1 = $_POST['num1'];<br>
        $num2 = $_POST['num2'];<br>
        
        $total =  $num1+$num2;<br>
        
        echo "The total value is: ".$total;<br>
    }<br>
?><br>


&lt/body><br>
&lt/html>