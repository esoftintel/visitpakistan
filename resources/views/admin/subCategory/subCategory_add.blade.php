
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
                <div class="col-lg-6"><h4 class="card-title">Add Sub Category</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{route('subcategory.index')}}" role="button">SubCategories</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="{{route('subcategory.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                 <div class="form-group">
                        <label for="exampleInputEmail1">SubCategory Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Attribute Name" required >
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <select  class="form-control" name="category" required >
                          <option value=''>Select Category</option>
                          @foreach($category_data as $key)
                          <option value="{{$key->ct_id}}">{{$key->ct_name}}</option>
                      
                          @endforeach
                        </select>
                     </div>
                    
                    
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                 </form>
                   
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      @include('admin.templates.footer')
     