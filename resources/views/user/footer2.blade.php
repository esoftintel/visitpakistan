<footer class="footer-three footer-grey p-top-95">
        <div class="footer-top p-bottom-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-6">
                        <div class="widget widget_pages">
                            <h2 class="widget-title">Company Info</h2>
                            <ul class="list-unstyled">
                                <li class="page-item"><a href="">About Us</a></li>
                                <li class="page-item"><a href="">Conact Us</a></li>
                                <li class="page-item"><a href="">Our Listings</a></li>
                                <li class="page-item"><a href="">Our Pricings</a></li>
                                <li class="page-item"><a href="">Support</a></li>
                                <li class="page-item"><a href="">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-3 d-flex justify-content-lg-center  col-sm-6">
                        <div class="widget widget_pages">
                            <h2 class="widget-title">Helpful Links</h2>
                            <ul class="list-unstyled">
                                <li class="page-item"><a href="">GawadarHub</a></li>
                                <li class="page-item"><a href="">Sign In</a></li>
                                <li class="page-item"><a href="">How it Work</a></li>
                                <li class="page-item"><a href="">Advantages</a></li>
                                <li class="page-item"><a href="">GawadarHub App</a></li>
                                <li class="page-item"><a href="">Packages</a></li>
                            </ul>
                        </div>
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget widget_social">
                            <h2 class="widget-title">Connect with Us</h2>
                            <ul class="list-unstyled social-list">
                                <li><a href=""><span class="mail"><i class="la la-envelope"></i></span> Contact Support</a></li>
                                <li><a href=""><span class="twitter"><i class="fab fa-twitter"></i></span> Twitter</a></li>
                                <li><a href=""><span class="facebook"><i class="fab fa-facebook-f"></i></span> Facebook</a></li>
                                <li><a href=""><span class="instagram"><i class="fab fa-instagram"></i></span> Instagram</a></li>
                                <li><a href=""><span class="gplus"><i class="fab fa-google-plus-g"></i></span> Google+</a></li>
                            </ul>
                        </div><!-- ends: .widget -->
                    </div><!-- ends: .col-lg-3 -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget widget_text">
                            <h2 class="widget-title">Gawadarhub on Mobile</h2>
                            <div class="textwidget">
                                <p>Download the GawadarHub app today so you can find your events anytime, anywhere.</p>
                                <ul class="list-unstyled store-btns">
                                    <li><a href="" class="btn-gradient btn-gradient-two btn btn-md btn-icon icon-left"><span class="fab fa-apple"></span> App Store</a></li>
                                    <li><a href="" class="btn btn-dark btn-md btn-icon btn-icon"><span class="fab fa-android"></span> Google Play</a></li>
                                </ul>
                            </div>
                        </div><!-- ends: .widget -->
                    </div><!-- ends: .col-lg-3 -->
                </div>
            </div>
        </div><!-- ends: .footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-bottom--content">
                            <a href="" class="footer-logo"><img src="{{ asset('img/logo.png')}}" alt=""></a>
                            <p class="m-0 copy-text">©2019 Gwadar Hub. Made with <span class="la la-heart-o"></span> by <a href="http://esoftintel.com">E-soft Intel.</a></p>
                            <ul class="list-unstyled lng-list">
                                <!-- <li><a href="">English</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ends: .footer-bottom -->
    </footer><!-- ends: .footer -->

  
    <div class="modal fade" id="login_modal"  role="dialog" aria-labelledby="login_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login_modal_label"><i class="la la-lock"></i> Log In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="{{ url('/userlogin')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>


                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 ">
                            <button type="submit" name="submit" class="btn btn-block btn-lg btn-gradient btn-gradient-two">Login</button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
                    <div class="form-excerpts">
                        <ul class="list-unstyled">
                            <li>Not a member? <a href="">Sign up</a></li>
                            <li><a href="">Recover Password</a></li>
                        </ul>
                        <div class="social-login">
                            <span>Or connect with</span>
                            <p><a href="" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="signup_modal" tabindex="-1" role="dialog" aria-labelledby="signup_modal_label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup_modal_label"><i class="la la-lock"></i> Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data" action="{{ url('/usersignup') }}">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name='name' placeholder="Name" required>
                        <input type="email" class="form-control" name='email' placeholder="Email" required>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        <button type="submit" name="submit" class="btn btn-block form-control btn-lg btn-gradient btn-gradient-two">Sign Up</button>
                    </form>
                    <div class="form-excerpts">
                        <ul class="list-unstyled">
                            <li>Already a member?  <a href="" class="access-link" data-toggle="modal" data-target="#login_modal">Login</a></li>
                            <li><a href="">Recover Password</a></li>
                        </ul>
                        <div class="social-login">
                            <span>Or Signup with</span>
                            <p><a href="" class="btn btn-outline-secondary"><i class="fab fa-facebook-f"></i> Facebook</a><a href="" class="btn btn-outline-danger"><i class="fab fa-google-plus-g"></i> Google</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxs2Gu24f_hlwSuG-E7tRL9kJS6dITftQ&libraries=places&callback=initialize" async defer></script>
     -->

    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    
    <script src="{{ url('/js/mapInput.js') }}"></script>
    <!-- inject:js-->
    <script src="{{ asset('vendor_assets/js/jquery/jquery-1.12.3.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/bootstrap/popper.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('vendor_assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('theme_assets/js/locator.js') }}"></script>
    <script src="{{ asset('theme_assets/js/main.js') }}"></script>
    <script src="{{ asset('theme_assets/js/map.js') }}"></script>
    <script src="{{ url('/js_img/jquery.js') }}"></script>
    <script src="{{ url('/js_img/dropzone.js') }}"></script>
    <script src="{{ url('/js_img/dropzone-config.js') }}"></script>
    <!-- endinject-->


    <script>
    
        $(".dill").on('click',function(){
            var postid=$(this).attr("data-id");
            var userid = $('#user_id').val();
            alert(token);
            if(postid)
            {
                $.ajax({
                    url:'/like',
                    type:'POST',
                    dataType:'json',
                    data: { post_id: postid, user_id : userid , "_token": $('#token').val()} ,
                    success:function(data){
                    
                        console.log(data); 
                        //$('#subcategory').empty();
                    }
                    });
            }
        });
                
    </script>
             <script>
             $(document).ready(function(){
    $("search_attribute").trigger("click");
});
                $(document).ready(function(){
                    $('#search_attribute').on('change',function(){
                        var category_id=$(this).val();
                        alert(category_id);
                        if(category_id)
                        {
                            $.ajax({
                                url:'/search_attribute/'+category_id,
                                type:'GET',
                                dataType:'json',
                                success:function(data){
                                   //var select=document.getElementById('subcategory'),
                                    console.log(data); 
                                    $('#subcategory').empty();
                                    $('#attribute').empty();
                                    $('#attribute_value').empty();
                                    var res='';
                                    var i=0;
                                    $.each(data,function(key,value){
                                         $('#subcategory').append('<option value="'+value.st_id+'">'+value.st_name+'</option>');
                                            $.each(value.its_attribute,function(key,value){
                                                res += '<p class="d-flex justify-content-between"><span style="color:green"><input type="hidden" name="attri['+i+']" value="'+value.at_name+'">'+value.at_name+':</span></p><div class="select-basic"><select class="form-control " name="attribute_value['+i+']" id="attribute_value">'; 
                                                i++;
                                                 $.each(value.attribute_value_data,function(key,value){
                                                    
                                                   res+='<option value="'+value.atv_name+'">'+value.atv_name+'</option>';
                                                  }); 
                                                  res+='</select></div>';
                                            }); 
                                     });
                                     $('#attribute_value').append(res);
                                    
                                    }
                                });
                        }
                    });
                });
        </script>
                     <script>
                $(document).ready(function(){
                    var category_id = document.getElementById("search_attribute").value; 
                    $.ajax({
                                url:'/search_attribute/'+category_id,
                                type:'GET',
                                dataType:'json',
                                success:function(data){
                                   //var select=document.getElementById('subcategory'),
                                    console.log(data); 
                                    $('#subcategory').empty();
                                    $('#attribute').empty();
                                    $('#attribute_value').empty();
                                    var res='';
                                    var i=0;
                                    $.each(data,function(key,value){
                                         $('#subcategory').append('<option value="'+value.st_id+'">'+value.st_name+'</option>');
                                            $.each(value.its_attribute,function(key,value){
                                                
                                                res += '<p class="d-flex justify-content-between"><span style="color:green"><input type="hidden" name="attri['+i+']" value="'+value.at_name+'">'+value.at_name+':</span></p><div class="select-basic"><select class="form-control " name="attribute_value['+i+']" id="attribute_value">'; 
                                                i++;
                                                
                                                $.each(value.attribute_value_data,function(key,value){
                                                    
                                                   res+='<option value="'+value.atv_name+'">'+value.atv_name+'</option>';
                                                  }); 
                                                  res+='</select></div>';
                                            }); 
                                     });
                                     $('#attribute_value').append(res);
                                    
                                    }
                                });
                      
                });
        </script>
</body>

</html>