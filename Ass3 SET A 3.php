<?php
$students = array(
    array("eno"=>1, "Name"=>"samu", "address"=>"Pune"),
    array("eno"=>2, "Name"=>"loid", "address"=>"Shrirampur"),
    array("eno"=>3, "Name"=>"anu", "address"=>"Rahuri")
);

echo "<b>Display Multidimensional Array:</b><br><br>";
 print_r($students);
if(isset($_POST['search'])){
    $search = $_POST['search'];
    $found = false;
    echo "<br><br><b>Search Result for '$search':</b><br>";
    foreach($students as $s){
        if($s["Name"] == $search){
            echo "Found: ".$s["eno"]." ".$s["Name"]." ".$s["address"];
            $found = true;
        }
    }
    if($found == false){
        echo "Not Found!";
    }
}
?>
<html>
 <body>
<form method="post">
 Enter name to Search: 
<input type="text" name="search">
<input type="submit" value="Search">
</form>
 </body>
</html>
