<?php
function test($str) 
{
   return (strlen($str) < 3 && $str=="C#") || (substr($str,0,2) == "C#" && substr($str,2,1) == ' ');
}

var_dump(test("C# Sharp"));
var_dump(test("C#"));
var_dump(test("C++"));
