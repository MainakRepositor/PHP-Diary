<?php
function test($str) 
{
   return strlen($str) > 1 ? substr($str, strlen($str) - 1).substr($str, 1, strlen($str) - 2). substr($str, 0, 1) : $str;
   
}

echo test("abcd")."\n";
echo test("a")."\n";
echo test("xy")."\n";
