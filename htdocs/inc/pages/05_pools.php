
            <div class="card mb-3 link-normal">
              <div class="card-body p-lg-4">
                <div class="row">

<?php
print "<h1><center>POOLS</center></h1>";
$th[name] = "Name";
$th[stake] = "Stake";
$th[liq] = "Liquidity";
$th[fee] = "Fee rate";
$th[act] = "Actions";


$k = "matic_usdc";
$mas[$k][name] = "MATIC / USDC";
$mas[$k][stake] = "12000";
$mas[$k][liq] = "$8.43m";
$mas[$k][fee] = "0.05%";

$k = "meth_usdc";
$mas[$k][name] = "WETH / USDC";
$mas[$k][stake] = "5000";
$mas[$k][liq] = "$7.43m";
$mas[$k][fee] = "0.05%";

print "<table class=\"table w-100\">";
print "<tr>";
reset($th);
foreach($th as $k=>$v)
{
    print "<th class=\"th_$k\">$v</th>";
}
foreach($mas as $k=>$v)
{
    print "<tr>";
	reset($th);
	foreach($th as $k2=>$v2)
	{
	    
	    switch($k2)
	    {
		case "act":
		$val = "<button class=\"btn btn-primary btn-sm\" disabled>Stake</button>";
		$val .= " <button class=\"btn btn-primary btn-sm\" disabled>Untake</button>";
		break;
		default:
		$val = $v[$k2];
	    }
	    print "<td class=\"$k2\">$val</td>";
	}
    print "</tr>";
}

print "</tr>";
print "</table>";
?>


                </div>
              </div>
            </div>

