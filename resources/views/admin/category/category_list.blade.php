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
                <div class="col-lg-6"><h4 class="card-title"> Categories</h4></div>
                <div class="col-lg-6"> <a class="btn btn-primary" href="{{url('/category_create')}}" role="button">add Categories</a></div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="sample_table">
                    <thead class=" text-primary">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>icon</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($category_data as $key)
                      <tr>
                        <td> {{$key->ct_id}} </td>
                        <td>{{$key->ct_name}}</td>
                        <td><img src="<?php echo  url('/images')."/".$key->ct_icone; ?>" alt=""></td>
                        <td>{{$key->ct_status}}</td>
                        <td>{{$key->created_at}}</td>
                        <td>
                           <a class="btn btn-primary" href="{{url('/attribute')}}" role="button">Update</a>
                           <a class="btn btn-primary" href="{{url('/attribute')}}" role="button">Delete</a> 
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
     