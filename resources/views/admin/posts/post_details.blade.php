
@include('admin.templates.header')
<body class="white-content">
  <div class="wrapper">
    @include('admin.templates.aside')
    <div class="main-panel">
    @include('admin.templates.navbar')
     
      <!-- End Navbar -->
      <div class="content">
       
     
 
        <div class="col-lg-12 col-md-12">
        <a class="btn btn-success btn-sm pull-right"  href="{{url('/post_chat/'.$post[0]->ps_id)}}" >PostChat</a>
        @if (session('info'))
          <div class="alert alert-success">
              {{ session('info') }}
          </div>
          @endif
            <div class="card ">
              <div class="card-header">
              <div class="row"> 
                <div class="col-lg-6"><h4 class="card-title">Post Details</h4></div>
               
                <h4 class="card-title"> </h4>
              </div>
              <div class="card-body">
              <div class="row">

              <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
             
                <div class="row">

                <h4 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i>Details</h4>
                
                </div>
              </div>
              <div class="card-body"> 
               
              
              <h4 class="card-title"><i class="tim-icons text-primary"></i><b class='text-center'> Created at : </b><i class='text-center'>{{$post[0]->created_at}}</i></h4>
              <h4 class="card-title"><i class="tim-icons  text-primary"></i><b class='text-center'>User Name :  </b> {{$post[0]->name}}</h4>
              <h4 class="card-title"><i class="tim-icons  text-primary"></i><b class='text-center'>User Address : </b> {{$post[0]->name}}</h4>
              <h4 class="card-title"><i class="tim-icons  text-primary"></i><b class='text-center'>Post Title : </b> {{$post[0]->ps_title}}</h4>
              <h4 class="card-title"><i class="tim-icons  text-primary"></i><b class='text-center'>Post Details :</b> {{$post[0]->ps_detail}}</h4>
              <h4 class="card-title"><i class="tim-icons  text-primary"></i><b class='text-center'>Price : </b> {{$post[0]->ps_detail}}</h4>
              <h4 class="card-title"><i class="tim-icons  text-primary"></i><b class='text-center'>Type : </b> {{$post[0]->ps_type}}</h4>
              <h4 class="card-title"><i class="tim-icons  text-primary"></i><b class='text-center'>Category : </b>  {{$post[0]->ct_name}}</h4>
              <h4 class="card-title"><i class="tim-icons  text-primary"></i><b class='text-center'> Details :</b></h4>
               
                </div>
              </div>
            </div>
          <div class="col-lg-8">
            <div class="card card-chart">
              <div class="card-header">
               
                <div class="row">

                <h4 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i>All Images</h4>
                &nbsp &nbsp &nbsp &nbsp &nbsp
                </div>
              </div>
              <div class="card-body">
              
              
              @if($post[0]->media_data)
              @foreach($post[0]->media_data as $media)
             

              <img src="{{$media->media_path}}" alt="Trulli" width="100">
                <!-- <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas> -->
                  @endforeach
                  @else
                  No image found
                  
                 
                @endif
               
                </div>
              </div>
            </div>
            </div>
                
                
              </div>
            </div>
          </div>
          
</div>
      
      
      @include('admin.templates.footer')
     