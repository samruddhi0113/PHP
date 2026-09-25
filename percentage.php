<?php

$per=80;

if($per<40)
   echo "Fail";
elseif($per>=40 && $per<50)
     echo "Pass Class";
elseif($per>=50 && $per<60)
     echo "Higher Second Class";
elseif($per>=60 && $per<70)
     echo "Second Class";
elseif($per>=70 && $per<80)
     echo "First Class";
elseif($per>=80 && $per<=100)
     echo "Distinction";
else
     echo "Best Luck Next Time ";

?>