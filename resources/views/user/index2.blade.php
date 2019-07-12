@include('user.metadata')

@include('user.menu')
<div class="bg_image_holder">
            <img src="{{ asset('img/banner.jpg') }}" alt=""></div>
        <div class="directory_content_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="search_title_area">
                            <h2 class="title">We Care About Your Needs </h2>
                            <p class="sub_title">All the top locations – from restaurants and clubs, to galleries, famous places and more..</p>
                        </div><!-- ends: .search_title_area -->
                        <form action="{{url('/search')}}" method="POST" class="search_form">
                            <div class="atbd_seach_fields_wrapper">
                            @csrf
                             <div class="row">
                                <div class="single_search_field search_category">
                                    <select class="search_fields form-control" name="category" id="search_attribute">
                                    <option value="">Select a Category</option>
                                    @foreach($category_data as $category)
                                        <option value="{{$category->ct_id}}">{{$category->ct_name}}</option>
                                    @endforeach    
                                    </select>
                                </div>
                                <div class="single_search_field search_location">
                                    <select class="search_fields" name="location" id="at_biz_dir-location">
                                        <option value="">Select a location</option>
                                        @foreach($location as $l)
                                            <option value="{{$l->ps_city}}">{{$l->ps_city}}</option>
                                        @endforeach 
                                    </select>
                                </div>
                                <div class="single_search_field ">
                                    <select class="search_fields form-control" name="price" id="at_biz_dir-location">
                                        <option value="">Max Price</option>
                                        <option value="10000">10,000</option>
                                        <option value="20000">20,000</option>
                                        <option value="30000">30,000</option>
                                        <option value="40000">40,000</option>
                                        <option value="50000">50,000</option>
                                        <option value="60000">60,000</option>
                                        <option value="70000">70,000</option>
                                        <option value="80000">80,000</option>
                                        <option value="900000">90,000</option>
                                        <option value="100000">100,000</option>
                                        <option value="150000">150,000</option>
                                    </select>
                                </div>
                                <div class="single_search_field search_query">
                                    <input class="form-control search_fields" name="search" type="text" placeholder="What are you looking for?">
                                </div>
                                <div class="atbd_submit_btn">
                                    <button type="submit" class="btn btn-block btn-gradient btn-gradient-one btn-md btn_search">Search</button>
                                </div>
                                </div>
                               
                            </div>

                        </form><!-- ends: .search_form -->
                        <div class="directory_home_category_area">
                            <ul class="categories">
                            @foreach($category_data as $key_value)
                                <li>
                                    <a href="{{url('/category_listing/'.$key_value->ct_id.'')}}">
                                        <span class="color-primary"> <img class="cat_featimg" src="{{ asset('images')}}/{{$key_value->ct_iconewhite}}" style="height:50px; width:50px; object-fit: contain;" alt="">
                           </span>
                           {{$key_value->ct_name}}
                                    </a>
                                </li>
                                @endforeach
                             
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
            @foreach($category_data as $key_value)
                <div class="col-lg-4 col-sm-6">
                    <div class="category-single category--img">
                        <figure class="category--img4">
                            <img class="cat_featimg" src="{{ asset('images')}}/{{$key_value->ct_image}}" alt="">
                            <figcaption class="overlay-bg">
                                <!-- <a href="{{url('/category_post/'.$key_value->ct_id.'')}}" class="cat-box"> -->
                                <a href="{{url('/category_listing/'.$key_value->ct_id.'')}}" class="cat-box">
                                    <div>
                                        
                                        <h4 class="cat-name">{{$key_value->ct_name}}</h4>
                                        <span class="badge badge-pill badge-success">{{$key_value->its_post}} Listings</span>
                                    </div>
                                </a>
                            </figcaption>
                        </figure>
                    </div><!-- ends: .category-single -->
                </div><!-- ends: .col -->
            @endforeach
               
            </div>
        </div>
    </section><!-- ends: .categories-cards -->
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
                                            <button type="button" class="btn btn-info btn-sm postid_rating"  data-toggle="modal" data-id="{{$key->ps_id}}"  data-uid="{{session('user_data')}}">Open Modal</button>
                                            <!-- <button type="button" class="btn btn-info btn-sm postid_rating" value="{{$key->ps_id}}" data-id="{{$key->ps_id}}" data-toggle="modal" <?php if(session('user_data')){ ?> data-target="#myModal"<?php }else{?> data-target="#login_modal" <?php } ?>  >Open Modal</button>
                                            -->
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
                        {{ $post_data->links() }} 
                        </div>
                    </div>
                </div><!-- ends: .listing-cards-wrapper -->
            </div>
        </div>
    </section><!-- ends: .listing-cards -->
    <section class="cta section-padding">
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
                            <img src="{{ asset('images/gwadar-mobile.png')}}" alt="" style="width:100%;" class="svg">
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

<div class="container">
<style>
.gw-model textarea {
    width: 100%;
    border: 1px solid #ccc;
}
.star-container {
    display: inline-block;
    border-radius: 50px;
    background-color: #FFFFFF;
    width: 20px;
    height: 20px;
    overflow: hidden;
    position: relative;
}

.fill {
    content: '';
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
}

/*.percent30 {
    width: 30%;
}

.percent75 {
    width: 75%;
}*/

.percent100 {
    width: 100%;
}

.fa {
    font-size: 100px;
    position: relative;
    top: -10px;
    left: -2px;
}
</style>
<!-- The Modal -->
<div class="modal" id="myModal">
<div class="modal-dialog">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Popup</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body gw-model">
<form enctype="multipart/form-data" method="post" action="{{route('create_rating_review')}}" id="comment">
     {{ csrf_field() }}
    <textarea id="message" name="message"> </textarea>
    <input type="hidden" name="post_id" id="rt_post_id">
    <input type="hidden" name="rate" id="rt_post_id" value="4">
    <input type="hidden" name="user_id" id="cm_user_id" value="{{session('user_data')}}">
        <div class="star-container"><span class="fill percent100"></span><i class="far fa-star"></i></div>
        <div class="star-container"><span class="fill percent100"></span><i class="far fa-star"></i></div>
        <div class="star-container"><span class="fill percent100"></span><i class="far fa-star"></i></div>
        <div class="star-container"><span class="fill percent100"></span><i class="far fa-star"></i></div>

    <div class="star-container"><span class="fill percent75"></span><i class="far fa-star"></i></div>
</div>

<!-- Modal footer -->
  <div class="modal-footer">
  <button type="submit" class="btn btn-primary rating_save" >Save</button>
</form>

<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>
</div>


   @include('user.footer')
