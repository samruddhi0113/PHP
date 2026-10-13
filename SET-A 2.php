<html>
<body>
 
<form method="post"> Enter fisrt number :
<input type="number" name="t1"> <br> Enter second number :
<input type="number" name="t2"> <br>
<input type='submit'>
</form>
</body>
</html>
<?php
echo "swapping of two numbers :" ; echo "<br>";
$a=$_POST["t1"];
$b=$_POST["t2"];
echo "before swapping :<br>"; echo $a."<br>";
echo $b."<br>";
$temp=$a;
$a=$b;
$b=$temp;
echo "after swapping :<br>"; echo $a."<br>";
echo $b;
?>
