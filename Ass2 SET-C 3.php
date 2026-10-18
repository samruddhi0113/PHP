<?php 
   $even = 0; 
   $odd = 0; 
   for($i=1; $i<=1000; $i++) 
    {     
      if($i%2==0)     
      {
          $even++;    
      }   
     else     
     {        
       $odd++;     
     }
   } 
    echo "Total Even Numbers = " . $even . "<br>"; 
    echo "Total Odd Numbers = " . $odd; 
?> 