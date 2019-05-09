<footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Creative Tim
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                About Us
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                Blog
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> made with <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script  src="{{ asset('assets/dashboard/js/core/jquery.min.js') }}" ></script>
  <script  src="{{ asset('assets/dashboard/js/core/popper.min.js') }}"></script>
  <script  src="{{ asset('assets/dashboard/js/core/bootstrap.min.js') }}"></script>
  <script  src="{{ asset('assets/dashboard/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script  src="{{ asset('assets/dashboard/js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script  src="{{ asset('assets/dashboard/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script  src="{{ asset('assets/dashboard/js/black-dashboard.min.js?v=1.0.0') }}"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script  src="{{ asset('assets/dashboard/demo/demo.js') }}"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>


         <script>
                $(document).ready(function(){
                    $('#category').on('change',function(){
                        var category_id=$(this).val();
                        //alert('category_id');
                        if(category_id)
                        {
                            $.ajax({
                                url:'/getsubcategory/'+category_id,
                                type:'GET',
                                dataType:'json',
                                success:function(data){
                                   //var select=document.getElementById('subcategory'),
                                    console.log(data); 
                                    $('#subcategory').empty();
                                    
                                    $.each(data,function(key,value){
                                        // alert(key);
                                    // alert(value);
                                     $('#subcategory').append('<option value="'+value.st_id+'">'+value.st_name+'</option>');
                                    });
                                
                                    
                                    }
                                });
                        }
                    });
                });
        </script>

        <script type="text/javascript">
                $(document).ready(function(){
                    $('#category1').on('change',function(){
                        var category_id=$(this).val();
                        //alert(category_id);
                  
                        if(category_id)
                        {
                            $.ajax({
                                url:'/getsubcategory/'+category_id,
                                type:'GET',
                                dataType:'json',
                                success:function(data){
                                   //var select=document.getElementById('subcategory'),
                                    console.log(data); 
                                    $('#subcategory1').empty();
                                    
                                    $.each(data,function(key,value){
                                        // alert(key);
                                    // alert(value);
                                     $('#subcategory1').append('<option value="'+value.st_id+'">'+value.st_name+'</option>');
                                    });
                                
                                    
                                    }
                                });
                        }
                        else
                            {
                            $('#subcategory1').html('<option value="">Select Subcategory</option>');
                            $('#category1').html('<option value="">Select Category</option>');
                            }
                    });

                    $('#subcategory1').change(function(){
                    var subcategory_id = $('#subcategory1').val();
                         //alert(subcategory_id);
                        if(subcategory_id)
                        {
                            $.ajax({
                                url:'/getattribute/'+subcategory_id,
                                type:'GET',
                                dataType:'json',
                                success:function(data){
                                   //var select=document.getElementById('subcategory'),
                                    // console.log(data); 
                                    // $('#subcategory1').empty();
                                    // $('#attribute').html('<option value="">Select Attribute</option>');
                                    console.log(data); 
                                    $('#subcategory1').empty();
                                    $('#subcategory1').html('<option value="">Select Subcategory</option>');
                                    $('#attribute').html('<option value="">Select Attribute of sub Category</option>');
                                    
                                    $.each(data,function(key,value){
                                    //     alert(key);
                    
                                     $('#attribute').append('<option value="'+value.at_id+'">'+value.at_name+'</option>');
                                    });
                                
                                    
                                    }
                                });
                        }
                        else
                            {
                            $('#attribute').html('<option value="">Select Attribute</option>');
                            }
                    });

                    
                });
        </script> 
      

</body>

</html>