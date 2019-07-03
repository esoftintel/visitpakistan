
@include('user.metadata')

@include('user.menu')


<div class="bg_image_holder" style="background-image: url(&quot;img/breadcrumb1.jpg&quot;); opacity: 1;"><img src="{{asset('images/user')}}/{{$user_record->u_banner}}" alt="img/breadcrumb1.jpg"></div>




        
<div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">Dashboard</h1>
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
    <section class="dashboard-wrapper section-bg p-bottom-70">
        <div class="dashboard-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard-nav-area">
                            <ul class="nav" id="dashboard-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="all-listings" data-toggle="tab" href="#listings" role="tab" aria-controls="listings" aria-selected="true">My Listings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="faborite-listings" data-toggle="tab" href="#favorite" role="tab" aria-controls="favorite" aria-selected="false">Favorite Listing</a>
                                </li>
                            </ul>
                            <div class="nav_button">
                                <a href="{{url('/category_show')}}" class="btn btn-primary"><span class="la la-plus"></span> Add Listing</a>
                                <a href="" class="btn btn-secondary">Log Out</a>
                            </div>
                        </div>
                    </div><!-- ends: .col-lg-12 -->
                </div>
            </div>
        </div><!-- ends: .dashboard-nav -->
        <div class="tab-content p-top-100" id="dashboard-tabs-content">
            <div class="tab-pane fade show active" id="listings" role="tabpanel" aria-labelledby="all-listings">
                <div class="container">
                    <div class="row">
                    @if(count($post_data)>0 )
                    
                        @foreach($post_data as $psd)
                        <div class="col-lg-4 col-sm-6">
                            <div class="atbd_single_listing atbd_listing_card">
                                <article class="atbd_single_listing_wrapper ">
                                    <figure class="atbd_listing_thumbnail_area">
                                        <div class="atbd_listing_image">
                                            <a href=""><img src="{{asset('images/media')}}/{{$psd->media_data['m_url']}}" alt="listing image"></a>
                                        </div>
                                        <figcaption class="atbd_thumbnail_overlay_content">
                                            <div class="atbd_upper_badge">
                                                <span class="atbd_badge atbd_badge_featured">{{$psd->ps_type}}</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="atbd_listing_info">
                                        <div class="atbd_content_upper">
                                            <div class="atbd_dashboard_tittle_metas">
                                                <h4 class="atbd_listing_title">
                                                    <a href="">{{$psd->ps_title}}</a>
                                                </h4>
                                            </div><!-- ends: .atbd_dashboard_tittle_metas -->
                                            <div class="atbd_card_action">
                                                <div class="atbd_listing_meta">
                                                    <span class="atbd_meta atbd_listing_rating">4.5<i class="la la-star"></i></span>
                                                </div><!-- ends: .atbd listing meta -->
                                                <div class="db_btn_area">
                                                    <div class="dropup edit_listing">
                                                        <a href="#" role="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Edit</a>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href=""><span class="la la-edit color-primary"></span> Edit Your Listing</a>
                                                            <a class="dropdown-item" href=""><span class="la la-money color-secondary"></span> Change Your Plan</a>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="directory_remove_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-item-remove">Delete</a>
                                                </div>
                                                <!--ends .db_btn_area-->
                                            </div>
                                        </div><!-- end .atbd_content_upper -->
                                        <div class="atbd_listing_bottom_content">
                                            <div class="listing-meta">
                                                <p><span>Plan Name:</span> Basic Plan</p>
                                                <p><span>Expiration:</span> February 13, 2020</p>
                                                <p><span>Listing Status:</span> Published</p>
                                            </div>
                                        </div><!-- end .atbd_listing_bottom_content -->
                                    </div><!-- ends: .atbd_listing_info -->
                                </article>
                            </div><!-- ends: .atbd_single_listing -->
                        </div><!-- ends: .col-lg-4 -->
                        @endforeach
                     @else
                     <h4 style="color:#999; text-align:center">  You don't have ad listing right now, Click on Ad Listing to create one.</h4>
                     @endif
                    </div>
                </div>
            </div><!-- ends: .tab-pane -->
            <div class="tab-pane fade p-bottom-30" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-5 mb-lg-0">
                        <br/><br/>
                            <div style="width:150px;height: 150px; border: 1px solid whitesmoke ;text-align: left;position: relative" id="image">
                                <img width="100%" height="100%" id="preview_image" src="{{asset('images/user')}}/{{$user_record->u_image  !== '' ? $user_record->u_image : 'placeholder.png' }}">
                                <i id="loading" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
                            </div>
                            <p class="change-txt">
                                <a href="javascript:changeProfile()" style="text-decoration: none;">
                                    <i class="glyphicon glyphicon-edit"></i> Change Profile
                                </a>&nbsp;&nbsp;
                              
                            </p>
                            <input type="file" id="file" style="display: none"/>
                            <input type="hidden" id="file_name"/>


                            <br/><br/>
                            <div style="width:150px;height: 150px; border: 1px solid whitesmoke ;text-align: left;position: relative" id="image">
                                <img width="100%" height="100%" id="preview_image_banner" src="{{asset('images/user')}}/{{$user_record->u_banner !==null ? $user_record->u_banner : 'placeholder.png' }}">
                                <i id="loading_banner" class="fa fa-spinner fa-spin fa-3x fa-fw" style="position: absolute;left: 40%;top: 40%;display: none"></i>
                            </div>
                            <p class="change-txt">
                                <a href="javascript:changeProfile_banner()" style="text-decoration: none;">
                                    <i class="glyphicon glyphicon-edit"></i> Change Banner
                                </a>&nbsp;&nbsp;
                              
                            </p>
                            <input type="file" id="file_banner" style="display: none"/>
                            <input type="hidden" id="file_name_benner"/>


                        </div>

                        
                        <div class="col-lg-9 col-md-8">
                            <div class="atbd_author_module">
                                <div class="atbd_content_module">
                                    <div class="atbd_content_module__tittle_area">
                                        <div class="atbd_area_title">
                                            <h4><span class="la la-user"></span>My Profile</h4>
                                        </div>
                                    </div>
                                    <div class="atbdb_content_module_contents">
                                        <div class="user_info_wrap">
                                            <!--Full name-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                    <form enctype="multipart/form-data" method="post" action="{{route('user_update')}}">
                                                    {{ csrf_field() }}
                                                        <label for="full_name" class="not_empty"> Name</label>
                                                        <input class="form-control" type="text" placeholder="Please You'r Name" name="name" value="{{$user_record->name}}" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="user_name" class="not_empty">Username</label>
                                                        <input class="form-control" id="user_name" type="text" disabled="disabled" value="{{$user_record->email}}">
                                                        <p>(Username can not be changed)</p>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone" class="not_empty">Cell Number</label>
                                                        <input class="form-control" type="tel" placeholder="Phone number" name="phone" value="{{$user_record->u_phone}}" id="phone">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address" class="not_empty">Address</label>
                                                        <input class="form-control" name="address" type="text" value="{{$user_record->u_address}}" placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="new_pass" class="not_empty">New Password</label>
                                                        <input name="new_pass" class="form-control" type="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="confirm_pass" class="not_empty">Confirm New Password</label>
                                                        <input name="confirm_pass" class="form-control" type="password" placeholder="Re-enter Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="facebook" class="not_empty">Facebook</label>
                                                        <input id="facebook" class="form-control" type="url" name="facebook" value="{{$user_record->u_facebook}}" placeholder="Facebook URL">
                                                        <p>Leave it empty to hide</p>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="google" class="not_empty">Google+</label>
                                                        <input id="google" class="form-control" type="url" name="google" value="{{$user_record->u_googleaccount}}" placeholder="Google+ URL">
                                                        <p>Leave it empty to hide</p>
                                                    </div>
                                                </div>
                                         
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="bio" class="not_empty">About Author</label>
                                                        <textarea class="wp-editor-area form-control" rows="6" autocomplete="off" name="bio" id="bio" placeholder="Describe yourself"> {{$user_record->u_about}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--ends social info .row-->
                                            <button type="submit" class="btn btn-primary" id="update_user_profile">Save Changes</button>
                                        </div>
                                     </form>
                                    </div>
                                </div>
                            </div><!-- ends: .atbd_author_module -->
                        </div>
                    </div>
                </div>
            </div><!-- ends: .tab-pane -->
            <div class="tab-pane fade p-bottom-30" id="favorite" role="tabpanel" aria-labelledby="faborite-listings">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="atbd_saved_items_wrapper">
                                <div class="atbd_content_module">
                                    <div class="atbd_content_module__tittle_area">
                                        <div class="atbd_area_title">
                                            <h4><span class="la la-list"></span>My Fovarite Listings</h4>
                                        </div>
                                    </div>
                                    <div class="atbdb_content_module_contents">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Listing Name</th>
                                                        <th scope="col">Category</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($like_data as $lk)
                                                    <tr>
                                                        <td><a href="{{url('/post_detail')}}/{{$lk->ps_id}}">{{$lk->ps_title}}</a></td>
                                                        <td><a href=""><img src="{{asset('images')}}/{{$lk->category_data['ct_icone']}}" style="height:20px; width:20px" alt="listing image">{{$lk->category_data['ct_name']}}</a></td>
                                                        <td><a href="" class="remove-favorite"><span class="la la-times"></span></a></td>
                                                    </tr>
                                                    @endforeach
                                                  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- ends: .atbdb_content_module_contents -->
                                </div>
                            </div><!--  ends: .atbd_saved_items_wrapper -->
                        </div><!-- ends: .col-lg-12 -->
                    </div>
                </div>
            </div><!-- ends: .tab-pane -->
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal-item-remove" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center p-top-40 p-bottom-50">
                        <span class="la la-exclamation-circle color-warning"></span>
                        <h1 class="display-3 m-bottom-10">Are you sure?</h1>
                        <p class="m-bottom-30">Do you really want to delete this item?</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary m-right-15" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger">Yes, Delete it!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>

var element, name, arr;
element = document.getElementById("exchange");
name = "header-breadcrumb";
arr = element.className.split(" ");
if (arr.indexOf(name) == -1) {
    element.className += " " + name;
}
</script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/2c7a93b259.js"></script>
<script>
    function changeProfile() {
        $('#file').click();
    }
    $('#file').change(function () {
        if ($(this).val() != '') {
            upload(this);

        }
    });
    function upload(img) {
        var form_data = new FormData();
        form_data.append('file', img.files[0]);
        form_data.append('_token', '{{csrf_token()}}');
        $('#loading').css('display', 'block');
        $.ajax({
            url: "{{url('ajax-image-upload')}}",
            data: form_data,
             type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#preview_image').attr('src', '{{asset('images/user/noimage.jpg')}}');
                    alert(data.errors['file']);
                }
                else {
                    $('#file_name').val(data);
                    var imgt ='{{asset('images/user')}}/'+data;
                    var ig = imgt.replace(/\s/g, "");
                    $('#preview_image').attr('src', ''+ig);
                }
                $('#loading').css('display', 'none');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
                $('#preview_image').attr('src', '{{asset('images/noimage.jpg')}}');
            }
        });
    }
    function removeFile() {
        if ($('#file_name').val() != '')
            if (confirm('Are you sure want to remove profile picture?')) {
                $('#loading').css('display', 'block');
                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', '{{csrf_token()}}');
                $.ajax({
                    url: "ajax-remove-image/" + $('#file_name').val(),
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#preview_image').attr('src', '{{asset('images/noimage.jpg')}}');
                        $('#file_name').val('');
                        $('#loading').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
            }
    }
</script>
    <script>
    function changeProfile_banner() {
        $('#file_banner').click();
    }
    $('#file_banner').change(function () {
        if ($(this).val() != '') {
            upload_banner(this);

        }
    });
    function upload_banner(img) {
        var form_data = new FormData();
        form_data.append('file_banner', img.files[0]);
        form_data.append('_token', '{{csrf_token()}}');
        $('#loading_banner').css('display', 'block');
        $.ajax({
            url: "{{url('ajax-image-upload_banner')}}",
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#preview_image_banner').attr('src', '{{asset('images/user/noimage.jpg')}}');
                    alert(data.errors['file']);
                }
                else {
                    $('#file_name_banner').val(data);
                    var imgt ='{{asset('images/user')}}/'+data;
                    var ig = imgt.replace(/\s/g, "");
                    $('#preview_image_banner').attr('src', ''+ig);
                }
                $('#loading_banner').css('display', 'none');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
                $('#preview_image_banner').attr('src', '{{asset('images/noimage.jpg')}}');
            }
        });
    }
    function removeFile_banner() {
        if ($('#file_name_banner').val() != '')
            if (confirm('Are you sure want to remove profile picture?')) {
                $('#loading_banner').css('display', 'block');
                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', '{{csrf_token()}}');
                $.ajax({
                    url: "ajax-remove-image_benner/" + $('#file_name_banner').val(),
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#preview_image_banner').attr('src', '{{asset('images/noimage.jpg')}}');
                        $('#file_name_banner').val('');
                        $('#loading_banner').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
            }
    }
</script>


@include('user.footer')
