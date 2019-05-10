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
                                <h4><span class="la la-user"></span>General Information</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <form action="/">
                                <div class="form-group">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="desc" class="form-label">Long Description</label>
                                    <textarea id="desc" rows="8" class="form-control" placeholder="Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tagline" class="form-label">Tagline</label>
                                    <input type="text" class="form-control" id="tagline" placeholder="Your Listing Motto or Tagline" required>
                                </div>
                          
                                <div class="form-group">
                                    <label for="short_desc" class="form-label">Short Description/Excerpt</label>
                                    <textarea id="short_desc" rows="5" class="form-control" placeholder="Short Description"></textarea>
                                </div>
                               
                              
                               
                               
                            </form>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
                <div class="col-lg-10 offset-lg-1">
                    <div class="atbd_content_module">
                        <div class="atbd_content_module__tittle_area">
                            <div class="atbd_area_title">
                                <h4><span class="la la-user"></span>Contact Information</h4>
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <form action="/">
                                <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary m-bottom-20">
                                    <input type="checkbox" class="custom-control-input" id="hide_contace_info">
                                    <label class="custom-control-label" for="hide_contace_info">Check it to hide contact
                                        information for this listing</label>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" placeholder="Listing Address eg. Houghton Street London WC2A 2AE UK" id="address" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number" class="form-label">Phone Number</label>
                                    <input type="text" placeholder="Phone Number" id="phone_number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact_email" class="form-label">Email</label>
                                    <input type="email" id="contact_email" class="form-control" placeholder="Enter Email" required>
                                </div>
                                
                               
                            </form>
                        </div><!-- ends: .atbdb_content_module_contents -->
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->
        
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