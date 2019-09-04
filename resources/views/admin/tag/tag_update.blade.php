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
                <div class="col-lg-6"><h4 class="card-title"> Tag Edit</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{url('tag')}}" role="button">Tag</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
  
                <form method='post' action='{{route("tag.update",$tag_data->tg_id)}}' enctype="multipart/form-data">
                @csrf
	              @method('PATCH')
                
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Name</label>
                        <input type="text" class="form-control" name='name' value="{{$tag_data->tg_name}}" placeholder="Category Name" required>
                     </div>
   
                     <input type='hidden' class='form-control' name='oldimg' value="{{$tag_data->tg_green_icon}}">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Select New Icon <b>(Green)</b></label>
                        <input type="file", name="userfile">
                    </div>
          
                    <div class="form-group">
                        <label>Old Icon (Green) </label>
                        
                        <img src="{{asset('images/tag')}}/{{$tag_data->tg_green_icon}}" class="img-thumbnail" width="50">
                    </div>
                    
                
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Select New Icon<b>(White)</b></label>
                        <input type="file", name="userfilewhite">
                        <input type="hidden" name="oldimgwhite" value="{{$tag_data->tg_wight_icon}}">
                    </div>
                    
                    <div class="form-group">
                        <label>Old Icon <b>(white)</b> </label>
                        
                        <img src="{{URL::to('/')}}/images/tag/{{$tag_data->tg_wight_icon}}" class="img-thumbnail" width="50">
                    </div>
                    
                  
            
                    
                    <button type="submit" class="btn btn-primary from-control">Submit</button>
                 </form>
                   
                </div>
              </div>
            </div>
          </div>
          
    
    </div>
      @include('admin.templates.footer')
     