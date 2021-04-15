<?php
function test($s) 
{
   return substr($s, 1, 2) == "yt" ? substr($s, 0, 1).substr($s, 3, strlen($s)-2) : $s;
}

echo test("Python")."\n";
echo test("ytade")."\n";
echo test("jsues")."\n";
