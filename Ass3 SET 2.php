<html>
<body>
<form method="post">
    Enter String 1:
    <input type="text" name="s1"><br><br>
    Enter String 2:
    <input type="text" name="s2"><br><br>
    Enter String 3:
    <input type="text" name="s3"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s3 = $_POST['s3'];
    if($s2 == $s3)
        echo "String 2 and String 3 are equal.";
    else
        echo "String 2 and String 3 are not equal.";

    echo "<br>Uppercase String 1: ".strtoupper($s1);
    echo "<br>Uppercase String 2: ".strtoupper($s2);
    echo "<br>Uppercase String 3: ".strtoupper($s3);

    echo "<br>Lowercase String 1: ".strtolower($s1);
    echo "<br>Lowercase String 2: ".strtolower($s2);
    echo "<br>Lowercase String 3: ".strtolower($s3);
}
?>