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
                <div class="col-lg-6"><h4 class="card-title">Add Attribute Value</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{route('attribute_value.index')}}" role="button">Attributes</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action='{{route("attribute_value.store")}}' method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Attribute Value Name</label>
                        <input type="text" class="form-control" name="value"  placeholder="Attribute Name">
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
                        <label for="exampleInputPassword1">Subcategory </label>
                        <select name="subcategory" id="subcategory1" class="form-control">
                                <option value="">Select Sub_Category</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label>Attribute</label>
                        <select name="attribute" id="attribute" class="form-control">
                            <option value="">Select Attribute</option>
                        </select>
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
     