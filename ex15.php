<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
$file_last_modified = filemtime($current_file_name); 
echo "Last modified " . date("l, dS F, Y, h:ia", $file_last_modified)."\n";
?>