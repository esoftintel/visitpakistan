@include('user.metadata1')

@include('user.new_menu')

<div class="hol-banner-text">
            <h3>
                Book the most  <span>Premium and exclusive hotels</span>
            </h3>
        </div>
    </section>
    <!-- Section Hotels -->
    <section id="section2" class="hol-checkin-content">
        <div class="container">
            <div class="col-md-12 hotel-book-form">
                <div class="row">
                    <div class="col align-self-start">
                        <span class="hol-serch-title">Search and book now</span>
                    </div>
                    <div class="col align-self-center">

                    </div>
                    <div class="col-md-3 align-self-end">
                        <span class="hol-sm-title">
                            Find exotic and affordable hotel
                            rooms instantly
                        </span>
                    </div>
                </div>
                <div class="row mr-adj">
                    <div class="col-md-6 col-sm-4">
                        <div class="form-group hol-booking-fields-1">
                            <label>Checkin city</label>
                            <input type="text" class="form-control" id="city" placeholder="New York (NYC)" />
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group hol-booking-fields-2">
                            <label>check in</label>
                            <input type="text" class="form-control" id="check-in" placeholder="10 may, 2017" />
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group hol-booking-fields-3">
                            <label>check out</label>
                            <input type="text" class="form-control" id="check-out" placeholder="15 may, 2017" />
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="row mr-adj">
                    <div class="col-md-6 col-sm-4">
                        <div class="form-group hol-booking-fields-4">
                            <label>Guests</label>
                            <input type="text" class="form-control" id="guest" placeholder="2 adult + 1 child" />
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <div class="form-group hol-booking-fields-5">
                            <label>rooms</label>
                            <input type="text" class="form-control" id="rooms" placeholder="1 Delux room" />
                            <i class="fas fa-key"></i>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group hol-booking-fields-6">
                            <button onclick="window.location.href = 'hotel_booking-result.html';">Search Now</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Section Hotels End -->
    <!-- Section Restaurant Slider -->
    <section id="" class="hotels-resorts">
        <div class="container-fluid">
            <div class="row mr-bottom">
                <div class="col-md-4 col-sm-6">
                    <div class="resort-text">
                        <h4>Experience the worlds exotic</h4>
                        <h3>
                            hOTELS<br />
                            & RESORTS
                        </h3>
                        
                    </div>
                    <div class="resort-inner-text">
                        <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</span>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="container-fluid">
                        <div class="row">
                                <?php if(count($post_data)>0){?>
                                    @foreach($post_data as $key)
                                        <div class="col-4">
                                            <div class="resort-img-box">
                                            @if($key->media_data)
                                                <a href="{{url('new_post_detail')}}/{{$key->ps_id}}">
                                                 <img class="lst_featimg" src="{{ asset('images/media')}}/{{$key->media_data['m_url']}}" alt="listing image"></a> 
                                            @endif
                                                <div class="resort-img-text">
                                                <h3 ><a href="{{url('new_post_detail')}}/{{$key->ps_id}}">{{$key->ps_title}}</a></h3>
                                                    <span>
                                                        <i class="fas fa-star">4.5</i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="row">
                                    {{ $post_data->links() }}            
                                    </div>
                                <?php } else{?><h4>Sorry! No results available related your search.</h4><?php } ?>
                        </div>
                            
                    </div>
                 
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-lg-1"></div>
                <div class="col-md-auto">
                    <div class="resort-pop-d">
                        <span><img src="images/resort-pop-img.png" /></span>
                        <h3>Let's Go Traveller</h3>
                        <h4>one stop for all taveller</h4>
                        <span class="resort-box-smtxt">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical<br /> Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</span>
                        <button>Know More</button>
                    </div>
                </div>
                <div class="col col-lg-2">
                    
                </div>
            </div>
        </div>
        
    </section>
    <!-- Section Restaurant slider End -->
    <!-- Section People Review -->
    <section id="" class="pep-review">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="pep-review-text">
                        <h3>
                            WHAT PEOPLE<br />
                            SAYING
                        </h3>
                        <h4>
                            FAVORITE TRAVELLERS AND<br />
                            THEIR EXPERIENCE
                        </h4>
                    </div>
                </div>
                <div class="col-md-9 col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="pep-review-detail">
                                            <span><img src="images/pep-review-img-1.png" /></span>
                                            <h3>Johanna Gross</h3>
                                            <span><i class="fas fa-quote-left"></i></span>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority</p>
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

    @include('user.new_footer')
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [4000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
    </script>

      
        <script>
        var element = document.getElementById('category_img');
        element.style.background = 'url({{asset("images/")}}/{{$ctimg->ct_image}})';
        </script>
      