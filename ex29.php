<?php
function test($x) 
{
   if(abs($x - 100) <= 10 || abs($x - 200) <= 10)
            return true;
     return false;
}

var_dump(test(103));
var_dump(test(90));
var_dump(test(89));  
