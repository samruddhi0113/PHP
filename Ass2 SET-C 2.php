<?php 
   $day = date("l"); 
      switch($day)
      {     
        case "Monday":         
              $color = "red"; break;     
       case "Tuesday":         
              $color = "orange"; break;       
       case "Wednesday":         
              $color = "pink"; break;      
      case "Thursday":        
             $color = "yellow"; break;      
       case "Friday":         
             $color = "violet"; break; 
     case "Saturday":        
            $color = "lightgreen"; break;       
     case "Sunday":         
            $color = "lightblue"; break;      
     default:        
            $color = "white"; 
   } 
  echo "<body style='background-color:$color'>"; 
  echo "<h2>Today is $day</h2>"; 
?> 