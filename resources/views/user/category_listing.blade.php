@include('user.metadata')

@include('user.menu')
<div class="bg_image_holder"><img src="img/breadcrumb1.jpg" alt=""></div>

<div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">All Listing</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Listings</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- ends: .breadcrumb-wrapper -->
    </section>
    <section class="all-listing-wrapper section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="atbd_generic_header">
                        <div class="atbd_generic_header_title">
                            <h4>All Items</h4>
                            <p>Total Listing Found: 15</p>
                        </div><!-- ends: .atbd_generic_header_title -->
                        <div class="atbd_listing_action_btn btn-toolbar" role="toolbar">
                            <!-- Views dropdown -->
                            <div class="view-mode">
                                <a class="action-btn active" href="all-listings-grid.html"><span class="la la-th-large"></span></a><a class="action-btn" href="all-listings-list.html"><span class="la la-list"></span></a>
                            </div>
                            <!-- Orderby dropdown -->
                            <div class="dropdown">
                                <a class="action-btn dropdown-toggle" href="" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by <span class="caret"></span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                    <a class="dropdown-item" href="">A to Z ( title )</a>
                                    <a class="dropdown-item" href="">Z to A ( title )</a>
                                    <a class="dropdown-item active" href="">Latest listings</a>
                                    <a class="dropdown-item" href="">Oldest listings</a>
                                    <a class="dropdown-item" href="">Popular listings</a>
                                    <a class="dropdown-item" href="">Price ( low to high )</a>
                                    <a class="dropdown-item" href="">Price ( high to low )</a>
                                    <a class="dropdown-item" href="">Random listings</a>
                                </div>
                            </div>
                        </div><!-- ends: .atbd_listing_action_btn -->
                    </div><!-- ends: .atbd_generic_header -->
                </div><!-- ends: .col-lg-12 -->
                <div class="col-lg-12 listing-items">
                    <div class="row">
                        <div class="col-lg-4 order-lg-0 order-1 mt-5 mt-lg-0">
                            <div class="listings-sidebar">
                                <div class="search-area default-ad-search">
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" placeholder="What are you looking for?" class="form-control">
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <div class="select-basic">
                                                <select class="form-control ad_search_category">
                                                    <option>Select Category</option>
                                                    <option>Restaurant</option>
                                                    <option>&nbsp;&nbsp; Food</option>
                                                    <option>&nbsp;&nbsp; Lunch Pack</option>
                                                    <option>Places</option>
                                                    <option>&nbsp;&nbsp; Travel</option>
                                                    <option>&nbsp;&nbsp; Booking</option>
                                                    <option>&nbsp;&nbsp; Hotel</option>
                                                    <option>&nbsp;&nbsp; Location</option>
                                                    <option>Shopping</option>
                                                    <option>&nbsp;&nbsp; Accessories</option>
                                                    <option>&nbsp;&nbsp; Clothing</option>
                                                    <option>&nbsp;&nbsp; Gadgets</option>
                                                </select>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <div class="position-relative">
                                                <input type="text" placeholder="City, state or zip code" class="form-control location-name">
                                                <button type="submit" class="locator"><span class="la la-crosshairs"></span></button>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group p-bottom-10">
                                            <div class="price-range rs-primary">
                                                <p class="d-flex justify-content-between">
                                                    <span>Price Range: </span>
                                                    <span class="amount"></span>
                                                </p>
                                                <div class="slider-range"></div>
                                            </div><!-- ends: .price-range -->
                                        </div><!-- ends: .form-group -->
                                        <div class="check-btn">
                                            <div class="btn-checkbox active-color-secondary">
                                                <label>
                                                    <input type="checkbox" value="1"><span class="color-success"><i class="la la-clock-o"></i> Open Now</span>
                                                </label>
                                            </div>
                                            <div class="btn-checkbox active-color-secondary">
                                                <label>
                                                    <input type="checkbox" value="1"><span class="color-primary"><i class="la la-tags"></i> Offering Deal</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="filter-checklist">
                                            <h5>Filter by Features</h5>
                                            <div class="checklist-items feature-checklist hideContent">
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag9" checked>
                                                    <label class="custom-control-label" for="tag9">Accepts Cards</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag10">
                                                    <label class="custom-control-label" for="tag10">Electronics</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag11">
                                                    <label class="custom-control-label" for="tag11">Bike Parking</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag12">
                                                    <label class="custom-control-label" for="tag12">Wheelchair</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag13">
                                                    <label class="custom-control-label" for="tag13">Accessories</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag14">
                                                    <label class="custom-control-label" for="tag14">WiFi Internet</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag15">
                                                    <label class="custom-control-label" for="tag15">Parking Street</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag16">
                                                    <label class="custom-control-label" for="tag16">Clothing</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag17">
                                                    <label class="custom-control-label" for="tag17">Travel Booking</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag18">
                                                    <label class="custom-control-label" for="tag18">Fast Support</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag19">
                                                    <label class="custom-control-label" for="tag19">Parking Street</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag20">
                                                    <label class="custom-control-label" for="tag20">Shopping</label>
                                                </div>
                                            </div>
                                            <a href="" class="show-link">Show More</a>
                                        </div><!-- ends: .filter-checklist -->
                                        <div class="filter-checklist">
                                            <h5>Filter by Tags</h5>
                                            <div class="checklist-items tags-checklist">
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag1" checked>
                                                    <label class="custom-control-label" for="tag1">Restaurant</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag2">
                                                    <label class="custom-control-label" for="tag2">Food</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag3">
                                                    <label class="custom-control-label" for="tag3">Launch</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag4">
                                                    <label class="custom-control-label" for="tag4">Breakfast</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag5">
                                                    <label class="custom-control-label" for="tag5">Lifestyle</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag6">
                                                    <label class="custom-control-label" for="tag6">Travel</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag7">
                                                    <label class="custom-control-label" for="tag7">Drink</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag8_1">
                                                    <label class="custom-control-label" for="tag8_1">Services</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag6_2">
                                                    <label class="custom-control-label" for="tag6_2">Booking</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag7_3">
                                                    <label class="custom-control-label" for="tag7_3">Rent</label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="tag8_2">
                                                    <label class="custom-control-label" for="tag8_2">Shopping</label>
                                                </div>
                                            </div>
                                        </div><!-- ends: .filter-checklist -->
                                        <div class="filter-checklist">
                                            <h5>Filter by Ratings</h5>
                                            <div class="sort-rating">
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck7" checked>
                                                    <label class="custom-control-label" for="customCheck7">
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span class="active"><i class="la la-star"></i></span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                    <label class="custom-control-label" for="customCheck8">
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                    <label class="custom-control-label" for="customCheck9">
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                    <label class="custom-control-label" for="customCheck10">
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                    <label class="custom-control-label" for="customCheck11">
                                                        <span class="active"><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                    <label class="custom-control-label" for="customCheck12">
                                                        <span><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                        <span><i class="la la-star"></i></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div><!-- ends: .filter-checklist -->
                                        <a href="" class="btn btn-gradient btn-gradient-two btn-block btn-icon icon-right m-top-40">Search Filter <span class="la la-long-arrow-right"></span></a>
                                    </form><!-- ends: form -->
                                </div><!-- ends: .default-ad-search -->
                            </div>
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-8 order-lg-1 order-0">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="atbd_single_listing ">
                                        <article class="atbd_single_listing_wrapper">
                                            <figure class="atbd_listing_thumbnail_area">
                                                <div class="atbd_listing_image">
                                                    <a href="">
                                                        <img src="img/p1.jpg" alt="listing image">
                                                    </a>
                                                </div><!-- ends: .atbd_listing_image -->
                                                <div class="atbd_author atbd_author--thumb">
                                                    <a href="">
                                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                                    </a>
                                                </div>
                                                <div class="atbd_thumbnail_overlay_content">
                                                    <ul class="atbd_upper_badge">
                                                        <li><span class="atbd_badge atbd_badge_featured">Featured</span></li>
                                                    </ul><!-- ends .atbd_upper_badge -->
                                                </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                            </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                            <div class="atbd_listing_info">
                                                <div class="atbd_content_upper">
                                                    <h4 class="atbd_listing_title">
                                                        <a href="">Flanders Heat &amp; Air Systems</a>
                                                    </h4>
                                                    <div class="atbd_listing_meta">
                                                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                                                        <span class="atbd_meta atbd_listing_price">$55.00</span>
                                                        <span class="atbd_meta atbd_badge_open">Open Now</span>
                                                    </div><!-- End atbd listing meta -->
                                                    <div class="atbd_listing_data_list">
                                                        <ul>
                                                            <li>
                                                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                                                            </li>
                                                        </ul>
                                                    </div><!-- End atbd listing meta -->
                                                </div><!-- end .atbd_content_upper -->
                                                <div class="atbd_listing_bottom_content">
                                                    <div class="atbd_content_left">
                                                        <div class="atbd_listing_category">
                                                            <a href=""><span class="la la-glass"></span>Restaurant</a>
                                                        </div>
                                                    </div>
                                                    <ul class="atbd_content_right">
                                                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                                                        <li class="atbd_save">
                                                            <span class="la la-heart-o"></span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end .atbd_listing_bottom_content -->
                                            </div><!-- ends: .atbd_listing_info -->
                                        </article><!-- atbd_single_listing_wrapper -->
                                    </div>
                                </div><!-- ends: .col-md-6 -->
                                <div class="col-sm-6">
                                    <div class="atbd_single_listing ">
                                        <article class="atbd_single_listing_wrapper">
                                            <figure class="atbd_listing_thumbnail_area">
                                                <div class="atbd_listing_image">
                                                    <a href="">
                                                        <img src="img/p2.jpg" alt="listing image">
                                                    </a>
                                                </div><!-- ends: .atbd_listing_image -->
                                                <div class="atbd_author atbd_author--thumb">
                                                    <a href="">
                                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                                    </a>
                                                </div>
                                                <div class="atbd_thumbnail_overlay_content">
                                                    <ul class="atbd_upper_badge">
                                                        <li><span class="atbd_badge atbd_badge_popular">Popular</span></li>
                                                    </ul><!-- ends .atbd_upper_badge -->
                                                </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                            </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                            <div class="atbd_listing_info">
                                                <div class="atbd_content_upper">
                                                    <h4 class="atbd_listing_title">
                                                        <a href="">Sydney Restaurant Towers</a>
                                                    </h4>
                                                    <div class="atbd_listing_meta">
                                                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                                                        <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                                            <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                        </span>
                                                        <span class="atbd_meta atbd_badge_close">Closed</span>
                                                    </div><!-- End atbd listing meta -->
                                                    <div class="atbd_listing_data_list">
                                                        <ul>
                                                            <li>
                                                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                                                            </li>
                                                        </ul>
                                                    </div><!-- End atbd listing meta -->
                                                </div><!-- end .atbd_content_upper -->
                                                <div class="atbd_listing_bottom_content">
                                                    <div class="atbd_content_left">
                                                        <div class="atbd_listing_category">
                                                            <a href=""><span class="la la-map-marker"></span>Places</a>
                                                            <div class="atbd_cat_popup">
                                                                <span>+2</span>
                                                                <div class="atbd_cat_popup_wrapper">
                                                                    <span><a href="">Event</a></span>
                                                                    <span><a href="">Food</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="atbd_content_right">
                                                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                                                        <li class="atbd_save">
                                                            <span class="la la-heart-o"></span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end .atbd_listing_bottom_content -->
                                            </div><!-- ends: .atbd_listing_info -->
                                        </article><!-- atbd_single_listing_wrapper -->
                                    </div>
                                </div><!-- ends: .col-md-6 -->
                                <div class="col-sm-6">
                                    <div class="atbd_single_listing ">
                                        <article class="atbd_single_listing_wrapper">
                                            <figure class="atbd_listing_thumbnail_area">
                                                <div class="atbd_listing_image">
                                                    <a href="">
                                                        <img src="img/p3.jpg" alt="listing image">
                                                    </a>
                                                </div><!-- ends: .atbd_listing_image -->
                                                <div class="atbd_author atbd_author--thumb">
                                                    <a href="">
                                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                                    </a>
                                                </div>
                                                <div class="atbd_thumbnail_overlay_content">
                                                    <ul class="atbd_upper_badge">
                                                        <li><span class="atbd_badge atbd_badge_new">New</span></li>
                                                    </ul><!-- ends .atbd_upper_badge -->
                                                </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                            </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                            <div class="atbd_listing_info">
                                                <div class="atbd_content_upper">
                                                    <h4 class="atbd_listing_title">
                                                        <a href="">Kung Food &amp; Drinks</a>
                                                    </h4>
                                                    <div class="atbd_listing_meta">
                                                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                                                        <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                                            <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                        </span>
                                                        <span class="atbd_meta atbd_badge_close">Closed</span>
                                                    </div><!-- End atbd listing meta -->
                                                    <div class="atbd_listing_data_list">
                                                        <ul>
                                                            <li>
                                                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                                                            </li>
                                                        </ul>
                                                    </div><!-- End atbd listing meta -->
                                                </div><!-- end .atbd_content_upper -->
                                                <div class="atbd_listing_bottom_content">
                                                    <div class="atbd_content_left">
                                                        <div class="atbd_listing_category">
                                                            <a href=""><span class="la la-shopping-cart"></span>Shopping</a>
                                                        </div>
                                                    </div>
                                                    <ul class="atbd_content_right">
                                                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                                                        <li class="atbd_save">
                                                            <span class="la la-heart-o"></span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end .atbd_listing_bottom_content -->
                                            </div><!-- ends: .atbd_listing_info -->
                                        </article><!-- atbd_single_listing_wrapper -->
                                    </div>
                                </div><!-- ends: .col-md-6 -->
                                <div class="col-sm-6">
                                    <div class="atbd_single_listing ">
                                        <article class="atbd_single_listing_wrapper">
                                            <figure class="atbd_listing_thumbnail_area">
                                                <div class="atbd_listing_image">
                                                    <a href="">
                                                        <img src="img/p4.jpg" alt="listing image">
                                                    </a>
                                                </div><!-- ends: .atbd_listing_image -->
                                                <div class="atbd_author atbd_author--thumb">
                                                    <a href="">
                                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                                    </a>
                                                </div>
                                                <div class="atbd_thumbnail_overlay_content">
                                                    <ul class="atbd_upper_badge">
                                                        <li><span class="atbd_badge atbd_badge_featured">Featured</span></li>
                                                        <li><span class="atbd_badge atbd_badge_popular">Popular</span></li>
                                                    </ul><!-- ends .atbd_upper_badge -->
                                                </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                            </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                            <div class="atbd_listing_info">
                                                <div class="atbd_content_upper">
                                                    <h4 class="atbd_listing_title">
                                                        <a href="">Favorite Place Fog Bank</a>
                                                    </h4>
                                                    <div class="atbd_listing_meta">
                                                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                                                        <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                                            <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                        </span>
                                                        <span class="atbd_meta atbd_badge_open">Open Now</span>
                                                    </div><!-- End atbd listing meta -->
                                                    <div class="atbd_listing_data_list">
                                                        <ul>
                                                            <li>
                                                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                                                            </li>
                                                        </ul>
                                                    </div><!-- End atbd listing meta -->
                                                </div><!-- end .atbd_content_upper -->
                                                <div class="atbd_listing_bottom_content">
                                                    <div class="atbd_content_left">
                                                        <div class="atbd_listing_category">
                                                            <a href=""><span class="la la-bank"></span>Art &amp; History</a>
                                                        </div>
                                                    </div>
                                                    <ul class="atbd_content_right">
                                                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                                                        <li class="atbd_save">
                                                            <span class="la la-heart-o"></span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end .atbd_listing_bottom_content -->
                                            </div><!-- ends: .atbd_listing_info -->
                                        </article><!-- atbd_single_listing_wrapper -->
                                    </div>
                                </div><!-- ends: .col-md-6 -->
                                <div class="col-sm-6">
                                    <div class="atbd_single_listing ">
                                        <article class="atbd_single_listing_wrapper">
                                            <figure class="atbd_listing_thumbnail_area">
                                                <div class="atbd_listing_image">
                                                    <a href="">
                                                        <img src="img/p5.jpg" alt="listing image">
                                                    </a>
                                                </div><!-- ends: .atbd_listing_image -->
                                                <div class="atbd_author atbd_author--thumb">
                                                    <a href="">
                                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                                    </a>
                                                </div>
                                                <div class="atbd_thumbnail_overlay_content">
                                                    <ul class="atbd_upper_badge">
                                                    </ul><!-- ends .atbd_upper_badge -->
                                                </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                            </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                            <div class="atbd_listing_info">
                                                <div class="atbd_content_upper">
                                                    <h4 class="atbd_listing_title">
                                                        <a href="">Flanders Heat &amp; Air Systems</a>
                                                    </h4>
                                                    <div class="atbd_listing_meta">
                                                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                                                        <span class="atbd_meta atbd_listing_price">$55.00</span>
                                                        <span class="atbd_meta atbd_badge_close">Closed</span>
                                                    </div><!-- End atbd listing meta -->
                                                    <div class="atbd_listing_data_list">
                                                        <ul>
                                                            <li>
                                                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                                                            </li>
                                                        </ul>
                                                    </div><!-- End atbd listing meta -->
                                                </div><!-- end .atbd_content_upper -->
                                                <div class="atbd_listing_bottom_content">
                                                    <div class="atbd_content_left">
                                                        <div class="atbd_listing_category">
                                                            <a href=""><span class="la la-bed"></span>Hotel &amp; Travel</a>
                                                        </div>
                                                    </div>
                                                    <ul class="atbd_content_right">
                                                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                                                        <li class="atbd_save">
                                                            <span class="la la-heart-o"></span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end .atbd_listing_bottom_content -->
                                            </div><!-- ends: .atbd_listing_info -->
                                        </article><!-- atbd_single_listing_wrapper -->
                                    </div>
                                </div><!-- ends: .col-md-6 -->
                                <div class="col-sm-6">
                                    <div class="atbd_single_listing ">
                                        <article class="atbd_single_listing_wrapper">
                                            <figure class="atbd_listing_thumbnail_area">
                                                <div class="atbd_listing_image">
                                                    <a href="">
                                                        <img src="img/p6.jpg" alt="listing image">
                                                    </a>
                                                </div><!-- ends: .atbd_listing_image -->
                                                <div class="atbd_author atbd_author--thumb">
                                                    <a href="">
                                                        <img src="img/author-thumb2.jpg" alt="Author Image">
                                                        <span class="custom-tooltip">Jeffery A, Owner</span>
                                                    </a>
                                                </div>
                                                <div class="atbd_thumbnail_overlay_content">
                                                    <ul class="atbd_upper_badge">
                                                    </ul><!-- ends .atbd_upper_badge -->
                                                </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                            </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                            <div class="atbd_listing_info">
                                                <div class="atbd_content_upper">
                                                    <h4 class="atbd_listing_title">
                                                        <a href="">Store Clothing Shopping Mall</a>
                                                    </h4>
                                                    <div class="atbd_listing_meta">
                                                        <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                                                        <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                                            <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span class="atbd_active"><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                            <span><img src="img/svg/dollar.svg" class="svg" alt="" /></span>
                                                        </span>
                                                        <span class="atbd_meta atbd_badge_open">Open Now</span>
                                                    </div><!-- End atbd listing meta -->
                                                    <div class="atbd_listing_data_list">
                                                        <ul>
                                                            <li>
                                                                <p><span class="la la-map-marker"></span>Los Angeles, United States</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-phone"></span>(415) 796-3633</p>
                                                            </li>
                                                            <li>
                                                                <p><span class="la la-calendar-check-o"></span>Posted 2 months ago</p>
                                                            </li>
                                                        </ul>
                                                    </div><!-- End atbd listing meta -->
                                                </div><!-- end .atbd_content_upper -->
                                                <div class="atbd_listing_bottom_content">
                                                    <div class="atbd_content_left">
                                                        <div class="atbd_listing_category">
                                                            <a href=""><span class="la la-cutlery"></span>Food &amp; Drink</a>
                                                            <div class="atbd_cat_popup">
                                                                <span>+2</span>
                                                                <div class="atbd_cat_popup_wrapper">
                                                                    <span><a href="">Event</a></span>
                                                                    <span><a href="">Food</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="atbd_content_right">
                                                        <li class="atbd_count"><span class="la la-eye"></span>900+</li>
                                                        <li class="atbd_save">
                                                            <span class="la la-heart-o"></span>
                                                        </li>
                                                    </ul>
                                                </div><!-- end .atbd_listing_bottom_content -->
                                            </div><!-- ends: .atbd_listing_info -->
                                        </article><!-- atbd_single_listing_wrapper -->
                                    </div>
                                </div><!-- ends: .col-lg-4 -->
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <nav class="navigation pagination d-flex justify-content-end" role="navigation">
                                        <div class="nav-links">
                                            <a class="prev page-numbers" href=""><span class="la la-long-arrow-left"></span></a>
                                            <a class="page-numbers" href="">1</a>
                                            <span aria-current="page" class="page-numbers current">2</span>
                                            <a class="page-numbers" href="">3</a>
                                            <a class="next page-numbers" href=""><span class="la la-long-arrow-right"></span></a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div><!-- ends: .col-lg-8 -->
                    </div>
                </div><!-- ends: .listing-items -->
            </div>
        </div>
    </section><!-- ends: .all-listing-wrapper -->

    <script>

var element, name, arr;
element = document.getElementById("exchange");
name = "header-breadcrumb";
arr = element.className.split(" ");
if (arr.indexOf(name) == -1) {
    element.className += " " + name;
}
</script>

@include('user.footer')