			<!-- Header -->
			<header id="header" class="shadow-xs">


				<!-- Navbar -->
				<div class="container position-relative">

					<nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

						<div class="align-items-start">

							<!-- mobile menu button : show -->
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
								<svg width="25" viewBox="0 0 20 20">
									<path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path>
									<path d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path>
									<path d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path>
									<path d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path>
								</svg>
							</button>

<!-- navbar : brand (logo) -->
							<a class="navbar-brand" href="/">
<span class="header-logo">Dimple</span>
<!--								<img src="assets/images/logo/logo_dark.svg" width="110" height="38" alt="...">-->
							</a>

						</div>




<?php
/*						<!-- Menu -->
						<!--

							Dropdown Classes (should be added to primary .dropdown-menu only, dropdown childs are also affected)
								.dropdown-menu-dark 		- dark dropdown (desktop only, will be white on mobile)
								.dropdown-menu-hover 		- open on hover
								.dropdown-menu-clean 		- no background color on hover
								.dropdown-menu-invert 		- open dropdown in oposite direction (left|right, according to RTL|LTR)
								.dropdown-menu-uppercase 	- uppercase text (font-size is scalled down to 13px)
								.dropdown-click-ignore 		- keep dropdown open on inside click (useful on forms inside dropdown)

								Repositioning long dropdown childs (Example: Pages->Account)
									.dropdown-menu-up-n100 		- open up with top: -100px
									.dropdown-menu-up-n100 		- open up with top: -150px
									.dropdown-menu-up-n180 		- open up with top: -180px
									.dropdown-menu-up-n220 		- open up with top: -220px
									.dropdown-menu-up-n250 		- open up with top: -250px
									.dropdown-menu-up 			- open up without negative class


								Dropdown prefix icon (optional, if enabled in variables.scss)
									.prefix-link-icon .prefix-icon-dot 		- link prefix
									.prefix-link-icon .prefix-icon-line 	- link prefix
									.prefix-link-icon .prefix-icon-ico 		- link prefix
									.prefix-link-icon .prefix-icon-arrow 	- link prefix

								.nav-link.nav-link-caret-hide 	- no dropdown icon indicator on main link
								.nav-item.dropdown-mega 		- required ONLY on fullwidth mega menu

								Mobile animation - add to .navbar-collapse:
								.navbar-animate-fadein
								.navbar-animate-fadeinup
								.navbar-animate-bouncein

						-->
						<div class="collapse navbar-collapse navbar-animate-fadein" id="navbarMainNav">


							<!-- navbar : mobile menu -->
							<div class="navbar-xs d-none"><!-- .sticky-top -->

								<!-- mobile menu button : close -->
								<button class="navbar-toggler pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
									<svg width="20" viewBox="0 0 20 20">
										<path d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z"></path>
									</svg>
								</button>

								<!-- 
									Mobile Menu Logo 
									Logo : height: 70px max
								-->
								<a class="navbar-brand" href="index.html">
									<img src="assets/images/logo/logo_dark.svg" width="110" height="38" alt="...">
								</a>

							</div>
							<!-- /navbar : mobile menu -->



							<!-- navbar : navigation -->
							<ul class="navbar-nav">
								<!-- Menu -->
								<!--

									Dropdown Classes (should be added to primary .dropdown-menu only, dropdown childs are also affected)
										.dropdown-menu-dark 		- dark dropdown (desktop only, will be white on mobile)
										.dropdown-menu-hover 		- open on hover
										.dropdown-menu-clean 		- no background color on hover
										.dropdown-menu-invert 		- open dropdown in oposite direction (left|right, according to RTL|LTR)
										.dropdown-menu-uppercase 	- uppercase text (font-size is scalled down to 13px)
										.dropdown-click-ignore 		- keep dropdown open on inside click (useful on forms inside dropdown)

										Repositioning long dropdown childs (Example: Pages->Account)
											.dropdown-menu-up-n100 		- open up with top: -100px
											.dropdown-menu-up-n100 		- open up with top: -150px
											.dropdown-menu-up-n180 		- open up with top: -180px
											.dropdown-menu-up-n220 		- open up with top: -220px
											.dropdown-menu-up-n250 		- open up with top: -250px
											.dropdown-menu-up 			- open up without negative class


										Dropdown prefix icon (optional, if enabled in variables.scss)
											.prefix-link-icon .prefix-icon-dot 		- link prefix
											.prefix-link-icon .prefix-icon-line 	- link prefix
											.prefix-link-icon .prefix-icon-ico 		- link prefix
											.prefix-link-icon .prefix-icon-arrow 	- link prefix

										.nav-link.nav-link-caret-hide 	- no dropdown icon indicator on main link
										.nav-item.dropdown-mega 		- required ONLY on fullwidth mega menu

								-->
								<!-- mobile only image + simple search (d-block d-sm-none) -->
								<li class="nav-item d-block d-sm-none">

									<!-- image -->
									<div class="mb-4">
										<img width="600" height="600" class="img-fluid" src="demo.files/svg/artworks/people_crossbrowser.svg" alt="...">
									</div>

									<!-- search -->
									<form method="get" action="#!search" class="input-group-over mb-4 bg-light p-2 form-control-pill">
										<input type="text" name="keyword" value="" placeholder="Quick search..." class="form-control border-dashed">
										<button class="btn btn-sm fi fi-search mx-3"></button>
									</form>

								</li>


                <!-- home -->
                <li class="nav-item dropdown active">

                  <a href="#" id="mainNavHome" class="nav-link dropdown-toggle" 
                    data-bs-toggle="dropdown" 
                    aria-haspopup="true" 
                    aria-expanded="false">
                    Home
                  </a>

                  <div aria-labelledby="mainNavHome" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover dropdown-mega-md dropdown-fadeinup">

                    <!-- 
                      optional line column separator 
                      .col-border-lg 
                    -->
                    <div class="row">

                      <div class="col-12 col-lg-6">
                        <ul class="list-unstyled">
                          <li class="dropdown-item">
                            <h3 class="fs-6 text-muted py-3 px-lg-4">
                              Niche pages
                            </h3>
                          </li>
                          <li class="dropdown-item"><a href="niche.restaurant.html" class="dropdown-link">Restaurant</a></li>
                          <li class="dropdown-item"><a href="niche.caffe.html" class="dropdown-link">Caffe</a></li>
                          <li class="dropdown-item"><a href="niche.tattoo.html" class="dropdown-link">Tattoo</a></li>
                          <li class="dropdown-item"><a href="niche.lawyer.html" class="dropdown-link">Lawyer</a></li>
                          <li class="dropdown-item"><a href="niche.hosting.html" class="dropdown-link">Hosting</a></li>
                          <li class="dropdown-item"><a href="niche.classifieds.html" class="dropdown-link">Classifieds</a></li>
                          <li class="dropdown-item"><a href="niche.realestate.html" class="dropdown-link">Real Estate</a></li>
                          <li class="dropdown-item"><a href="#" class="dropdown-link disabled">More soon</a></li>
                        </ul>
                      </div>

                      <div class="col-12 col-lg-6">
                        <ul class="list-unstyled">
                          <li class="dropdown-item">
                            <h3 class="fs-6 text-muted py-3 px-lg-4">
                              Landing pages
                            </h3>
                          </li>
                          <li class="dropdown-item"><a href="landing-0.html" class="dropdown-link">Default</a></li>
                          <li class="dropdown-item"><a href="landing-1.html" class="dropdown-link">Landing 1</a></li>
                          <li class="dropdown-item"><a href="landing-2.html" class="dropdown-link">Landing 2</a></li>
                          <li class="dropdown-item"><a href="landing-3.html" class="dropdown-link">Landing 3</a></li>
                          <li class="dropdown-item"><a href="landing-4.html" class="dropdown-link">Landing 4</a></li>
                          <li class="dropdown-item"><a href="landing-5.html" class="dropdown-link">Landing 5</a></li>
                          <li class="dropdown-item"><a href="landing-6.html" class="dropdown-link">Landing 6</a></li>
                          <li class="dropdown-item"><a href="landing-7.html" class="dropdown-link">Landing 7</a></li>
                          <li class="dropdown-item"><a href="landing-8.html" class="dropdown-link">Landing 8</a></li>
                        </ul>
                      </div>

                    </div>

                    <ul class="list-unstyled">
                      <li class="dropdown-divider"></li>
                      <li class="dropdown-item pt-2">
                        <a href="index.html" class="dropdown-link text-muted d-flex align-items-center">
                          <span class="pe-2">All Demos</span>
                          <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">  
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                          </svg>
                        </a>
                      </li>
                    </ul>

                  </div>

                </li>


								<!-- pages -->
								<li class="nav-item dropdown">

									<a href="#" id="mainNavPages" class="nav-link dropdown-toggle" 
										data-bs-toggle="dropdown" 
										aria-haspopup="true" 
										aria-expanded="false">
										Pages
									</a>

									<div aria-labelledby="mainNavPages" class="dropdown-menu dropdown-menu-hover dropdown-menu-clean dropdown-fadeinup">
									    <ul class="list-unstyled m-0 p-0">
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">About</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="about-us-1.html" class="dropdown-link">About Us 1</a></li>
									                <li class="dropdown-item"><a href="about-us-2.html" class="dropdown-link">About Us 2</a></li>
									                <li class="dropdown-item"><a href="about-us-3.html" class="dropdown-link">About Us 3</a></li>
									                <li class="dropdown-item"><a href="about-us-4.html" class="dropdown-link">About Us 4</a></li>
									                <li class="dropdown-item"><a href="about-us-5.html" class="dropdown-link">About Us 5</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="about-me-1.html" class="dropdown-link">About Me 1</a></li>
									                <li class="dropdown-item"><a href="about-me-2.html" class="dropdown-link">About Me 2</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Services</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="services-1.html" class="dropdown-link">Services 1</a></li>
									                <li class="dropdown-item"><a href="services-2.html" class="dropdown-link">Services 2</a></li>
									                <li class="dropdown-item"><a href="services-3.html" class="dropdown-link">Services 3</a></li>
									                <li class="dropdown-item"><a href="services-4.html" class="dropdown-link">Services 4</a></li>
									                <li class="dropdown-item"><a href="services-5.html" class="dropdown-link">Services 5</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Contact</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="contact-1.html" class="dropdown-link">Contact 1</a></li>
									                <li class="dropdown-item"><a href="contact-2.html" class="dropdown-link">Contact 2</a></li>
									                <li class="dropdown-item"><a href="contact-3.html" class="dropdown-link">Contact 3</a></li>
									                <li class="dropdown-item"><a href="contact-4.html" class="dropdown-link">Contact 4</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Pricing</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="pricing-1.html" class="dropdown-link">Pricing 1</a></li>
									                <li class="dropdown-item"><a href="pricing-2.html" class="dropdown-link">Pricing 2</a></li>
									                <li class="dropdown-item"><a href="pricing-3.html" class="dropdown-link">Pricing 3</a></li>
									                <li class="dropdown-item"><a href="pricing-4.html" class="dropdown-link">Pricing 4</a></li>
									                <li class="dropdown-item"><a href="pricing-5.html" class="dropdown-link">Pricing 5</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">FAQ</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="faq-1.html" class="dropdown-link">FAQ 1</a></li>
									                <li class="dropdown-item"><a href="faq-2.html" class="dropdown-link">FAQ 2</a></li>
									                <li class="dropdown-item"><a href="faq-3.html" class="dropdown-link">FAQ 3</a></li>
									                <li class="dropdown-item"><a href="faq-4.html" class="dropdown-link">FAQ 4</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Team</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="team-1.html" class="dropdown-link">Team 1</a></li>
									                <li class="dropdown-item"><a href="team-2.html" class="dropdown-link">Team 2</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Account</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="account-index.html" class="dropdown-link">Account pages (12)</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="account-full-signin-1.html" class="dropdown-link">Sign In/Up : Full 1</a></li>
									                <li class="dropdown-item"><a href="account-full-signin-2.html" class="dropdown-link">Sign In/Up : Full 2</a></li>
									                <li class="dropdown-item"><a href="account-onepage-signin.html" class="dropdown-link">Sign In/Up : Onepage</a></li>
									                <li class="dropdown-item"><a href="account-simple-signin.html" class="dropdown-link">Sign In/Up : Simple</a></li>
									                <li class="dropdown-item"><a href="account-modal-signin.html" class="dropdown-link">Sign In/Up : Modal</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Clients / Career</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="clients.html" class="dropdown-link">Clients</a></li>
									                <li class="dropdown-item"><a href="career.html" class="dropdown-link">Career</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Portfolio</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="portfolio-columns-2.html" class="dropdown-link">2 Columns</a></li>
									                <li class="dropdown-item"><a href="portfolio-columns-3.html" class="dropdown-link">3 Columns</a></li>
									                <li class="dropdown-item"><a href="portfolio-columns-4.html" class="dropdown-link">4 Columns</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="portfolio-single-1.html" class="dropdown-link">Single Item 1</a></li>
									                <li class="dropdown-item"><a href="portfolio-single-2.html" class="dropdown-link">Single Item 2</a></li>
									                <li class="dropdown-item"><a href="portfolio-single-3.html" class="dropdown-link">Single Item 3</a></li>
									                <li class="dropdown-item"><a href="portfolio-single-4.html" class="dropdown-link">Single Item 4</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Utility</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-up dropdown-menu-block-md shadow-lg border-0 m-0">
									                <li class="dropdown-item"><a href="404-1.html" class="dropdown-link">Error 1</a></li>
									                <li class="dropdown-item"><a href="404-2.html" class="dropdown-link">Error 2</a></li>
									                <li class="dropdown-item"><a href="404-3.html" class="dropdown-link">Error 3</a></li>
									                <li class="dropdown-item"><a href="invoice.html" class="dropdown-link">Invoice</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="maintenance-1.html" class="dropdown-link">Maintenance 1</a></li>
									                <li class="dropdown-item"><a href="maintenance-2.html" class="dropdown-link">Maintenance 2</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="comingsoon-1.html" class="dropdown-link">Coming Soon 1</a></li>
									                <li class="dropdown-item"><a href="comingsoon-2.html" class="dropdown-link">Coming Soon 2</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="page-cookie.html" class="dropdown-link">GDPR Page &amp; Cookie Window</a></li>
									            </ul>
									        </li>
									    </ul>
									</div>

								</li>


								<!-- features -->
								<li class="nav-item dropdown">

									<a href="#" id="mainNavFeatures" class="nav-link dropdown-toggle" 
										data-bs-toggle="dropdown" 
										aria-haspopup="true" 
										aria-expanded="false">
										Features
									</a>

									<div aria-labelledby="mainNavFeatures" class="dropdown-menu dropdown-menu-hover dropdown-menu-clean dropdown-fadeinup">
									    <ul class="list-unstyled m-0 p-0">
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Header</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item dropdown"><a href="#" class="dropdown-link fw-bold" data-bs-toggle="dropdown">Variants</a>
									                    <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                        <li class="dropdown-item"><a href="header-variant-1.html" class="dropdown-link">Header : Variant : 1</a></li>
									                        <li class="dropdown-item"><a href="header-variant-2.html" class="dropdown-link">Header : Variant : 2</a></li>
									                        <li class="dropdown-item"><a href="header-variant-3.html" class="dropdown-link">Header : Variant : 3</a></li>
									                        <li class="dropdown-item"><a href="header-variant-4.html" class="dropdown-link">Header : Variant : 4</a></li>
									                        <li class="dropdown-item"><a href="header-variant-5.html" class="dropdown-link">Header : Variant : 5</a></li>
									                        <li class="dropdown-item"><a href="header-variant-6.html" class="dropdown-link">Header : Variant : 6</a></li>
									                    </ul>
									                </li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="header-option-light.html" class="dropdown-link">Header : Light <small class="text-muted">(default)</small></a></li>
									                <li class="dropdown-item"><a href="header-option-dark.html" class="dropdown-link">Header : Dark</a></li>
									                <li class="dropdown-item"><a href="header-option-color.html" class="dropdown-link">Header : Color</a></li>
									                <li class="dropdown-item"><a href="header-option-transparent.html" class="dropdown-link">Header : Transparent</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="header-option-centered.html" class="dropdown-link">Header : Centered</a></li>
									                <li class="dropdown-item"><a href="header-option-bottom.html" class="dropdown-link">Header : Bottom</a></li>
									                <li class="dropdown-item"><a href="header-option-floating.html" class="dropdown-link">Header : Floating</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="header-option-fixed.html" class="dropdown-link">Header : Fixed</a></li>
									                <li class="dropdown-item"><a href="header-option-reveal.html" class="dropdown-link">Header : Reveal on Scroll</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="header-option-ajax-search-json.html" class="dropdown-link">Ajax Search : Json</a></li>
									                <li class="dropdown-item"><a href="header-option-ajax-search-html.html" class="dropdown-link">Ajax Search : Html</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Footer</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item dropdown"><a href="#" class="dropdown-link fw-bold" data-bs-toggle="dropdown">Variants</a>
									                    <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                        <li class="dropdown-item"><a href="footer-variant-1.html#footer" class="dropdown-link">Footer : Variant : 1</a></li>
									                        <li class="dropdown-item"><a href="footer-variant-2.html#footer" class="dropdown-link">Footer : Variant : 2</a></li>
									                        <li class="dropdown-item"><a href="footer-variant-3.html#footer" class="dropdown-link">Footer : Variant : 3</a></li>
									                        <li class="dropdown-item"><a href="footer-variant-4.html#footer" class="dropdown-link">Footer : Variant : 4</a></li>
									                        <li class="dropdown-item"><a href="footer-variant-5.html#footer" class="dropdown-link">Footer : Variant : 5</a></li>
									                        <li class="dropdown-item"><a href="footer-variant-6.html#footer" class="dropdown-link">Footer : Variant : 6</a></li>
									                    </ul>
									                </li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="footer-option-light.html" class="dropdown-link">Footer : Light</a></li>
									                <li class="dropdown-item"><a href="footer-option-dark.html" class="dropdown-link">Footer : Dark <small class="text-muted">(default)</small></a></li>
									                <li class="dropdown-item"><a href="footer-option-image.html" class="dropdown-link">Footer : Image</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Sliders</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="slider-swiper.html" class="dropdown-link">Swiper Slider</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Page Title</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="page-title-classic.html" class="dropdown-link">Page Title : Classic</a></li>
									                <li class="dropdown-item"><a href="page-title-alternate.html" class="dropdown-link">Page Title : Alternate</a></li>
									                <li class="dropdown-item"><a href="page-title-color.html" class="dropdown-link">Page Title : Color + Nav</a></li>
									                <li class="dropdown-item"><a href="page-title-clean.html" class="dropdown-link">Page Title : Clean</a></li>
									                <li class="dropdown-item"><a href="page-title-parallax-1.html" class="dropdown-link">Page Title : Parallax 1</a></li>
									                <li class="dropdown-item"><a href="page-title-parallax-2.html" class="dropdown-link">Page Title : Parallax 2</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item dropdown"><a href="#" class="dropdown-link" data-bs-toggle="dropdown">Sidebar</a>
									            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
									                <li class="dropdown-item"><a href="sidebar-float-cart.html" class="dropdown-link">Sidebar : Cart</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="sidebar-float-dark.html" class="dropdown-link">Sidebar : Float : Dark</a></li>
									                <li class="dropdown-item"><a href="sidebar-float-light.html" class="dropdown-link">Sidebar : Float : Light</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><a href="sidebar-static-dark.html" class="dropdown-link">Sidebar : Static : Dark</a></li>
									                <li class="dropdown-item"><a href="sidebar-static-light.html" class="dropdown-link">Sidebar : Static : Light</a></li>
									                <li class="dropdown-divider"></li>
									                <li class="dropdown-item"><span class="d-block text-muted py-2 px-4 small fw-bold">Same as admin</span></li>
									                <li class="dropdown-item"><a href="sidebar-float-admin-color.html" class="dropdown-link">Sidebar : Float</a></li>
									                <li class="dropdown-item"><a href="sidebar-static-admin-color.html" class="dropdown-link">Sidebar : Static</a></li>
									            </ul>
									        </li>
									        <li class="dropdown-item">
									        	<a href="header-dropdown.html" class="dropdown-link fw-medium">
									        		Menu Dropdowns
									        	</a>
									        </li>
									        <li class="dropdown-divider"></li>
									        <li class="dropdown-item"><a href="layout-boxed-1.html" class="dropdown-link">Boxed Layout</a></li>
									        <li class="dropdown-item"><a href="layout-boxed-0.html" class="dropdown-link">Boxed + Header Over</a></li>
									        <li class="dropdown-item"><a href="layout-boxed-2.html" class="dropdown-link">Boxed + Background</a></li>
									    </ul>
									</div>

								</li>


								<!-- blog -->
								<li class="nav-item dropdown">

									<a href="#" id="mainNavBlog" class="nav-link dropdown-toggle" 
										data-bs-toggle="dropdown" 
										aria-haspopup="true" 
										aria-expanded="false">
										Blog
									</a>

									<div aria-labelledby="mainNavBlog" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover dropdown-fadeinup">
								    <ul class="list-unstyled m-0 p-0">
                      <li class="dropdown-item"><a class="dropdown-link" href="blog-page-sidebar.html">With Sidebar</a></li>
                      <li class="dropdown-item"><a class="dropdown-link" href="blog-page-sidebar-no.html">Without Sidebar</a></li>
                      <li class="dropdown-item"><a class="dropdown-link" href="blog-page-article-sidebar.html">Article With Sidebar</a></li>
                      <li class="dropdown-item"><a class="dropdown-link" href="blog-page-article-sidebar-no.html">Article Without Sidebar</a></li>
								    </ul>
									</div>

								</li>


								<!-- demos -->
								<li class="nav-item dropdown active">

									<a href="#" id="mainNavDemo" class="nav-link dropdown-toggle" 
										data-bs-toggle="dropdown" 
										aria-haspopup="true" 
										aria-expanded="false">
										Demos
									</a>

									<div aria-labelledby="mainNavDemo" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover end-0 dropdown-fadeinup">
								    <ul class="list-unstyled m-0 p-0">
							        <li class="dropdown-item dropdown">
							        	<a href="#" class="dropdown-link" data-bs-toggle="dropdown">Admin <span class="small text-muted">(2 layouts)</span></a>
						            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
					                <li class="dropdown-item"><a href="../html_admin/index.html" target="_blank" rel="noopener" class="dropdown-link">Layout 1</a></li>
					                <li class="dropdown-item"><a href="../html_admin/layout-2.html" target="_blank" rel="noopener" class="dropdown-link">Layout 2</a></li>
						            </ul>
							        </li>
							        <li class="dropdown-item"><a href="shop-index-1.html" target="_blank" rel="noopener" class="dropdown-link">Ecommerce <span class="small text-muted">(44 pages)</span></a></li>
							        <li class="dropdown-item"><a href="niche.realestate.html" target="_blank" rel="noopener" class="dropdown-link">Real estate <span class="small text-muted">(5 pages)</span></a></li>
							        <li class="dropdown-item"><a href="niche.classifieds.html" target="_blank" rel="noopener" class="dropdown-link">Classifieds <span class="small text-muted">(3 pages)</span></a></li>
							        <li class="dropdown-item"><a href="fullajax-index.html" target="_blank" rel="noopener" class="dropdown-link">Full Ajax <span class="small text-muted">(14 pages)</span></a></li>
							        <li class="dropdown-item"><a href="forum-index.html" rel="noopener" class="dropdown-link">Forum <span class="small text-muted">(3 pages)</span></a></li>
							        <li class="dropdown-item dropdown">
							        	<a href="#" class="dropdown-link" data-bs-toggle="dropdown">Help center <span class="small text-muted">(2 layouts)</span></a>
						            <ul class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
					                <li class="dropdown-item"><a href="help-center-1-index.html" class="dropdown-link">Layout 1 <span class="small text-muted">(2 pages)</span></a></li>
					                <li class="dropdown-item"><a href="help-center-2-index.html" class="dropdown-link">Layout 2 <span class="small text-muted">(3 pages)</span></a></li>
						            </ul>
							        </li>
								    </ul>
									</div>

								</li>


								<!-- documentation -->
								<li class="nav-item dropdown">

									<a href="#" id="mainNavDocumentation" class="nav-link dropdown-toggle nav-link-caret-hide" 
										data-bs-toggle="dropdown" 
										aria-haspopup="true" 
										aria-expanded="false">
										<span>Documentation</span>
									</a>

									<div aria-labelledby="mainNavDocumentation" class="dropdown-menu dropdown-menu-clean dropdown-menu-hover end-0 w-300 dropdown-fadeinup">										
										
										<a href="documentation/index.html" class="dropdown-item py-4 d-flex">

											<span class="flex-none">
												<svg width="26" height="26" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-earmark-medical" viewBox="0 0 16 16">  
												  <path d="M7.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L6 7l-.549.317a.5.5 0 1 0 .5.866l.549-.317V8.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L8 7l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V5.5zm-2 4.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"></path>  
												  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"></path>
												</svg>
											</span>

											<span class="ps-3">
												<span class="d-block mb-1">Documentation</span>
												<small class="d-block text-muted text-wrap">
													Your development guide to work with Smarty
												</small>
											</span>
										</a>

										<a href="__elements.html" target="_blank" rel="noopener" class="dropdown-item py-4 d-flex border-top">

											<span class="flex-none">
												<svg width="26" height="26" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-layout-wtf" viewBox="0 0 16 16">  
												  <path d="M5 1v8H1V1h4zM1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm13 2v5H9V2h5zM9 1a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9zM5 13v2H3v-2h2zm-2-1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H3zm12-1v2H9v-2h6zm-6-1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H9z"></path>
												</svg>
											</span>

											<span class="ps-3">
												<span class="d-block mb-1">Elements</span>
												<small class="d-block text-muted text-wrap">
													Various uncategorized elements ready to use
												</small>
											</span>
										</a>

									</div>

								</li>




								<!-- social icons : mobile only -->
								<li class="nav-item d-block d-sm-none text-center mb-4">

									<h3 class="h6 text-muted">Follow Us</h3>

										<!-- facebook -->
									<a href="#" class="btn btn-sm btn-facebook transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
										<i class="fi fi-social-facebook"></i> 
									</a>

									<!-- twitter -->
									<a href="#" class="btn btn-sm btn-twitter transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
										<i class="fi fi-social-twitter"></i> 
									</a>

									<!-- linkedin -->
									<a href="#" class="btn btn-sm btn-linkedin transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
										<i class="fi fi-social-linkedin"></i> 
									</a>

									<!-- youtube -->
									<a href="#" class="btn btn-sm btn-youtube transition-hover-top mb-2 rounded-circle text-white" rel="noopener">
										<i class="fi fi-social-youtube"></i> 
									</a>

								</li>



								<!-- Get Smarty : mobile only (d-block d-sm-none)-->
								<li class="nav-item d-block d-sm-none">
									<a target="_blank" href="#buy_now" class="btn w-100 btn-primary shadow-none text-white m-0">
										Get Smarty
									</a>
								</li>

							</ul>
							<!-- /navbar : navigation -->


						</div>
*/
?>





						<!-- OPTIONS -->
<div id=auth_on class="auth_on">
								<a href="#" class="btn btn-sm btn-primary wallet_connect">Connect</a>
</div>
<div id=auth_off class="auth_off">
						<ul class="list-inline list-unstyled mb-0 d-flex align-items-end">

							<li class="list-inline-item mx-1 dropdown">
								


								<a href="#" aria-label="Account Options" id="dropdownAccountOptions" class="btn btn-sm btn-primary" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
									<span class="group-icon float-start">
										<i class="fi fi-user-male"></i>
										<i class="fi fi-close"></i>
									</span>
									<span class=wallet-id>...</span>
								</a>

                <div aria-labelledby="dropdownAccountOptions" class="list-unstyled dropdown-menu dropdown-menu-clean dropdown-click-ignore end-0 py-2 rounded-xl" style="min-width:215px;">

<!--                  <div class="dropdown-header px-4 mb-1 text-wrap fw-medium">John Doe</div>-->
<!--                  <div class="dropdown-divider mb-3"></div>-->
<!--
                  <a class="dropdown-item active" href="account-index.html">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
                      <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                    </svg>
                    <span>My account</span>
                  </a>
                  <a class="dropdown-item" href="account-orders.html">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path>
                      <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    </svg>
                    <span>My orders</span>
                  </a>
                  <a class="dropdown-item" href="account-favourites.html">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                    </svg>
                    <span>Favourites</span>
                  </a>
                  <a class="dropdown-item" href="account-reward.html">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                      <path fill-rule="evenodd" d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"></path>
                    </svg>
                    <span>Reward points</span>
                  </a>
                  <a class="dropdown-item" href="account-coupons.html">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"></path>
                      <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                    </svg>
                    <span>Coupons</span>
                  </a>
                  <a class="dropdown-item" href="account-reviews.html">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path d="M3 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2z"></path>
                      <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2zM1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"></path>
                    </svg>
                    <span>My reviews</span>
                  </a>
                  <a class="dropdown-item" href="account-refunds.html">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"></path>
                      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"></path>
                    </svg>
                    <span>My refunds</span>
                  </a>
                  <a class="dropdown-item" href="account-addresses.html">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                      <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <span>My addresses</span>
                  </a>
                  <a class="dropdown-item" href="account-settings.html">
                    <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z"></path>
                    </svg>
                    <span>Account settings</span>
                  </a>
                  <div class="dropdown-divider mt-3"></div>
-->
                  <a href="#" title="Log Out" class="dropdown-item mt-1" onclick="return logout();">
                    <i class="fi fi-power float-start"></i>
                    Disconnect
                  </a>
                </div>

							</li>

						</ul>
</div>
						<!-- /OPTIONS -->



					</nav>

				</div>
				<!-- /Navbar -->

			</header>
			<!-- /Header -->

