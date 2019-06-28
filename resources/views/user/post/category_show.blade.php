@include('user.metadata')

@include('user.menu')
<div class="bg_image_holder" style="background-image: url('img/breadcrumb.png'); opacity: 1;"><img src="img/breadcrumb.png" alt="img/breadcrumb1.jpg"></div>

       
<div class="breadcrumb-wrapper content_above">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 class="page-title">Choose a Category</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Choose a Category</li>
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
                                <h4>Choose a Category</h4>
                            </div>
                        </div>
                       
                        <div class="atbdb_content_module_contents">
                            <div class="category-menu">
                            @foreach($category as $key)
                                <ul id="first-cat-bar"> 
                                    <li class="parent">
                                     
                                     <a href="#"><img src="<?php echo  url('/images')."/".$key->ct_icone; ?>" class="img-thumbnail" width="50" height="50"><i></i>{{$key->ct_name}}</a>
                                      <ul id="child">
                                        @foreach($key->subcategory as $key1)
                                            <li><a href="{{url('post_form',$key1->st_id)}}"><i class="la la-angle-right"></i> {{$key1->st_name}}</a></li>
                                        @endforeach
                                        </ul>
                                    </li>
                                </ul>
                                @endforeach 
                            </div>
                        </div><!-- ends: .atbdb_content_module_contents -->
                        
                    </div><!-- ends: .atbd_content_module -->
                </div><!-- ends: .col-lg-10 -->

                <!--Manan Work end Here-->







             
            
              
                
            
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