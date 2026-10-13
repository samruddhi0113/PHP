<html>
<head>
<title>example</title>
</head>
<body>
<form method="post"> Enter First Number :
<input type="number" name="t1"><br> Enter Second Number :
<input type="number" name="t2"><br>
 
<input type="submit">
</form>
</body>

</html>

<?php
echo"division of two numbers :"; echo"<br>";
$num1=$_POST["t1"];
$num2=$_POST["t2"];
$Q=$num1/$num2;
$R=$num1%$num2; echo"Quotient=".$Q; echo"<br>"; echo"Reminder=".$R;
?>
File name : quotient.php
