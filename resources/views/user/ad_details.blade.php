@include('user.metadata')

@include('user.menu')
<div class="bg_image_holder ad_detailbanner"><img src="{{asset('/images/media')}}/{{$post_data->media_data['m_url']}}" alt=""></div>
        <div class="listing-info content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        @if($post_data->ps_type=='feature')
                        <ul class="list-unstyled listing-info--badges">
                            <li><span class="atbd_badge atbd_badge_featured">{{$post_data->ps_type}}</span></li>
                        </ul>
                       @endif
                        <ul class="list-unstyled listing-info--meta">
                            <li>
                                <span class="atbd_meta atbd_listing_average_pricing" data-toggle="tooltip" data-placement="top" title="" data-original-title="Average">
                                    <span style="color:#fff" class="atbd_active">{{$post_data->ps_price}} PKR</span>
                                    
                                </span>
                            </li>
                          
                            <li>
                                <div class="atbd_listing_category">
                                    <a href=""><img class="cat_featimg" src="{{ asset('images')}}/{{$post_data->category_data['ct_icone']}}" style=" width: 20px; height: 20px;" alt="">    {{$post_data->category_data['ct_name']}}</a>
                                </div>
                            </li>
                        </ul><!-- ends: .listing-info-meta -->
                        <h1>{{$post_data->ps_title}}</h1>
   
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

                                 @foreach($post_data['media_all_data'] as $key)
                                    <div class="single-image">
                                        <img src="{{asset('images/media')}}/{{$key->m_url}}"  alt="">
                                    </div>
                                    @endforeach
                                  
                                </div><!-- ends: .gallery-images -->




                                <div class="gallery-thumbs">
                                @foreach($post_data['media_all_data'] as $key)
                                    <div class="single-thumb">
                                        <img src="{{asset('images/media')}}/{{$key->m_url}}" alt="">
                                    </div>
                                @endforeach

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
                           <h3> Price:</h3> <p>{{$post_data->ps_price}}.</p>
                           <h3> Detail:</h3> <p>{{$post_data->ps_detail}}.</p>
                           @foreach($post_data->post_attribute_data as $pad)

                           <h3> {{$pad->pt_title}}:</h3> <p>{{$pad->pt_value}}.</p>
                           @endforeach
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
                                        <div class="atbd_info">{{$post_data->ps_address}}</div>
                                    </li>
                                    <li>
                                        <div class="atbd_info_title"><span class="la la-phone"></span>Phone Number:</div>
                                        <div class="atbd_info">{{$post_data->create_by['u_phone']}}</div>
                                    </li>
                                    <li>
                                        <div class="atbd_info_title"><span class="la la-envelope"></span>Email:</div>
                                        <span class="atbd_info">{{$post_data->create_by['email']}}</span>
                                    </li>
                                 
                                </ul>
                            </div>
              
                        </div>
                    </div><!-- ends: .atbd_content_module -->
                    <div class="atbd_content_module atbd_contact_information_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-headphones"></span>Reviws & Ratings</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div class="atbd_contact_info">
                                <ul>
                                @foreach($post_data->rating_are as $pad)
                                   <li>
                                       <div class="row col-lg-12">
                                        <div class="col-lg-2">Rating:</div>
                                        <div class="col-lg-2">{{$pad->r_rating}}</div>
                                        <div class="col-lg-2">Comment:</div>
                                        <div class="col-lg-6">{{$pad->r_comment}}</div>
                                        </div>
                                    </li>
                                    @endforeach
                                 
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
                                @if($post_data->create_by['u_image'])
                                    <img src="{{asset('images/user')}}/{{$post_data->create_by['u_image']}}" style="height:40px;width: 40px;object-fit: cover;object-position: top;" alt="Avatar Image">
                                 @else
                                 <img src="{{asset('images/user')}}/placeholder.png" alt="Avatar Image">
                                 @endif   
                                </div>
                                <div class="atbd_name_time">
                                    <h4>{{$post_data->create_by['name']}} <span class="verified" data-toggle="tooltip" data-placement="top" title="Verified"></span></h4>
                                    <span class="review_time">Posted {{$post_data->duration}} days ago</span>
                                </div>
                            </div><!-- ends: .atbd_avatar_wrapper -->
                            <div class="atbd_widget_contact_info">
                                <ul>
                                    <li>
                                        <span class="la la-map-marker"></span>
                                        <span class="atbd_info">{{$post_data->ps_address}}</span>
                                    </li>
                                    <li>
                                        <span class="la la-phone"></span>
                                        <span class="atbd_info">{{$post_data->create_by['u_phone']}}</span>
                                    </li>
                                    <li>
                                        <span class="la la-envelope"></span>
                                        <span class="atbd_info">{{$post_data->create_by['email']}}</span>
                                    </li>
                                 
                                </ul>
                            </div><!-- ends: .atbd_widget_contact_info -->
                           
                            <a href="{{url('user_profile')}}/{{$post_data->create_by['id']}}" class="btn btn-outline-primary btn-block">View Profile</a>
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
                            @foreach($related_data as $ps_data)
                                <li>
                                    <div class="atbd_left_img">
                                        <a href="{{url('ad_details')}}/{{$ps_data->ps_id}}"><img src="{{asset('images/media')}}/{{$ps_data->media_data['m_url']}}" style=" width: 80px; height: 80px;object-fit:cover; object-position:center;" alt="listing image"></a>
                                    </div>
                                    <div class="atbd_right_content">
                                        <div class="cate_title">
                                            <h4><a href="{{url('ad_details')}}/{{$ps_data->ps_id}}">{{$ps_data->ps_title}}</a></h4>
                                        </div>
                                        <p class="listing_value">
                                            <span>${{$ps_data->ps_price}}</span>
                                        </p>
                                        <p class="directory_tag">

                                            <span>
                                                <a href="{{url('ad_details')}}/{{$ps_data->ps_id}}"><img class="cat_featimg" src="{{ asset('images')}}/{{$ps_data->category_data['ct_icone']}}" style=" width: 20px; height: 20px;" alt="">{{$ps_data->category_data['ct_name']}}</a>
                                               
                                            </span>
                                        </p>
                                    </div>
                                </li>
                            @endforeach    
                               
                            </ul>
                        </div> <!-- ends .atbd_similar_listings -->
                    </div><!-- ends: .widget -->
                   
                </div>
            </div>
        </div>
    </section><!-- ends: .directory_listiing_detail_area -->


    <script>

            var element, name, arr;
            element = document.getElementById("exchange");
            name = "detailbg";
            arr = element.className.split(" ");
            if (arr.indexOf(name) == -1) {
                element.className += " " + name;
            }
        </script>
    @include('user.footer')