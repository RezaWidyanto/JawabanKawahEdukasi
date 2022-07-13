<?php
for ($i = 1; $i <= 200; $i++)
{
  if ( $i%5 == 0 && $i%11 == 0 )
   {
     echo " FizzBuzz\n" ;
   }
  else if ( $i%5 == 0 ) 
   {
     echo " Fizz\n";
   }
     else if ( $i%11 == 0 ) 
   {
     echo " Buzz\n";
   }
     else
   {
     echo $i."\n";
   }
 }
?>
