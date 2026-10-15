<html>
<body>
<form method="post">
Data Structure: <input type="number" name="ds"><br><br>
Digital Marketing: <input type="number" name="dm"><br><br>
PHP: <input type="number" name="php"><br><br> SE: <input type="number" name="se"><br><br>
Big Data: <input type="number" name="bd"><br><br>
<input type="submit" name="submit" value="Calculate">
</form>
<?php
$ds = $_POST['ds'];
$dm = $_POST['dm'];
$php = $_POST['php'];
$se = $_POST['se'];
$bd = $_POST['bd'];
$total = $ds + $dm + $php + $se + $bd;
$percentage = ($total / 500) * 100; echo "Data Structure: $ds <br>"; echo "Digital Marketing: $dm <br>"; echo "PHP: $php <br>";
echo "SE: $se <br>";
echo "Big Data: $bd <br>";
echo "Total Marks: $total / 500 <br>"; echo "Percentage: $percentage %";
?>
 
</body>
</html>
File name – percentage.php
