<?php

error_reporting(0);
$d = __DIR__."/";
$h = opendir($d);
while($f = readdir($h))
{
    if($f == "." || $f == "..")continue;
    $tf = $d.$f;
    $t = pathinfo($tf);
    //print_r($t);
    if($t[extension]=="js")
    {
        $a = file_get_contents($tf);
        $t3 = explode("\n",$a);
        $t2 = $t3[0];
        $t2 = trim($t2);
        //print "T2:".$t2."\n";
        if($t2 == "// 0")
        {
            continue;
        }
        $txt = "";
        $txt .= "// =========== $t[filename] =========\n";
        $txt .= $a."\n";
        $txt2[$t[filename]] = $txt;

    }
}

ksort($txt2);
$page = implode("\n",$txt2);

$page = "\n".$page;
//print $page;
    $preg = "/([\s]{1}\/\/.*?\n)/sim";
//    $preg2 = "/(\<\!\-\-.*?\-\-\>)/sim";
    $preg2 = "/(\/\*.*?\*\/)/sim";
    $preg3 = "/\n{1,100}/sim";
//preg_match_all($preg,$page,$reg);
//print $page;
//print_r($reg);die;


    $page = str_replace("\n//","\n\n//",$page);
    $page = preg_replace($preg,"\n\n",$page);
    $page = preg_replace($preg2,"\n",$page);
    $page = preg_replace($preg3,"\n",$page);
//    $page = str_replace("\n"," ",$page);
//    $preg = "/[\s]{2,100}/sim";
//    $page = preg_replace($preg," ",$page);
    print $page;

?>