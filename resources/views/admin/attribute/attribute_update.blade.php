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
                <div class="col-lg-6"><h4 class="card-title">Add Attribute</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{route('attributer.index')}}" role="button">Attributes</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action='{{route("attributer.update",$attribute_data->at_id)}}' method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" value="{{$attribute_data->at_name}}" name="attribute"  placeholder="Attribute Name">
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
     