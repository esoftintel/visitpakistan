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
                <div class="col-lg-6"><h4 class="card-title">Update  Package</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{route('packages.index')}}" role="button">Packages</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action='{{route("packages.update",$package_data->pk_id)}}' method="post" enctype="multipart/form-data">
                <input type='hidden' value="{{$package_data->pk_id}}" name='id' class="form-control">
                @csrf
	            @method('PATCH')
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Package title</label>
                        <input type="text" class="form-control" name="title" value="{{$package_data->pk_title}}" placeholder="Package Name" required>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Package Description</label>
                        <input type="text" class="form-control" name="description" value="{{$package_data->pk_detail}}"  placeholder="package Details" required>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Package Price</label>
                        <input type="number" class="form-control" name="price" value="{{$package_data->pk_price}}"  placeholder="Price" required>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Duration</label>
                        <input type="number" class="form-control" name="duration" value="{{$package_data->pk_duration}}" placeholder="Enter Number of days" required>
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
     