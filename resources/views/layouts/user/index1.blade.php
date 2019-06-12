@include('user.metadata')

@include('user.menu')
        <div class="directory_content_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="search_title_area">
                            <h2 class="title">Find the Best Places to Be</h2>
                            <p class="sub_title">All the top locations – from restaurants and clubs, to galleries, famous places and more..</p>
                        </div><!-- ends: .search_title_area -->
                        <form action="/" class="search_form">
                            <div class="atbd_seach_fields_wrapper">
                                <div class="single_search_field search_query">
                                    <input class="form-control search_fields" type="text" placeholder="What are you looking for?">
                                </div>
                                <div class="single_search_field search_category">
                                    <select class="search_fields" id="at_biz_dir-category">
                                        <option value="">Select a category</option>
                                        <option value="automobile">Automobile</option>
                                        <option value="education">Education</option>
                                        <option value="event">Event</option>
                                    </select>
                                </div>
                                <div class="single_search_field search_location">
                                    <select class="search_fields" id="at_biz_dir-location">
                                        <option value="">Select a location</option>
                                        <option value="ab">AB Simple</option>
                                        <option value="australia">Australia</option>
                                        <option value="australia-australia">Australia</option>
                                    </select>
                                </div>
                                <div class="atbd_submit_btn">
                                    <button type="submit" class="btn btn-block btn-gradient btn-gradient-one btn-md btn_search">Search</button>
                                </div>
                            </div>
                        </form><!-- ends: .search_form -->
                        <div class="directory_home_category_area">
                            <ul class="categories">
                                <li>
                                    <a href="">
                                        <span class="color-primary"><i class="la la-cutlery"></i></span>
                                        Restaurants
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-success"><i class="la la-map-marker"></i></span>
                                        Places
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-warning"><i class="la la-shopping-cart"></i></span>
                                        Shopping
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="color-danger"><i class="la la-bed"></i></span>
                                        Hotels
                                    </a>
                                </li>
                            </ul>
                        </div><!-- ends: .directory_home_category_area -->
                    </div><!-- ends: .col-lg-10 -->
                </div>
            </div>
        </div><!-- ends: .directory_search_area -->
    </section><!-- ends: .intro-wrapper -->
    <section class="categories-cards section-padding-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>What Kind of Activity do you Want to try?</h2>
                        <p>Discover best things to do restaurants, shopping, hotels, cafes and places around the world by categories.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="{{ asset('img/cat1.jpg')}}" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-cutlery"></span>
                                        </div>
                                        <h4 class="cat-name">Restaurants</h4>
                                        <span class="badge badge-pill badge-success">48 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="{{ asset('img/cat2.jpg')}}" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-map-marker"></span>
                                        </div>
                                        <h4 class="cat-name">Places &amp; Destination</h4>
                                        <span class="badge badge-pill badge-success">74 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="{{ asset('img/cat3.jpg')}}" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-shopping-cart"></span>
                                        </div>
                                        <h4 class="cat-name">Shopping &amp; Store</h4>
                                        <span class="badge badge-pill badge-success">27 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="{{ asset('img/cat4.jpg')}}" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-bank"></span>
                                        </div>
                                        <h4 class="cat-name">Art &amp; History</h4>
                                        <span class="badge badge-pill badge-success">103 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="{{ asset('img/cat5.jpg')}}" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-bed"></span>
                                        </div>
                                        <h4 class="cat-name">Hotel &amp; Travel</h4>
                                        <span class="badge badge-pill badge-success">11 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img src="{{ asset('img/cat6.jpg')}}" alt="">
                            <figcaption class="overlay-bg">
                                <a href="" class="cat-box">
                                    <div>
                                        <div class="icon">
                                            <span class="la la-glass"></span>
                                        </div>
                                        <h4 class="cat-name">Food &amp; Drink</h4>
                                        <span class="badge badge-pill badge-success">29 Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
            </div>
        </div>
    </section><!-- ends: .categories-cards -->
    <section class="listing-cards section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Best Listings Around the World</h2>
                        <p>Explore the popular listings around the world</p>
                    </div>
                </div>
                <div class="listing-cards-wrapper col-lg-12">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="">
                                                <img src="{{ asset('img/p1.jpg')}}" alt="listing image">
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
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="">
                                                <img src="{{ asset('img/p2.jpg')}}" alt="listing image">
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <div class="atbd_author atbd_author--thumb">
                                            <a href="">
                                                <img src="{{ asset('img/author-thumb2.jpg')}}" alt="Author Image">
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
                                                    <span class="atbd_active"><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span class="atbd_active"><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
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
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="">
                                                <img src="{{ asset('img/p3.jpg')}}" alt="listing image">
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <div class="atbd_author atbd_author--thumb">
                                            <a href="">
                                                <img src="{{ asset('img/author-thumb2.jpg')}}" alt="Author Image">
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
                                                    <span class="atbd_active"><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span class="atbd_active"><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
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
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="">
                                                <img src="{{asset('img/p4.jpg')}}" alt="listing image">
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <div class="atbd_author atbd_author--thumb">
                                            <a href="">
                                                <img src="{{ asset('img/author-thumb2.jpg')}}" alt="Author Image">
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
                                                    <span class="atbd_active"><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span class="atbd_active"><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
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
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="">
                                                <img src="{{ asset('img/p5.jpg')}}" alt="listing image">
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <div class="atbd_author atbd_author--thumb">
                                            <a href="">
                                                <img src="{{ asset('img/author-thumb2.jpg')}}" alt="Author Image">
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
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="">
                                                <img src="{{ asset('img/p6.jpg')}}" alt="listing image">
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <div class="atbd_author atbd_author--thumb">
                                            <a href="">
                                                <img src="{{ asset('img/author-thumb2.jpg')}}" alt="Author Image">
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
                                                    <span class="atbd_active"><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span class="atbd_active"><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
                                                    <span><img src="{{ asset('img/svg/dollar.svg')}}" class="svg" alt="" /></span>
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
                        <div class="col-lg-12 text-center m-top-20">
                            <a href="" class="btn btn-gradient btn-gradient-two">Explore All 200+</a>
                        </div>
                    </div>
                </div><!-- ends: .listing-cards-wrapper -->
            </div>
        </div>
    </section><!-- ends: .listing-cards -->
    <section class="cta section-padding border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Why <span>Direo</span> for your Business?</h2>
                        <p>Explore the popular listings around the world</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <img src="{{ asset('img/svg/illustration-1.svg')}}" alt="" class="svg">
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-md-6 mt-5 mt-md-0">
                            <ul class="feature-list-wrapper list-unstyled">
                                <li>
                                    <div class="icon"><span class="circle-secondary"><i class="la la-check-circle"></i></span></div>
                                    <div class="list-content">
                                        <h4>Claim Listing</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="circle-success"><i class="la la-money"></i></span></div>
                                    <div class="list-content">
                                        <h4>Paid Listing</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><span class="circle-primary"><i class="la la-line-chart"></i></span></div>
                                    <div class="list-content">
                                        <h4>Promote your Business</h4>
                                        <p>Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit.</p>
                                    </div>
                                </li>
                            </ul><!-- ends: .feature-list-wrapper -->
                            <ul class="action-btns list-unstyled">
                                <li><a href="" class="btn btn-success">See our Pricing</a></li>
                                <li><a href="" class="btn btn-primary">Submit Listings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ends: .cta -->
    <section class="places section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Destination We Love</h2>
                        <p>Explore best listings around the world by city</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="cat-places-wrapper">
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="{{ asset('img/place1.jpg')}}" alt=""></a>
                                <figcaption>
                                    <h3>London, UK</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="{{ asset('img/place2.png')}}" alt=""></a>
                                <figcaption>
                                    <h3>New York</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="{{ asset('img/place3.png')}}" alt=""></a>
                                <figcaption>
                                    <h3>Sydney</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                        <div class="category-place-single">
                            <figure>
                                <a href=""><img src="{{ asset('img/place4.png')}}" alt=""></a>
                                <figcaption>
                                    <h3>Paris, France</h3>
                                    <p>68 Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                    </div><!-- ends: .col-lg-12 -->
                </div>
                <div class="col-lg-12">
                    <div class="place-list-wrapper">
                        <ul class="list-unstyled">
                            <li><a href="">Dubai (45)</a></li>
                            <li><a href="">Melbourne (95)</a></li>
                            <li><a href="">Sydney (90)</a></li>
                            <li><a href="">Brisbane (73)</a></li>
                            <li><a href="">Perth (97)</a></li>
                            <li><a href="">Toronto (960)</a></li>
                            <li><a href="">Vancouver (46)</a></li>
                            <li><a href="">Montreal (46)</a></li>
                            <li><a href="">Calgary (16)</a></li>
                            <li><a href="">Edmonton (6)</a></li>
                            <li><a href="">Ottawa (53)</a></li>
                            <li><a href="">Atlantic Canada (83)</a></li>
                            <li><a href="">Berlin (71)</a></li>
                            <li><a href="">Munich (46)</a></li>
                            <li><a href="">Hamburg Area (727)</a></li>
                            <li><a href="">Frankfurt Area (655)</a></li>
                            <li><a href="">Stuttgart Area (9)</a></li>
                            <li><a href="">Barcelona (46)</a></li>
                            <li><a href="">Madrid (790)</a></li>
                            <li><a href="">Spain (52)</a></li>
                            <li><a href="">Dublin (657)</a></li>
                            <li><a href="">Galway (12)</a></li>
                            <li><a href="">Limerick (6)</a></li>
                            <li><a href="">Tokyo, JP (24)</a></li>
                            <li><a href="">Kanagawa (276)</a></li>
                            <li><a href="">Osaka (146)</a></li>
                            <li><a href="">Kyoto (70)</a></li>
                            <li><a href="">Nagoya (64)</a></li>
                            <li><a href="">Mexico City (195)</a></li>
                            <li><a href="">Cancun (328)</a></li>
                            <li><a href="">Monterrey (27)</a></li>
                            <li><a href="">Baja California Sur (42)</a></li>
                            <li><a href="">Amsterdam (446)</a></li>
                            <li><a href="">Maastricht (3)</a></li>
                            <li><a href="">London (25)</a></li>
                            <li><a href="">Yorkshire (967)</a></li>
                            <li><a href="">Edinburgh (923)</a></li>
                            <li><a href="">Kent (80)</a></li>
                            <li><a href="">Manchester (60)</a></li>
                            <li><a href="">Glasgow (52)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- ends: .places -->
    <section class="testimonial-wrapper section-padding--bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Trusted By Over 4000+ Users</h2>
                        <p>Here is what people say about Direo</p>
                    </div>
                </div><!-- ends: .col-lg-12 -->
                <div class="testimonial-carousel owl-carousel">
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="{{ asset('img/tthumb1.jpg')}}" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Francis Burton</h4>
                            <span>Toronto, Canada</span>
                        </div>
                        <p class="author-comment">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident
                            culpa officia deserunt mollit.</p>
                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="{{ asset('img/tthumb1.jpg')}}" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Francis Burton</h4>
                            <span>Toronto, Canada</span>
                        </div>
                        <p class="author-comment">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident
                            culpa officia deserunt mollit.</p>
                    </div><!-- ends: .carousel-single -->
                    <div class="carousel-single">
                        <div class="author-thumb">
                            <img src="{{ asset('img/tthumb1.jpg')}}" alt="" class="rounded-circle">
                        </div>
                        <div class="author-info">
                            <h4>Francis Burton</h4>
                            <span>Toronto, Canada</span>
                        </div>
                        <p class="author-comment">Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit anim laborum sint occaecat cupidatat non proident. Occaecat cupidatat non proident
                            culpa officia deserunt mollit.</p>
                    </div><!-- ends: .carousel-single -->
                </div><!-- ends: .testimonial-carousel -->
            </div>
        </div>
    </section><!-- ends: .testimonial-wrapper -->
    <section class="clients-logo-wrapper border-top p-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel owl-carousel">
                        <div class="carousel-single">
                            <img src="{{ asset('img/cl1.png')}}" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="{{ asset('img/cl2.png')}}" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="{{ asset('img/cl3.png')}}" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="{{ asset('img/cl4.png')}}" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="{{ asset('img/cl5.png')}}" alt="">
                        </div>
                        <div class="carousel-single">
                            <img src="{{ asset('img/cl1.png')}}" alt="">
                        </div>
                    </div><!-- ends: .logo-carousel -->
                </div>
            </div>
        </div>
    </section><!-- ends: .clients-logo-wrapper -->
    <section class="subscribe-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1>Subscribe to Newsletter</h1>
                    <p>Subscribe to get update and information. Don't worry, we won't send spam!</p>
                    <form action="/" class="subscribe-form m-top-40">
                        <div class="form-group">
                            <span class="la la-envelope-o"></span>
                            <input type="text" placeholder="Enter your email" required>
                        </div>
                        <button class="btn btn-gradient btn-gradient-one">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- ends: .subscribe-wrapper -->
   @include('user.footer')