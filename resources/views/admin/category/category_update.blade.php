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
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Attribute Name" value="{{$category_data->ct_name}}">
                     </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input type="file", name="userfile">
                        <input type="hidden" name="oldimg" value="{{$category_data->ct_icone}}">
                        <input type="hidden" name="ctid" value="{{$category_data->ct_id}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">old Image</label>
                     <img src="<?php echo  url('/images')."/".$category_data->ct_icone; ?>" alt="">    
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
     