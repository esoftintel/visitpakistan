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
                <div class="col-lg-6"><h4 class="card-title"> Category Add </h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{url('/category_list')}}" role="button">Categories</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="{{route('category_store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                 <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Attribute Name" required >
                     </div>
                    <div class="form-group">
                        <label> Select Category Icone </label>
                        <input type="file" class="form-control"  name="userfile"   required>
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
     