@include('user.metadata')

@include('user.menu')
       
<div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">Add Listing</h1>
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
    <section class="add-listing-wrapper border-bottom section-bg section-padding-strict">
        <div class="container">
            <div class="row">
            <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h2>INCLUDE SOME DETAILS</h2>
                            </div>
                            <div class="atbd_area_title">
                                <h4>{{$category_name}}  :{{$subcategory_name}}</h4>
                                <a href="{{url('category_show')}}"><button type="button" class="btn btn-link">Change</button></a>
                                
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <form enctype="multipart/form-data" action="/">

                                 @foreach($attribute_data as $key)
                                <div class="form-group">
                                        <label for="" class="form-label">{{$key->at_name}}</label>

                                        <div class="select-basic">
                                                <select class="form-control" id="custom-field" required>
                                                @foreach($key->attribute_value_data as $key1)
                                                    <option>{{$key1->atv_name}}</option>
                                                    
                                                 @endforeach   
                                                </select>
                                            </div>    
                                </div>
                                @endforeach
                              

                                <div class="form-group">
                                    <label for="title" class="form-label">Title * </label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="desc" class="form-label">Long Description *</label>
                                    <textarea id="desc" rows="8" class="form-control" placeholder="Description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tagline" class="form-label">Tagline</label>
                                    <input type="text" class="form-control" id="tagline" placeholder="Your Listing Motto or Tagline" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Pricing *</label>
                                    <div class="pricing-options">
                                        <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                            <input type="checkbox" class="custom-control-input" id="" value="one" checked>
                                            <label class="custom-control-label" for="price_one">Price [PKR]</label>
                                        </div>
                                        <input type="number" class="form-control" id="price" placeholder="Rs." required>
                                      
                                    </div>
                                  
                                </div>
                                <div class="form-group">
                                    <label for="short_desc" class="form-label">Short Description/Excerpt</label>
                                    <textarea id="short_desc" rows="5" class="form-control" placeholder="Short Description"></textarea>
                                </div>
                               
                              
                              
                                <div class="form-group">
                                    <label for="location" class="form-label">Location</label>
                                    <div class="select-basic">
                                        <select class="form-control" id="location">
                                            <option>Australia</option>
                                            <option>Sydney</option>
                                            <option>Newyork</option>
                                            <option>Los Angels</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label for="location" class="form-label">Upload upto 12 photos</label>
                                        <input type="file" class="form-control" id="price" name="uploadedfiles[]" accept="image/gif, image/jpeg, image/png" required multiple />
                                </div>
                                <div class="form-group">
                                        <h4>CONFIRM YOUR LOCATION</h4>
                                        <div class="location-btns">
                                                <button class="copy-btn btn btn-sm btn-secondary" onclick="getLocation()">Get Current Location</button>
                                                <p id="locations"></p>
                                                  
                                                <p>Or</p>
                                                  
                                                    <label for="location" class="form-label">State</label>
                                                    <div class="select-basic">
                                                        <select class="form-control" id="location">
                                                            <option>Punjab</option>
                                                            <option>Sindh</option>
                                                            <option>Balochistan</option>
                                                            <option>KPK</option>
                                                        </select>
                                                    </div>

                                                    <label for="location" class="form-label">City</label>
                                                    <div class="select-basic">
                                                        <select class="form-control" id="location">
                                                            <option>Lahore</option>
                                                            <option>Islamabad</option>
                                                            <option>Gujranwala</option>
                                                            <option>Peshawar</option>
                                                        </select>
                                                    </div>

                                                    <label for="" class="form-label">Address</label>
                                                    <div class="">
                                                        <input class="form-control" placeholder="Enter address" value="" required/>
                                                    </div>

                                        </div>


                                        <div class="form-group">
                                                <h4>REVIEW YOUR DETAILS</h4>

                                                <img src="img.png" class="image-place"/>
                                                <div style="widows: 100%;"></div>
                                                    <br/>
                                                <label for="" class="form-label">Name</label>
                                                <div class="">
                                                    <input class="form-control" placeholder="Your Name" value="Abdul Manan" required/>
                                                </div>
                                                <br/>
                                                <label for="" class="form-label">Your Phone Number</label>
                                                <p>+9234727216162</p>


                                        </div>


                                        
                                </div>

                              
                            </form>

                            <script>
                                    var x = document.getElementById("locations");
                                    
                                    function getLocation() {
                                      if (navigator.geolocation) {
                                        navigator.geolocation.getCurrentPosition(showPosition);
                                      } else { 
                                        x.innerHTML = "Geolocation is not supported by this browser.";
                                      }
                                    }
                                    
                                    function showPosition(position) {
                                      x.innerHTML = "Latitude: " + position.coords.latitude + 
                                      "<br>Longitude: " + position.coords.longitude;
                                    }
                                    </script>

                           




                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->


                <!--Manan End-->

                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-calendar-check-o"></span> Location (Map)</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <label class="not_empty form-label">Set the Marker by clicking anywhere on the Map</label>
                            <div class="map" id="map-one"></div>
                            <div class="cor-wrap form-group">
                                <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                    <input type="checkbox" class="custom-control-input" name="manual_coordinate" value="1" id="manual_coordinate">
                                    <label for="manual_coordinate" class="not_empty custom-control-label">Or Enter Coordinates (latitude and longitude) Manually. </label>
                                </div>
                            </div>
                            <div class="cor-form">
                                <div id="hide_if_no_manual_cor" class="clearfix row m-bottom-30">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="manual_lat" class="not_empty"> Latitude </label>
                                            <input type="text" name="manual_lat" id="manual_lat" class="form-control directory_field" placeholder="Enter Latitude eg. 24.89904">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mt-3 mt-sm-0">
                                        <div class="form-group">
                                            <label for="manual_lng" class="not_empty"> Longitude </label>
                                            <input type="text" name="manual_lng" id="manual_lng" class="form-control directory_field" placeholder="Enter Longitude eg. 91.87198">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group lat_btn_wrap m-top-15">
                                            <button class="btn btn-primary" id="generate_admin_map">Generate on Map
                                            </button>
                                        </div>
                                    </div> <!-- ends #hide_if_no_manual_cor-->
                                </div>
                                <div class="form-group">
                                    <div class="atbd_mark_as_closed custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                        <input type="checkbox" class="custom-control-input" name="hide_map" value="1" id="hide_map">
                                        <label for="hide_map" class="not_empty custom-control-label">Hide map for this listing.</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-calendar-check-o"></span> Images & Video</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <div id="_listing_gallery">
                                <div class="add_listing_form_wrapper" id="gallery_upload">
                                    <div class="form-group text-center">
                                        <!--  add & remove image links -->
                                        <p class="hide-if-no-js">
                                            <a href="#" class="upload-header btn btn-outline-secondary">Upload Preview Image</a>
                                        </p>
                                    </div>
                                    <div class="form-group text-center">
                                        <!-- image container, which can be manipulated with js -->
                                        <div class="listing-img-container">
                                            <img src="img/picture.png" alt="No Image Found">
                                            <p>No Images</p>
                                        </div>
                                        <!--  add & remove image links -->
                                        <p class="hide-if-no-js">
                                            <a href="#" id="listing_image_btn" class="btn btn-outline-primary m-right-10">
                                                <span class="dashicons dashicons-format-image"></span> Upload Slider Images
                                            </a><a id="delete-custom-img" class="btn btn-outline-danger hidden" href="#"> Remove Images</a><br>
                                        </p>
                                    </div>
                                </div>
                                <!--ends add_listing_form_wrapper-->
                            </div>
                            <div class="form-group m-top-30">
                                <label for="videourl" class="not_empty form-label">Video Url</label>
                                <input type="text" id="videourl" name="videourl" value="" class="form-control directory_field" placeholder="Only YouTube & Vimeo URLs.">
                            </div>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="atbd_term_and_condition_area custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                        <input type="checkbox" class="custom-control-input" name="listing_t" value="1" id="listing_t">
                        <label for="listing_t" class="not_empty custom-control-label">I Agree with all <a href="" id="listing_t_c">Terms & Conditions</a></label>
                    </div>
                    <div class="btn_wrap list_submit m-top-25">
                        <button type="submit" class="btn btn-primary btn-lg listing_submit_btn">Submit listing</button>
                    </div>
                </div><!-- ends: .col-lg-10 -->
            </div>
        </div>
    </section><!-- ends: .add-listing-wrapper -->



   
   @include('user.footer')