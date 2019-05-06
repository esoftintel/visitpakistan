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
                <div class="col-lg-6"><h4 class="card-title"> Category</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary" href="{{url('/category_update')}}" role="button">add Category</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="{{url('category_update')}}" method="post" enctype="multipart/form-data">
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control"  placeholder="Attribute Name">
                     </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category </label>
                        <select class="form-control" name="category_id" id="sel1">
                            @foreach($category_data as $key)
                            <option value={{$key->ct_id}}>{{$key->ct_name}}</option>
                             @endforeach
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
     