@include('user.metadata')

@include('user.menu')
<div class="bg_image_holder"><img src="img/details-img.jpg" alt=""></div>
        <div class="listing-info content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <ul class="list-unstyled listing-info--badges">
                            <li><span class="atbd_badge atbd_badge_featured">Featured</span></li>
                     
                        </ul>
                        <ul class="list-unstyled listing-info--meta">
                            <li>
                                <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                    <span style="color:#fff" class="atbd_active">10,000 PKR</span>
                                    
                                </span>
                            </li>
                          
                            <li>
                                <div class="atbd_listing_category">
                                    <a href=""><span class="la la-glass"></span>Property</a>
                                </div>
                            </li>
                        </ul><!-- ends: .listing-info-meta -->
                        <h1>Strawberry Basil Lemonade</h1>
   
                    </div>
                    <div class="col-lg-4 col-md-5 d-flex align-items-end justify-content-start justify-content-md-end">
                        <div class="atbd_listing_action_area">
                            <div class="atbd_action atbd_save">
                                <div class="action_button">
                                    <a href="" class="atbdp-favourites"><span class="la la-heart-o"></span> Save</a>
                                </div>
                            </div>
                            <div class="atbd_action atbd_share dropdown">
                                <span class="dropdown-toggle" id="social-links" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu">
                                    <span class="la la-share"></span>Share
                                </span>
                                <div class="atbd_director_social_wrap dropdown-menu" aria-labelledby="social-links">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="" target="_blank"><span class="fab fa-facebook-f color-facebook"></span>Facebook</a>
                                        </li>
                                        <li>
                                            <a href="" target="_blank"><span class="fab fa-twitter color-twitter"></span>Twitter</a>
                                        </li>
                                        <li>
                                            <a href="" target="_blank"><span class="fab fa-pinterest-p color-pinterest"></span>Pinterest</a>
                                        </li>
                                        <li>
                                            <a href="" target="_blank"><span class="fab fa-google-plus-g color-gplus"></span>Google Plus</a>
                                        </li>
                                        <li>
                                            <a href="" target="_blank"><span class="fab fa-linkedin-in color-linkedin"></span>LinkedIn</a>
                                        </li>
                                        <li>
                                            <a href="" target="_blank"><span class="fab fa-tumblr color-tumblr"></span>Tumblr</a>
                                        </li>
                                        <li>
                                            <a href="" target="_blank"><span class="fab fa-vk color-vk"></span>VKontakte</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--Ends social share-->
                            </div>
                            <!-- Report Abuse-->
                            <div class="atbd_action atbd_report">
                                <div class="action_button">
                                    <a href="" data-toggle="modal" data-target="#atbdp-report-abuse-modal"><span class="la la-flag-o"></span> Report</a>
                                </div>
                                <!-- Modal (report abuse form) -->
                            </div>
                        </div><!-- ends: .atbd_listing_action_area -->
                    </div>
                </div>
            </div>
            <div class="modal fade" id="atbdp-report-abuse-modal" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="atbdp-report-abuse-modal-label">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="/" id="atbdp-report-abuse-form" class="form-vertical">
                            <div class="modal-header">
                                <h3 class="modal-title" id="atbdp-report-abuse-modal-label">Report Abuse</h3>
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="atbdp-report-abuse-message" class="not_empty">Your Complaint<span class="atbdp-star">*</span></label>
                                    <textarea class="form-control" id="atbdp-report-abuse-message" rows="4" placeholder="Message..." required=""></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-secondary btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="moda_claim_listing" tabindex="-1" role="dialog" aria-labelledby="claim_listing_label" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="claim_listing_label"><i class="la la-check-square"></i> Claim This Listing</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Your Name" class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Phone Number" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="url" class="form-control" placeholder="Listing URL" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <textarea class="form-control" rows="6" placeholder="Provie Listing Information" required></textarea>
                                            <button type="submit" class="btn btn-secondary">Submit Query</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ends: .listing-info -->
    </section><!-- ends: .card-details-wrapper -->
    <section class="directory_listiing_detail_area single_area section-bg section-padding-strict">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                   
                    <div class="atbd_content_module atbd_listing_gallery">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-image"></span>Gallery</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="gallery-wrapper">
                                <div class="gallery-images">
                                    <div class="single-image">
                                        <img src="img/g1.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="img/g1.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="img/g1.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="img/g1.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="img/g1.jpg" alt="">
                                    </div>
                                    <div class="single-image">
                                        <img src="img/g1.jpg" alt="">
                                    </div>
                                </div><!-- ends: .gallery-images -->
                                <div class="gallery-thumbs">
                                    <div class="single-thumb">
                                        <img src="img/gt1.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="img/gt2.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="img/gt3.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="img/gt4.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="img/gt5.jpg" alt="">
                                    </div>
                                    <div class="single-thumb">
                                        <img src="img/gt3.jpg" alt="">
                                    </div>
                                </div><!-- ends: .gallery-thumbs -->
                            </div><!-- ends: .gallery-wrapper -->
                        </div>
                    </div><!-- ends: .atbd_content_module -->
                    <div class="atbd_content_module atbd_listing_details">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-file-text-o"></span>Listing Details</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa kequi officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium dolorem que laudantium, totam rem aperiam the eaque ipsa quae abillo was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo. Nemo ucxqui officia voluptatem accu santium doloremque laudantium, totam rem ape dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                        </div>
                    </div><!-- ends: .atbd_content_module -->
             

                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-map-o"></span>Location</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="map" id="map-one"></div>
                        </div>
                    </div><!-- ends: .atbd_content_module -->
                    <div class="atbd_content_module atbd_contact_information_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-headphones"></span>Contact Information</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="atbd_contact_info">
                                <ul>
                                    <li>
                                        <div class="atbd_info_title"><span class="la la-map-marker"></span>Address:</div>
                                        <div class="atbd_info">25 East Valley Road, New York</div>
                                    </li>
                                    <li>
                                        <div class="atbd_info_title"><span class="la la-phone"></span>Phone Number:</div>
                                        <div class="atbd_info">(213) 995-7799</div>
                                    </li>
                                    <li>
                                        <div class="atbd_info_title"><span class="la la-envelope"></span>Email:</div>
                                        <span class="atbd_info">support@aazztech.com</span>
                                    </li>
                                 
                                </ul>
                            </div>
              
                        </div>
                    </div><!-- ends: .atbd_content_module -->

                </div>
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="widget atbd_widget widget-card">
                        <div class="atbd_widget_title">
                            <h4><span class="la la-user"></span>Seller Info</h4>
                        </div><!-- ends: .atbd_widget_title -->
                        <div class="widget-body atbd_author_info_widget">
                            <div class="atbd_avatar_wrapper">
                                <div class="atbd_review_avatar">
                                    <img src="img/avatar-60x60.jpg" alt="Avatar Image">
                                </div>
                                <div class="atbd_name_time">
                                    <h4>Zephy Real Estate <span class="verified" data-toggle="tooltip" data-placement="top" title="Verified"></span></h4>
                                    <span class="review_time">Posted 6 days ago</span>
                                </div>
                            </div><!-- ends: .atbd_avatar_wrapper -->
                            <div class="atbd_widget_contact_info">
                                <ul>
                                    <li>
                                        <span class="la la-map-marker"></span>
                                        <span class="atbd_info">25 East Valley Road, Michigan</span>
                                    </li>
                                    <li>
                                        <span class="la la-phone"></span>
                                        <span class="atbd_info">(213) 995-7799</span>
                                    </li>
                                    <li>
                                        <span class="la la-envelope"></span>
                                        <span class="atbd_info">support@aazztech.com</span>
                                    </li>
                                 
                                </ul>
                            </div><!-- ends: .atbd_widget_contact_info -->
                           
                            <a href="" class="btn btn-outline-primary btn-block">View Profile</a>
                        </div><!-- ends: .widget-body -->
                    </div><!-- ends: .widget -->
   
              
           
                    <div class="widget atbd_widget widget-card">
                        <div class="atbd_widget_title">
                            <h4><span class="la la-envelope"></span> Sidebar Form</h4>
                        </div><!-- ends: .atbd_widget_title -->
                        <div class="atbdp-widget-listing-contact">
                            <form id="atbdp-contact-form" class="form-vertical" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="atbdp-contact-name" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="atbdp-contact-email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="atbdp-contact-message" rows="3" placeholder="Message" required=""></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline-secondary btn-block">Contact Agent</button>
                            </form>
                        </div><!-- ends: .atbdp-widget-listing-contact -->
                    </div><!-- ends: .widget -->
                    <div class="widget atbd_widget widget-card">
                        <div class="atbd_widget_title">
                            <h4><span class="la la-list-alt"></span> Similar Listings</h4>
                            <a href="">View All</a>
                        </div><!-- ends: .atbd_widget_title -->
                        <div class="atbd_categorized_listings atbd_similar_listings">
                            <ul class="listings">
                                <li>
                                    <div class="atbd_left_img">
                                        <a href=""><img src="img/sl1.jpg" alt="listing image"></a>
                                    </div>
                                    <div class="atbd_right_content">
                                        <div class="cate_title">
                                            <h4><a href="">Clothing Shopping Mall</a></h4>
                                        </div>
                                        <p class="listing_value">
                                            <span>$25,800</span>
                                        </p>
                                        <p class="directory_tag">
                                            <span class="la la-cutlery" aria-hidden="true"></span>
                                            <span>
                                                <a href="">Food & Drink</a>
                                                <span class="atbd_cat_popup">+3
                                                    <span class="atbd_cat_popup_wrapper">
                                                        <span>
                                                            <a href="">Food<span>,</span></a>
                                                            <a href="">Others<span>,</span></a>
                                                            <a href="">Service<span>,</span></a>
                                                        </span>
                                                    </span>
                                                </span><!-- ends: .atbd_cat_popup -->
                                            </span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="atbd_left_img">
                                        <a href=""><img src="img/sl2.jpg" alt="listing image"></a>
                                    </div>
                                    <div class="atbd_right_content">
                                        <div class="cate_title">
                                            <h4><a href="">Flanders Heat & Air Systems</a></h4>
                                        </div>
                                        <p class="listing_value">
                                            <span>$38,4800</span>
                                        </p>
                                        <p class="directory_tag">
                                            <span class="la la-bed" aria-hidden="true"></span>
                                            <span><a href="">Hotel & Travel</a></span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="atbd_left_img">
                                        <a href=""><img src="img/sl3.jpg" alt="listing image"></a>
                                    </div>
                                    <div class="atbd_right_content">
                                        <div class="cate_title">
                                            <h4><a href="">Favorite Place Fog Bank</a></h4>
                                        </div>
                                        <p class="listing_value">
                                            <span>$95,700</span>
                                        </p>
                                        <p class="directory_tag">
                                            <span class="la la-bookmark" aria-hidden="true"></span>
                                            <span><a href="">Art & History</a></span>
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="atbd_left_img">
                                        <a href=""><img src="img/sl4.jpg" alt="listing image"></a>
                                    </div>
                                    <div class="atbd_right_content">
                                        <div class="cate_title">
                                            <h4><a href="">Favorite Place Fog Bank</a></h4>
                                        </div>
                                        <p class="listing_value">
                                            <span>$45,800</span>
                                        </p>
                                        <p class="directory_tag">
                                            <span class="la la-bookmark" aria-hidden="true"></span>
                                            <span><a href="">Shopping</a></span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- ends .atbd_similar_listings -->
                    </div><!-- ends: .widget -->
                    <div class="widget atbd_widget widget-card">
                        <div class="atbd_widget_title">
                            <h4><span class="la la-list-alt"></span> Popular Listings</h4>
                            <a href="">View All</a>
                        </div><!-- ends: .atbd_widget_title -->
                        <div class="atbd_categorized_listings atbd_popular_listings">
                            <ul class="listings">
                                <li>
                                    <div class="atbd_left_img">
                                        <a href=""><img src="img/sl5.jpg" alt="listing image"></a>
                                    </div>
                                    <div class="atbd_right_content">
                                        <div class="cate_title">
                                            <h4><a href="">Flanders Heat & Air Systems</a></h4>
                                        </div>
                                        <p class="directory_tag">
                                            <span class="la la-glass" aria-hidden="true"></span>
                                            <span><a href="">Restaurant</a></span>
                                        </p>
                                        <div class="atbd_rated_stars">
                                            <ul>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="atbd_left_img">
                                        <a href=""><img src="img/sl6.jpg" alt="listing image"></a>
                                    </div>
                                    <div class="atbd_right_content">
                                        <div class="cate_title">
                                            <h4><a href="">Expert Services Agency</a></h4>
                                        </div>
                                        <p class="directory_tag">
                                            <span class="la la-map-marker" aria-hidden="true"></span>
                                            <span>
                                                <a href="">Places</a>
                                                <span class="atbd_cat_popup">+4
                                                    <span class="atbd_cat_popup_wrapper">
                                                        <span>
                                                            <a href="">Food<span>,</span></a>
                                                            <a href="">Others<span>,</span></a>
                                                            <a href="">Service<span>,</span></a>
                                                            <a href="">Travel<span>,</span></a>
                                                        </span>
                                                    </span>
                                                </span><!-- ends: .atbd_cat_popup -->
                                            </span>
                                        </p>
                                        <div class="atbd_rated_stars">
                                            <ul>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_disable"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="atbd_left_img">
                                        <a href=""><img src="img/sl7.jpg" alt="listing image"></a>
                                    </div>
                                    <div class="atbd_right_content">
                                        <div class="cate_title">
                                            <h4><a href="">Sydney Restaurant Towers</a></h4>
                                        </div>
                                        <p class="directory_tag">
                                            <span class="la la-shopping-cart" aria-hidden="true"></span>
                                            <span><a href="">Shopping</a></span>
                                        </p>
                                        <div class="atbd_rated_stars">
                                            <ul>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_disable"></span></li>
                                                <li><span class="rate_disable"></span></li>
                                                <li><span class="rate_disable"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="atbd_left_img">
                                        <a href=""><img src="img/sl8.jpg" alt="listing image"></a>
                                    </div>
                                    <div class="atbd_right_content">
                                        <div class="cate_title">
                                            <h4><a href="">Favorite Architecture Places</a></h4>
                                        </div>
                                        <p class="directory_tag">
                                            <span class="la la-bank" aria-hidden="true"></span>
                                            <span><a href="">Art & History</a></span>
                                        </p>
                                        <div class="atbd_rated_stars">
                                            <ul>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_active"></span></li>
                                                <li><span class="rate_disable"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- ends .atbd_similar_listings -->
                    </div><!-- ends: .widget -->
                </div>
            </div>
        </div>
    </section><!-- ends: .directory_listiing_detail_area -->
    @include('user.footer')