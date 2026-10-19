<html>
<body>
<form method="post">
    Enter First Array (comma separated):
    <input type="text" name="a"><br><br>

    Enter Second Array (comma separated):
    <input type="text" name="b"><br><br>

    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $a = explode(",", $_POST['a']);
    $b = explode(",", $_POST['b']);

    echo "<h3>First Array:</h3>";
    print_r($a);

    echo "<h3>Second Array:</h3>";
    print_r($b);

    $d = array_merge($a, $b);
    $c = array_unique($d);

    echo "<h3>Union of Two Arrays:</h3>";
    print_r($c);

    shuffle($c);

    echo "<h3>Array Elements in Random Order:</h3>";
    foreach($c as $value)
    {
        echo $value . " ";
    }
}
?>