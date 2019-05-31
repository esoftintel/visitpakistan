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
              <div class="col-lg-6"><h4 class="card-title"> Attribute Values</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary btn-sm pull-right" href="{{route('attribute_value.create')}}" role="button">add Attribute_Values</a></div>
               
              <h4 class="card-title"> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="sample_table">
                    <thead class=" text-primary">
                      <tr>
                        <th>Id</th>
                        <th>Value Name</th>
                        <th>Status</th>
                        <th>Attribute Name</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($attributevalue_data as $key)
                      <tr>
                        <td> {{$key->atv_id}} </td>
                        <td>{{$key->atv_name}}</td>
                        <td>{{$key->atv_status}}</td>
                        <td>{{$key->at_name}}</td>
                        <td>{{$key->created_at}}</td>
                        <td>
                           <a class="btn btn-primary btn-sm" href="{{route('attribute_value.edit',$key->atv_id)}}" role="button">Update</a>
                           <a class="btn btn-primary btn-sm" href="{{url('/at_value_delete/'.$key->atv_id)}}" role="button">Delete</a> 
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
     
     
     