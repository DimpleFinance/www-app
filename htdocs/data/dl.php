#!/usr/bin/php
<?php
$f = "https://dimple-app.infocoin.pro/data/data.js";
$a = file_get_contents($f);

if($a)
{
    file_put_contents("/www/git/www-app/htdocs/data/data.js",$a);
}