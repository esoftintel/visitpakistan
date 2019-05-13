-
@include('admin.templates.header')
<body class="">
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
                <div class="col-lg-6"><h4 class="card-title">Add Package</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{route('packages.index')}}" role="button">Packages</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action='{{route("packages.store")}}' method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Package title</label>
                        <input type="text" class="form-control" name="title"  placeholder="Package Name" required>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Package Description</label>
                        <input type="text" class="form-control" name="description"  placeholder="package Details" required>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Package Price</label>
                        <input type="number" class="form-control" name="price"  placeholder="Price" required>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Duration</label>
                        <input type="number" class="form-control" name="duration"  placeholder="Enter Number of days" required>
                     </div>
                     <div class="row">
                     <div class="col-md-6">
                    <div class="form-group">
                       
                        <label for="exampleInputPassword1">Category </label>
                        <select name="category" id="category" class="form-control" required>
                          <option value="">Select category</option>
                            @foreach($categories as $key)
                            <option value='{{$key->ct_id}}'>{{$key->ct_name}}</option>
                             @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        
                        <label for="exampleInputPassword1">Subcategory </label>
                        <select name="subcategory" id="subcategory" class="form-control" required>
                                <option value="">Select Subcategory</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                 </form>
                   
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
     
      @include('admin.templates.footer')
     