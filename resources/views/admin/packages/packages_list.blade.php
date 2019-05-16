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
        @if (session('info'))
          <div class="alert alert-success">
              {{ session('info') }}
          </div>
          @endif
            <div class="card ">
              <div class="card-header">
              <div class="row"> 
                <div class="col-lg-6"><h4 class="card-title"> Packages</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary pull-right btn-sm" href="{{route('packages.create')}}" role="button">Add Package</a></div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="sample_table">
                    <thead class=" text-primary">
                      <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($packages_data as $key)
                      <tr>
                         <td> {{$key->pk_id}} </td>
                        <td>{{$key->pk_title}}</td>
                        <td>{{$key->pk_price}}</td>
                        <td>{{$key->pk_duration}}</td>
                        <td>{{$key->pk_status}}</td>
                        <td>{{$key->ct_name}}</td>
                        <td>{{$key->st_name}}</td>
                      
                        <td>{{$key->created_at}}</td>
                        <td>
                           
                           <a class="btn btn-primary btn-sm" href="{{route('packages.edit',$key->pk_id)}}">Update</a>
                           <a class="btn btn-primary btn-sm" href="{{url('/package_delete/'.$key->pk_id)}}" role="button">Delete</a> 
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
     