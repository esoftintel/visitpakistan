@include('user.metadata')

@include('user.menu')
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
                            <div class="atbd_area_title">
                                <h4>{{$category_name}}  :{{$subcategory_name}}</h4>
                                <a href="{{url('category_show')}}"><button type="button" class="btn btn-link">Change</button></a>
                                
                            </div>
                        </div>
                        <div class="atbdb_content_module_contents">
                            <form enctype="multipart/form-data" method="post" action="{{route('post_submit')}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="ctid" value="{{$category_id}}">
                            <input type="hidden" name="sctid" value="{{$subcategory_id}}">
                            <?php $a=0; ?>
                                 @foreach($attribute_data as $key)
                                 <div class="col-sm-6 lefto">
                                <div class="form-group">
                                
                                        <!-- <label for="" name="attribute[<?php //echo $a; ?>]" value="{{$key->at_name}}" class="form-label">{{$key->at_name}}</label> -->
                                        <input type="hidden" name="attribute[<?php echo $a; ?>]" value="{{$key->at_name}}">
                                         
                                        
                                        <?php  if(count($key->attribute_value_data)==0){  ?>
                                            <label for="" name="attribute[<?php echo $a; ?>]" value="{{$key->at_name}}" class="form-label">{{$key->at_name}}</label>
                                            <input type="text" class="form-control" name="attribute_value[<?php echo $a++; ?>]" >
                                        <?php }else{ ?>
                                            <label for="" name="attribute[<?php echo $a; ?>]" value="{{$key->at_name}}" class="form-label">{{$key->at_name}}</label>
                                            <div class="select-basic">
                                             <select class="form-control"  name="attribute_value[<?php echo $a++; ?>]" required>
                                               @foreach($key->attribute_value_data as $key1)
                                                    <option value="{{$key1->atv_name}}">{{$key1->atv_name}}</option>
                                                @endforeach   
                                             </select>
                                             </div>  
                                        <?php } ?>
                                              
                                </div>
                                </div>
                                @endforeach
                              
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
                                <div class="form-group">
                                    <label class="form-label">Pricing *</label>
                                    <div class="pricing-options">
                                        <div class="custom-control custom-checkbox checkbox-outline checkbox-outline-primary">
                                            <input type="checkbox" class="custom-control-input" id="" value="one" checked>
                                            <label class="custom-control-label" for="price_one">Price [PKR]</label>
                                        </div>
                                        <input type="number" name="price" class="form-control" id="price" placeholder="Rs." required>
                                      
                                    </div>
                                  
                                </div>
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