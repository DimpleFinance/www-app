					<!-- content -->
					<div class="col-12 col-lg-9">


          <div class="row g-2">
<?php
$d = __DIR__;
$d .= "/pages/";
$h = opendir($d);
unset($f_mas);
while($f = readdir($h))
{
    if($f == "." || $f == "..")continue;
    $tf = $d.$f;
    $t = pathinfo($tf);
    if($t[extension] != "php")continue;
    $f_mas[$t[filename]] = $tf;
}
ksort($f_mas);
foreach($f_mas as $fname=>$f)
{
    $t = $fname;
    $t = explode("_",$t);
    $name = $t[1];
    print "<div class=\"pages page_$name\">";
    include $f;
    print "</div>";
}

/*
?>
            <!-- name, etc -->
            <div class="card mb-3">
              <div class="card-body d-flex justify-content-between">
                <div class="flex-none pt-1" style="width:40px">
                  <svg class="text-gray-300" width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.8 460.8" fill="currentColor">
                    <path d="M230.432,0c-65.829,0-119.641,53.812-119.641,119.641s53.812,119.641,119.641,119.641s119.641-53.812,119.641-119.641S296.261,0,230.432,0z"></path>
                    <path d="M435.755,334.89c-3.135-7.837-7.314-15.151-12.016-21.943c-24.033-35.527-61.126-59.037-102.922-64.784c-5.224-0.522-10.971,0.522-15.151,3.657c-21.943,16.196-48.065,24.555-75.233,24.555s-53.29-8.359-75.233-24.555c-4.18-3.135-9.927-4.702-15.151-3.657c-41.796,5.747-79.412,29.257-102.922,64.784c-4.702,6.792-8.882,14.629-12.016,21.943c-1.567,3.135-1.045,6.792,0.522,9.927c4.18,7.314,9.404,14.629,14.106,20.898c7.314,9.927,15.151,18.808,24.033,27.167c7.314,7.314,15.673,14.106,24.033,20.898c41.273,30.825,90.906,47.02,142.106,47.02s100.833-16.196,142.106-47.02c8.359-6.269,16.718-13.584,24.033-20.898c8.359-8.359,16.718-17.241,24.033-27.167c5.224-6.792,9.927-13.584,14.106-20.898C436.8,341.682,437.322,338.024,435.755,334.89z"></path>
                  </svg>
                </div>
                <div class="w-100">
                  <strong class="d-block fs-5 fw-medium">Account detail</strong> 
                  <ul class="list-unstyled small mb-0">
                    <li class="list-item">Name: John Travolta</li>
                    <li class="list-item">Phone: 1-800-565-2390</li>
                  </ul>
                </div>
                <div class="flex-none">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modal-account-edit" class="bg-primary text-white rounded px-2 py-1 small">
                    edit
                  </a>
                </div>
              </div>
            </div>

            <!-- Modal : May detail -->
            <div class="modal fade" id="modal-account-edit" tabindex="-1" aria-hidden="true">
              <form method="post" action="#" novalidate class="bs-validate modal-dialog modal-dialog-centered">

                <div class="modal-content">
                  <div class="modal-header border-0 pb-0 px-4">
                    <h5 class="modal-title">Account detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">

                    <div class="row g-2">
                      <div class="col-lg-6">
                        <div class="form-floating">
                          <input required type="text" class="form-control" id="user-lname" name="user[first_name]" placeholder="First name" value="John">
                          <label for="user-lname">First name</label>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-floating">
                          <input required type="text" class="form-control" id="user-fname" name="user[last_name]" placeholder="Prenume" value="Travolta">
                          <label for="user-fname">Last name</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating">
                          <input type="tel" class="form-control" id="user-phone" name="user[user_phone]" placeholder="Phone" value="1-800-565-2390">
                          <label for="user-phone">Phone</label>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer border-0 pt-0">
                    <button type="submit" class="btn btn-primary">
                      <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                      <span class="ps-2">Save changes</span>
                    </button>
                  </div>
                </div>
              </form>
            </div>


            <!-- email -->
            <div class="card mb-3">
              <div class="card-body d-flex justify-content-between">
                <span class="flex-none pt-1" style="width:40px">
                  <svg width="24" height="24" class="text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                  </svg>
                </span>
                <span class="w-100">
                  <strong class="d-block fs-5 fw-medium">Email address</strong> 
                  <small>Your current email address: john.doe@gmail.com</small>
                </span>
                <span class="flex-none">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modal-email-edit" class="bg-primary text-white rounded px-2 py-1 small">
                    edit
                  </a>
                </span>
              </div>
            </div>

            <!-- Modal : Email address -->
            <div class="modal fade" id="modal-email-edit" tabindex="-1" aria-hidden="true">
              <form method="post" action="#" novalidate class="no-validate modal-dialog modal-dialog-centered">

                <div class="modal-content">
                  <div class="modal-header border-0 pb-0 px-4">
                    <h5 class="modal-title">Email address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">

                    <div class="row g-2">
                      <div class="col-12">
                        <div class="form-floating">
                          <input required type="email" class="form-control" id="user-newemail" name="user[user_email]" placeholder="New email address" value="" autocomplete="off">
                          <label for="user-newemail">New email address</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating">
                          <input required type="password" class="form-control" id="user-emailpassconfirm" name="user[user_password]" placeholder="Account password" value="" autocomplete="new-password">
                          <label for="user-emailpassconfirm">Account password</label>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer border-0 pt-0">
                    <button type="submit" class="btn btn-primary">
                      <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                      <span class="ps-2">Save changes</span>
                    </button>
                  </div>
                </div>
              </form>
            </div>


            <!-- password -->
            <div class="card mb-3">
              <div class="card-body d-flex justify-content-between">
                <span class="flex-none pt-1" style="width:40px">
                  <svg width="24" height="24" class="text-gray-300" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm.5 7.415a1.5 1.5 0 1 0-1 0l-.385 1.99a.5.5 0 0 0 .491.595h.788a.5.5 0 0 0 .49-.595L8.5 7.915z"></path>
                  </svg>
                </span>
                <span class="w-100">
                  <strong class="d-block fs-5 fw-medium">Account password</strong> 
                  <small>Is a good idea to have a strong password you dont use it elsewhere.</small>
                </span>
                <span class="flex-none">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modal-passwd-edit" class="bg-primary text-white rounded px-2 py-1 small">
                    edit
                  </a>
                </span>
              </div>
            </div>

            <!-- Modal : Password -->
            <div class="modal fade" id="modal-passwd-edit" tabindex="-1" aria-hidden="true">
              <form method="post" action="#" class="form-validate modal-dialog modal-dialog-centered">

                <input tabindex="-1" class="d-none" type="text" name="csrf_token" value="">
                <input tabindex="-1" class="d-none" type="text" name="action" value="user:password:edit">
                
                <div class="modal-content">
                  <div class="modal-header border-0 pb-0 px-4">
                    <h5 class="modal-title">Account password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body p-4">

                    <div class="row g-2">
                      <div class="col-12">
                        <div class="form-floating">
                          <input required type="password" class="form-control" id="user-currpass-new" name="user[user_password]" placeholder="Current password" value="" autocomplete="new-password">
                          <label for="user-currpass-new">Current password</label>
                        </div>
                      </div>
                      <div class="col-12">

												<div class="input-group-over">
													<div class="form-floating mb-3">
														<input required placeholder="New password" id="user-newpass" type="password" name="user[user_password_new]" class="form-control" autocomplete="new-password">
														<label for="user-newpass">New password</label>
													</div>

													<!-- `SOW : Form Advanced` plugin used -->
													<a href="#" class="btn smaller btn-password-type-toggle" data-target="#user-newpass">
														<span class="group-icon">
															<i class="fi fi-eye m-0"></i>
															<i class="fi fi-close m-0"></i>
														</span>
													</a>
												</div>

                      </div>
                    </div>

                  </div>
                  <div class="modal-footer border-0 pt-0">
                    <button type="submit" class="btn btn-primary">
                      <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                      <span class="ps-2">Save changes</span>
                    </button>
                  </div>
                </div>
              </form>
            </div>


            <!-- account delete 
                    user_area
                      0 = any
                      1 = admin
                      2 = frontend -->
            <div class="position-relative mb-3">
              
              <div class="card">
                <div class="card-body d-flex justify-content-between">
                  <span class="flex-none pt-1" style="width:40px">
                    <svg width="24" height="24" class="text-gray-300" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
                    </svg>
                  </span>
                  <span class="w-100">
                    <strong class="d-block fs-5 fw-medium">Account delete</strong> 
                    <small>This is a permanent action! Please be sure you want to delete your account!</small>
                  </span>
                  <span class="flex-none">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-account-del" class="bg-primary text-white rounded px-2 py-1 small">
                      edit
                    </a>
                  </span>
                </div>
              </div>

            </div>
*/
?>


</div>

