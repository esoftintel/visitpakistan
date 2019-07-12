@include('user.metadata')

@include('user.menu')


 
<div class="bg_image_holder" style="background-image: url(&quot;img/breadcrumb1.jpg&quot;); opacity: 1;"><img src="{{ asset('images/user')}}/{{$user_r->u_banner}}" alt="img/breadcrumb1.jpg"></div>
<div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">{{$user_r->name}}'s Profile</h1>
                       
                    </div>
                </div>
            </div>
        </div><!-- ends: .breadcrumb-wrapper -->
    </section>
    <section class="author-info-area section-padding-strict section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="atbd_auhor_profile_area">
                        <div class="atbd_author_avatar">
                            <img src="{{asset('images/user')}}/{{$user_r->u_image}}" style="width:100px;height:100px" alt="Author Image">
                            <div class="atbd_auth_nd">
                                <h2>{{$user_r->name}}</h2>
                                <p> {{$user_r->duration}}Ago Joined </p>
                            </div>
                        </div><!-- ends: .atbd_author_avatar -->
                        <div class="atbd_author_meta">
                            <div class="atbd_listing_meta">
                                <span class="atbd_meta atbd_listing_rating">{{$user_r->rate}} <i class="la la-star"></i></span>
                                <p class="meta-info"><span>{{$user_r->number_view}}</span>Reviews</p>
                            </div>
                            <p class="meta-info"><span>{{$user_r->number_post}}</span>Listings</p>
                        </div><!-- ends: .atbd_author_meta -->
                    </div><!-- ends: .atbd_auhor_profile_area -->
                </div><!-- ends: .col-lg-12 -->
                <div class="col-lg-8 col-md-7 m-bottom-30">
                    <div class="atbd_author_module">
                        <div class="atbd_content_module">
                            <div class="atbd_content_module__tittle_area">
                                <div class="atbd_area_title">
                                    <h4><span class="la la-user"></span>About Seller</h4>
                                </div>
                            </div>
                            <div class="atbdb_content_module_contents">
                                <p>{{$user_r->u_about}}.</p>
                            </div>
                        </div>
                    </div><!-- ends: .atbd_author_module -->
                </div><!-- ends: .col-md-8 -->
                <div class="col-lg-4 col-md-5 m-bottom-30">
                    <div class="widget atbd_widget widget-card">
                        <div class="atbd_widget_title">
                            <h4><span class="la la-phone"></span>Contact Info</h4>
                        </div><!-- ends: .atbd_widget_title -->
                        <div class="widget-body atbd_author_info_widget">
                            <div class="atbd_widget_contact_info">
                                <ul>
                                    <li>
                                        <span class="la la-map-marker"></span>
                                        <span class="atbd_info">{{$user_r->u_address}}</span>
                                    </li>
                                    <li>
                                        <span class="la la-phone"></span>
                                        <span class="atbd_info">{{$user_r->u_phone}}</span>
                                    </li>
                                    <li>
                                        <span class="la la-envelope"></span>
                                        <span class="atbd_info">{{$user_r->email}}</span>
                                    </li>
                                    
                                </ul>
                            </div><!-- ends: .atbd_widget_contact_info -->
                            <div class="atbd_social_wrap">
                                <p><a href=""><span class="fab fa-facebook-f"></span></a></p>
                                <p><a href=""><span class="fab fa-twitter"></span></a></p>
                                <p><a href=""><span class="fab fa-google-plus-g"></span></a></p>
                                <p><a href=""><span class="fab fa-linkedin-in"></span></a></p>
                                <p><a href=""><span class="fab fa-dribbble"></span></a></p>
                            </div><!-- ends: .atbd_social_wrap -->
                        </div><!-- ends: .widget-body -->
                    </div><!-- ends: .widget -->
                </div><!-- ends: .col-lg-4 -->
                <div class="col-lg-12">
                    <div class="atbd_author_listings_area m-bottom-30">
                        <h1>Author Listings</h1>
                        <div class="atbd_author_filter_area">
                            <div class="dropdown">
                                <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filter by Category <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="">Restaurant</a>
                                    <a class="dropdown-item" href="">Education</a>
                                    <a class="dropdown-item" href="">Event</a>
                                    <a class="dropdown-item" href="">Food</a>
                                    <a class="dropdown-item" href="">Service</a>
                                    <a class="dropdown-item" href="">Travel</a>
                                    <a class="dropdown-item" href="">Others</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- ends: .atbd_author_listings_area -->
                    <div class="row">
                    @foreach($post_data as $key)
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="">
                                            <img class="lst_featimg" src="{{ asset('images/media')}}/{{$key->media_data['m_url']}}" alt="listing image">
                                           
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <div class="atbd_author atbd_author--thumb">
                                            <a href="">
                                                <img src="{{asset('images/user')}}/{{$key->create_by['u_banner']}}" alt="opp's" style="height:30px;">
                                                <span class="custom-tooltip">{{$user_r->name}} Owner</span>
                                            </a>
                                        </div>
                                        <div class="atbd_thumbnail_overlay_content">
                                            <ul class="atbd_upper_badge">
                                                <li><span class="atbd_badge atbd_badge_featured">{{$key->ps_type}}</span></li>
                                            </ul><!-- ends .atbd_upper_badge -->
                                        </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                    </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                    <div class="atbd_listing_info">
                                        <div class="atbd_content_upper">
                                            <h4 class="atbd_listing_title">
                                                <a href="">{{$key->ps_title}}</a>
                                            </h4>
                                            <div class="atbd_listing_meta">
                                                <span class="atbd_meta atbd_listing_price">${{$key->ps_price}}</span>
                                                 </div><!-- End atbd listing meta -->
                                            <div class="atbd_listing_data_list">
                                                <ul>
                                                    <li>
                                                        <p><span class="la la-map-marker"></span>{{$key->ps_city}}</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-phone"></span>{{$user_r->u_phone}}</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-calendar-check-o"></span>Posted{{$key->duration}} ago</p>
                                                    </li>
                                                </ul>
                                            </div><!-- End atbd listing meta -->
                                        </div><!-- end .atbd_content_upper -->
                                        <div class="atbd_listing_bottom_content">
                                            <div class="atbd_content_left">
                                                <div class="atbd_listing_category">
                                                <a href=""><img src="{{ asset('images')}}/{{$key->category_data['ct_icone']}}" style="width:16px; height:16px;" /> {{$key->category_data['ct_name']}}</a>
                                                </div>
                                            </div>
                                            <ul class="atbd_content_right">
                                               
                                                <li class="atbd_save">
                                                    <span class="la la-heart-o"></span>
                                                </li>
                                            </ul>
                                        </div><!-- end .atbd_listing_bottom_content -->
                                    </div><!-- ends: .atbd_listing_info -->
                                </article><!-- atbd_single_listing_wrapper -->
                            </div>
                        </div><!-- ends: .col-md-6 -->
                    @endforeach    
                    
                    </div>
                    <div class="row">
                    {{ $post_data->links() }} 
                    </div>
                </div><!-- ends: .col-lg-12 -->
            </div>
        </div>
    </section><!-- ends: .author-info-area -->

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