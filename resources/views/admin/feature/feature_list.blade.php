@include('admin.templates.header')
<body class="white-content">
    @include('admin.templates.aside')
    <div class="main-panel">
    @include('admin.templates.navbar')
     
      <!-- End Navbar -->
      <div class="content">
        <div class="col-lg-12 col-md-12">
        @if (session('info'))
          <div class="alert alert-success">
              {{ session('info') }}
          </div>
          @endif
            <div class="card ">
              <div class="card-header">
              <div class="row"> 
              <div class="col-lg-6"><h4 class="card-title"> Feature </h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{route('feature.create')}}" role="button">add Feature</a></div>
               
              <h4 class="card-title"> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="sample_table">
                    <thead class=" text-primary">
                      <tr>
                        <th>Id</th>
                        <th> Name</th>
                        <th>Status</th>
                        <th>Category Name</th>
                        <th>Created</th>
                        <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($feature_data as $key)
                      <tr>
                        <td> {{$key->fe_id}} </td>
                        <td>{{$key->fe_name}}</td>
                        <td>{{$key->fe_status}}</td>
                        <td>{{$key->ct_name}}</td>
                        <td>{{$key->created_at}}</td>
                        <td class="text-center">
                           <a class="btn btn-primary btn-sm" href="{{route('feature.edit',$key->fe_id)}}" role="button">Update</a>
                           <a class="btn btn-danger btn-sm" href="{{url('/feature_delete/'.$key->fe_id)}}" role="button">Delete</a> 
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
      </div>
     
      @include('admin.templates.footer')
     
     
     