<html>
    <body>
        <form method="post">
        Enter radius :
        <input type="number" name="t1"<br>
         Enter side :
        <input type="number" name="t2"<br>
         Enter length :
        <input type="number" name="t3"<br>
         Enter breath :
        <input type="number" name="t4"<br>
        <input type="submit">
        </form>
    </body>
</html>
<?php
$r=$_POST=["t1"];
$s=$_POST=["t2"];
echo"<br>";
$circle=3.14*$r*$r;
echo"Area of circle :".$circle."<br>";
$square=$s*$s;
echo"Area of Square :".$square."<br>";
$l=$_POST["t3"];
$b=$_POST["t4"];
$rectangle=$l*$b;
echo"Area of Rectangle :".$rectangle."<br>";

?>