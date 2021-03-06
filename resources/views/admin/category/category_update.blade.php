-
@include('admin.templates.header')
<body class="white-content">
  <div class="wrapper">
   
    @include('admin.templates.aside')
    <div class="main-panel">
    @include('admin.templates.navbar')
              
     
      <!-- End Navbar -->
      <div class="content">
       
        <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card ">
              <div class="card-header">
              <div class="row"> 
                <div class="col-lg-6"><h4 class="card-title"> Category Edit</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{url('/category_list')}}" role="button">categories</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
  
                <form method='post' action='{{route("category.update",$category_data->ct_id)}}' enctype="multipart/form-data">
                @csrf
	              @method('PATCH')
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" class="form-control" name='name' value="{{$category_data->ct_name}}" placeholder="Category Name" required>
                     </div>
   
                     <input type='hidden' class='form-control' name='oldimg' value="{{$category_data->ct_icone}}">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Select New Icon <b>(Green)</b></label>
                        <input type="file", name="userfile">
                    </div>
          
                    <div class="form-group">
                        <label>Old Icon (Green) </label>
                        
                        <img src="{{asset('images')}}/{{$category_data->ct_icone}}" class="img-thumbnail" width="50">
                    </div>
                    
                
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Select New Icon<b>(White)</b></label>
                        <input type="file", name="userfilewhite">
                        <input type="hidden" name="oldimgwhite" value="{{$category_data->ct_iconewhite}}">
                    </div>
                    
                    <div class="form-group">
                        <label>Old Icon <b>(white)</b> </label>
                        
                        <img src="{{URL::to('/')}}/images/{{$category_data->ct_iconewhite}}" class="img-thumbnail" width="50">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Select New Banner Image</label>
                        <input type="file", name="image">
                        <input type="hidden" name="oldimage" value="{{$category_data->ct_image}}">
                    </div>
                    </div>
                        <div class="form-group">
                        <label>Old Image (Banner) </label>
                        
                        <img src="{{asset('images')}}/{{$category_data->ct_image}}" class="img-thumbnail" width="50">
                    </div>
                    
            
                    
                    <button type="submit" class="btn btn-primary from-control">Submit</button>
                 </form>
                   
                </div>
              </div>
            </div>
          </div>
          
    
    </div>
      @include('admin.templates.footer')
     