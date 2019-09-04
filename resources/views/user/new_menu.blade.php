<body>
    <!-- Scroll Menu -->
    <!--<nav id="cd-vertical-nav">
        <ul>
            <li>
                <a href="#section2" data-number="2">
                    <span class="cd-dot"></span>
                    <span class="cd-label">Hotel Booking</span>
                </a>
            </li>
            <li class="vm-a-color-1">
                <a href="#section3" data-number="2">
                    <span class="cd-dot cd-dot-two"></span>
                    <span class="cd-label">Restaurant Booking</span>
                </a>
            </li>
            <li class="vm-a-color-2">
                <a href="#section4" data-number="3">
                    <span class="cd-dot cd-dot-three"></span>
                    <span class="cd-label">Places to Shop</span>
                </a>
            </li>
            <li class="vm-a-color-3">
                <a href="#section5" data-number="4">
                    <span class="cd-dot cd-dot-four"></span>
                    <span class="cd-label">Religious Tours</span>
                </a>
            </li>
            <li class="vm-a-color-4">
                <a href="#section6" data-number="5">
                    <span class="cd-dot cd-dot-five"></span>
                    <span class="cd-label">Culture & Heritage</span>
                </a>
            </li>
            <li class="vm-a-color-5">
                <a href="#section7" data-number="6">
                    <span class="cd-dot cd-dot-six"></span>
                    <span class="cd-label">Business Trip</span>
                </a>
            </li>
        </ul>
    </nav>-->
    <!-- Scroll Menu End -->
    <section id="section1" class="header">
        <div class="vp-top-head-3 " id="category_img">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-1">
                        <div class="since-date">
                            <h4>20<br />19</h4>
                            <span>Serving Since</span>
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="join">
                            <ul>
                                <li><span>Want to talk with us</span></li>
                                <li><span>+35 89567240</span></li>
                                <li><span>Email US</span></li>
                                <li><span>travell@pakistan.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="vp-search-social">
                            <div class="search-bar">
                                <!-- Search form -->
                                <form class="form-inline md-form form-sm active-cyan-2 mt-2">
                                    <input class="form-control form-control-sm mr-ss w-30" type="text" placeholder="Search"
                                           aria-label="Search">
                                    <i class="fas fa-search" aria-hidden="true"></i>
                                </form>
                            </div>
                            <div class="social-top-bar">
                                <div class="social-icons">
                                    <label>Connect with US</label>
                                    <ul>
                                        <li><a href="https://twitter.com"><img src="{{ asset('new_vendor_assets/images/icons/twitter-icon-top.png')}}" /></a></li>
                                        <li><a href="https://facebook.com"><img src="{{ asset('new_vendor_assets/images/icons/fb-icon-top.png')}}" /></a></li>
                                        <li><a href="https://instagram.com"><img src="{{ asset('new_vendor_assets/images/icons/g-icon-top.png')}}" /></a></li>
                                        <li><a href="https://pinterest.com"><img src="{{ asset('new_vendor_assets/images/icons/pin-icon-top.png')}}" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-2">
						<div class="login">
							<ul>
								<li><a href="#">Login</a></li>
								<li><a href="#">Register</a></li>
							</ul>
						</div>
					</div> -->
                    <div class="col-2">
						<div class="admin-login">
							<ul>
								<li class="nav-item dropdown">
            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img class="img-fluid" src="images/icons/sm-thumb.JPG" alt="Thumb">
                <i></i>
              </span>
            </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              <div class="dropdown-divider" role="presentation"></div>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
            </div>
          </li>
							</ul>
						</div>
					</div>
                </div>
                <div class="row">
                    <div class="main-navbar">
                        <div class="container">
                            <nav id="topNav" class="navbar fixed-to navbar-expand-lg navbar-dark">
                                <a class="navbar-brand mx-auto" href="/">
                                    <!--Your logo goes here-->
                                    <img class="shadow-sm rounded-circle" src="{{ asset('new_vendor_assets/images/logo.png')}}" alt="logo/brand">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="navbar-collapse collapse">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active pullDown" href="index.html">
                                                Home

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link pullDown" href="{{url('new_category_listing')}}/1">Hotels</a>
                                        </li>
<!--
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Bookings</a>
                                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#">option</a>
                                                <a class="dropdown-item" href="#">option</a>
                                                <a class="dropdown-item" href="#">option</a>
                                            </div>
                                        </li>
-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('new_category_listing')}}/2">Resturants</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('new_category_listing')}}/5">Cultrual Heritage</a>
                                        </li>
                                    </ul>
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('new_category_listing')}}/4">Business Opportunities</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">News/Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Advisor</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Payments</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>