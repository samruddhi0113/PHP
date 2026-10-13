<html>
<body>
<form method="post">
Enter temperature in celcius :
<input type="number"name="c"><br>
<input type="submit"name="submit"value=submit>
</form>
</body>
 
</html>
<?php
echo"<h1>Temperature in fahrenheit</h1>"; echo"<br>";
$c=$_POST["c"];
$f=$c*(9/5)+32; echo"temparture in farenhit=".$f;
?>
File name : temp.php
