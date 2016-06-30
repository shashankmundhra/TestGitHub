<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="main.php?x=code1">Sample1</a></li>
  <li><a href="main.php?x=code2">String eg</li>
  <li><a href="main.php?x=code3">Integer eg</a></li>
  <li><a href="main.php?x=code4">Float eg</a></li>
  <li><a href="main.php?x=code5">Array eg</a></li>
</ul>
<?php
if ($_GET['x']) {
		include ($_GET['x'].".php");
	}
?>
</body>
</html>







