<?php
if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
echo 'I am at least PHP version 6.0.0, my version: ' . PHP_VERSION . "\n";
}
if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
echo 'I am at least PHP version 5.3.0, my version: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '>=')) {
echo 'I am using PHP 5, my version: ' . PHP_VERSION . "\n";
}

if (version_compare(PHP_VERSION, '5.0.0', '<')) {
echo 'I am using PHP 4, my version: ' . PHP_VERSION . "\n";
}
?>
