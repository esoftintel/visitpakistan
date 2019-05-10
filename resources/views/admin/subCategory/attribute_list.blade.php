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
                <div class="col-lg-6"><h4 class="card-title">All Attributes</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary" href="{{url('/attribute_create')}}" role="button">add Attribute</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="sample_table">
                    <thead class=" text-primary">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Category Name</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($attribute_data as $key)
                      <tr>
                        <td> {{$key->at_id}} </td>
                        <td>{{$key->at_name}}</td>
                        <td>{{$key->status}}</td>
                        <td>{{$key->at_st_id}}</td>
                        <td>{{$key->created_at}}</td>
                        <td>
                           <a class="btn btn-primary" href="{{route('attributer.edit',$key->at_id)}}" role="button">Update</a>
                           <a class="btn btn-primary" href="{{url('/attribute_')}}" role="button">Delete</a> 
                         </td>
                      </tr>
                      @endforeach
                     
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      @include('admin.templates.footer')
     