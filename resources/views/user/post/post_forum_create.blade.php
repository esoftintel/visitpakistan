@include('user.metadata')

@include('user.menu_user_dashbord')
<div class="bg_image_holder" style="background-image: url('../img/breadcrumb.png'); opacity: 1;"><img src="../img/breadcrumb.png" alt="img/breadcrumb1.jpg"></div>

       
<div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">Post an Ad</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Post an Ad</li>
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
                           
                        </div>
                        <div class="atbdb_content_module_contents">
                            <form enctype="multipart/form-data" method="post" action="{{route('forum_submit')}}">
                            {{ csrf_field() }}
                        
                          
                              
                           
                            <div class="col-sm-6 lefto">
                                <div class="form-group">
                                    <label for="location" class="form-label">Category </label>
                                    <div class="select-basic">
                                        <select class="form-control" name="category" id="category">
                                            @foreach($category as $key)
                                            <option>{{$key->ct_name}}</option>
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-6 lefto">
                                <div class="form-group">
                                    <label for="title" class="form-label">Title * </label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required>
                                </div>
                                </div>
                                <div class="col-sm-6 lefto">
                                <div class="form-group">
                                    <label for="desc" class="form-label"> Description *</label>
                                    <textarea id="desc" rows="8" class="form-control" name="detail" placeholder="Description" required></textarea>
                                </div>
                                </div>
                                <div class="col-sm-6 lefto">
                              
                                </div>
                                <div class="col-sm-6 lefto">
                                <div class="form-group">
                                    <label for="location" class="form-label">Location</label>
                                    <div class="select-basic">
                                        <select class="form-control" name="location" id="location">
                                            <option>Australia</option>
                                            <option>Sydney</option>
                                            <option>Newyork</option>
                                            <option>Los Angels</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <div class="col-sm-12" style="clear: both;">
                                <div class="form-group">
                                        <h4>CONFIRM YOUR LOCATION</h4>
                                        <div class="location-btns">
                                                <button class="copy-btn btn btn-sm btn-secondary" onclick="getLocation()">Get Current Location</button>
                                                <p id="locations"></p>
                                                  
                                                <p>Or</p>
                                                  
                                                    <label for="locationn" class="form-label">State</label>
                                                    <div class="select-basic">
                                                        <select class="form-control" name="state" id="locationn">
                                                            <option>Punjab</option>
                                                            <option>Sindh</option>
                                                            <option>Balochistan</option>
                                                            <option>KPK</option>
                                                        </select>
                                                    </div>

                                                  

                                                    <label for="address_address" class="form-label">Address</label>
                                                    <div class="">
                                                        <input type="text" id="address-input" class="form-control map-input" name="address" placeholder="Enter address" required/>
                                                        <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                                        <input type="hidden" name="address_longitude" id="address-longitude" value="0" />

                                                    </div>
                                                    <div id="address-map-container" style="width:100%;height:400px; ">
                                                    <div style="width: 100%; height: 100%" id="address-map"></div>
                                                </div>

                                        </div>
                                        </div>
                                       
                                        <div class="col-sm-12"></div>
                                    <div class="form-group">
                                                <h4>REVIEW YOUR DETAILS</h4>
                                                <?php if($user_data->u_image){?>
                                                 <img src="{{asset('images/user')}}/{{$user_data->u_image}}" class="image-place"/>
                                                <?php } else {?>
                                                    <img src="{{asset('images/user')}}/placeholder.png" class="image-place"/>
                                                <?php } ?> <div style="widows: 100%;"></div>
                                                    <br/>
                                                <label for="" class="form-label">Name</label>
                                                <div class="">
                                                    <input class="form-control"  value="{{$user_data->name}}" readonly />
                                                    
                                                </div>
                                                <br/>
                                                <label for="" class="form-label">Your Phone Number</label>
                                                <p>{{$user_data->u_phone}}</p>
                                       </div>
                                    </div>
                                   <button type="submit" class="btn btn-primary btn-lg listing_submit_btn">Submit listing</button>
                             </form>

                            <script>
                                    var x = document.getElementById("locationn");
                                    
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

            </div>
        </div>
    </section><!-- ends: .add-listing-wrapper -->

    <script>

var element, name, arr;
element = document.getElementById("exchange");
name = "header-breadcrumb";
arr = element.className.split(" ");
if (arr.indexOf(name) == -1) {
    element.className += " " + name;
}

$('form select').on('change', function(){
    $(this).closest('form').submit();
});
</script>

   
   @include('user.footer')