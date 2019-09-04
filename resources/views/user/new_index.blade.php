@include('user.metadata1')

@include('user.new_menu')


 <!-- Section Hotels -->
 @foreach($post_data as $key)
 <section id="section2" class="hotels">
        <div class="container-fluid">
            <div class="vp-route-id">
                <img src="{{ asset('images') }}/{{$key->ct_icone}}" />
                <span class="vp-line-between-icons">
                    <span class="vp-line-between-icons-inner"></span>
                </span>
            </div>
            <div class="blur-img-1" style="background-image: url('{{asset('images') }}//{{$key->ct_image}}');"></div>
            <div class="container bg-white">
                <div class="row">
                  <div class="col-md-5 col-sm-12">
                        <div class="hotel-content">
                            <h3>{{$key->ct_name}}</h3>
                            <span>
                                Experience the most DESI AND LUXURIOUS<br />
                                HOTELS WE HAVE TO OFFER.
                            </span>
                            <div class="inner-content">
                                <h4>
                                    Great deals<br />
                                    and great offers
                                </h4>
                                <span><img src="{{ asset('new_vendor_assets/images/hotel-rounde-img.png') }}" /></span>
                                
                                <span><img src="{{ asset('new_vendor_assets/images/hotel-rounde-img.png') }}" /></span>
                            </div>
                            <div class="vn-btn">
                                <a href="#">Get something more!</a>
                                <span><a href="#">Visit Now</a></span>
                            </div>
                        </div>
                    </div>
               
                
                    <div class="col-md-7 col-sm-12">
                        <div class="container">
                            <div class="row">
                            @foreach($key->post_record as $key1)
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="{{ asset('images/media') }}/{{$key1->media_data->m_url}}" style="width:305px ; height:200px" alt="">
                                        <div class="img-text">
                                           <h3><a href="{{url('new_post_detail')}}/{{$key1->ps_id}}">{{$key1->ps_title}}</a></h3>
                                        </div>
                                        <div class="overlay">
                                            <h2><a href="{{url('new_post_detail')}}/{{$key1->ps_id}}"> {{$key1->ps_title}}</a><br />
                                                <span>
                                                    
                                                    <a href="#">
                                                        <span class="star-icon">
                                                            <span><i class="far fa-star checked"></i></span>
                                                            <span><i class="far fa-star checked"></i></span>
                                                            <span><i class="far fa-star"></i></span>
                                                        </span>
                                                    </a>
                                                </span>
                                            </h2>
                                            
                                        </div>
                                    </div>
                                
                                </div>
                                @endforeach 

                            </div>
                            
                            <span class="vm-btn"><a href="#">View More</a></span>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- Section Hotels End -->
  

    <!-- Section Business Trip -->
    <section id="section7" class="main-business-trip">
        <div class="container-fluid">
            <div class="vp-route-id circle-bg-5">
                <img src="{{ asset('new_vendor_assets/images/icons/sm-round-icon-6.png') }}" />
                <span class="vp-line-between-icons">
                    <span class="vp-line-between-icons-inner"></span>
                </span>
            </div>
            <div class="blur-img-6"></div>
            <div class="container bg-white">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <div class="hotel-content business-trip-left">
                            <h3>Business <br />Trip</h3>
                            <span>
                                Experience the most DESI AND LUXURIOUS<br />
                                HOTELS WE HAVE TO OFFER.
                            </span>
                            <div class="inner-content">
                                <h4>
                                    Great deals<br />
                                    and great offers
                                </h4>
                                <span><img src="{{ asset('new_vendor_assets/images/hotel-rounde-img.png') }}" /></span>
                                <span><img src="{{ asset('new_vendor_assets/images/hotel-rounde-img.png') }}" /></span>
                            </div>
                            <div class="vn-btn vn-btn-yellow">
                                <a href="#">Get something more!</a>
                                <span><a href="#">Visit Now</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="container">
                            <div class="business-trip">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="btn-switch">
                                            <label class="active" data-toggle="collapse">1 WAY</label>
                                            <label class="">ROUND TRIP</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="book-title">
                                            <h3>instant cab booking system <br />domestic and internationl cab</h3>
                                        </div>
                                    </div>

                                    <!-- Force next columns to break to new line -->
                                    <div class="w-100"></div>

                                    <div class="col-md-3 col-sm-6">
                                        <div class="booking-fields-1">
                                            <label>Destination</label>
                                            <input type="text" placeholder="Search Your Destination" />
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="booking-fields-2">
                                            <label>journey date</label>
                                            <input type="text" placeholder="Today" />
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-3 col-sm-6">
                                        <div class="booking-fields-1">
                                            <label>Passengers</label>
                                            <input type="text" placeholder="2 adult + 1 child" />
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="booking-fields-2">
                                            <label>select cab</label>
                                            <select class="form-control" id="sel1">
                                                <option>mercedes sedan</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="ad-search">
                                            <a href="#">Advance search</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="search-now">
        <a href="#">search now</a>
    </div>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section Business Trip End -->


   
@include('user.new_footer')
