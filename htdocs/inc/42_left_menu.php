			<!-- -->
			<div class="container pb-6">

				<div class="row g-4 auth_on" style="text-align:center">
				<center>
				<button class="btn btn-sm btn-primary wallet_connect w-25">Connect</button>
				</center>
				</div>

				<div class="row g-4 auth_off">
					<!-- sidebar -->
					<div class="col-12 col-lg-3">

						<nav class="sticky-kit nav-deep nav-deep-light">

							<div class="card">
								<div class="card-body p-0 p-md-4">

									<!-- mobile only -->
									<button class="clearfix btn btn-toggle btn-sm w-100 text-align-left shadow-md border rounded d-block d-lg-none" data-bs-target="#nav_responsive" data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3">
										<span class="group-icon px-2 py-2 float-start">
											<i class="fi fi-bars-2"></i>
											<i class="fi fi-close"></i>
										</span>

										<span class="h5 py-2 m-0 float-start">
											Account Menu
										</span>
									</button>


									<!-- navbar : navigation -->
									<ul id="nav_responsive" class="nav flex-column d-none d-lg-block mt-1 mt-lg-0">
										<li><!-- account name -->
											<div class="d-flex align-items-center mb-2 pb-4 border-bottom">
			                  <div class="flex-none p-3 border rounded-circle">
			                    <svg class="text-gray-300" width="34px" height="34px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.8 460.8" fill="currentColor">
			                      <path d="M230.432,0c-65.829,0-119.641,53.812-119.641,119.641s53.812,119.641,119.641,119.641s119.641-53.812,119.641-119.641S296.261,0,230.432,0z"></path>
			                      <path d="M435.755,334.89c-3.135-7.837-7.314-15.151-12.016-21.943c-24.033-35.527-61.126-59.037-102.922-64.784c-5.224-0.522-10.971,0.522-15.151,3.657c-21.943,16.196-48.065,24.555-75.233,24.555s-53.29-8.359-75.233-24.555c-4.18-3.135-9.927-4.702-15.151-3.657c-41.796,5.747-79.412,29.257-102.922,64.784c-4.702,6.792-8.882,14.629-12.016,21.943c-1.567,3.135-1.045,6.792,0.522,9.927c4.18,7.314,9.404,14.629,14.106,20.898c7.314,9.927,15.151,18.808,24.033,27.167c7.314,7.314,15.673,14.106,24.033,20.898c41.273,30.825,90.906,47.02,142.106,47.02s100.833-16.196,142.106-47.02c8.359-6.269,16.718-13.584,24.033-20.898c8.359-8.359,16.718-17.241,24.033-27.167c5.224-6.792,9.927-13.584,14.106-20.898C436.8,341.682,437.322,338.024,435.755,334.89z"></path>
			                    </svg>
			                  </div>
			                  <div class="w-100 px-3">
<!--			                    <span>Hello,</span>-->
			                    <span class="d-block fw-bold">
			                      <span class="wallet-id">-</span>
			                    </span>
			                  </div>
			                </div>
										</li>
<?php
/*
$k = "all";
$menu[$k][name] = "Main";
$menu[$k][svg]	= 6;
*/

$k = "pool";
$menu[$k][name] = "Pools";
$menu[$k][svg]	= 5;

$k = "balance";
$menu[$k][name] = "Balance";
$menu[$k][svg]	= 1;

/*
$k = "txs";
$menu[$k][name] = "Transactions";
$menu[$k][svg]	= 6;


$k = "events";
$menu[$k][name] = "Events";
$menu[$k][svg]	= 4;
*/
$k = "staking";
$menu[$k][name] = "Staking";
$menu[$k][svg]	= 1;


$k = "faucet";
$menu[$k][name] = "Faucet";
$menu[$k][svg]	= 2;

$nn = 0;
foreach($menu as $k=>$v2)
{
print "<li class=\"nav-item\">";
print "<a class=\"nav-link px-0 d-flex align-items-center\" href=\"#/manage/$k\">";
$f = __DIR__;
$f = dirname($f);
$f .= "/svg/".$v2[svg].".svg";
$a = file_get_contents($f);
print $a;
//print "<img src=/svg/$nn.svg>";

print "<span>".$v2[name]."</span>";
print "</a>";
print "</li>";
$nn++;
}
?>

										<li class="nav-item border-top my-3"></li>

										<li class="nav-item">
											<a class="nav-link px-0" href="#"  onclick="return logout();">
												<i class="fi fi-power float-start"></i>
												Disconnect
											</a>
										</li>

									</ul>

								</div>
							</div>

						</nav>

					</div>


