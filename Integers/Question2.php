<?php
function Add($num1, $num2) {
    $numbers = [10,20,30,40,50,60,70,80,90,100];
    $total = 0;
    
  //check if integer is +ve
    if ($num1 < 0 || ($num2 < 0 )){
         echo "-1";
    }
      //check if 1st int is lower than 2nd integer
    elseif ($num1 > $num2){
      echo "0";
    }
    else {
      // check numbers in range then add them btw num1 and num2
      foreach($numbers as $number){
        if ($number >= $num1 and ($number <= $num2)) {
          $total += $number;
        }
      }
      echo $total;
    }
   
  }
  
  // calling the function with the values
  Add(-10,30);
?>