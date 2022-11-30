<?php
$t = __DIR__;
$t = dirname($t);
$t .= "/version.txt";
$a = file_get_contents($t);
print $a;
?>
