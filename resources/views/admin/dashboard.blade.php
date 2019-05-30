
@include('admin.templates.header')
<body class="white-content">
  <div class="wrapper">
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
                <div class="col-lg-6"><h4 class="card-title">Posts</h4></div>
               
                <h4 class="card-title"> </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter " id="sample_table">
                    <thead class=" text-primary">
                      <tr>
                        <th>Id</th>
                        <th>Post Title</th>
                        <th>POst details</th>
                        <th>POst Price</th>
                        <th>Type</th>
                        <th>Created at</th>
                        <th class="pull-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $key)
                      <tr>
                        <td> {{$key->ps_id}} </td>
                        <td>{{$key->ps_title}}</td>
                        <td>{{$key->ps_detail}}</td>
                        <td>{{$key->ps_price}}</td>
                        <td>{{$key->ps_type}}</td>
                        <td >{{$key->created_at}}</td>
                        <td class="pull-right">
                           <a class="btn btn-primary btn-sm" href="{{url('/post_details/'.$key->ps_id)}}" role="button">Details</a>
                           <a class="btn btn-primary btn-sm" href="{{url('/post_update/'.$key->ps_id)}}" role="button">Update</a>
                           <a class="btn btn-primary btn-sm" href="{{url('/post_delete/'.$key->ps_id)}}" role="button">Delete</a> 
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
         
        

         
        
        
        
      
      
      @include('admin.templates.footer')
     