<?php

include "conf.php";
//include "../conf.php";

$f = "version.txt";
$site_version = file_get_contents($f);

//print $www_dir;
$d = $www_dir;
$d .= "inc/";
//print "D: $d\n";
$h = opendir($d);
while($f = readdir($h))
{

//print $f."\n";

    $tf = $d.$f;
    $t = pathinfo($d.$f);
    if($t[extension] == "php")
    {
        $inc_mas[$tf] = $f;
    }
}
asort($inc_mas);
//print_r($inc_mas);die;

ob_start();
$ni = 0;
foreach($inc_mas as $incer=>$f)
{
//if($ni > 4)die;
    $t = str_replace(".php","",$f);
    print "<!-- $t -->\n";
    include $incer;
$ni++;
}
//die;
$page = ob_get_contents();
ob_end_clean();

unset($reg);
    $preg = "/([\s]{1}\/\/.*?\n)/sim";
    $preg2 = "/(\<\!\-\-.*?\-\-\>)/sim";
//preg_match_all($preg,$page,$reg);
//print $page;
//print_r($reg);die;
if(1)
{
    $page = str_replace("\n//","\n\n//",$page);
    $page = preg_replace($preg,"\n\n",$page);
    $page = preg_replace($preg2,"\n",$page);
    $page = str_replace("\n"," ",$page);
    $preg = "/[\s]{2,100}/sim";
    $page = preg_replace($preg," ",$page);
}
    print $page;

?>