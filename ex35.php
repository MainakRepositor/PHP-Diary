<?php
function test($n) 
{
   return $n % 3 == 0 || $n % 7 == 0;
}

var_dump(test(3));
var_dump(test(14));
var_dump(test(12));
var_dump(test(37));
