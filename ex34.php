<?php
function test($str) 
{
   $s = substr($str, strlen($str) - 1);
      return $s.$str.$s;
   
}

echo test("Red")."\n";
echo test("Green")."\n";
echo test("1")."\n";
