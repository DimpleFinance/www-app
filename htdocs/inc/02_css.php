<?php
$d = __DIR__."/css/";
$css_ext[] = "php";
$css_ext[] = "css";
//print "D: $d\n";
$h = opendir($d);
//print_r($h);
unset($inc_css);
while($f = readdir($h))
{
//print "F: $f\n";
    if($f == "." || $f == "..")continue;
    $tf = $d.$f;
    $t = pathinfo($tf);
//print $tf."<br>\n";
    if(in_array($t[extension],$css_ext)==false)continue;
    $inc_css[$f] = $tf;
}
//print_r($inc_css);
//asort($inc_css);
//die;
print "<style>";
foreach($inc_css as $f)
{
    include $f;
}
print "</style>";
