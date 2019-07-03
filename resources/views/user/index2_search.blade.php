@include('user.metadata')

@include('user.menu')
<div class="bg_image_holder">
            <img src="{{ asset('img/banner.jpg') }}" alt=""></div>
        <div class="directory_content_area">
           
        </div><!-- ends: .directory_search_area -->
    </section><!-- ends: .intro-wrapper -->
 
    <section class="listing-cards section-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Best Listings Around the Pakistan</h2>
                        <p>Explore the popular listings around Pakistan and Gulf</p>
                    </div>
                </div>
                <div class="listing-cards-wrapper col-lg-12">
                    <div class="row">
                    @foreach($post_data as $key)
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing ">
                                <article class="atbd_single_listing_wrapper">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href="{{url('ad_details')}}/{{$key->ps_id}}">
                                            @if($key->media_data)
                                            
                                                <img class="lst_featimg" src="{{ asset('images/media')}}/{{$key->media_data['m_url']}}" alt="listing image">
                                            
                                            @endif
                                            </a>
                                        </div><!-- ends: .atbd_listing_image -->
                                        <div class="atbd_author atbd_author--thumb">
                                            <a href="{{url('/user_profile')}}/{{$key->create_by['id']}}">
                                            <?php if($key->create_by['u_image']){ ?>
                                                <img src="{{asset('/images/user')}}/{{$key->create_by['u_image']}}" class="author-img" alt="Author Image">
                                            <?php } else {?>
                                                <img src="{{asset('/images/user')}}/placeholder.png" class="author-img" alt="Author Image">
                                            <?php }?>   <span class="custom-tooltip">{{$key->create_by['name']}}</span>
                                            </a>
                                        </div>
                                        <div class="atbd_thumbnail_overlay_content">
                                            <ul class="atbd_upper_badge">
                                            @if($key->ps_type==="feature")
                                                <li><span class="atbd_badge atbd_badge_featured">{{$key->ps_type}}</span></li>
                                                @endif
                                            </ul><!-- ends .atbd_upper_badge -->
                                        </div><!-- ends: .atbd_thumbnail_overlay_content -->
                                    </figure><!-- ends: .atbd_listing_thumbnail_area -->
                                    <div class="atbd_listing_info">
                                        <div class="atbd_content_upper">
                                            <h4 class="atbd_listing_title">
                                                <a href="{{url('ad_details')}}/{{$key->ps_id}}">{{$key->ps_title}}</a>
                                            </h4>
                                            <div class="atbd_listing_meta">
                                               <span class="atbd_meta atbd_listing_price">$ {{$key->ps_price}}</span>
                                            </div><!-- End atbd listing meta -->
                                            <div class="atbd_listing_data_list">
                                                <ul>
                                                    <li>
                                                        <p><span class="la la-map-marker"></span>{{$key->ps_city}}</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-phone"></span>{{$key->create_by['email']}}</p>
                                                    </li>
                                                    <li>
                                                        <p><span class="la la-calendar-check-o"></span>Posted {{$key->duration}} ago</p>
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
                                            <ul class="atbd_content_right dill " data-id="{{$key->ps_id}}">
                                                <li class="atbd_save">
                                                    <span class="la la-heart-o "  ></span>
                                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                                    <input type="hidden" name="dill" id="user_id" value="{{session('user_data')}}" >
                                               
                                                </li>
                                            </ul>
                                        </div><!-- end .atbd_listing_bottom_content -->
                                    </div><!-- ends: .atbd_listing_info -->
                                </article><!-- atbd_single_listing_wrapper -->
                            </div>
                        </div><!-- ends: .col-lg-4 -->
                    @endforeach
                     
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
                        <h2>Why <span>Gwadar Hub</span> for your Business?</h2>
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
                        <p>Explore best listings around Pakistan and Gulf by city</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="cat-places-wrapper">
                    @foreach($location as $loc)
                        <div class="category-place-single">
                            <figure>
                      
                                <a href=""><img src="{{ asset('images/media')}}/{{$loc->location_media['m_url']}}" alt=""></a>
                                <figcaption>
                                    <h3>{{$loc->ps_city}}</h3>
                                    <p>{{$loc->location_num_post}} Listings</p>
                                </figcaption>
                            </figure>
                        </div><!-- ends: .category-place-single -->
                    @endforeach    
                      
                    </div><!-- ends: .col-lg-12 -->
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
                        <p>Here is what people say about Gwadar Hub</p>
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