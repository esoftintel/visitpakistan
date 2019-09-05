@include('user.metadata1')

@include('user.new_menu')

    <!-- Section Hotels -->
    <section id="" class="hdetail-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="hotel-name">
                        <h3>{{$post_data->ps_title}}</h3>
                        <h4>{{$post_data->ps_lati}}</h4>
                    </div>
                    <div class="excellence">
                        <h3>"Excellence in Hopsitality"</h3>
                        <div class="hd-date">
                            <span><i class="fas fa-file-alt"></i></span>
                            <h4>{{$post_data->duration}}</h4>
                        </div>
                    </div>
                    <div class="hd-banner-social">
                        <h5></h5>
                        <ul>
                            <li><span>Share this hotel with others</span></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">
               
                    @foreach($post_data['media_all_data'] as $key)
                   
                        <div class="item">
                            <span><img src="{{ asset('images/media')}}/{{$key->m_url}}" width=870px; height=375px/></span>
                        </div>
                    @endforeach    
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Hotels End -->
    <!-- Section Restaurant Slider -->
    <section id="" class="hdetail-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 border-vertical">
                    <div class="profile-hdetail">
                        <span><img class="user_dp" src="{{asset('images/user')}}/{{$post_data['create_by']->u_image}}" /></span>
                        <div class="pheading">
                            <h3>{{$post_data['create_by']->name}}</h3>
                            <p>{{$post_data['create_by']->u_about}}</p>
                            <input type="hidden" id="user_id" value="{{session('user_data')}}">
                            <input type="hidden" id="post_id" value="{{$post_data->ps_id}}">
                            <input type="hidden" id="token" value="{{csrf_token()}}">
                            <button>Know More</button>
                        </div>
                    </div>
                    <!-- Profile Hotel Detail End -->
                    <div class="all-tags">
                        <h3>All Tags</h3>
                        <div class="tags-btn">
                            <ul>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Wildlife</a></li>
                                <li><a href="#">Treck</a></li>
                                <li><a href="#" class="active">Documentary</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Mountains</a></li>
                                <li><a href="#">Wildlife</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Wildlife</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- All Tags End -->
                    <div class="recent-post">
                        <h3>Related Things</h3>
                        <ul>
                        @foreach($related_data as $key)
                            <li style="height: 49px;">
                                <div class="recent-post-links">
                                    <span><img src="{{asset('images/media')}}/{{$key['media_data']->m_url}}" width=83px height=68px /></span>
                                   <a href="{{url('new_post_detail')}}/{{$key->ps_id}}"><h4>{{$key->ps_title}}</h4></a>
                                </div>
                            </li>
                        @endforeach    
                            <!-- <li>
                                <div class="recent-post-links">
                                    <span><img src="images/recent-post-thumb.jpg" /></span>
                                    <h4>A Taste of Adventure & Spice in Thekkady with Carmelia Haven Resort</h4>
                                </div>
                            </li>
                            <li>
                                <div class="recent-post-links">
                                    <span><img src="images/recent-post-thumb.jpg" /></span>
                                    <h4>Is Tso Moriri Lake in Leh better than Pangong Lake?</h4>
                                </div>
                            </li>
                            <li>
                                <div class="recent-post-links">
                                    <span><img src="images/recent-post-thumb.jpg" /></span>
                                    <h4>7 Things Which Can Go Wrong During a Holiday</h4>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                    <!-- Recent Post End -->
                </div>
                <div class="col-md-8">
                    <div class="hotel-features">
                        <h3>Features</h3>
                        <ul>
                        @foreach($post_data['tag_are'] as $key)
                            <li>
                                <i class="fas fa-wifi"></i>
                                <p>{{$key->tg_name}}</p>
                            </li>
                         @endforeach   
                            <li>
                                <i class="fas fa-hot-tub"></i>
                                <p>Hot Tub</p>
                            </li>
                            <li>
                                <i class="fas fa-hot-tub"></i>
                                <p>Hot Sauna</p>
                            </li>
                            <li>
                                <i class="fas fa-hot-tub"></i>
                                <p>Steamroom</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Hotel Feature End -->
                    <div class="hotel-overview">
                        <h3>Overview</h3>
                        <p> {{$post_data->ps_detail}}</p>
                    </div>
                    <!-- Hotel Overview End -->
                    <div class="hotel-tags">
                        <h3>Tags</h3>
                        <div class="select-tags-btn">
                            <ul>
                            @foreach($post_data['feature_are'] as $key)
                                <li><a href="#">{{$key->fe_name}}</a></li>
                            @endforeach
                                <li><a href="#">Fee cancellation</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Hotel Tags End -->
                    <div class="hotel-gallery">
                        <h3>Take a look at the Gallery</h3>
                        
                        <div class='row'>
                        @foreach($post_data['media_all_data'] as $key)
                           
                               <div class='col-lg-3'> <img src="{{ asset('images/media')}}/{{$key->m_url}}"width=170px; height=113px /></div>
                            
                        
                        @endforeach  
                      
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hotel-divider">
                <div class="col-md-4 post-react">
                    <h3>React this news</h3>
                </div>
                <div class="col-md-8">
                    <div class="post-react-icon">
                        <ul>
                            <li>
                                <i class="far fa-smile fa-3x active like" data-id="1"></i>
                                <p>Like It</p>
                            </li>
                            <li>
                                <i class="far fa-kiss-wink-heart fa-3x like" data-id="2"></i>
                                <p>Love It</p>
                            </li>
                            <li>
                               <i class="far fa-meh fa-3x like" data-id="3"></i>
                                <p>So So</p>
                            </li>
                            <li>
                                <i class="far fa-frown fa-3x like" data-id="0"></i>
                                <p>Not Like It</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Restaurant slider End -->
    <!-- Section People Review -->
    <section id="" class="comment-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 pad-adjt">
                    <div class="people-reaction">
                        <h3>Peoples reactions</h3>
                        <ul>
                            <li>
                                <i class="far fa-smile fa-3x"></i>
                                <span>{{$post_data['rating_like']}} People likes</span>
                            </li>
                            <li>
                                <i class="far fa-kiss-wink-heart fa-3x"></i>
                                <span>{{$post_data['rating_love']}} People loves</span>
                            </li>
                            <li>
                                <i class="far fa-meh fa-3x"></i>
                                <span>
                                {{$post_data['rating_soso']}} People
                                    feels so so
                                </span>
                            </li>
                            <li>
                                <i class="far fa-frown fa-3x"></i>
                                <span>{{$post_data['rating_dislike']}} People did't like it</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 pad-adjt">
                    <div class="comment-main">
                        <div class="comment-reaction">
                            <div class="row">
                                <div class="col">
                                    <h3>{{$post_data['comment_total']}}</h3>
                                    <h4>
                                        Favourte
                                        Comments
                                    </h4>
                                </div>
                                <div class="vertical-divider"></div>
                                <div class="col">
                                    <h3>{{$post_data['rating_total']}}</h3>
                                    <h4>
                                        Reactions
                                    </h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 hcom-text">
                                    <p>These are the top most comments of the week which has got most of the likes and reactions and reply.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col comment-list">
                                    <ul>
                                    @foreach($post_data['user_comments'] as $key)
                                        <li>
                                            <div class="comment-box">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <img class="user_dp" src="{{asset('images/user')}}/{{$key->u_image}}" />
                                                    </div>
                                                    <div class="col-9">
                                                        <h4>{{$key->name}}</h4>
                                                        <h5>Traveller</h5>
                                                        <span>{{$key->cm_comment}}</span>
                                                        <h6>Reply</h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        @endforeach
                                       
                                        <li class="load-btn">
                                            <button>Load More</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 pad-adjt">
                    <div class="write-comment">
                        <h3>
                            Write your
                            comment here
                        </h3>
<!--
                        <div class="form-group">
                            <label for="email">Email id</label>
                            <input type="text" class="form-control" id="email">
                        </div>
-->
                        <div class="form-group">
                            <label for="cmt">Write your comment</label>
                            <input type="hidden" id="comment_token" value="{{csrf_token()}}">
                            <textarea class="text-box" id="comment_txt" placeholder="Write Comment Here!"></textarea>
                        </div>
                        <button class="btn-mrg" id="comment_submit">Submit Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section People Review End -->
    <!-- Section Footer Start -->

    @include('user.new_footer')
    
    <script>
    var elem = document.getElementById('category_img');
    elem.classList.add('head-height2');
    </script>
   
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true
        });
        $('.play').on('click', function () {
            owl.trigger('play.owl.autoplay', [5000])
        })
        $('.stop').on('click', function () {
            owl.trigger('stop.owl.autoplay')
        })
    </script>
   