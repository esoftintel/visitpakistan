<body>
    <section class="intro-wrapper bgimage overlay overlay--dark" id="exchange">

   
       
        <div class="mainmenu-wrapper" id="myHeader">
            <div class="menu-area menu1 menu--light">
                <div class="top-menu-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="menu-fullwidth">
                                    <div class="logo-wrapper order-lg-0 order-sm-1">
                                        <div class="logo logo-top">
                                            <a href="/all"><img src="{{ asset('img/logo-white.png')}}" alt="logo image" class="img-fluid"></a>
                    
                                        </div>
                                    </div><!-- ends: .logo-wrapper -->
                                    <div class="menu-container order-lg-1 order-sm-0">
                                        <div class="d_menu">
                                            <nav class="navbar navbar-expand-lg mainmenu__menu">
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#direo-navbar-collapse" aria-controls="direo-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon icon-menu"><i class="la la-reorder"></i></span>
                                                </button>
                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                <div class="collapse navbar-collapse" id="direo-navbar-collapse">
                                                    <ul class="navbar-nav">
                                                        
                                                    </ul>
                                                </div>
                                                <!-- /.navbar-collapse -->
                                            </nav>
                                        </div>
                                    </div>
                                    <div class="menu-right order-lg-2 order-sm-2">
                                        <div class="search-wrapper">
                                            <div class="nav_right_module search_module">
                                                <span class="icon-left" id="basic-addon9"><i class="la la-search"></i></span>
                                                <div class="search_area">
                                                <form action="{{url('/search')}}" method="POST" class="search_form">
                                            @csrf
                                                        <div class="input-group input-group-light">
                                                            <input type="text" name="search" class="form-control search_field top-search-field" placeholder="What are you looking for?" autocomplete="off">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <?php $ct = DB::table('categories')->get();  ?>
                                            <div class="search-categories">
                                                <ul class="list-unstyled">
                                                @foreach($ct as $key)
                                                    <li><a href="{{url('/category_listing/'.$key->ct_id.'')}}">
                                                    <span class="color-primary"> <img class="cat_featimg" src="{{ asset('images')}}/{{$key->ct_icone}}" style="height:20px; " alt=""></span> {{$key->ct_name}}</a></li>
                                                @endforeach
                                                    
                                                </ul>
                                            </div>
                                        </div><!-- ends: .search-wrapper -->
                                        <!-- start .author-area -->
                                        <div class="author-area">
                                            <div class="author__access_area">
                                                <ul class="d-flex list-unstyled align-items-center">
                                                   

                                                    @if (session('user_data'))
                                                  <?php $d = DB::table('users')->where('id',session('user_data'))->first(); ?>
                                                    <li> <a href="{{url('category_show')}}" class="btn btn-xs btn-gradient btn-gradient-two">
                                                            <span class="la la-plus"></span> Add Listing
                                                        </a></li>
                                                        <li class="dropdown has_dropdown">
                                                    <a onclick="toggleMenu()" class="profile_icon dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{session('user_image')?asset('images').'/user/'.session('user_image'):asset('img/profile-placeholder.png')  }}" /> <i class="la la-angle-down"></i></a>
                                                   
                                                    <div class="custom-drop" id="myDiv">
                                                          <div class="welcome_txt">
                                                           
                                                            
                                                           
                                                            <div class="textes">
                                                                <p>Hello!</p>
                                                                <p><strong>{{session('user')}}</strong></p>
                                    
                                                                <a  id="profile-tab"  href="{{url('user_dashboard')}}" role="tab" aria-controls="profile" aria-selected="false">View / Edit Profile</a>
                                                            </div>
                                                          </div>

                                                        <hr>
                                                            <ul class="" aria-labelledby="drop4">
                                                                <li><a href="/user_dashboard"><i class="la la-file-text"></i> My Ads</a></li>
                                                                <li><a href="#"><i class="la la-credit-card"></i> My Orders & Billings</a></li>
                                                                <li><a href="#"><i class="la la-info-circle"></i> Help</a></li>
                                                                <li><a href="#"><i class="la la-gear"></i> Settings</a></li>
                                                                <li><a href="{{url('/userlogout')}}"> Logout</a></li>
                                                       
                                                            </ul>

                                                            </div>
                                                    </li>
                                                        @else
                                                       <li><a href="" class="access-link" data-toggle="modal" data-target="#login_modal">Add Listing</a></li>
                                                       <li>
                                                        <a href="" class="access-link" data-toggle="modal" data-target="#login_modal">Login</a>
                                                        <span>or</span>
                                                        <a href="" class="access-link" data-toggle="modal" data-target="#signup_modal">Register</a>
                                                    </li>
                                                    @endif 
                                                    
                                              </ul>
                                            </div>
                                        </div>
                                        <!-- end .author-area -->
                                        <div class="offcanvas-menu d-none">
                                            <a href="" class="offcanvas-menu__user"><i class="la la-user"></i></a>
                                            <div class="offcanvas-menu__contents">
                                                <a href="" class="offcanvas-menu__close"><i class="la la-times-circle"></i></a>
                                                <div class="author-avatar">
                                                    <img src="{{ asset('img/author-avatar.png')}}" alt="" class="rounded-circle">
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li><a href="dashboard-listings.html">My Profile</a></li>
                                                    <li><a href="dashboard-listings.html">My Listing</a></li>
                                                    <li><a href="dashboard-listings.html">Favorite Listing</a></li>
                                                    <li><a href="add-listing.html">Add Listing</a></li>
                                                    <li><a href="">Logout</a></li>
                                                </ul>
                                                <div class="search_area">
                                                    <form action="/">
                                                        <div class="input-group input-group-light">
                                                            <input type="text" class="form-control search_field" placeholder="Search here..." autocomplete="off">
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-secondary">Search</button>
                                                    </form>
                                                </div><!-- ends: .search_area -->
                                            </div><!-- ends: .author-info -->
                                        </div><!-- ends: .offcanvas-menu -->
                                    </div><!-- ends: .menu-right -->
                                </div>
                            </div>
                        </div>
                        <!-- end /.row -->
                    </div>
                    <!-- end /.container -->
                </div>
                <!-- end  -->
            </div>
        </div><!-- ends: .mainmenu-wrapper -->

        <script>
        function toggleMenu() {
        var element = document.getElementById("myDiv");
        element.classList.toggle("showmenu");
        }
        
        </script>
        <script>
            window.onscroll = function() {myFunction()};

            var header = document.getElementById("myHeader");
            var sticky = header.offsetTop;

            function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
            }
            </script>