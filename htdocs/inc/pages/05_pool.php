
            <div class="card mb-3 link-normal">
              <div class="card-body p-lg-4">
                <div class="row">

<?php
print "<h2><center>Pools</center></h2>";
$th[name] = "Name";
$th[stake] = "Stake";
$th[liq] = "Liquidity";
$th[fee] = "Fee rate";
$th[act] = "Actions";


$k = "stable";
$mas[$k][name] = "Stable Dimple";
$mas[$k][stake] = "12000";
$mas[$k][liq] = "$8.43m";
$mas[$k][fee] = "0.05%";

$k = "deep";
$mas[$k][name] = "Deep Dimple";
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
		$val .= " <button class=\"btn btn-primary btn-sm\" disabled>Rewards</button>";
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

