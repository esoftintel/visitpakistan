
@include('user.metadata')

@include('user.menu')
<div class="bg_image_holder"><img src="{{ asset('images').'/'.$ctimg['ct_image']}}" alt=""></div>

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
                                    <form action="{{url('/search_category')}}" method="POST">
                                    @csrf
                                        <div class="form-group">
                                            <input type="text" name="search" placeholder="What are you looking for?" class="form-control">
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <div class="select-basic">
                                            <select class="search_fields form-control" name="category" id="search_attribute">
                                                    <option value="{{$ctid}}">{{$ctimg['ct_name']}}</option>
                                                    @foreach($category_data as $category)
                                                    <option value="{{$category->ct_id}}">{{$category->ct_name}}</option>
                                                    @endforeach  
                                                </select>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <div class="select-basic">
                                                <select class="form-control " name="subcategory" id="subcategory">
                                                <option value="">Select a subcategory</option>
                                                  
                                                </select>
                                            </div>
                                        </div><!-- ends: .form-group -->
                                       
                                        <div class="form-group" id="attribute_value">
                                           <!-- here search  attribute rander -->
                                        </div><!-- ends: .form-group -->
                                        <div class="form-group">
                                            <div class="select-basic">
                                                <select class="form-control " name="location">
                                                <option value="">Select a location</option>
                                                    @foreach($location as $l)
                                                        <option value="{{$l->ps_city}}">{{$l->ps_city}}</option>
                                                    @endforeach
                                                </select>
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
                                       
                                       
                                        <button type="submit" class="btn btn-block btn-gradient btn-gradient-one btn-md btn_search">Search</button>
                                    </form><!-- ends: form -->
                                </div><!-- ends: .default-ad-search -->
                            </div>
                        </div><!-- ends: .col-lg-4 -->
                        <div class="col-lg-8 order-lg-1 order-0">
                            <div class="row">
                            <?php if(count($post_data)>0){?>
                            @foreach($post_data as $key)
                        <div class=" col-sm-6">
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
                                                <img src="{{asset('/images/user')}}/{{$key->create_by['u_image']}}" class="author-img" style="width: 63px;height: 54px;" alt="Author Image">
                                                <span class="custom-tooltip">{{$key->create_by['name']}}</span>
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
                    <div class="row">
                    {{ $post_data->links() }}            
                    </div>
                            <?php } else{?>           
                            <h4>Sorry! No results available related your search.</h4>   
                            <?php } ?>
                            </div>
                           
                        </div><!-- ends: .col-lg-8 -->
                    </div>
                </div><!-- ends: .listing-items -->
            </div>
        </div>
    </section><!-- ends: .all-listing-wrapper -->
   


@include('user.footer')
<script>

var element, name, arr;
element = document.getElementById("exchange");
name = "header-breadcrumb";
arr = element.className.split(" ");
if (arr.indexOf(name) == -1) {
    element.className += " " + name;
}
// $('form select').on('change', function(){
//     $(this).closest('form').submit();
// });
</script>
 
