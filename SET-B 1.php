<html>
<body>
<form method="POST"> Enter length :
<input type="number" name="t1"><br> Enter bredth :
<input type="number" name="t2"><br> Enter height :
<input type="number" name="t3"><br>
<input type="submit">
</form>
</body>
</html>


<?php
echo"<h1> surface area & volume </h1>";
$l=$_POST["t1"];
$b=$_POST["t2"];
$h=$_POST["t3"];
$sa=2*($l*$b+$l*$h+$b*$h);
$v=$l*$b*$h;
echo"surface area=".$sa."<br>"; echo"volume=".$v;
?>
