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
                <div class="col-lg-6"><h4 class="card-title">Add Features</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{route('feature.index')}}" role="button">Feature</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action='{{route("feature.store")}}' method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Attribute Name">
                     </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category </label>
                        <select name="category" id="category1" class="form-control" required>
                          <option value="">Select category</option>
                            @foreach($category as $key)
                            <option value='{{$key->ct_id}}'>{{$key->ct_name}}</option>
                             @endforeach 
                        </select>
                    </div>
                  
                    <div class="form-group">
                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
                   
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
     
      @include('admin.templates.footer')
     