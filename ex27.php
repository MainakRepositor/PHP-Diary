<?php
function test($n) 
{
     $x = 51;

     if ($n > $x)
     {
       return ($n - $x)*3;
     }
   return $x - $n;
}
echo test(53)."\n";
echo test(30)."\n";
echo test(51)."\n";  
