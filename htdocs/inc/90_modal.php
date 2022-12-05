<?php
$d = __DIR__."/modal/";

$h = opendir($d);
while($f = readdir($h))
{
    if($f == "." || $f == "..")continue;
    $tf = $d.$f;
    $t = pathinfo($tf);
    if($t[extension] != "php")continue;

    $tf_mas[] = $tf;
//    include $tf;
}
asort($tf_mas);
foreach($tf_mas as $tf)
{
    include $tf;
}
?>
