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
        @if (session('info'))
          <div class="alert alert-success">
              {{ session('info') }}
          </div>
          @endif
            <div class="card ">
              <div class="card-header">
              <div class="row"> 
                <div class="col-lg-6"><h4 class="card-title">Sub Categories</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary pull-right btn-sm" href="{{route('subcategory.create')}}" role="button">add Categories</a></div>
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
                        <th>Category_id</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($subCategory_data as $key)
                      <tr>
                        <td> {{$key->st_id}} </td>
                        <td>{{$key->st_name}}</td>
                        
                        <td>{{$key->st_status}}</td>
                        <td>{{$key->ct_name}}</td>
                        <td>{{$key->created_at}}</td>
                        <td>
                    
                           <a class="btn btn-primary btn-sm" href="{{route('subcategory.edit',$key->st_id)}}">Update</a>
                           <a class="btn btn-primary btn-sm" href="{{url('/subcategory_delete/'.$key->st_id)}}" role="button">Delete</a> 
                         </td>
                      </tr>
                      @endforeach
                     
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
  
      @include('admin.templates.footer')
     