<?php
for ($i = 1; $i <= 200; $i++)
{
  if ( $i%5 == 0 && $i%11 == 0 )
   {
     echo $i . " FizzBuzz"."\n" ;
   }
  else if ( $i%5 == 0 ) 
   {
     echo $i. " Fizz"."\n";
   }
     else if ( $i%11 == 0 ) 
   {
     echo $i. " Buzz"."\n";
   }
     else
   {
     echo $i."\n";
   }
 }
?>